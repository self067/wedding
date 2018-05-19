<div class="footer dark-bg dark-bg8">

	<div class="menu-ext__foot ">
		<div class="container">
			<div class="menu__foot">

				<ul class="align-items-center">
					<li>
						<!-- <a href="#"><img src="img/logo-mywedding.png" alt="logo"></a> -->
						<a href="#"><div class="footer-logo"></div></a>

					</li>

					<li>
						<a href="#s02video">Видео</a>
					</li>
					<li>
						<a href="#s03tools">Инструменты сайта</a>
					</li>
					<li>
						<a href="#s04samples">Примеры сайтов</a>
					</li>
					<li>
						<a href="#s05tarifs">Цены</a>
					</li>
					<li>
						<a href="#s06about">О нас</a>
					</li>
					<li>
						<a href="#s07contacts">Контакты</a>
					</li>
					<!-- <li> -->
						<!-- <button class="button menu__foot-button">Войти</button> -->
					<!-- </li> -->
				</ul>

				<div>
						<button class="button menu__foot-button">Войти</button>
				</div>

			</div>

		</div>
		</div>
	<!-- </section> -->

<div class="footer-text">
		© 2018 «MY WEDDING» Все права защищены
	</div>

</div>


	<div class="tnx-frm">
		<div class="tnx-popup">
			<div class="tnx-title">Спасибо за заявку</div>
			<!-- /.popup-title -->
			<div class="tnx-close">&times;</div>
			<!-- /.popup-close -->
			<div class="tnx-form">
				<div class="tnx-form-header">
					Спасибо за заявку !
				</div>
				<button type="button" id="tnx-ok" class="button tnx-form__btn button14">ОК</button>
			</div>
			<!-- /.popup-form -->
		</div>
		<!-- /.popup -->
	</div>

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
	<script src="js/jquery.min.js"></script>
	<script src="slick/slick.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>

	<script>
		$(".fscreen-slider").slick({
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			// adaptiveHeight: true,
			// autoplay: true,
  		autoplaySpeed: 4000,
			dots: true,
			dotsClass: 'fscreen-slider__dots',
			// appendDots: 'fscreen-slider-dots__app', 
			vertical: true,
			verticalSwiping: true,
			responsive: [
				{
					breakpoint: 992,
					settings: {
						dots: false
						
					}
				}
			]

// Change where the navigation dots are attached (Selector, htmlString, Array, Element, jQuery object)
			// prevArrow: '<div class="slider-arrow slider-arrow__up"></div>',
			// nextArrow: '<div class="slider-arrow  slider-arrow__down"><img src="img/01_main/1.head/mouse.png" alt="V"></div>'
		});
	</script>

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->


  <script>
     // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		// document.getElementById('player').style.backgroundImage = 'url("../img/01_main/2.video/video.jpg")';

			var player;
			var pl;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          // height: '400',
          // width: '652',
					videoId: 'q_th_D4VHC0',
					origin: 'begi-motik.ru',
					thumbnail: 'http://begi-motik.ru/wedding/img/01_main/2.video/video.jpg',
					modestbranding: '1',
					playerVars: { 'rel': 0, 'autoplay': 0, 'controls': 0 , 'showinfo': 0, 'frameborder': 0},
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
				});
				pl =	document.getElementById('player');
				// console.log(pl);
				// console.log(pl.style.backgroundImage);
				document.getElementById('player').style.backgroundImage = 'url("http://begi-motik.ru/wedding/img/01_main/2.video/video.jpg")';
				pl.style.backgroundImage = 'url("http://begi-motik.ru/wedding/img/01_main/2.video/video.jpg")';
				// console.log(pl.style.backgroundImage);
				//  = 'url("img/01_main/2.video/video.jpg")';
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
				// event.target.playVideo();
				// console.log("youtube says onPlayerReady");
				// pl.style.backgroundImage = 'url("img/01_main/2.video/video.jpg")';
				// console.log(pl.style.backgroundImage);
				// document.getElementById('player').style.backgroundImage = 'url("img/01_main/2.video/video.jpg")';
				// console.log(document.getElementById('player').style.backgroundImage);
				document.getElementById('player').style.backgroundImage = 'url("http://begi-motik.ru/wedding/img/01_main/2.video/video.jpg")';
				pl.style.backgroundImage = 'url("http://begi-motik.ru/wedding/img/01_main/2.video/video.jpg")';

      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 122000);
          done = true;
				}
				else 	{
					// console.log("youtube says else");
					document.getElementById('player').style.backgroundImage = 'url("http://begi-motik.ru/wedding/img/01_main/2.video/video.jpg")';
				pl.style.backgroundImage = 'url("http://begi-motik.ru/wedding/img/01_main/2.video/video.jpg")';

				// document.getElementById('player').style.backgroundImage = 'url("img/01_main/2.video/video.jpg")';
						}

				if (event.data == YT.PlayerState.ENDED ) { 
					document.getElementById('player').style.backgroundImage = 'url("http://begi-motik.ru/wedding/img/01_main/2.video/video.jpg")';
				pl.style.backgroundImage = 'url("http://begi-motik.ru/wedding/img/01_main/2.video/video.jpg")';
					// console.log("youtube says ENDED");
					 }


      }
      function stopVideo() {
				player.stopVideo();
      }
    </script>

	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

	<script>
		$('form').submit(function (event) {
			event.preventDefault();
			// alert("SUBMIT");
			$.ajax({
				type: "POST",
				url: "send.php",
				data: $(this).serialize()
			}).done(function () {
				$(this).find("input").val("");

				$("form").trigger("reset");

				// alert("OMG");
				yaCounter46492542.reachGoal("Wedding-Form");
				$(".tnx-frm").show();
				setTimeout(function(){$(".tnx-frm").hide();}, 3000);

			});
			return false;
		});
	</script>
	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- Плавная прокрутка к якорю -->
<script>
var $page = $('html, body');
$('a[href*="#"]').click(function(e) {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 900);
		e.preventDefault();
    return false;
});
</script>


<!-- <script>
  $(document).ready(function () {
    $('a[href=#]').on("click", function (e) {
      var anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $(anchor.attr('href')).offset().top
      }, 777);
      e.preventDefault();
      return false;
    });
  });
</script> -->

	<script>
		jQuery(function ($) {
			// $("#phone").mask("+7(999) 999-9999");
			// $("#phone1").mask("+7(999) 999-9999");
			// $("#phone2").mask("+7(999) 999-9999");
			// $("#phone3").mask("+7(999) 999-9999");
			// $("#phone-mod").mask("+7(999) 999-9999");
			// $("#phone-o").mask("+7(999) 999-9999");
			//,{completed:function(){alert("You typed the following: "+this.val());}});
		});
	</script>





</body>

</html>
