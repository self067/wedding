

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<script src="slick/slick.min.js"></script>

	<!-- <script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script> -->

	<script>
	jQuery(function($){

		$(document).ready(function () {
			//initializing tooltip
			$('[data-toggle="tooltip"]').tooltip();
		});
	});
	</script>

<script>
jQuery(function($){

var video;
$(document).ready(function(){
 video = document.getElementById("p19player");
 $('#p19player').on('click', function(){
   video.play();
   video.setAttribute('controls','');
 });
});
});
</script>


	<script>
		$(".p12bookWishes-slider").slick({
			arrows: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			// autoplay: true,
  		autoplaySpeed: 4000,
			dots: true,
			dotsClass: 'p12bookWishes-slider__dots',
			// appendDots: 'fscreen-slider-dots__app', 
			responsive: [
				{
					breakpoint: 2000,
					// breakpoint: 992,
					settings: {
						dots: false
					}
				}
			],
		// Change where the navigation dots are attached (Selector, htmlString, Array, Element, jQuery object)
		prevArrow: '<div class="p12bookWishes-slider-arrow p12bookWishes-slider-arrow__left"></div>',
		nextArrow: '<div class="p12bookWishes-slider-arrow p12bookWishes-slider-arrow__right"></div>'
		});
	</script>

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->


	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->



	<div class="builder-menu builder-menu__hide-mobile" id="builder-menu">
		<div class="menu-left">
			<ul>

				<li>
					<div class="menu-el" data-toggle="tooltip" data-placement="right" title="Здесь можно выбрать фон для сайта">
						<a href="p04builder.php">
							<img class="menu-el__img" src="img/left-menu/icon1.png" alt="">
							<div class="menu-el__text">Фон</div>
						</a>
					</div>
				</li>

				<li>
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Здесь можно составить приглашение">
						<a href="p05invitation.php">
							<img class="menu-el__img" src="img/left-menu/icon2.png" alt="">
							<div class="menu-el__text">Приглашение</div>
						</a>
					</div>
				</li>

				<li>
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Здесь можно составить список гостей">
						<a href="p06guestList.php">
							<img class="menu-el__img" src="img/left-menu/icon3.png" alt="">
							<div class="menu-el__text">Список гостей</div>
						</a>
					</div>
				</li>

				<li>
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Здесь можно подготовить карту проезда">
						<a href="p07locationMap.php">
							<img class="menu-el__img" src="img/left-menu/icon4.png" alt="">
							<div class="menu-el__text">Карта проезда</div>
						</a>
					</div>
				</li>

				<li class="hide-mobile">
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="История. Этот элемент доступен на тарифе 'Silver'">
						<a href="#">
							<img class="menu-el__img" src="img/left-menu/icon5.png" alt="">
							<div class="menu-el__text">История</div>
						</a>
					</div>
				</li>
				<li>
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Фотоальбомы">
						<a href="p09photoAlbum.php">
							<img class="menu-el__img" src="img/left-menu/icon6.png" alt="">
							<div class="menu-el__text">Фотоальбомы</div>
						</a>
					</div>
				</li>
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@				 -->
				<!-- <li>
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Дресс-код. Этот элемент доступен на тарифе 'Silver'">
						<a href="#">
							<img class="menu-el__img" src="img/left-menu/icon7.png" alt="">
							<div class="menu-el__text">Дресс-код</div>
						</a>
					</div>
				</li> -->
<!-- @@@@@@@@@@@@@@@@@@@@ -->
				<li>
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Книга пожеланий. ">
						<a href="p12bookWishes.php">
							<img class="menu-el__img" src="img/left-menu/icon8.png" alt="">
							<div class="menu-el__text">Книга пожеланий</div>
						</a>
					</div>
				</li>

				<li class="hide-mobile">
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Виш-лист.  Этот элемент доступен на тарифе 'Silver'">
						<a href="#">
							<img class="menu-el__img" src="img/left-menu/icon9.png" alt="">
							<div class="menu-el__text">Виш-лист</div>
						</a>
					</div>
				</li>

				<li>
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Письмо гостя">
						<a href="p14letterGuests.php">
							<img class="menu-el__img" src="img/left-menu/icon10.png" alt="">
							<div class="menu-el__text">Письмо гостя</div>
						</a>
					</div>
				</li>

				<!-- <li>
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Схема рассадки.  Этот элемент доступен на тарифе 'Silver'">
						<a href="#">
							<img class="menu-el__img" src="img/left-menu/icon11.png" alt="">
							<div class="menu-el__text">Схема рассадки</div>
						</a>
					</div>
				</li> -->

				<li class="hide-mobile">
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Блог невесты.  Этот элемент доступен на тарифе 'Silver'">
						<a href="#">
							<img class="menu-el__img" src="img/left-menu/icon12.png" alt="">
							<div class="menu-el__text">Блог невесты</div>
						</a>
					</div>
				</li>

				<li class="hide-mobile">
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Фотоальбом гостей. Этот элемент доступен на тарифе 'Silver'">
						<a href="#">
							<img class="menu-el__img" src="img/left-menu/icon13.png" alt="">
							<div class="menu-el__text">Фотоальбом гостей</div>
						</a>
					</div>
				</li>

				<!-- <li>
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Стоп-лист.  Этот элемент доступен на тарифе 'Silver'">
						<a href="#">
							<img class="menu-el__img" src="img/left-menu/icon14.png" alt="">
							<div class="menu-el__text">Стоп-лист</div>
						</a>
					</div>
				</li> -->

				<li>
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Видеовиджет YouTube">
						<a href="p19youtubeVideo.php">
							<img class="menu-el__img" src="img/left-menu/icon15.png" alt="">
							<div class="menu-el__text">Видеовиджет YouTube</div>
						</a>
					</div>
				</li>

				<li class="hide-mobile">
					<div class="menu-el" data-toggle="tooltip" data-placement="auto" title="Карточки гостя.  Этот элемент доступен на тарифе 'Silver'">
						<a href="#">
							<img class="menu-el__img" src="img/left-menu/icon7.png" alt="">
							<div class="menu-el__text">Карточки гостей</div>
						</a>
					</div>
				</li>

<!-- <li><a href="#week7">7 Неделя</a></li> -->
			</ul>
		</div>
<!-- @@@@@ -->




<!-- @@@@@@@@@@ -->
	</div>
	<!-- builder-page -->


	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->


	<div class="dark-bg dark-bg8 builder-footer">
		<div class="menu-build menu-build__foot">

			<div class="container">
				<div class="menu-build__bottom">
					<ul class="align-items-center ">
						<li>
							<a href="index.php">
								<div class="header-logo"></div>
							<!-- <img src="img/logo-mywedding.png" alt="logo"> -->
							</a>
						</li>
						<li class="hide-mobile576">
							<a href="#">Мои сайты</a>
						</li>
						<li class="hide-mobile576">
							<a href="#">Тарифы и оплата</a>
						</li>
						<li class="hide-mobile576">
							<a href="#">Личный кабинет</a>
						</li>
						<li>
							<button class="button menu-build-button">Войти</button>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer-text">
		© 2018 «MY WEDDING» Все права защищены
		</div>

	</div>
	<!-- .footer -->


<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

<script src="js/jquery.magnifier.js"></script>

<script>
	jQuery(function($){
		$(document).ready(function () {
			// var link = $(".menu-link-b");
			// var link_active = $(".menu-link-b_active");
			// var menu = $(".menu-mobil-b");
			// var nav_link = $(".menu-mobil-b a");

			var link = $(".menu-link-b");
			var link_active = $(".menu-link-b_active");
			var menu = $("#builder-menu");
			var nav_link = $(".builder-menu a");

			link.click(function () {
				link.toggleClass("menu-link-b_active");
				menu.toggleClass("builder-menu_active");
				// menu.css("display", "block");
				// menu.style.display = "block";

			});
			link_active.click(function () {
				link.removeClass("menu-link-b_active");
				menu.removeClass("builder-menu_active");
				// menu.css("display", "none");
				// menu.style.display = "none";

			});
			nav_link.click(function () {
				link.toggleClass("menu-link-b_active");
				menu.toggleClass("builder-menu_active");
				// menu.css("display", "none");

			});
		});
	});
	</script>


</body>

</html>
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->


