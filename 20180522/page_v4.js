/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* global server_time, rawsdata */

var clientTime = 0;
clientTime = jQuery.now() / 1000;
//var clientTime = window.performance && window.performance.now && window.performance.timing && window.performance.timing.navigationStart ? window.performance.now() + window.performance.timing.navigationStart : Date.now();

// Вычислим значение смещения текущего часового пояса в секундах
//x = new Date()
//currentTimeZoneOffsetInHours = -x.getTimezoneOffset();

//var diffTime = Math.round(clientTime) - server_time;

var tmp = $.base64.decode(rawsdata);
var lessons = $.parseJSON(tmp);
var curBlock = {};
var lenСurBlock = 0;

var manualTadamFlag = '!';

var pauseBlock = {};
var pauseFlag = 0;
var videoFlag = 0;

var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player;
var curTime;
var timerManualTadam;

$(function () {




    if ($('div').is('#manualTadam') && is_admin === 0) {
        timerManualTadam = setInterval(function () {
            $('#manualTadam').load(site_url + '/manual_tadam_cache/' + page_id + '.html');
        }, 5000);
    }



    timerId = setInterval(function () {
        clientTime = jQuery.now() / 1000;
        server_time++;

        if ($.isEmptyObject(curBlock) && $.isEmptyObject(pauseBlock)) {
            console.log('если в curBlock и в pauseBlock пусто');
            var prevStartValue = 0;
            var tmpBlock = {};
            $.each(lessons, function (index, value) {
                if (value['status'] === "0") {
                    return true;
                }


                console.log('цикл ' + index);

                //Если попадаем в промежуток то воспроизводим
                if ((Number(server_time) > Number(value['start_time'])) && (Number(server_time) < Number(value['end_time']))) {
                    console.log('Выбрали нужный урок и присвоили в curBlock');
                    curBlock = value;
//                    if (curBlock['tadams'] === null) {
                    if (curBlock['tadams'] == '') {
                        lenСurBlock = 0;
                    } else {

                        curBlock['tadams'] = JSON.parse(curBlock['tadams']);
                        lenСurBlock = $.map(curBlock['tadams'], function (n, i) {
                            return i;
                        }).length;
                    }
                    $('.cur-lesson-name').text(curBlock['name']);
                }
                if (prevStartValue === 0 && Number(server_time) < Number(value['start_time'])) {
                    console.log('Определили следующий урок и присвоили tmpBlock');
                    prevStartValue = Number(value['start_time']);
                    tmpBlock = value;
                }

            });
            if ($.isEmptyObject(curBlock)) {
                console.log('Если curBlock пустой, тогда pauseBlock присваиваем tmpBlock');
                pauseBlock = tmpBlock;
            }
        } else if ($.isEmptyObject(curBlock) && !$.isEmptyObject(pauseBlock)) {
            if (pauseFlag === 0) {
                console.log('поставили картинку заглушку')
                pauseFlag = 1;
                var imgURL = "https://img.youtube.com/vi/" + pauseBlock['video_code'] + "/0.jpg"
                $('#forYouTube').html('<img id="theImg" src="' + imgURL + '" />')
            } else if (pauseBlock['start_time'] > server_time) {
                console.log('еще не время');
            } else {
                console.log('пришло время видео');
                pauseFlag = 0;
                pauseBlock = {};
            }

            //Ручной Тадам
            if ($('div').is('#manualTadam') && is_admin === 1) {

                $.ajax({
                    type: "POST",
                    url: site_url + "/manual-tadam/get-tadam-code",
                    data: {
                        page_id: page_id
                    },
                    cache: false,
                    dataType: "json",
                    success: function (responce) {
                        if (responce['flag'] !== manualTadamFlag) {
                            manualTadamFlag = responce['flag'];
                            $('#manualTadam').html(responce['data']);
                        } else {

                        }

                    }
                });
            }


        } else {
            if ((Number(server_time) > Number(curBlock['start_time'])) && (Number(server_time) < Number(curBlock['end_time']))) {
                if (videoFlag === 1) {
//                    console.log(players);
                    console.log('видео должно проигрываться');
//                    if (!jQuery.isFunction(players.currentTime)) {
                    if (players.ready === false) {
                        console.log('видео НЕ должно проигрываться');
                        return false;
                    }
                    var prevIndex = 0;
                    var prevTadam = '';

                    //Ручной Тадам
                    if ($('div').is('#manualTadam') && is_admin === 1) {

                        $.ajax({
                            type: "POST",
                            url: site_url + "/manual-tadam/get-tadam-code",
                            data: {
                                page_id: page_id
                            },
                            cache: false,
                            dataType: "json",
                            success: function (responce) {
                                if (responce['flag'] !== manualTadamFlag) {
                                    manualTadamFlag = responce['flag'];
                                    $('#manualTadam').html(responce['data']);
                                } else {

                                }

                            }
                        });
                    }


                    //Проверяем есть ли автоТадам блок
                    if ($('div').is('#autoTadam')) {

                        if (curBlock['tadams'] === null) {
                            return false;
                        }

                        var n = 0;
                        $.each(curBlock['tadams'], function (index, value) {
                            n++;
//                            console.log('1');

                            if (prevIndex === 0) {
                                prevIndex = index;
                                prevTadam = value;
                            }

                            //                        lenСurBlock =
                            if (Math.round(players.currentTime) > prevIndex && Math.round(players.currentTime) < index) {
                                if ($('#autoTadam').html() !== prevTadam) {
                                    console.log('Устанавливаем ТаДам');
                                    $('#autoTadam').html(prevTadam);
                                }
                                return false;
                            } else if (n === lenСurBlock && Math.round(players.currentTime) > index) {
                                if ($('#autoTadam').html() !== value) {
                                    console.log('Финальное значение ТаДам');
                                    $('#autoTadam').html(value);
                                }
                            }
                            prevTadam = value;
                            prevIndex = index;
                        });
                    }

                } else if (videoFlag === 0) {
                    console.log('включаем видео');

//                    $('#forYouTube').html('<div id="youtube"></div>');
                    $('#forYouTube').html('<div id="youtube" data-plyr-provider="youtube" data-plyr-embed-id="' + curBlock['video_code'] + '"></div>');
                    videoFlag = 1;

                    players = new Plyr('#youtube', {
//                        controls: ['play', 'fullscreen', 'volume', 'settings'],
                        settings: ['captions', 'quality', 'loop'], //'speed',
                        invertTime: false,
                        currentTime: 0,
                        language: 'ru',
                        autoplay: true,
                        i18n: {
                            'normal': 'Стандартное',
                            'default': 'По умолчанию',
                            'quality': 'Качество',
                            'speed': 'Скорость'
                        }
                    });

                    players.on('ready', event => {
                        players.play();
                    });
                    players.on('play', event => {
                        players.currentTime = 0;
                    });

                }

            } else {

                console.log('закончилось видео');
                $('#forYouTube').html('');
                videoFlag = 0;
                curBlock = {};
                lenСurBlock = 0;
            }

        }


    }, 1000);




    //Слушаем кнопку отправки данных
    $('body').on('click', '#tadam-save', function () {

        $('button').attr('disabled', 'true');
        $('textarea').attr('disabled', 'true');
        //1. Берем данные из тексареа textarea#tadam-data 
        //2. Отправляем их на сервер и добавляем к существующему массив 
        //тип объекта для новых данных {id:0, active:0, data:DATA} где 
        //active показывает неактивность нового элемента 
        //<li data-id="111" data-active="1">DATA</li>
        $.ajax({
            type: "POST",
            url: site_url + "/manual-tadam/save-tadam",
            data: {
                id: $('input#id-tadam-data').val(),
                page_id: page_id,
                data: $('textarea#tadam-data').val(),
                active: $('input#active-tadam-data').val()
            },
            cache: false,
            dataType: "html",
            success: function (responce) {
                console.log(responce);
                manualTadamFlag = '';
            }
        });

        //4. Сразу после этого отправили команду для постройки нового 
        //файла html который видят пользователи в div#tadam-view

    });


    //Меняем статус активен не активен
    $('body').on('click', '.tadam-change-active', function () {

        $('button').attr('disabled', 'true');
        $('textarea').attr('disabled', 'true');

        var $this = $(this).parent();

        var active = $this.data('active') === 1 ? 0 : 1;

        $.ajax({
            type: "POST",
            url: site_url + "/manual-tadam/status-tadam",
            data: {
                id: $this.data('id'),
                page_id: page_id,
                active: active
            },
            cache: false,
            dataType: "html",
            success: function (responce) {
                manualTadamFlag = '';
            }
        });



    });

    //Редактируем
    $('body').on('click', '.tadam-edit', function () {


        //анимируем переход на расстояние - top за 1500 мс
        var top = $('textarea#tadam-data').offset().top - $(window).height() + $('#tadam-editor').height() + 10;
        $('body,html').animate({scrollTop: top}, 500);


        var $this = $(this).parent();
        $('#id-tadam-data').val($this.data('id'));
        $('#active-tadam-data').val($this.data('active'));
        $('textarea#tadam-data').val($this.find('.tadam_data_list_preview').html());

    });

    //Удаляем
    $('body').on('click', '.tadam-delete', function () {
        if (!confirm("Удалить запись?")) {
            return false;
        }
        var $this = $(this).parent();

        $('button').attr('disabled', 'true');
        $('textarea').attr('disabled', 'true');

        $.ajax({
            type: "POST",
            url: site_url + "/manual-tadam/delete-tadam",
            data: {
                id: $this.data('id'),
                page_id: page_id
            },
            cache: false,
            dataType: "html",
            success: function (responce) {
                $('#tadam').html(responce);
            }
        });
    });



});

function onPlayerReady(event) {
    event.target.playVideo();
}


function timeConverter(UNIX_timestamp) {
    var a = new Date(UNIX_timestamp * 1000);
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    var year = a.getFullYear();
    var month = months[a.getMonth()];
    var date = a.getDate();
    var hour = a.getHours();
    var min = a.getMinutes();
    min = min < 10 ? '0' + min : min;
    var sec = a.getSeconds();
    sec = sec < 10 ? '0' + sec : sec;
    var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec;
    return time;
}

// Функция удаления пробелов
function del_spaces(str)
{
    str = str.replace(/\s/g, '');
    return str;
}