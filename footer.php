<div class="footer dark-bg dark-bg8">

	<section class="menu-ext__foot ">
		<div class="container">
			<div class="menu__foot">
				<ul class="align-items-center">
					<li>
						<a href=""><img src="img/logo-mywedding.png" alt="logo"></a>
					</li>

					<li>
						<a href="#">Видео</a>
					</li>
					<li>
						<a href="#">Инструменты сайта</a>
					</li>
					<li>
						<a href="#">Примеры сайтов</a>
					</li>
					<li>
						<a href="#">Цены</a>
					</li>
					<li>
						<a href="#">О нас</a>
					</li>
					<li>
						<a href="">Контакты</a>
					</li>
					<li>
						<button class="button">Войти</button>
					</li>
				</ul>
			</div>

		</div>
	</section>

<div class="footer-text">
		© 2018 «MY WEDDING» Все права защищены
	</div>

</div>



<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
	<script src="js/jquery.min.js"></script>
	<script src="slick/slick.min.js"></script>

	<script>
		$(".fscreen-slider").slick({
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			// adaptiveHeight: true,
			// autoplay: true,
  		autoplaySpeed: 4000,
			dots: true,
			// dotsClass: 'fscreen-slider__dots',
			vertical: true,
			verticalSwiping: true
 			// appendDots: 'fscreen-slider-dots__app', 
// Change where the navigation dots are attached (Selector, htmlString, Array, Element, jQuery object)
			// prevArrow: '<div class="slider-arrow slider-arrow__up"></div>',
			// nextArrow: '<div class="slider-arrow  slider-arrow__down"><img src="img/01_main/1.head/mouse.png" alt="V"></div>'
		});
	</script>



  <script>
     // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '400',
          width: '652',
          videoId: 'q_th_D4VHC0',
					// playerVars: { 'rel': 0, 'autoplay': 1, 'controls': 0 , 'showinfo': 0, 'frameborder': 0},
					playerVars: { 'rel': 0, 'autoplay': 0, 'controls': 0 , 'showinfo': 0, 'frameborder': 0},
					// allow: "autoplay; encrypted-media",
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        // event.target.playVideo();
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
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>





</body>

</html>
