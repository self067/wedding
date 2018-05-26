<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

	<!-- Yandex.Metrika counter -->
	<script>
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function () {
				try {
					w.yaCounter46492542 = new Ya.Metrika2({
						id: 46492542,
						clickmap: true,
						trackLinks: true,
						accurateTrackBounce: true,
						webvisor: true,
						trackHash: true
					});
				} catch (e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/tag.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks2");
	</script>
	<noscript>
		<div>
			<img src="https://mc.yandex.ru/watch/46492542" style="position:absolute; left:-9999px;" alt="" />
		</div>
	</noscript>
	<!-- /Yandex.Metrika counter -->


<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
	<script src="js/jquery.min.js"></script>
	<script src="slick/slick.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<!-- fscreen-slider -->
	<script>
		$(".header").slick({
			arrows: false, 
			slidesToShow: 1,
			slidesToScroll: 1,
			// adaptiveHeight: true,
			autoplay: true,
  		autoplaySpeed: 5000,
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
	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

	<script>
		jQuery(function($){

		// $('form').submit(function (event) {
		$('#s07contacts-form').submit(function (event) {
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
		});
	</script>
	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- Плавная прокрутка к якорю -->

<script>
	jQuery(function($){

	var $page = $('html, body');
	$('a[href*="#s"]').click(function(e) {
			$page.animate({
					scrollTop: $($.attr(this, 'href')).offset().top
			}, 900);
			e.preventDefault();
			return false;
	});
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


<!-- Masks -->
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

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
	<!-- enter Auth form -->
	<script>
	jQuery(function($){

		$(document).ready(function () {
			$(".btn-enter").on("click", function () {
				// alert("hoper");
				// $(".p02auth").show();
				$("#p02auth").show();
				// alert("hoper222222222222");
			});
			$(".ppp-close").on("click", function () {
				// $(".p02auth").hide();
				$("#p02auth").hide();
			});
		});
	});
	</script>


	<script>
	jQuery(function($){

		$(document).ready(function () {
			$(".s05tarifs-button").on("click", function () {
				// alert("hoper");
				$("#s05tarifs-modal").show();
			});
			$(".s05ppp-close").on("click", function () {
				// $(".p02auth").hide();
				$("#s05tarifs-modal").hide();
			});
		});
	});
	</script>



	<script>
	jQuery(function($){
		$(document).ready(function () {
			var link = $(".menu-link");
			var link_active = $(".menu-link_active");
			var menu = $(".menu-mobil");
			var nav_link = $(".menu-mobil a");

			link.click(function () {
				link.toggleClass("menu-link_active");
				menu.toggleClass("menu-mobil_active");
			});
			link_active.click(function () {
				link.removeClass("menu-link_active");
				menu.removeClass("menu-mobil_active");
			});
			nav_link.click(function () {
				link.toggleClass("menu-link_active");
				menu.toggleClass("menu-mobil_active");
			});
		});
	});
	</script>

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

<script src="js/jquery.magnifier.js"></script>



