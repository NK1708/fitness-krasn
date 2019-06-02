<?
include_once "parameters.php"; 
session_start();


if(isset($_GET['resultKey']) && !empty($_GET['resultKey'])){
    $_SESSION['resultKey'] = $_GET['resultKey'];
    header('Location: http://idol.drivefitness.ru');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">

    <title>Drive Fitness</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <? 
        if ($_SESSION['resultKey']) { ?>
            <meta property="og:image" content="uploads/<?=$_SESSION['resultKey']?>.png">
        <? } else { ?>
            <meta property="og:image" content="path/to/image.jpg">
        <? } ?>
    <link rel="shortcut icon" href="img/favicon/fire.png" type="image/x-icon">
    <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#fff">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#fff">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">

    <style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106073122-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-106073122-1');
  </script>
  <!-- Yandex.Metrika counter --> 
  <script type="text/javascript" > 
    (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter23058496 = new Ya.Metrika2({ id:23058496, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); 
  </script> 
  <noscript><div><img src="https://mc.yandex.ru/watch/23058496" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<script>window.roistatCookieDomain = 'drivefitness.ru';</script>

    <script>

    (function(w, d, s, h, id) {
        w.roistatProjectId = id; w.roistatHost = h;
        var p = d.location.protocol == "https:" ? "https://" : "http://";
        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
        var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', 'f1f50f523729691571e03b60d69bdea4');


    </script>
    <script>
            function setBigImage(foto) {
            $("#adpdp14").attr('href', $(foto).parent('.it').children('a').attr('href'));
            document.getElementById("dp14").src = foto.src;
          }
        </script>
</head>

<body>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-content">
                        <div class="header-content__left"><a href="http://drivefitness.ru/">О сети</a></div>
                        <div class="header-content__right">
                            <span>Отдел<br>продаж</span>
                            <a href="tel:2879383" class="df-roistat-phone-city_33">287-93-83</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fullpage">

        <section class="first-block section page" data-anchor="section1">
            <div class="header-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-mobile-content">
                                <div class="header-mobile-content__left"><a href="http://drivefitness.ru/">О сети</a></div>
                                <div class="header-mobile-content__right">
                                    <span>Отдел<br>продаж</span>
                                    <a href="tel:2879383" class="df-roistat-phone-city_33">287-93-83</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="first-place">
                <div class="first-place__logo">
                    <img src="img/logo.png" alt="">
                    <span>Федеральная сеть фитнес-клубов</span>
                </div>
                <h1 class="first-place__title">Новый драйв. Новая философия фитнес-инноваций <br>Drive Fitness «Краснолесье»</h1>
                <div class="first-place__info">
                    <div class="first-place__item">
                        <span class="first-place__item-line1">Адрес:</span>
                        <span class="first-place__item-line2">Краснолесья, 12А</span>
                    </div>
                    <div class="first-place__item">
                        <span class="first-place__item-line1">Площадь:</span>
                        <span class="first-place__item-line2">2000 М кв.</span>
                    </div>
                    <div class="first-place__item">
                        <span class="first-place__item-line1">Отдел продаж</span>
                        <span class="first-place__item-line2">10:00 - 22:00</span>
                    </div>
                </div>
                <div class="first-place__buttons">
                    <a href="#section2" class="btn">Забронировать карту</a>
                    <a href="#section3" class="btn">Галерея</a>
                </div>
            </div>
        
            <div id="msg_pop">
                <span class="msg_close" onclick="document.getElementById('msg_pop').style.display='none'; return false;"></span>
                На сайте DriveFitness используются cookie-файлы, данные об IP-адресе и местоположении с целью обеспечения работы сайта. Если, прочитав это сообщение, вы остаетесь на нашем сайте, это означает, что вы не возражаете против использования этих технологий.
            </div>
            
        </section>
        
        
         <section class="second-block section page" data-anchor="section2">
            <div class="header-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-mobile-content">
                                <div class="header-mobile-content__right">
                                    <span>Отдел<br>продаж</span>
                                    <a href="tel:2879383">287-93-83</a>
                                </div>
                                <div class="header-mobile-content__logo">
                                    <img src="img/logo.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/logo.png" alt="" class="logo-min">
             <div class="second-content">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-12">
                             <div class="second-content__items">
                                <div class="second-content__info">
                                    <span class="second-content__info-line1">9.900<span class="rubl">&#8399;</span></span>
                                    <span class="second-content__info-line2">Карта «Комфорт»<br>Единая цена до открытия клуба</span>
                                </div>
                                 <form id="query-form" action="query-form.php">
                                    <div class="second-content__inputs">
                                       <input type="text" placeholder="ФИО" name="PROPERTY[FULL_NAME]" class="main-input name" value="<?=$arResult['FORM_RESULT']['FULL_NAME'] ? $arResult['FORM_RESULT']['FULL_NAME'] : ''?>">
                                        <input type="phone" id="phone_input" name="PROPERTY[PHONE]" placeholder="+7(___)___-__-__" class="main-input phone" value="<?=$arResult['FORM_RESULT']['PHONE'] ? $arResult['FORM_RESULT']['PHONE'] : ''?>"> 
                                    </div>
                                     
                                     <div class="form_message"></div>
                                     <div class="accord">
                                         <input type="checkbox" name="PROPERTY[POLITIC]" <?=$arResult['PROPERTIES']['POLITIC']['VALUE'];?> class="checkbox" id="checkbox"/>
                                         <label for="checkbox"><p align="justify">Нажимая на кнопку, я принимаю условия Акции, описанной на сайте drivefitness.ru, и даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных»</p></label>
                                     </div>
                                     <input type="hidden" name="SUBMIT_FORM" value="Y">
                                     <input type="submit" class="book_button btn" value="Забронировать карту">
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="second-block__bottom">
         <span class="second-block__bottom-line1">Чем ближе открытие,<br>тем меньше срок карты</span>
         <span class="second-block__bottom-line2"><span class='red'>10 мес. 9900 <br><span class="line-vert">|</span></span> с 19 ноября - 9 мес.</span>
             </div>
         </section>
         <section class="third-block section page" data-anchor="section3">
            <div class="header-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-mobile-content">
                                <div class="header-mobile-content__right">
                                    <span>Отдел<br>продаж</span>
                                    <a href="tel:2879383">287-93-83</a>
                                </div>
                                <div class="header-mobile-content__logo">
                                    <img src="img/logo.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/logo.png" alt="" class="logo-min">
            <div class="third-block__gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="img">
                                <a data-fancybox="gallery" href="img/gallery/1.jpg"  rel="example_group" id="adpdp14">
                                <img src="img/gallery/1.jpg" id="dp14" style="margin-bottom: 3px;" alt="" /></a>
                            </div>
                            <div class="third-block__line owl-carousel">
                                <div class="it"><a style="display:none;" href="img/gallery/0.jpg" rel="example_group"></a>
                                <img src="img/gallery/0.jpg" onclick='setBigImage(this);' alt="" /></div>
                               <div class="it"><a style="display:none;" href="img/gallery/1.jpg" rel="example_group"></a>
                                <img src="img/gallery/1.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/2.jpg" rel="example_group"></a>
                                    <img src="img/gallery/2.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/3.jpg" rel="example_group"></a>
                                    <img src="img/gallery/3.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/4.jpg" rel="example_group"></a>
                                <img src="img/gallery/4.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/5.jpg" rel="example_group"></a>
                                <img src="img/gallery/5.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/6.jpg" rel="example_group"></a>
                                <img src="img/gallery/6.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/7.jpg" rel="example_group"></a>
                                <img src="img/gallery/7.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/8.jpg" rel="example_group"></a>
                                <img src="img/gallery/8.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/9.jpg" rel="example_group"></a>
                                <img src="img/gallery/9.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/10.jpg" rel="example_group"></a>
                                <img src="img/gallery/10.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/11.jpg" rel="example_group"></a>
                                <img src="img/gallery/11.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/12.jpg" rel="example_group"></a>
                                <img src="img/gallery/12.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/13.jpg" rel="example_group"></a>
                                <img src="img/gallery/13.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/14.jpg" rel="example_group"></a>
                                <img src="img/gallery/14.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/15.jpg" rel="example_group"></a>
                                <img src="img/gallery/15.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/16.jpg" rel="example_group"></a>
                                <img src="img/gallery/16.jpg" onclick='setBigImage(this);' alt="" /></div>
                                <div class="it"><a style="display:none;" href="img/gallery/17.jpg" rel="example_group"></a>
                                <img src="img/gallery/17.jpg" onclick='setBigImage(this);' alt="" /></div>
                            </div>
                            <p class="third-block__text">*Изображения являются эскизным проектом клуба</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
        <section class="fourth-block section page" data-anchor="section4">
            <div class="header-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-mobile-content">
                                <div class="header-mobile-content__right">
                                    <span>Отдел<br>продаж</span>
                                    <a href="tel:2879383">287-93-83</a>
                                </div>
                                <div class="header-mobile-content__logo">
                                    <img src="img/logo.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/logo.png" alt="" class="logo-min">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="fourth-block__top">12-й клуб федеральной сети drive fitness. «Краснолесье» - это:</div>
                    </div>
                </div>
            </div>
            <div class="fourth-block__items">
                <div class="fourth-block__item fourth-block__item1">
                    <img src="img/pic1.png" alt="" class="fourth-block__img">
                    <div class="fourth-block__text">
                        <p>Огромное фитнес-пространство:</p>
                        <ul>
                            <li><span>Панорамные окна;</span></li>
                            <li><span>Самое современное оборудование</span></li>
                        </ul>
                        <br>
                        <p>Инновационный урбанистический дизайн</p>
                        <br>
                        <p>Атмосфера драйва</p>
                    </div>
                </div>
                <div class="fourth-block__item">
                    <img src="img/pic2.png" alt="" class="fourth-block__img">
                    <div class="fourth-block__text">
                        <p>стандарты качества федеральной сети</p>
                        <ul>
                            <li><span>тренажерный зал;</span></li>
                            <li><span>кардиолиния;</span></li>
                            <li><span>зоны боевых искусств и кроссфит;</span></li>
                            <li><span>2 зала групповых программ;</span></li>
                            <li><span>детский клуб и фитнес-бар;</span></li>
                            <li><span>профессиональные тренеры;</span></li>
                        </ul>
                    </div>
                </div>
                <div class="fourth-block__item">
                    <img src="img/pic3.png" alt="" class="fourth-block__img">
                    <div class="fourth-block__text">
                        <p>Наша основная ценность - доверие</p>
                        <br>
                        <p class="fourth-block__small">мы слышим каждого гостя, внимательно читаем каждый отзыв, обязательно делаем вывод и становимся лучше, повышая уровень сервиса</p>
                    </div>
                </div>
            </div>
            <div class="container container-np">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="fourth-block__bottom">
                            <span class="fourth-block__bottom-line1">Инновации</span>
                            <div class="fourth-block__bottom-line2">
                                <div class="fourth-block__bottom-item fourth-block__bottom-item1">
                                    <img src="img/pic4.svg" alt="">
                                    <p>электронный фитнес-браслет с функцией банковской карты</p>
                                </div>
                                <div class="fourth-block__bottom-item fourth-block__bottom-item2">
                                    <img src="img/pic5.svg" alt="">
                                    <p>турникеты и камеры с face id</p>
                                </div>
                                <div class="fourth-block__bottom-item fourth-block__bottom-item3">
                                    <img src="img/pic6.svg" alt="">
                                    <p>шкафчики с электронными замками в раздевалках</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section fifth-block page" data-anchor="section5">
            <div class="header-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-mobile-content">
                                <div class="header-mobile-content__right">
                                    <span>Отдел<br>продаж</span>
                                    <a href="tel:2879383">287-93-83</a>
                                </div>
                                <div class="header-mobile-content__logo">
                                    <img src="img/logo.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/logo.png" alt="" class="logo-min">
            <div class="fifth-block__text">
               <div class="fifth-block__price">9.900<span class="rubl">&#8399;</span></div>
            </div>
            <div class="fifth-block__timer">
                <div class="fifth-block__attention">Срок карты сократится на 1 мес. через:</div>
                <div class="fifth-block__timerbox">
                    <div id="defaultCountdown"></div>
                </div>
            </div>
            <div class="fifth-block__bottom">
                <a href="#section2" class="fifth-block__btn">Забронировать</a>
                <div class="web-logo">
                   <a href="https://website96.ru/" target="_blank">
                    <img src="img/web-logo.png" alt="">
                    <span>Разработка и продвижение сайтов</span>
                </a>
               </div>
            </div>
        </section>
 
     </div>
     <div class="mobile-footer">
     <a href="#section2" class="book-link">Начать игру</a>
 </div>


    <?
        if ($_GET['i']) {
            $filename = $_SERVER['DOCUMENT_ROOT'].'uploads/' . $_GET['i'] . '.png';

            if (file_exists($filename)) {
                $img = '../uploads/'. $_GET['i'] . '.png';
                //var_dump($filename);
            } else {
                var_dump($filename);
                die();
            }
            
        } 
    ?>

    <!-- <div class="canvas-layer" id='print-to'>
        <canvas id="otkrytka" width="858px" height="378px"></canvas>
    </div> -->

    <img class="print-out-image" src="" width="858px" height="378px">



    <link rel="stylesheet" href="css/main.min.css">
    <script src="js/scripts.min.js"></script>
    <script>

    (function(w, d, s, h, id) {

        w.roistatProjectId = id; w.roistatHost = h;

        var p = d.location.protocol == "https:" ? "https://" : "http://";

        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";

        var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);

    })(window, document, 'script', 'cloud.roistat.com', 'f1f50f523729691571e03b60d69bdea4');

    </script>

</body>
</html>

