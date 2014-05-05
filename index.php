<?php
/*
 * 
 * Version 0.2.0 
 * 
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Юрий">

        <title>Автомагазин запчастей на иномарки в Сургуте - CAR-DAN86</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

        <!-- Custom Google Web Font -->
        <link href="css/hover-min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800,600&subset=cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500&subset=cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Jura:400,300,500,600&subset=cyrillic' rel='stylesheet' type='text/css'>       
        <!-- Add custom CSS here -->        
        <link href="css/custom.css" rel="stylesheet">
        <link href="css/jquery.countdown.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="feedback/css/jquery.arcticmodal.css">
		<script src="js/modernizr-2.6.2.min.js"></script>
    </head>
	<body >
		<!--[if lte IE 8]>
		<div style="padding: 100px 30%;">
		<p class="browsehappy">
		<img src="img/top_logo.png" class="center-block img-responsive" >
		Ваш браузер <strong>устарел</strong>! Похоже, вы используете устаревшую версию Internet Explorer. 
		Пожалуйста, <a href="http://browsehappy.com/">обновите свой браузер</a>, чтобы 
		получить более полное впечатление о работе в сети</p>
		</div>
		<div style="display:none;">
		<![endif]-->		
        <!-- ============================== Модальное окно NP (Имя, Телефон) ========================== -->		
        <div class="modal fade" id="NP" tabindex="-1" role="dialog" aria-labelledby="NPLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <form action="" class="form-horizontal" role="form"
                          autocomplete="off" name="NP">
                        <input type="hidden" id="NPWhichButton" name="NPWhichButton" value="">
                        <div class="modal-header">
                            <button type="button" class="close white" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="NPLabel">Заказ звонка</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="icon-addon addon-md">
                                    <input type="text" class="form-control" name="name" placeholder="Введите имя">
                                    <label for="name" class="glyphicon glyphicon-user" rel="tooltip" title="Имя"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="icon-addon addon-md">
                                    <input type="text" class="form-control phone" name="phone" placeholder="Введите телефон">
                                    <label for="phone" class="glyphicon glyphicon-phone" rel="tooltip" title="Телефон"></label>
                                </div>
                            </div>
                            <button type="button" id="NPButton" class="btn btn-custom center-block feedback" name="send">Заказать звонок</button>
                            <div class="row" id="security">
                                <div class="col-xs-3">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </div>
                                <div class="col-xs-9">
                                    <p>Ваши контактные данные в безопасности
                                        и не будут переданы третьим лицам</p>
                                </div>
                            </div>							
                        </div>						
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================== Модальное окно NP (Имя, Телефон) ========================== -->

        <!-- ============================== Модальное окно Узнать цены на запчасти ========================== -->
        <div class="modal fade" id="getPriceList" tabindex="-1" role="dialog" aria-labelledby="getPriceListLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <form action="" class="form-horizontal" role="form"
                          autocomplete="off"  name="getPriceList" >
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="getPriceListLabel">Какая цена?</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="icon-addon addon-md">
                                    <input type="text" id="part" class="form-control" name="part" placeholder="Деталь">
                                    <label for="part" class="glyphicon glyphicon-cog" rel="tooltip" title="Выберите деталь"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="icon-addon addon-md">
                                    <input type="text" class="form-control" name="model" placeholder="Марка">
                                    <label for="model" class="glyphicon glyphicon-hand-right" rel="tooltip" title="Введите марку автомобиля"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="icon-addon addon-md">
                                    <input type="text" class="form-control" name="vin" placeholder="ВИН">
                                    <label for="vin" class="glyphicon glyphicon-barcode" rel="tooltip" title="Введите ВИН"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="icon-addon addon-md">
                                    <input type="text" class="form-control phone" name="phone" placeholder="Введите телефон">
                                    <label for="phone" class="glyphicon glyphicon-phone" rel="tooltip" title="Телефон"></label>
                                </div>
                            </div>
                            <button type="button" class="btn btn-custom btn-sm center-block feedback" name="send">Узнать цены</button>   
                        </div>
                    </form>
                </div>						

            </div>
        </div>    
		<!-- ============================== Модальное окно Узнать цены на запчасти ========================== -->

		<!-- ============================== ВЕРХУШКА ========================== -->
		<div id="top"></div>
		<div id="menu" class="top">
			<div class="container">
				<div class="row topp">
					<div class="col-md-12 grey_bottom_border"></div>
					<div class="col-md-4">
						<a href="#top"><img src="img/top_logo.png"></a>
					</div>
					<div class="col-md-3 links">
						<a href="#link1">Контрактные двигатели</a><br>
						<a href="#link2">Запчасти на заказ</a>
					</div>
					<div class="col-md-2 links">
						<a href="#link3">Акция</a><br>
						<a href="#link4">Почему выбирают нас</a>
					</div>
					<div class="col-md-3 text-center">
						<span class="contactphone">8 (982) 411-29-89</span>
						<button data-target="#NP" 
								data-toggle="modal" 
								data-label="Заказ звонка" 
								data-button="Заказать звонок"
								class="btn btn-sm btn-custom btn-np">Заказать звонок</button>
					</div>

				</div><!-- /row -->
			</div><!-- /.container -->
		</div>        
		<!-- ============================== ВЕРХУШКА ========================== -->

		<!-- ================================ ШАПКА =========================== -->
		<div class="section-header">

			<div class="container">
				<div class="row text-center">
					<span class="headtitle">Безошибочный подбор автозапчастей<br/>по каталогам производителей</span>
				</div>
				<div class="row">
					<div class="col-md-12 head_bg">
						<div class="col-md-5 col-md-offset-7">
							<div class="head-form top-form-bg">
								<div class="top-form-inputs">
									<h3 class="text-center form_title">Подать заявку</h3>
									<form action="" role="form" name="getPrice">	
										<div class="form-group">
											<div class="icon-addon addon-md">
												<input type="text" class="form-control" name="part" placeholder="Деталь">
												<label for="part" class="glyphicon glyphicon-cog" rel="tooltip" title="Выберите деталь"></label>
											</div>
										</div>
										<div class="form-group">
											<div class="icon-addon addon-md">
												<input type="text" class="form-control" name="model" placeholder="Марка">
												<label for="model" class="glyphicon glyphicon-hand-right" rel="tooltip" title="Введите марку автомобиля"></label>
											</div>
										</div>
										<div class="form-group">
											<div class="icon-addon addon-md">
												<input type="text" class="form-control" name="vin" placeholder="ВИН">
												<label for="vin" class="glyphicon glyphicon-barcode" rel="tooltip" title="Введите ВИН"></label>
											</div>
										</div>
										<div class="form-group">
											<div class="icon-addon addon-md">
												<input type="text" class="form-control phone" name="phone" placeholder="Введите телефон">
												<label for="phone" class="glyphicon glyphicon-phone" rel="tooltip" title="Телефон"></label>
											</div>
										</div>
										<button type="button" class="btn btn-custom btn-sm center-block feedback" name="send">Узнать цены</button>                                   	
									</form>
								</div>
							</div>  
						</div>
					</div>
				</div>

			</div><!-- /.container -->
		</div><!-- /.intro-header -->
		<!-- ================================ ШАПКА =========================== -->

		<!-- ================================ НАШИ ПРЕИМУЩЕСТВА =========================== -->

		<div class="section-line01">

			<div class="container">

				<div class="row">
					<div class="col-md-2 text-center">
						<img class="line-icon" src="img/1line_icon01.png">
						<p>Квалифицированные сотрудники</p>
					</div>
					<div class="col-md-2 text-center">
						<img class="line-icon img-responsive" src="img/1line_icon02.png">
						<p>Оперативная обработка вашей заявки по онлайн каталогам (за 30 минут)</p>
					</div>
					<div class="col-md-2 text-center">
						<img class="line-icon img-responsive" src="img/1line_icon03.png">
						<p>Гарантия безошибочного подбора деталей</p>
					</div>
					<div class="col-md-2 text-center">
						<img class="line-icon img-responsive" src="img/1line_icon04.png">
						<p>Организация доставки по ХМАО, ЯНАО</p>
					</div>
					<div class="col-md-2 text-center">
						<img class="line-icon img-responsive" src="img/1line_icon05.png">
						<p>Бесплатная доставка крупногабарита в г. Сургуте до двери</p>
					</div>
					<div class="col-md-2 text-center">
						<img class="line-icon img-responsive" src="img/1line_icon06.png">
						<p>Весь комплекс услуг по ремонту «под ключ»</p>
					</div>

				</div>

			</div><!-- /.container -->
		</div><!-- /.content-section-a -->
		<!-- ================================ НАШИ ПРЕИМУЩЕСТВА =========================== -->

		<!-- ================================ НА КАКИЕ МАРКИ МЫ ПОДБИРАЕМ =========================== -->

		<div class="section-mark">

			<div class="container">
				<div class="col-md-12 text-center grey-title">
					НА КАКИЕ МАРКИ АВТОМОБИЛЕЙ МЫ ПОДБИРАЕМ ЗАПЧАСТИ
				</div>

				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 logo-block">

						<div id="comments" class="carousel-comment slide">
							<!-- белые кружочки -->
							<ol class="carousel-indicators">
								<li data-target="#comments" data-slide-to="0" class="active"></li>
								<li data-target="#comments" data-slide-to="1"></li>
								<!--<li data-target="#comments" data-slide-to="2"></li>-->
							</ol>

							<!-- слайды -->
							<div class="carousel-comment-inner">
								<div class="item active">
									<div class="comment-fill">
										<img class="comment_face" src="img/car_logo01.png">
										<img class="comment_face" src="img/car_logo02.png">
										<img class="comment_face" src="img/car_logo03.png">
										<img class="comment_face" src="img/car_logo04.png">
										<img class="comment_face" src="img/car_logo05.png">
									</div>
									<div class="carousel-comment-caption">
									</div>
								</div>
								<div class="item">
									<div class="comment-fill">
										<img class="comment_face" src="img/car_logo06.png">
										<img class="comment_face" src="img/car_logo07.png">
										<img class="comment_face" src="img/car_logo08.png">
										<img class="comment_face" src="img/car_logo09.png">
										<img class="comment_face" src="img/car_logo10.png">
									</div>
									<div class="carousel-comment-caption">
									</div>
								</div>
							</div>

							<!-- управление -->
							<a class="left carousel-control icon-prev-comment" href="#comments" data-slide="prev">
								<!--<span class="icon-prev"></span>-->
							</a>
							<a class="right carousel-control icon-next-comment" href="#comments" data-slide="next">
								<!--<span class="icon-next"></span>-->
							</a>
						</div>
					</div>
				</div>

			</div><!-- /.container -->
		</div><!-- /.content-section-a -->
		<!-- ================================ НА КАКИЕ МАРКИ МЫ ПОДБИРАЕМ =========================== -->

		<!-- ================================ ДВИГАТЕЛИ И КПП =========================== -->

		<div id="link1" class="section-engine-kpp">
			<div class="container">
				<div class="col-md-12 text-center blue-title">
					КОНТАКТНЫЕ ДВИГАТЕЛИ И КПП
				</div>
				<div class="row">
					<div class="col-md-6 engine-text top-50">
						<div class="well">
							<p>
								Ремонт двигателя или КПП, так же как и покупка нового агрегата, не всегда целесообразна – 
								более доступной альтернативой является приобретение контрактного двигателя 
								(другими словами – бывшего в использовании), контрактных КПП, запчастей и узлов.                             
							</p>
							<p>
								Мы предлагает контрактные двигатели, автоматические и механические КПП, а также услуги 
								по их установке. Заказав необходимый двигатель у нас вы получаете бесплатную доставку 
								до места ремонта вашего автомобиля (в пределах г.Сургута).
							</p>
						</div>
					</div>
					<div class="col-md-6 top-50">
						<img class=" img-responsive center-block" src="img/engine_pic.jpg">
					</div>
				</div>

				<div class="col-md-12 text-center top-50">
					<button data-toggle="modal" data-target="#NP"
							data-label="Контрактные двигатели" 
							data-button="Узнать больше"
							class="btn btn-lg btn-custom btn-np">Узнать больше</button>                   
				</div>

			</div><!-- /.container -->
		</div><!-- /.content-section-a -->        
		<!-- ================================ ДВИГАТЕЛИ И КПП =========================== -->

		<!-- ================================ КУЗОВНЫЕ ЗАПЧАСТИ =========================== -->

		<div id="link2" class="section-kuzov-part">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center grey-title category-block">
						КУЗОВНЫЕ ЗАПЧАСТИ
					</div>
					<div class="col-md-3 ">
						<div class="part-block">
							<img class="car-part img-responsive" src="img/kuz1.jpg">
							<p>Фары, фонари</p>
							<button data-xxx="Фары, фонари" data-target="#getPriceList" data-toggle="modal" class="getPriceButton btn btn-sm btn-custom">Узнать цены</button>
						</div>
					</div>
					<div class="col-md-3 ">
						<div class="part-block">
							<img class="car-part img-responsive" src="img/kuz2.jpg">
							<p>Бампера</p>
							<button data-xxx="Бампера" data-target="#getPriceList" data-toggle="modal" class="getPriceButton btn btn-sm btn-custom">Узнать цены</button>
						</div>
					</div>
					<div class="col-md-3 ">
						<div class="part-block">
							<img class="car-part img-responsive" src="img/kuz3.jpg">
							<p>Крылья</p>
							<button data-xxx="Крылья" data-target="#getPriceList" data-toggle="modal" class="getPriceButton btn btn-sm btn-custom">Узнать цены</button>
						</div>
					</div>
					<div class="col-md-3 ">
						<div class="part-block">
							<img class="car-part img-responsive" src="img/kuz4.jpg">
							<p>Капоты</p>
							<button data-xxx="Капоты" data-target="#getPriceList" data-toggle="modal" class="getPriceButton btn btn-sm btn-custom">Узнать цены</button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center grey-title category-block">
						ЭЛЕМЕНТЫ ХОДОВОЙ ЧАСТИ
					</div>

					<div class="col-md-3 ">
						<div class="part-block">
							<img class="car-part img-responsive" src="img/hod1.jpg">
							<p>Амортизаторы</p>
							<button data-xxx="Амортизаторы" data-target="#getPriceList" data-toggle="modal" class="getPriceButton btn btn-sm btn-custom">Узнать цены</button>
						</div>
					</div>
					<div class="col-md-3 ">
						<div class="part-block">
							<img class="car-part img-responsive" src="img/hod2.jpg">
							<p>Ступичные подшипники</p>
							<button data-xxx="Ступичные подшипники" data-target="#getPriceList" data-toggle="modal" class="getPriceButton btn btn-sm btn-custom">Узнать цены</button>
						</div>
					</div>
					<div class="col-md-3 ">
						<div class="part-block">
							<img class="car-part img-responsive" src="img/hod3.jpg">
							<p>Шрусы</p>
							<button data-xxx="Шрусы" data-target="#getPriceList" data-toggle="modal" class="getPriceButton btn btn-sm btn-custom">Узнать цены</button>
						</div>
					</div>
					<div class="col-md-3 ">
						<div class="part-block">
							<img class="car-part img-responsive" src="img/hod4.jpg">
							<p>Стойки стабилизатора</p>
							<button data-xxx="Стойки стабилизатора" data-target="#getPriceList" data-toggle="modal" class="getPriceButton btn btn-sm btn-custom">Узнать цены</button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center grey-title category-block">
						ЗАПЧАСТИ ДЛЯ ТО
					</div>
					<div class="col-md-3 ">
						<div class="part-block">
							<img class="car-part img-responsive" src="img/to1.jpg">
							<p>Колодки</p>
							<button data-xxx="Колодки" data-target="#getPriceList" data-toggle="modal" class="getPriceButton btn btn-sm btn-custom">Узнать цены</button>
						</div>
					</div>
					<div class="col-md-3 ">
						<div class="part-block">
							<img class="car-part img-responsive" src="img/to2.jpg">
							<p>Фильтры</p>
							<button data-xxx="Фильтры" data-target="#getPriceList" data-toggle="modal" class="getPriceButton btn btn-sm btn-custom">Узнать цены</button>
						</div>
					</div>
					<div class="col-md-3 ">
						<div class="part-block">
							<img class="car-part img-responsive" src="img/to3.jpg">
							<p>Ремни</p>
							<button data-xxx="Ремни" data-target="#getPriceList" data-toggle="modal" class="getPriceButton btn btn-sm btn-custom">Узнать цены</button>
						</div>
					</div>
					<div class="col-md-3 ">
						<div class="part-block">
							<img class="car-part img-responsive" src="img/to4.jpg">
							<p>Свечи</p>
							<button data-xxx="Свечи" data-target="#getPriceList" data-toggle="modal" class="getPriceButton btn btn-sm btn-custom">Узнать цены</button>
						</div>
					</div>
				</div>

			</div><!-- /.container -->
		</div><!-- /.content-section-a -->
		<!-- ================================ КУЗОВНЫЕ ЗАПЧАСТИ =========================== -->

		<!-- ================================ СКИДКИ =========================== -->

		<div id="link3" class="section-discount">  
			<div id="video-container">
				<video autoplay loop poster="video/poster.jpg" class="fillWidth">                
					<source src="video/video.mp4" type="video/mp4">
					<source src="video/video.webm" type="video/webm">
				</video>
			</div>
			<div class="container">
				<div class="col-md-12 text-center blue-title sell">
					УСПЕЙ ПОЛУЧИТЬ СКИДКУ НА КОМПЛЕКТ ВЕСЕННЕГО ТО
				</div>

				<div class="row">
					<div class="col-md-12 discount-bg text-center">
						<div class="col-md-10 col-md-offset-1 timer-digits">
							<div id="countdown" class="center-block"></div>
							<!--<div class="desc">
								<div>Días</div>
								<div>Horas</div>
								<div>Minutos</div>
								<div>Segundos</div>
							</div>-->
						</div>    
						<div class="col-md-10 col-md-offset-1">
							<button data-toggle="modal" 
									data-target="#NP"
									data-label="Скидка на ТО" 
									data-button="Получить"
									class="btn btn-lg btn-custom btn-np">Получить скидку на ТО</button>
						</div>
					</div>
				</div>
			</div><!-- /.container -->           
		</div><!-- /.content-section-a -->
		<!-- ================================ СКИДКИ =========================== -->

		<!-- ================================ КАК МЫ РАБОТАЕМ =========================== -->

		<div class="section-how-work">

			<div class="container">
				<div class="col-md-12 text-center white-title">
					КАК МЫ РАБОТАЕМ
				</div>
				<div class="row">
					<div class="col-md-2 text-center">
						<img class="line-icon" src="img/2line_icon01.png">
						<p>Вы оставляете заявку на интересующую вас деталь</p>
					</div>
					<div class="col-md-2 text-center">
						<img class="line-icon" src="img/2line_icon02.png">
						<p>Наши специалисты безошибочно подбирают деталь по онлайн каталогам</p>
					</div>
					<div class="col-md-2 text-center">
						<img class="line-icon" src="img/2line_icon03.png">
						<p>Мы перезваниваем Вам и сообщаем 3 цены на деталь: оригинальную, не оригинальную и Б/У</p>
					</div>
					<div class="col-md-2 text-center">
						<img class="line-icon" src="img/2line_icon04.png">
						<p>Вы вносите 50% предоплаты</p>
					</div>
					<div class="col-md-2 text-center">
						<img class="line-icon" src="img/2line_icon05.png">
						<p>Мы доставляем ваш заказ</p>
					</div>
					<div class="col-md-2 text-center">
						<img class="line-icon" src="img/2line_icon06.png">
						<p>Вы вносите оставшуюся часть оплаты</p>
					</div>
				</div>
			</div><!-- /.container -->
		</div><!-- /.content-section-a -->
		<!-- ================================ КАК МЫ РАБОТАЕМ =========================== -->

		<!-- ================================ ПОЧЕМУ ВЫБИРАЮТ НАС =========================== -->

		<div id="link4" class="section-why">

			<div class="container">
				<div class="col-md-12 text-center grey-title">
					ПОЧЕМУ ВЫБИРАЮТ НАС
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<img class="line-icon img-responsive" src="img/3line_icon01.png">
						<p>Заявки обрабатываются быстро. Мы ценим время наших клиентов</p>
					</div>
					<div class="col-md-3 text-center">
						<img class="line-icon img-responsive" src="img/3line_icon02.png">
						<p>Трехценовое предложение позволит выбрать то, что подходит вашему бюджету</p>
					</div>
					<div class="col-md-3 text-center">
						<img class="line-icon img-responsive" src="img/3line_icon03.png">
						<p>Мы несем ответственность за качественное обслуживание наших клиентов</p>
					</div>
					<div class="col-md-3 text-center">
						<img class="line-icon img-responsive" src="img/3line_icon04.png">
						<p>Все виды ремонтных работ</p>
					</div>                   
				</div>
			</div><!-- /.container -->
		</div><!-- /.content-section-a -->
		<!-- ================================ ПОЧЕМУ ВЫБИРАЮТ НАС =========================== -->

		<!-- ================================ ОТЗЫВЫ КЛИЕНТОВ =========================== -->

		<div class="section-coffee">
			<div class="col-md-4 col-md-offset-2 kofe-block">                
				<div class="kofe-text well">
					Мы любим хороший кофе и рады угостить им гостей!
				</div>
			</div>
		</div>
		<div class="section-comments">

			<div class="container">
				<div class="col-md-12 text-center blue-title">
					ОТЗЫВЫ КЛИЕНТОВ
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6 comment-img text-center">
							<img class="line-icon img-thumbnail img-responsive" src="img/comment1.jpg">
						</div>

						<div class="col-md-6 comment-text comment-block">
							<div class="comment-cell">
								<strong>Александр, Volkswagen Touareg</strong><br>
								Ребята работают очень оперативно. Так же радует техническая подкованность. Я обращался 
								сначала к официалам, так они технически мне показались менее грамотные, точнее неохотно 
								делились информацией. Здесь общался с Сергеем - ответил на все мои вопросы - объяснил 
								что к чему и почему! В общем мне понравилось отношение ко мне... Всем рекомендую!
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6 comment-text comment-block">
							<div class="comment-cell">
								<strong>Дмитрий Анатольевич, Toyota Land Cruiser PRADO</strong><br>
								Нашел магазин в электронном справочнике, приобрел магазине все оригинальные расходные
								материалы, масла и спецжидкости для проведения комплексного ТО своего автомобиля. 
								Получил направление на СТО. Все работы были выполнены высококвалифицированными 
								специалистами в срок по ценам ниже на 15%. Был приятно удивлен. Теперь больше 
								уверенности в своем автомобиле и еще приобрел комплекты зимних и летних шин с 
								дисками по ценам на 15% ниже средних! Рекомендую.
							</div>                       
						</div>
						<div class="col-md-6  comment-img text-center">
							<img class="line-icon  img-thumbnail img-responsive" src="img/comment2.jpg">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6 comment-img text-center">
							<img class="line-icon img-thumbnail img-responsive" src="img/comment3.jpg">
						</div>

						<div class="col-md-6 comment-text comment-block">
							<div class="comment-cell">
								<strong>Иван Витальевич</strong><br>
								Я приобрел авто в автосалоне и укомплектовал ее до класса люкс с помощью магазина 
								Кардан86. Коврики салона, багажника, противотуманные фары, сигнализация, чехлы на
								сидения и множество других аксессуаров И головное устройство DVD поставил. 
								Существенно сэкономил! Ребятам спасибо.
							</div>
						</div>
					</div>
				</div>
				<!--
				<div class="col-md-12 text-center">
				   <button type="button" data-target="#design" data-toggle="modal" class="btn btn-lg btn-custom">Больше отзывов</button>
				</div>
				-->
			</div><!-- /.container -->
		</div><!-- /.content-section-a -->
		<!-- ================================ ОТЗЫВЫ КЛИЕНТОВ =========================== -->

		<!-- ================================ НАША КОМАНДА =========================== -->

		<div class="section-crew">

			<div class="container">
				<div class="col-md-12 text-center grey-title">
					Что для нас важно
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-3 text-center">
							<img class="line-icon  img-responsive" src="img/comment_img.png">
						</div>
						<div class="col-md-9 crew-text comment-block">
							<div class="comment-cell">
								<blockquote>
									<p>Для нас очень важно работать оперативно.  Мы понимаем насколько сильно желание нашего 
										клиента сесть в  свой исправный автомобиль и вновь насладится поездками. Мы разделаем 
										это стремление и стараемся помочь нашим клиентам в этом.</p>
									<footer>Сергей | Директор магазина</footer>
								</blockquote>                            
							</div>
						</div>
					</div>
				</div>     
			</div><!-- /.container -->
		</div><!-- /.content-section-a -->
		<!-- ================================ НАША КОМАНДА =========================== -->



		<!-- ================================ КОНТАКТЫ =========================== -->

		<div class="section-contact">
			<div class="container">
				<div class="col-md-12 text-center white-title">
					НАШ АДРЕС
				</div>
			</div><!-- /.container -->
			<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=nOg8_J8sejjLmg6XsBPSfLJl3KwhjuyS&height=450"></script>
			<div class="container">
				<div class="row bottom-line">
					<div class="col-md-10 col-md-offset-2">
						<p class="bottom-text"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;
							Нефтеюганское шоссе, д. 26, офис 208, г. Сургут</p>                    
						<p class="bottom-text">
							<span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;&nbsp;8 (982) 411-29-89</p>
					</div>
				</div>
				<div class="row bottom-line">
					<div class="col-md-4 bottom-text">...остались вопросы?</div>
					<div class="col-md-4 text-center">
						<button type="button" data-toggle="modal"
								data-target="#NP"
								data-label="Остались вопросы?" 
								data-button="Задать"
								class="btn btn-lg btn-custom btn-np">Задать вопрос</button>
					</div>                    
				</div>
			</div><!-- /.container -->
		</div><!-- /.content-section-a -->
		<!-- ================================ КОНТАКТЫ =========================== -->
		<!--[if lte IE 8]>
		</div>
		<![endif]-->
		<!-- JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="js/jquery.countdown.js"></script>
		<script src="js/jquery.scrollTo.min.js"></script>
		<script src="js/jquery.maskedinput.min.js"></script>
		<script type="text/javascript" src="feedback/js/feedback.js"></script>
		<script src="feedback/js/jquery.arcticmodal.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>