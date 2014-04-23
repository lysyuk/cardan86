<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Центр переводов</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic' rel='stylesheet' type='text/css'>
    <!-- Add custom CSS here -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/jquery.countdown.css" rel="stylesheet">

  </head>

  <body>
  
 <!-- ============================== ВЕРХУШКА ========================== -->
    <div class="top">
      <div class="container">
        <div class="row topp">
          <div class="col-xs-4 col-md-4">
            <a href="/"><img src="img/head_name.png"></a><br/>Перевод документов и текстов с английского и немецкого языков
          </div>
          <div class="col-xs-4 col-md-4 text-center">
            <!--<button data-target="#design" data-toggle="modal" class="btn btn-lg btn-template-bluu wobble-vertical">Закажите обратный звонок</button>-->
          </div>
          <div class="col-xs-4 col-md-4  text-center">
            <span class="contactphone"><img src="img/icon_phone.png"> &nbsp;8 800 000 0000</span><br/>
            Звонок с телефонов РФ бесплатный<br/>
            <span class="contactmail"><!--<img class="mailtop" src="img/icon_mail_top.png">-->e-mail: info@sktranslate.ru</span>
          </div>          
        </div>
      </div><!-- /.container -->
    </div>
  <!-- ============================== ВЕРХУШКА ========================== -->

    <!-- ================================ ШАПКА =========================== -->
    <div class="intro-header">

      <div class="container">
        <div class="row text-center">
          <span class="headtitle">Перевод документов в короткие сроки по всей России</span><br/>
          <span class="headtext">Каждый перевод за который мы беремся соответствует европейскому стандарту качества<br/>
          и проверяется носителем языка</span>
        </div>
        <div class="row">
          <div class="col-xs-3 head_girl"><img class="headpic" src="img/head_girl.png"></div>
          <div class="col-xs-6 form_title text-center">
            <?
            $email = $POST["email"];
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $br = "gmail.com"; 

            mail("info@sktranslate.ru, pochta.avst@gmail.com", "Письмо с сайта", " от $name
            E-mail отправителя: $email
            Телефон: $phone",
            "From: <info@sktranslate.ru> Content-type: text/plain; charset=utf-8"); 
            Header("Content-type: text/html");

            echo "<p><center>" . $name . " Ваше письмо отправлено успешно.<p>"
          ?>
          <br/><a href="/"><span class="form_title_act yellow_text">вернуться на главную</span></a>
          </div>
        </div>
  
      </div><!-- /.container -->
    </div><!-- /.intro-header -->
    <!-- ================================ ШАПКА =========================== -->

    <!-- ============================== КОНТАКТЫ НИЗ ========================== -->
    <div class="foot">
      <div class="container">
        <div class="row topp">
          <div class="col-xs-4 col-md-4">
            <a href="/"><img src="img/head_name.png"></a><br/>Перевод документов и текстов с английского и немецкого языков
          </div>
          <div class="col-xs-4 col-md-4 text-center">
            <!--<button data-target="#design" data-toggle="modal" class="btn btn-lg btn-template-bluu wobble-vertical">Закажите обратный звонок</button>-->
          </div>
          <div class="col-xs-4 col-md-4  text-center">
            <span class="contactphone"><img src="img/icon_phone.png"> &nbsp;8 800 000 0000</span><br/>
            Звонок с телефонов РФ бесплатный<br/>
            <span class="contactmail"><!--<img class="mailtop" src="img/icon_mail_top.png">-->e-mail: info@sktranslate.ru</span>
          </div>          
        </div>
      </div><!-- /.container -->
    </div>
  <!-- ============================== КОНТАКТЫ НИЗ ========================== -->
  <footer>
    <div class="container">
      <div class="row text-center">
        <div class="col-xs-12 text-center">
          <p>Способы оплаты: <img class="" src="img/pay_logo.png"> безналичный расчет по договору</p>
        </div>
      </div>
    </div>
  </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <script  type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

  </body>
</html>