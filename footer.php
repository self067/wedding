<div class="footer dark-bg dark-bg8">

	<div class="menu-ext__foot ">
		<div class="container">
			<div class="menu__foot">

				<ul class="align-items-center">
					<li>
						<!-- <a href="#"><img src="img/logo-mywedding.png" alt="logo"></a> -->
						<a href="#"><div class="footer-logo"></div></a>

					</li>

					<li class="hide-mobile">
						<a href="#s02video">Видео</a>
					</li>
					<li class="hide-mobile">
						<a href="#s03tools">Инструменты сайта</a>
					</li>
					<li class="hide-mobile">
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
						<button class="button  menu__foot-button button-small btn-enter modal-call  hide-mobile">Войти</button>
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
<?php include 'scripts.php';?>
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

	<script>
	jQuery(function($){
		$(document).ready(function () {
			$(".tnx-close").on("click", function () {
				$(".tnx-frm").hide();
				$("#p02auth").hide();
			});
			
			$("#tnx-ok").on("click", function () {
				// alert("tnx-ok");
				$(".tnx-frm").hide();
				$("#p02auth").hide();
			});

		});
	});
	</script>


<script>
jQuery(function($){
var video;
$(document).ready(function(){
 video = document.getElementById("video");
 $('#video').on('click', function(){
   video.play();
   video.setAttribute('controls','');
 });
});
});
</script>


</body>

</html>
