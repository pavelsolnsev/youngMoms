<!DOCTYPE html>
<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$lang = $get_lang = isset($_GET['lang']) && $_GET['lang'] != '' ? urldecode( strtolower($_GET['lang']) ) : 'ru';
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';
$link = isset($_GET['link']) ? urldecode( strtolower($_GET['link']) ) : '';

include_once $ROOT . 'chunks/common.php';
include_once $ROOT . 'version.php';
?>






<html>
<head>
    <base href="<?=$BASE_HREF?>">
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="image_src" href="">

    <link href="img/common/favicon.ico" type="image/x-icon" rel="icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
    
    <link href="css/FuturaPT/stylesheet.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->
    <!--[if lte IE 9]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->
    <!--[if lt IE 9]><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!--><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!--<![endif]-->

    <!-- Google Tag Manager --><script>(function(w, d, s, l, i) {w[l] = w[l] || []; w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'}); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', '<?=$GTM?>');</script><!-- End Google Tag Manager -->

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '606582656511966');
        fbq('track', 'PageView');
    </script>
    <!-- End Facebook Pixel Code -->

</head>

<body>

    <!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?=$GTM?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->

    <!-- Facebook Pixel Code -->
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=606582656511966&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    

    <div class="wrapper">
        



<header class="header">
    <div class="header__wrapper">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <img src="img/header/logo.svg" alt="МОИ">
                </div>

                
                
                <nav class="header__nav">
                    <a class="btn header__button" data-fancybox data-src="#popup-reg"><?= $header_button ?></a>
                </nav>
                
            </div>
        </div>
    </div>
</header>
<section class="header__mobile-menu">
    <div class="header__mobile-close"><img src="img/header/close.svg" alt="logo" class=""></div>
    <a class="header__mobile-link scroll" href="#about">Об институте</a>
    <a class="header__mobile-link scroll" href="#specialty">Программы обучения</a>
    <a class="header__mobile-link scroll" href="#document">Документы</a>
</section>
<section class="program-top">
    <div class="container">
        <div class="program-top__inner">
            <div class="program-top__text">
                <h1 class="common__title program-top__title">Специальность <br><span><?=$main__program_title?></span></h1>
                <h2 class="program-top__subtitle"><?=$main__program_subtitile?></h2>
            </div>
            
            <div class="program-top__picture">
                <img src="img/program-top/program-top.svg" alt="">
            </div>
        </div>
    </div>

    <div class="program-top__form">
        <div class="container">
            
<form action="<?=$action?>&form=reg" class="form form_horisontal">
    <div class="form__wrapper">
        
        <h3 class="form__title "><?=$form__title?></h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Эл.почта" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить заявку</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>

                <div class="form__footer-text">Отправляя заявку, ты&nbsp;соглашаешься&nbsp;с <a href="#popup-privacypolice" data-fancybox class="fancybox form__more-link">политикой конфиденциальности</a> и&nbsp;условиями обработки персональных данных, а&nbsp;также даёшь согласие на&nbsp;получение информационных рассылок</div>
            </label>
        </div>
    </div>
</form>

        </div>
    </div>
</section>


<section class="programs">
    <div class="container">
        <div class="programs__inner">
            <h1 class="common__title programs__title">Вы изучите</h1>

            <div class="programs__list">
                <?php if ( $version == 'big_data' ) { ?>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Ведение в&nbsp;анализ больших данных. Обзор источников информации</h3>    
    </div>
    <div class="programs__item-content">
        <p>Ознакомитесь с&nbsp;основными понятиями Big Data, узнаете, какие источники информации стоит использовать.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Технологии хранения и&nbsp;обработки больших данных</h3>    
    </div>
    <div class="programs__item-content">
        <p>Научитесь конфигурировать данные в&nbsp;Java&nbsp;ME.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Статистические методы анализа данных</h3>    
    </div>
    <div class="programs__item-content">
        <p>Узнаете и&nbsp;внедрите параметрический, непараметрический и&nbsp;номинальные методы анализа.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Современные программные средства анализа больших объемов информации</h3>    
    </div>
    <div class="programs__item-content">
        <p>Научитесь использовать современные программы анализа Statistica, SPSS, R-Studio и&nbsp;другие.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Сбор и&nbsp;хранение больших данных</h3>    
    </div>
    <div class="programs__item-content">
        <p>Проведете первичную обработку данных, собранных в&nbsp;открытых источниках.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Методы обработки и&nbsp;анализа больших данных</h3>    
    </div>
    <div class="programs__item-content">
        <p>Сгруппируете данные, выявите значимые корреляции и&nbsp;зависимости и&nbsp;сделаете выводы.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Визуализация исходной информации и&nbsp;аналитических данных</h3>    
    </div>
    <div class="programs__item-content">
        <p>Освоите графические инструменты: инфографику, схему, таблицы, модели.</p>
    </div>
</div>
                    

                <?php } elseif ( $version == 'internet_of_things' ) { ?>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Введение в&nbsp;интернет вещей</h3>    
    </div>
    <div class="programs__item-content">
        <p>Ознакомитесь с&nbsp;понятиями и&nbsp;спецификой интернета вещей.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Аппаратная часть интернета вещей</h3>    
    </div>
    <div class="programs__item-content">
        <p>Ознакомитесь с&nbsp;техническими решениями для интернета вещей.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Сетевые технологии и&nbsp;интернет вещей</h3>    
    </div>
    <div class="programs__item-content">
        <p>Узнаете, какие сетевые технологии используются в&nbsp;IoT и&nbsp;их&nbsp;роли.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Обработка данных в&nbsp;интернете вещей</h3>    
    </div>
    <div class="programs__item-content">
        <p>Научитесь использовать средства статистической и&nbsp;потоковой обработки данных, внедрите современные технологии хранения больших данных.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Применение облачных технологий и&nbsp;сервисно-ориентированных архитектур в&nbsp;интернете вещей</h3>    
    </div>
    <div class="programs__item-content">
        <p>Сможете использовать облачные технологии для вычисления и&nbsp;обработки данных.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Сервисы, приложения и&nbsp;бизнес-модели интернета вещей</h3>    
    </div>
    <div class="programs__item-content">
        <p>Пройдете путь от&nbsp;IoT-прототипа до&nbsp;законченного продукта</p>
    </div>
</div>
                    

                <?php } elseif ( $version == 'mobile_app_dev' ) { ?>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Классификация мобильных устройств. Архитектура мобильных устройств и&nbsp;их&nbsp;компонентов</h3>    
    </div>
    <div class="programs__item-content">
        <p>Узнаете, как происходит программирование мобильных устройств, познакомитесь с&nbsp;языками программирования C++, Java, Objective-C.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Java для мобильных устройств</h3>    
    </div>
    <div class="programs__item-content">
        <p>Получите углубленные знания в&nbsp;Java, начнете разработку приложения.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Программирование для ОС&nbsp;Android</h3>    
    </div>
    <div class="programs__item-content">
        <p>Определите специфику приложений для Android, получите знания в&nbsp;UX-дизайне.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Особенности экосистемы iOS. Особенности разработки приложений под WindowsPhone</h3>    
    </div>
    <div class="programs__item-content">
        <p>Научитесь создавать пользовательский интерфейс, использовать среды разработки и&nbsp;профильные инструменты программирования.</p>
    </div>
</div>
                    

                <?php } elseif ( $version == 'digital_design' ) { ?>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Основы веб-дизайна</h3>    
    </div>
    <div class="programs__item-content">
        <p>Узнаете профессиональную терминологию и&nbsp;компоненты веб-дизайна.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Figma</h3>    
    </div>
    <div class="programs__item-content">
        <p>Научитесь пользоваться Figma для создания дизайна, работать с&nbsp;масками и&nbsp;эффектами.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Adobe Illustrator для дизайнеров</h3>    
    </div>
    <div class="programs__item-content">
        <p>Создадите свой первый дизайн в&nbsp;Adobe Illustrator.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Adobe Photoshop</h3>    
    </div>
    <div class="programs__item-content">
        <p>Сделаете рекламные макеты и&nbsp;принты с&nbsp;помощью инструментов Photoshop.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>UX/UI дизайн</h3>    
    </div>
    <div class="programs__item-content">
        <p>Узнаете основы UX- и&nbsp;UI-дизайна и&nbsp;создадите дизайн с&nbsp;учетом пользовательского опыта.</p>
    </div>
</div>
                    

                <?php } elseif ( $version == 'digital_marketing' ) { ?>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Введение в&nbsp;digital-маркетинг</h3>    
    </div>
    <div class="programs__item-content">
        <p>Научитесь позиционировать бренд, составлять УТП и&nbsp;строить воронки продаж.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Digital-стратегия</h3>    
    </div>
    <div class="programs__item-content">
        <p>Построите стратегию рекламной кампании и&nbsp;определите каналы продвижения.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Контент-маркетинг</h3>    
    </div>
    <div class="programs__item-content">
        <p>Построите контентную стратегию, узнаете как использовать контент в&nbsp;продвижении и&nbsp;привлечении трафика.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Контекстная реклама</h3>    
    </div>
    <div class="programs__item-content">
        <p>Создадите поисковую кампанию в&nbsp;Яндекс.Директ, проведете ретаргетинг и&nbsp;запустите рекламную кампанию в&nbsp;Google Ads.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Таргетированная реклама</h3>    
    </div>
    <div class="programs__item-content">
        <p>Ознакомитесь с&nbsp;рекламными кабинетами в&nbsp;социальных сетях, настроите рекламу в&nbsp;Instagram.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>SMM</h3>    
    </div>
    <div class="programs__item-content">
        <p>Построите стратегию продвижения, оценить эффективность каналов и&nbsp;оформите бизнес-страницы в&nbsp;социальных сетях.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Email-маркетинг</h3>    
    </div>
    <div class="programs__item-content">
        <p>Сегментируете свои базы подписчиков, научитесь писать продающие письма.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Веб-аналитика</h3>    
    </div>
    <div class="programs__item-content">
        <p>Научитесь использовать Google Analytics и&nbsp;Яндекс.Метрику, настраивать цели и&nbsp;формировать отчеты.</p>
    </div>
</div>
                    

                <?php } elseif ( $version == 'artificial_intelligence' ) { ?>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Введение в&nbsp;новые информационные технологии и&nbsp;ИИ</h3>    
    </div>
    <div class="programs__item-content">
        <p>Узнаете, как развивались технологии и&nbsp;как происходит моделирование для ИИ.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Программное обеспечение работ ИИ</h3>    
    </div>
    <div class="programs__item-content">
        <p>Ознакомитесь с&nbsp;требованиями к&nbsp;программному обеспечению для&nbsp;ИИ и&nbsp;языками программирования.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Модели и&nbsp;средства представления знаний</h3>    
    </div>
    <div class="programs__item-content">
        <p>Научитесь классифицировать семантическую сеть, использовать сетевые модели в&nbsp;разработке.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Автоматическая обработка текста</h3>    
    </div>
    <div class="programs__item-content">
        <p>Сможете обрабатывать текст, настроить систему для автоматической обработки.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Нейроны и&nbsp;нейронные сети</h3>    
    </div>
    <div class="programs__item-content">
        <p>Ознакомитесь с&nbsp;моделями поведения, узнаете логику и&nbsp;динамику действий нейрона.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Модели распознавания</h3>    
    </div>
    <div class="programs__item-content">
        <p>Использовать модели распознавания и&nbsp;настраивать нейронные сети.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Машинное обучение</h3>    
    </div>
    <div class="programs__item-content">
        <p>Узнаете задачи машинного обучения, как проводить обучение и&nbsp;анализировать результаты.</p>
    </div>
</div>
                    
                    <div class="programs__item program-js">
    <div class="programs__item-header">
        <h3>Искусственный интеллект и&nbsp;этика</h3>    
    </div>
    <div class="programs__item-content">
        <p>Разберетесь в&nbsp;этических вопросах разработки&nbsp;ИИ и&nbsp;узнаете, от&nbsp;чего предостерегал Стивен Хокинг.</p>
    </div>
</div>
                    

                <?php }  ?>

            </div>
        </div>
    </div>
</section>


<section class="footer" id="section">
    <div class="container">
        <div class="block-1 row">
            <div class="col-lg-3">
                <div class="block-1__logo">
                    <img data-src="img/footer/logo.svg" alt="" class="lazy">
                </div>
            </div>
            <div class="col-lg-3 block-1__col">
                <div class="block-1__item">
                    <div>+7 (495) 232 23&nbsp;37</div>
                    <span>Контактный телефон для<br> консультаций</span>
                </div>
                <!-- <div class="block-1__item">
                    <div>+7 (495) 720-68-91</div>
                    <span>Приемная комиссия</span>
                </div>
                <div class="block-1__item">
                    <div>+7 (495) 225-23-35</div>
                    <span>Для студентов</span>
                </div> -->
            </div>
            <div class="col-lg-3">
                <div class="block-1__item">
                    <div>Сокол</div>
                    <span>Ленинградский пр-т, д. 80</span>
                </div>
                <div class="block-1__item">
                    <div>Будни 10:00 — 19:00</div>
                    <span>График работы</span>
                </div>
                <div class="block-1__item">
                    <div>pk@moi.edu.ru</div>
                    <span>Обратная связь</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="block-1__social">
                    <span>Мы в соцсетях</span>
                    <ul>
                        <li>
                            <a href="http://vk.com/synergyuniversity" target="_blank"><img data-src="img/footer/vk.svg" alt="" class="lazy"></a>
                        </li>
                        <?php /*?><li>
                            <a href="http://www.facebook.com/synergyunivers" target="_blank"><img data-src="img/footer/fb.svg" alt="" class="lazy"></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/synergyuniversity/" target="_blank"><img data-src="img/footer/insta.svg" alt="" class="lazy"></a>
                        </li><?php */ ?>
                        <li>
                            <a href="http://twitter.com/synergyunivers" target="_blank"><img data-src="img/footer/twit.svg" alt="" class="lazy"></a>
                        </li>
                    </ul>
                    <div>
                        <a href="https://apps.apple.com/ru/app/apple-store/id375380948" target="_blank"><img data-src="img/footer/apple.svg" alt="" class="lazy"></a>
                        <a href="https://play.google.com/store?hl=ru&gl=US" target="_blank"><img data-src="img/footer/google.svg" alt="" class="lazy"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="block-2">
            <div class="block-2__inner">
                <div class="block-2__info">
                    <p>© 2000 — 2020 <br>Московский открытый институт</p>
                </div>
                <div class="block-2__privacypolice">
                    <a class="block-2__link" href="#popup-privacypolice" data-fancybox>Политика конфиденциальности</a>
                </div>
            </div>
        </div>
    </div>

</section>


    </div>

    <a class="button fixed__button" href="#popup-reg" data-fancybox><?=$header_button?></a>
    
    <div hidden>
        <a href="https://sydi.ru/" class="footer__link" target="_blank">Разработка и&nbsp;продвижение&nbsp;&mdash; Synergy Digital</a>

        

        <div class="popup popup-reg" id="popup-reg">
    
<form action="<?=$action?>&form=reg" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title "><?=$form__title?></h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Эл.почта" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить заявку</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>

                <div class="form__footer-text">Отправляя заявку, ты&nbsp;соглашаешься&nbsp;с <a href="#popup-privacypolice" data-fancybox class="fancybox form__more-link">политикой конфиденциальности</a> и&nbsp;условиями обработки персональных данных, а&nbsp;также даёшь согласие на&nbsp;получение информационных рассылок</div>
            </label>
        </div>
    </div>
</form>

</div>

<div class="popup popup-privacypolice" id="popup-privacypolice">
    <div class="popup-privacypolice__text">
        <h1 class="title_bold">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</h1>
        
        <div class="text_small">
            <p>Ваша конфиденциальность очень важна для нас. Мы хотим, чтобы Ваша работа в Интернет по возможности была максимально приятной и полезной, и Вы совершенно спокойно использовали широчайший спектр информации, инструментов и возможностей, которые предлагает Интернет. Персональные данные, собранные при регистрации (или в любое другое время) преимущественно используется для подготовки Продуктов или Услуг в соответствии с Вашими потребностями. Ваша информация не будет передана или продана третьим сторонам. Однако мы можем частично раскрывать личную информацию в особых случаях, описанных в данной Политике конфиденциальности.</p>

            <p><strong>Рамки Политики конфиденциальности</strong><br>
            Настоящая Политика конфиденциальности (далее — «Политика») применяется к информации, полученной через данный сайт, иные сайты, виджеты и другие используемые интерактивные средства, на которых есть ссылка на данную Политику (далее — «Сайт») от пользователей Сайта (далее — «Пользователи»). Нижеследующие правила описывают, как &nbsp;Московский открытый институт обращается с любой информацией, относящейся к прямо или косвенно определенному или определяемому физическому лицу (субъекту персональных данных) (далее — «Персональные данные»), для целей оказания услуг с использованием Сайта.</p>

            <p>Пользователи включают в себя всех физических лиц, которые подключаются к Сайту и используют Сайт. Пользователи прямо соглашаются на обработку своих Персональных данных, как это описано в настоящей Политике. Обработка означает любое действие (операцию) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с Персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), блокирование, удаление, уничтожение Персональных данных. Настоящая Политика конфиденциальности действует с 03 марта 2016 г.</p>

            <p><strong>Контролирующие и обрабатывающие лица</strong><br>
            Пользователи соглашаются с тем, что:</p>

            <p>Пользуясь Сайтом, и принимая условия использования, опубликованные на Сайте, пользователь заявляет о своем однозначном согласии с обработкой его Персональных данных способами, описанными в настоящей Политике.<br>
            Обработка Персональных данных Пользователей осуществляется Оператором персональных данных — Московский открытый институт (ИНН/КПП: 7708142686/771901001, ОГРН: 1027700479740).<br>
            С какой целью собираются эти данные<br>
            Имя используется для обращения лично к вам, а ваш e-mail для отправки вам писем рассылок, новостей тренинга, полезных материалов, коммерческих предложений. Вы можете отказаться от получения писем рассылки и удалить из базы данных свои контактные данные в любой момент, кликнув на ссылку для отписки, присутствующую в каждом письме.</p>

            <p><strong>Сбор Персональных данных</strong><br>
            При регистрации на Сайте Пользователи подтверждают свое согласие с условиями настоящей Политики и свое согласие на обработку своих Персональных данных в соответствии с условиями настоящей Политики, кроме того они соглашаются на обработку своих Персональных данных на серверах Московского открытый институт, расположенных на территории Российской Федерации.</p>

            <p>Обработка Персональных данных осуществляется не дольше, чем этого требуют цели обработки Персональных данных, изложенные в настоящей Политике (за исключением случаев, предусмотренных законодательством Российской Федерации). Московский открытый институт может обрабатывать следующие Персональные данные:</p>

            <ul>
                <li>адрес электронной почты и иную контактную информацию;</li>
                <li>сообщения, направляемые с использованием Сайта, и сообщения, направляемые в Московский открытый институт;</li>
                <li>иную информацию о взаимодействии Пользователя с Сайтом Московского открытого института, результаты сбора статистики посещений Сайта Московского открытого института и общедоступной информации о программах и устройствах, используемых для такового доступа;</li>
                <li>дополнительную информацию, которую Московский открытый институт запрашивает у Пользователей для удостоверения их личности.</li>
            </ul>

            <p><strong>Как эти данные используются</strong><br>
            На сайте используются куки (Cookies) и данные о посетителях сервиса Google Analytics. При помощи этих данных собирается информация о действиях посетителей на сайте с целью улучшения его содержания, улучшения функциональных возможностей сайта и, как следствие, создания качественного контента и сервисов для посетителей. Вы можете в любой момент изменить настройки своего браузера так, чтобы браузер блокировал все файлы cookie или оповещал об отправке этих файлов. Учтите при этом, что некоторые функции и сервисы не смогут работать должным образом.</p>

            <p><strong>Как эти данные защищаются</strong><br>
            Для защиты Вашей личной информации мы используем разнообразные административные, управленческие и технические меры безопасности. Наша Компания придерживается различных международных стандартов контроля, направленных на операции с личной информацией, которые включают определенные меры контроля по защите информации, собранной в Интернет. Наших сотрудников обучают понимать и выполнять эти меры контроля, они ознакомлены с нашим Уведомлением о конфиденциальности, нормами и инструкциями. Тем не менее, несмотря на то, что мы стремимся обезопасить Вашу личную информацию, Вы тоже должны принимать меры, чтобы защитить ее. Мы настоятельно рекомендуем Вам принимать все возможные меры предосторожности во время пребывания в Интернете. Организованные нами услуги и веб-сайты предусматривают меры по защите от утечки, несанкционированного использования и изменения информации, которую мы контролируем. Несмотря на то, что мы делаем все возможное, чтобы обеспечить целостность и безопасность своей сети и систем, мы не можем гарантировать, что наши меры безопасности предотвратят незаконный доступ к этой информации хакеров сторонних организаций.</p>

        </div>
    </div>
</div>



        
    </div>

    <!-- Плагины и хелперы -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- Скрипт ALM Lander -->
    <script src="https://syn.su/js/lander.js" defer></script>
    <script src="js/script.js"></script>

</body>
</html>