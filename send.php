<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Будівельна компанія Hata Plus</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <div class="top-line">
                <div class="wrapper clr">
                    <nav>
                        <ul class="top-menu left">
                        <li><a href="index.html">Головна</a></li>
                        <li><a href="#">Про компанію</a></li>
                        <li><a href="price.html">Наші будівлі</a></li>
                        <li><a href="#">Акції</a></li>
                        <li><a href="web_form.html">Контакти</a></li>
                        </ul>
                    </nav>
                    <ul class="social right">
                        <li>
                        <a href="https://www.facebook.com" class="fb"></a>
                        </li>
                        <li>
                        <a href="https://twitter.com/?lang=uk" class="tw"></a>
                        </li>
                        <li>
                        <a href="https://www.instagram.com/?hl=uk" class="ins"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header-contacts shadow_header">
                <div class="wrapper">
                <div class="row">
                    <div class="column logo">
                        <a href="index.html"><img class="img_logo" src="pictures/logo.png" alt="logo"></a>
                    </div>
                    <div class="column phones">
                        <p class="phone_ico"><a class="phone" href="tel:+380971002525">+38(097) 100-25-25</a></p>
                        <p><a href="tel:+380971002526">+38(097) 100-25-25</a></p>
                    </div>
                    <div class="column messengers line_meseng">
                        <p class="post_ico"><a class="post" href="mailto:hataplus@hata.com.ua">hataplus@hata.com.ua</a></p>
                        <p class="skype_ico"><a class="skype" href="skype:hataplus">hataplus</a></p>
                    </div>
                    <div class="column cta-btm">
                        <a href="#">Замовіть дзвінок</a>
                    </div>
                </div>
                </div>
            </div>
        </header>
    <div class="wrapper clr main_div main-sent">
        <main>
            <?php
                if($_POST["email"] != "" && $_POST["phone"] != ""){
                    $mail = $_POST["email"];
                    $phone = $_POST["phone"];
                    $name = $_POST["name"];

                    if(isset($_POST["text"])){
                        $text = $_POST["text"];
                    }else{
                        $text = "Тексту нема";
                    }
                    if(isset($_POST["agree"])){
                        $agree = $_POST["agree"];
                    }else{
                        $agree = "";
                    }
                    // ------Вивід тексту на екран------- //
                    if(isset($_POST["name"])){
                        echo("<p class='send-txt'>Шановний ".$name." ваш лист було відправлено</p>");
                    }else{
                        echo("<p class='send-txt'>Ваш лист було відправлено</p>");
                    }
                    if($agree == "true"){
                        echo("<h3 class='send-agree'>Дякуємо за підписку</h3>");
                        $agree = "Клієнт бажає підписатися";
                    }else{
                        $agree = "Клієнт не підписався";
                    }
                    echo("<a class='send-button' href='index.html'>Повернутися на головну</a>");
                    // ------------- //
                    $message = "Ім'я: <b>".$name."</b><br>Телефон: <b>".$phone."</b><br>Підписка: ".$agree."<br>Текст повідомлення:<br>".$text;
                    $mailSent = "<table class='main' style='background:#f5f5f5;border-collapse:collapse;color:#9999a6;font-family:Arial;font-size:13px;margin:0 auto'><tbody><tr><td class='bg-grey' style='background-color:#dcdce5;padding:0'></td><td class='wrapper header' style='background:#fff;padding:0;padding-bottom:12px;padding-left:30px;padding-right:30px;padding-top:12px'><table class='w100' style='border-collapse:collapse;width:100%'><tbody><tr><td style='padding:0;width:50%'><a href='https://fisvif.github.io/hata_plus/'><img class='w100' src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/logo.jpg' alt='логотип' style='width:100%'></a></td><td style='padding:0;width:50%'><p class='align-txt tell' style='margin-bottom:5px;text-align:right'><img src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/ico-phone.jpg' alt='телефон'> <a href='tel:+38(097) 100-25-25' style='color:#25252c;font-size:16px;font-weight:700;margin-left:10px;text-decoration:none'>+38(097) 100-25-25</a></p><p class='align-txt about-phone' style='margin-top:0;text-align:right'>контактний телефон у Вашому місті</p></td></tr></tbody></table></td><td class='bg-grey' style='background-color:#dcdce5;padding:0'></td></tr><tr><td style='padding:0'></td><td class='midle' style='background:#fff;margin:0 auto;padding:0;width:80%'><table style='border-collapse:collapse'><tbody><tr><td class='banner' style='display:block;padding:0'><a href='https://fisvif.github.io/hata_plus/'><img class='w100' src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/bg-offer.jpg' alt='пропоиція місяця' style='width:100%'></a></td></tr><tr><td class='about-company wrapper' style='background:#fff;padding:0;padding-bottom:50px;padding-left:30px;padding-right:30px;padding-top:35px'><h1 style='color:#24242b;font-size:24px;font-weight:700;margin:0;margin-bottom:25px'>Компанія “Хата Плюс”</h1><p style='color:#666;font-size:14px;line-height:24px;margin-bottom:30px'>Напевно кожен з нас не раз думав про те, щоб купити будинок котедж і насолоджуватися життям в гармонії з природою. Дійсно, для багатьох жителів мегаполісу заміська нерухомість під містом стала справжньою віддушиною і порятунком від сумній життя в багатоповерхівках спальних районів.</p><a class='battom' href='https://fisvif.github.io/hata_plus/' style='background:#fd8300;border-radius:50px;color:#fff;font-size:14px;font-weight:700;padding-bottom:15px;padding-left:25px;padding-right:25px;padding-top:15px;text-align:center;text-decoration:none'>Детальніше про нас</a></td></tr><tr><td class='advantages' style='background-color:#ededf5;line-height:18px;padding:0;padding-bottom:30px;padding-left:20px;padding-right:20px;padding-top:40px;text-align:center'><table class='w100' style='border-collapse:collapse;width:100%'><tbody><tr><td class='pad10px' style='padding:0;padding-left:10px;padding-right:10px;vertical-align:top'><img src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/bg_star.png' alt='знак'></td><td class='pad10px' style='padding:0;padding-left:10px;padding-right:10px;vertical-align:top'><img src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/bg_home.png' alt='знак'></td><td class='pad10px' style='padding:0;padding-left:10px;padding-right:10px;vertical-align:top'><img src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/bg_three.png' alt='знак'></td></tr><tr><td class='advantages-txt' style='padding:0;padding-left:10px;padding-right:10px;padding-top:25px;vertical-align:top'><h4 style='color:#24242b;font-size:14px;margin:0;margin-bottom:10px'><b>Зручне розташування</b></h4></td><td class='advantages-txt' style='padding:0;padding-left:10px;padding-right:10px;padding-top:25px;vertical-align:top'><h4 style='color:#24242b;font-size:14px;margin:0;margin-bottom:10px'><b>Дика природа</b></h4></td><td class='advantages-txt' style='padding:0;padding-left:10px;padding-right:10px;padding-top:25px;vertical-align:top'><h4 style='color:#24242b;font-size:14px;margin:0;margin-bottom:10px'><b>Широкий вибір</b></h4></td></tr><tr><td class='pad10px' style='padding:0;padding-left:10px;padding-right:10px;vertical-align:top'><p style='color:#666;margin:0'>Наші котеджі знаходяться<br>по всій країні</p></td><td class='pad10px' style='padding:0;padding-left:10px;padding-right:10px;vertical-align:top'><p style='color:#666;margin:0'>Понад 50 видів котеджів<br>з усіма зручностями</p></td><td class='pad10px' style='padding:0;padding-left:10px;padding-right:10px;vertical-align:top'><p style='color:#666;margin:0'>Скалиста місцевіть, свіже<br>повітря, та риболовля</p></td></tr></tbody></table></td></tr><tr><td class='house-one wrapper' style='background:#fff;border-bottom-color:#dadae2;border-bottom-style:solid;border-bottom-width:2px;padding:0;padding-bottom:25px;padding-left:30px;padding-right:30px;padding-top:20px'><table class='w100' style='border-collapse:collapse;width:100%'><tbody><tr><td style='padding:0;width:50%'><a href='https://fisvif.github.io/hata_plus/price.html'><img class='w100' src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/house1.jpg' alt='будинок №1' style='width:100%'></a></td><td class='house-one-txt' style='line-height:19px;padding:0;padding-left:20px;padding-top:5px;vertical-align:top;width:50%'><h3 style='margin:0'><a href='https://fisvif.github.io/hata_plus/price.html' style='color:#1f1f56;font-size:16px;font-weight:700;text-decoration:none'>MONTREAL (332 м<sup style='font-size:.7em'>2</sup>)</a></h3><p>Містечко оточене сосновим і листяним<br>лісом, чи не на кожній дільниці сосна,<br>береза або клен.</p><p>Загальна площа будови: 290 м<sup style='font-size:.7em'>2</sup><br>Кількість спалень: 3<br>Гараж: 2 авто</p></td></tr></tbody></table></td></tr><tr><td class='house-two wrapper' style='background:#fff;border-bottom-color:#dadae2;border-bottom-style:solid;border-bottom-width:2px;padding:0;padding-bottom:25px;padding-left:30px;padding-right:30px;padding-top:20px'><table class='w100' style='border-collapse:collapse;width:100%'><tbody><tr><td class='house-two-txt' style='line-height:19px;padding:0;padding-right:20px;padding-top:5px;vertical-align:top;width:50%'><h3 style='margin:0'><a href='https://fisvif.github.io/hata_plus/price.html' style='color:#1f1f56;font-size:16px;font-weight:700;text-decoration:none'>EDMONTON (338 м<sup style='font-size:.7em'>2</sup>)</a></h3><p>Тут є все для комфортної життя: вода<br>з власної скважини, газова опалення,<br>високошвидкісна Інтернет.</p><p>Загальна площа будови: 312 м<sup style='font-size:.7em'>2</sup><br>Кількість спалень: 4<br>Гараж: 2 авто</p></td><td style='padding:0;width:50%'><a href='https://fisvif.github.io/hata_plus/price.html'><img class='w100' src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/house2.jpg' alt='будинок №2' style='width:100%'></a></td></tr></tbody></table></td></tr><tr><td class='house-tree wrapper' style='background:#fff;padding:0;padding-bottom:25px;padding-left:30px;padding-right:30px;padding-top:20px'><table class='w100' style='border-collapse:collapse;width:100%'><tbody><tr><td style='padding:0;width:50%'><a href='https://fisvif.github.io/hata_plus/price.html'><img class='w100' src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/house3.jpg' alt='будинок №3' style='width:100%'></a></td><td class='house-one-txt' style='line-height:19px;padding:0;padding-left:20px;padding-top:5px;vertical-align:top;width:50%'><h3 style='margin:0'><a href='https://fisvif.github.io/hata_plus/price.html' style='color:#1f1f56;font-size:16px;font-weight:700;text-decoration:none'>CALGARY (294 м<sup style='font-size:.7em'>2</sup>)</a></h3><p>Для діток тут побудована ігровий<br>та спортивний майданчик, а недалеко<br>від містечка знаходяться дитячий садок.</p><p>Загальна площа будови: 272 м<sup style='font-size:.7em'>2</sup><br>Кількість спалень: 3<br>Гараж: 2 авто</p></td></tr></tbody></table></td></tr><tr class='sale_bg' style='background-image:url(https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/bg-sale.jpg);padding-left:30px;padding-right:30px'><td class='sale' style='color:#fff;padding:0;padding-bottom:35px;padding-top:35px;text-align:center'><h2 style='font-size:24px;margin:0;margin-bottom:12px'>Отримай знижку -10%</h2><p style='line-height:20px;margin-bottom:30px'>Відправ цього листа 10 друзям та отримай знижку на усі котеджі.<br>Акція триває в період з 21.04.2018 по 31.10.2018 включно.</p><a class='battom' href='https://fisvif.github.io/hata_plus/index.html' style='background:#1f1f55;border-radius:50px;color:#fff;font-size:14px;font-weight:700;padding-bottom:15px;padding-left:25px;padding-right:25px;padding-top:15px;text-align:center;text-decoration:none'>Прийняти участь</a></td></tr></tbody></table></td><td style='padding:0'></td></tr><tr><td class='bg-grey' style='background-color:#dcdce5;padding:0'></td><td style='padding:0'><table class='w100' style='border-collapse:collapse;width:100%'><tbody><tr><td class='bottom wrapper' style='background:#08081a;color:#9999a6;padding:0;padding-left:30px;padding-right:30px;padding-top:30px;text-align:center'><a href='#'><img class='mg-none' src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/social_tw.png' alt='twitter' style='margin:0;margin-left:5px;vertical-align:middle'></a><a href='#'><img src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/social_fb.png' alt='facebook' style='margin-left:5px;vertical-align:middle'></a><a href='#'><img src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/social_wifi.png' alt='wifi' style='margin-left:5px;vertical-align:middle'></a><a href='#'><img src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/social_pt.png' alt='pen' style='margin-left:5px;vertical-align:middle'></a><a href='#'><img src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/social_google.png' alt='google+' style='margin-left:5px;vertical-align:middle'></a><a href='#'><img src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/social_ball.png' alt='ball' style='margin-left:5px;vertical-align:middle'></a><a href='#'><img src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/social_in.png' alt='in' style='margin-left:5px;vertical-align:middle'></a><a href='#'><img src='https://raw.githubusercontent.com/fisvif/Email/master/hata_plus/images/social_fl.png' alt='points' style='margin-left:5px;vertical-align:middle'></a><p class='copy' style='margin:22px'>© Будівельна компанія “Хата Плюс” 2018.</p></td></tr><tr><td class='about-bottom wrapper' style='background:#000014;font-size:0;margin:0;padding:15px;padding-left:30px;padding-right:30px;text-align:center'><p><a href='https://fisvif.github.io/hata_plus/' class='right-line' style='border-right-color:#763d0b;border-right-style:solid;border-right-width:1px;color:#fd8300;font-size:11px;padding-left:7px;padding-right:7px;text-decoration:none'>Перейти на сайт</a> <a href='https://fisvif.github.io/hata_plus/' style='color:#fd8300;font-size:11px;padding-left:7px;text-decoration:none'>Відписатися</a></p></td></tr></tbody></table></td><td class='bg-grey' style='background-color:#dcdce5;padding:0'></td></tr></tbody></table>";
                

                    mail($mail, "Лист від компанії Хата-плюс", $mailSent, "Content-type:text/html; charset=utf-8 \r\n");
                    mail("phpvad@gmail.com", "Нове замовлення", $message, "Content-type:text/html; charset=utf-8 \r\n"); 
                }else{
                    echo("
                        <div class='column_main  form'>
                            <p class='send-txt'>Помилка відправки, введіть номер телефона та пошту</p>
                            <form action='send.php' method='POST'>  
                                <label><input type='text' name='name' class='inp-name' placeholder='Ваше імя'></label>
                                <label><input type='text' name='phone' class='inp-nambers' required placeholder='Телефон'></label>
                                <label><input type='text' name='email' class='inp-theme' required placeholder=' Ваш емеіл'></label>
                                <label><textarea name='text' class='inp-text' placeholder='Текст'></textarea></label>
                                <label><input type='submit' name='submit' class='submit' value='Відправити'></label>
                                <label><input type='checkbox' name='agree' class='inp-checkbox' value='true'></label>
                                <p class='greyp'>Я бажаю отримувати останні новини</p>
                            </form>
                        </div>    
                    ");
                }
            ?>
        </main>
    </div>    
    <footer>
      <div class="wrapper">
        <div class="row footer-contacts">
          <div class="column footer-menu">
            <ul>
              <li><a href="">Будинки</a></li>
              <li><a href="">Інфраструктура</a></li>
              <li><a href="">Сервіс</a></li>
              <li><a href="">Новини</a></li>
            </ul>
          </div>
          <div class="column footer-menu">
            <ul>
              <li><a href="#">Про компанію</a></li>
              <li><a href="#">Страхування</a></li>
              <li><a href="#">Контакти</a></li>
            </ul>
          </div>
          <div class="column phones">
            <p class="phone_ico"><a class="phone" href="tel:+380971002525">+38(097) 100-25-25</a></p>
            <p><a href="tel:+380971002526">+38(097) 100-25-25</a></p>
          </div>
          <div class="column messengers">
            <p class="post_ico"><a href="mailto:hataplus@hata.com.ua">hataplus@hata.com.ua</a></p>
            <p class="skype_ico"><a class="skype" href="skype:hataplus">hataplus</a></p>
          </div>
        </div>
      </div>
      <p class="copy">&copy; Будівельна компанія “Хата Плюс” 2018.</p>
    </footer>
  </body>
</html>