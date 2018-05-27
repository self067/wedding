<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Олег Кузьмин">
	<title>Свадебный конструктор</title>
	<meta name="description" content="Свадебный конструктор">
	<meta name="author" content="Олег Кузьмин">
	<link rel="icon" href="favicon.ico">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="slick/slick.css">
	<!-- <link rel="stylesheet" href="slick/slick-theme.css"> -->
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.min.css">
</head>

<body>

<?php include 'builder-header.php';?>

	<section class="p14letterGuests section-builder" id="p14letterGuests">
	<h2 class="section-title section-title__build">Письмо гостям</h2>
		<div class="section-subtitle ">
		Несколько наших правил, которым должны следовать все гости на свадьбе
		</div>
		<div class="container">

			<div class="row">
			
				<div class="p14letterGuests-img">
					<img src="img/14_letter-guests/bg.jpg " alt="">
				</div>

				<div class="p14letterGuests-block">
					<div class="p14letterGuests-block__title">
						1. Заранее сообщайте, придете вы или нет		
					</div>
					<div class="p14letterGuests-block__text">
						Для нас важно заранее знать список гостей, чтобы утвердить меню и площадку, а также составить программу вечера. Если у вас могут измениться планы, сообщите об этом заранее. Мы очень хотим видеть вас на нашей свадьбе, поэтому, пожалуйста, не тяните с ответом.
					</div>
					<div class="p14letterGuests-block__title">
						2. Vestibulum ante ipsum primis in faucibus
					</div>
					<div class="p14letterGuests-block__text">
						Пожалуйста, учитывайте наши пожелания к дресс-коду. Не приходите в повседневной одежде, ведь это праздник. Если мы обозначили конкретные требования к тому, как должны выглядеть гости, значит этого требует формат нашего торжества. Пожалуйста, отнеситесь к нему с уважением. К тому же, это отличный повод надеть что-то праздничное!
					</div>
					<div class="p14letterGuests-block__title">
						3. Во время церемонии выключите телефон
					</div>
					<div class="p14letterGuests-block__text">
						Либо, чтобы фотографировать, переведите его в режим полета. Нам бы очень не хотелось, чтобы в момент, когда мы произносим клятвы друг другу, у кого-то зазвонил телефон и нарушил всю атмосферу. Церемония длится всего 20 минут — вы всегда успеете перезвонить.
					</div>
					<div class="p14letterGuests-block__title">
						4. Не привлекайте все внимание на себя
					</div>
					<div class="p14letterGuests-block__text">
						Чтобы праздник был комфортным для всех гостей, мы просим их одеться не слишком броско, соблюдать нормы приличия, не перебивать поздравления других, не кричать через весь зал что-то другому гостю или нам, не забирать микрофон у ведущего и так далее. Мы знаем, что вы не будете это делать, за это мы вас и любим!
					</div>
				</div>
				<!-- <div class="p09photoAlbum-block"> -->
			</div>
			<!-- <div class="p14letterGuests-row"> -->



			<form class="p14letterGuests-form" action="">
				<div class="p14letterGuests-form__titlediv">
				<label class="p14letterGuests-form__title" for="">Добавить требование:</label>
				</div>
				<div class="row p14letterGuests-form-inputs justify-content-between align-items-center">
					<input class="p14letterGuests-form__name" type="text" placeholder="Выберите фото с компьютера">
					<button class="button button-o p14letterGuests-form__button-browse">Обзор</button>
					<div class="p14letterGuests-form__browse">Или просто перетащите фото сюда</div>

				</div>
				<div class="p14letterGuests-form-demand">
					<input class="p14letterGuests-form-demand__title" type="text" placeholder="Заголовок требования">
					
					<textarea required id="p14letterGuests-form-demand__text" class="form__input p14letterGuests-form-demand__text" placeholder="Описание требования" name="p14_text"  rows="4" maxlength="512"></textarea>
				</div>

				<button class="button p14letterGuests-form__button">СОХРАНИТЬ</button>

			
			</form>
	
		</div>
		<!-- <div class="container"> -->
	</section>

				<!-- <form class="videoWidget-form" action="#">
					<label for="videoWidget-form__input">Ссылка на видео</label>
					<div>
						<input type="text" placeholder="Введите адрес Вашего видео">
						<button class="button">ДОБАВИТЬ</button>

					</div>
				</form> -->


		<div class="btn-blocks">

			<div class="btn-block btn-block1">
				Редактировать
			</div>
			<div class="btn-block btn-block2">
				<img src="img/05_Invitation/arrow-down.png" alt="">
			</div>
			<div class="btn-block btn-block3">
				<img src="img/05_Invitation/arrow-up.png" alt="">
			</div>
			<div class="btn-block btn-block4">
				<img src="img/05_Invitation/busket.png" alt="">
			</div>

		</div>

<?php include 'builder-footer.php';?>
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->


