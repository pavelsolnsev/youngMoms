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
                    <a class="header__nav-item scroll" href="#about">Об институте</a>
                    <a class="header__nav-item scroll" href="#specialty">Программы обучения</a>
                    <a class="header__nav-item scroll" href="#document">Документы</a>
                </nav>
                <a class="header__nav-item header__phone" href="tel:<?= $phone_link ?>"><?= $phone ?></a>
                <a href="#popup-reg" class="header__button button" data-fancybox><?= $header_button ?></a>
                <div class="header__mobile">
                    <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="50" onclick="this.classList.toggle('active')">
                        <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                        <path class="line middle" d="m 30,50 h 40" />
                        <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                    </svg>
                </div>
                
                
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
<section class="main">
    <div class="container">
        <div class="main__inner row">
            <div class="col-sm-5 col-lg-6">
                <div class="main__block">
                    <h1 class="main__title"><?= $main__title ?></h1>
                    <h2 class="main__subtitle">Повышение квалификации<br> и переподготовка онлайн</h2>
                </div>
            </div>
            <div class="col-sm-7 col-lg-6">
                <div class="main__picture">
                    <img src="img/main/image.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="request request_hidden">
    <div class="container">
        <div class="request__form">
            
<form action="<?=$action?>&form=form-main" class="form form_horisontal form_hidden">
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

<section class="category" id="category">
    <div class="container">
        <h2 class="category__title common__title">Пройти обучение могут следующие категории граждан</h2>
        <div class="row">
            <div class="col-12">
                <div class="category__item">
                    <img data-src="img/category/picture-1.svg" alt="" class="lazy">
                    <p>женщины, находящиеся в&nbsp;отпуске по&nbsp;уходу<br>за ребенком в&nbsp;возрасте до&nbsp;трех лет</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="result">
    <div class="container">
        <!-- <h2 class="common__title result__title">Результаты обучения</h2> -->
        <div class="row result__slider">
            <div class="col-sm-4">
                <div class="result__item">
                    <img src="img/result/pic1.png" alt="">
                    <p>Бесплатное обучение<br> дистанционно</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="result__item">
                    <img src="img/result/pic2.png" alt="">
                    <p>Новые возможности<br> для карьеры</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="result__item">
                    <img src="img/result/pic3.png" alt="">
                    <p>Индивидуальное<br> расписание обучения</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about" id="about">
    <div class="container">
        <div class="about__inner">
            <div class="about__content">
                <ul>
                    <li><span>Преподаватели</span>Обучение проводят преподаватели-практики, имеющие богатый опыт работы по специальности.</li>
                    <li><span>Удобство</span>Удобный формат обучения без отрыва от дома и&nbsp;работы&nbsp;&mdash; дистанционно.</li>
                    <li><span>Востребованность</span>Получите новые карьерные возможностии навыки, востребованные на&nbsp;рынке труда.</li>
                    <li><span>Диплом</span>По&nbsp;окончании обучения вы&nbsp;получите дипломо профессиональной переподготовке или удостоверение о&nbsp;повышении квалификации.</li>
                </ul>
            </div>
            <div class="about__picture">
                <img src="img/about/picture.svg" alt="">
            </div>
        </div>
    </div>
</section>



<section class="request request_hidden">
    <div class="container">
        <div class="request__form">
            
<form action="<?=$action?>&form=form-catalog" class="form form_horisontal form_hidden form_catalog">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Скачать каталог программ профессиональной переподготовки и&nbsp;дополнительного образования</h3>
        

        
        <div class="form__text">В&nbsp;каталоге вы&nbsp;найдете список программ, продолжительность обучения и&nbsp;перечень изучаемых дисциплин</div>
        

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


<section class="wait">
    <div class="container">
        <h2 class="common__title wait__title">Какие преимущества обучения в МОИ?</h2>
        <div class="wait__inner">
            <div class="wait__content">
                <ul>
                    <li>Сотрудничество с&nbsp;ведущими работодателями</li>
                    <li>Удобная платформа дистанционного обучения</li>
                    <li>Квалифицированные преподаватели</li>
                    <li>Большой выбор специальностей</li>
                    <li>Поддержка преподавателей на&nbsp;протяжении всего обучения</li>
                    <li>Индивидуальное расписание обучения</li>
                    <li>Учеба без отрыва от&nbsp;дома и&nbsp;работы</li>
                    <li>Обучение новой профессии</li>
                    <li>Востребованные на&nbsp;рынке труда профессии</li>
                </ul>
            </div>

            <div class="wait__picture">
                <img src="img/wait/picture.svg" alt="">
            </div>

        </div>
    </div>
</section>



<section class="request request_hidden">
    <div class="container">
        <div class="request__form">
            
<form action="<?=$action?>&form=form-section_1" class="form form_horisontal">
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



<section class="specialty" id="specialty">
    <div class="container">
        <div class="specialty__inner">
            <h1 class="common__title specialty__title">Программы обучения</h1>
            <div class="specialty__slider">
                
                <div class="swiper-slide">
                    <div class="specialty__item">
                        <div class="specialty__item-picture">
                            <img class="" src="img/specialty/specialty-1.png" alt="">
                        </div>
                        <div class="specialty__item-desc">
                            <h3>Интернет-маркетолог</h3>
                            <p>Научитесь разрабатывать digital-стратегии продвижения продукта, применять инструменты интернет-маркетинга, настраивать рекламные кампании и&nbsp;анализировать их&nbsp;эффективность. Освоите навыки сегментирования целевой аудитории, работы с&nbsp;каналами удержания и&nbsp;коммуникации с&nbsp;клиентами, создания контента и&nbsp;ведения контекстной и&nbsp;таргетированной рекламы.</p>
                        </div>
                        <div class="specialty__item-footer">
                            <a class="button specialty__item-button" href="#popup-reg" data-fancybox>Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="specialty__item">
                        <div class="specialty__item-picture">
                            <img class="" src="img/specialty/specialty-2.png" alt="">
                        </div>
                        <div class="specialty__item-desc">
                            <h3>SMM-маркетинг</h3>
                            <p>Научитесь разрабатывать digital-стратегии, применять инструменты SMM, настраивать таргетинг и&nbsp;анализировать его эффективность. Познакомитесь с&nbsp;проведением маркетинговых исследований в&nbsp;интернете, сегментацией целевой аудитории. Получите навыки удержания и&nbsp;коммуникации с&nbsp;клиентами, создания контента, управления рекламными кампаниями в&nbsp;Facebook, &laquo;ВКонтакте&raquo;, Instagram.</p>
                        </div>
                        <div class="specialty__item-footer">
                            <a class="button specialty__item-button" href="#popup-reg" data-fancybox>Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="specialty__item">
                        <div class="specialty__item-picture">
                            <img class="" src="img/specialty/specialty-3.png" alt="">
                        </div>
                        <div class="specialty__item-desc">
                            <h3>Графический дизайнер: основы профессии</h3>
                            <p>Изучите основы графического дизайна. Получите навыки работы в&nbsp;Adobe Photoshop, Adobe Illustrator, Adobe InDesign.</p>
                        </div>
                        <div class="specialty__item-footer">
                            <a class="button specialty__item-button" href="#popup-reg" data-fancybox>Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="specialty__item">
                        <div class="specialty__item-picture">
                            <img class="" src="img/specialty/specialty-4.png" alt="">
                        </div>
                        <div class="specialty__item-desc">
                            <h3>Управление брендом</h3>
                            <p>Освоите аналитические инструменты исследования рынка и&nbsp;конкурентов. Изучите технологии проектирования и&nbsp;стратегии продвижения бренда. Научитесь проводить брифы по&nbsp;созданию креативной концепции, организовывать рекламные кампании по&nbsp;продвижению брендов и&nbsp;оценивать преимущества товаров и&nbsp;брендов.</p>
                        </div>
                        <div class="specialty__item-footer">
                            <a class="button specialty__item-button" href="#popup-reg" data-fancybox>Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="specialty__item">
                        <div class="specialty__item-picture">
                            <img class="" src="img/specialty/specialty-5.png" alt="">
                        </div>
                        <div class="specialty__item-desc">
                            <h3>1С: Зарплата и управление персоналом</h3>
                            <p>Освоите навыки работы с&nbsp;документацией по&nbsp;учету и&nbsp;движению кадров. Овладеете электронным документооборотом в&nbsp;программе &laquo;1С: Зарплата и&nbsp;управление персоналом&nbsp;8&raquo;.</p>
                        </div>
                        <div class="specialty__item-footer">
                            <a class="button specialty__item-button" href="#popup-reg" data-fancybox>Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="specialty__item">
                        <div class="specialty__item-picture">
                            <img class="" src="img/specialty/specialty-6.png" alt="">
                        </div>
                        <div class="specialty__item-desc">
                            <h3>Продакт-менеджмент</h3>
                            <p>Освоите навыки управления информационным продуктом, инструменты работы с&nbsp;UI/UX-аналитикой. Изучите маркетинг продукта, юнит-экономику, упаковку продукта и&nbsp;управление командой проекта.</p>
                        </div>
                        <div class="specialty__item-footer">
                            <a class="button specialty__item-button" href="#popup-reg" data-fancybox>Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="specialty__item">
                        <div class="specialty__item-picture">
                            <img class="" src="img/specialty/specialty-7.png" alt="">
                        </div>
                        <div class="specialty__item-desc">
                            <h3>Психология конфликтов в  межличностном взаимодействии</h3>
                            <p>Освоите навыки эффективного взаимодействия с&nbsp;клиентом и&nbsp;конфликт-менеджмента. Научитесь представлять продукцию, проводить сделку. Изучите методы определения интересов и&nbsp;потребностей клиента, теорию маркетинга и&nbsp;комплекса рыночной деятельности по&nbsp;увеличению объема продаж и&nbsp;продвижению услуг.</p>
                        </div>
                        <div class="specialty__item-footer">
                            <a class="button specialty__item-button" href="#popup-reg" data-fancybox>Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="specialty__item">
                        <div class="specialty__item-picture">
                            <img class="" src="img/specialty/specialty-8.png" alt="">
                        </div>
                        <div class="specialty__item-desc">
                            <h3>Менеджер по продажам: повышение результативности продаж</h3>
                            <p>Освоите навыки эффективного взаимодействия с&nbsp;клиентом и&nbsp;конфликт-менеджмента. Научитесь представлять продукцию, проводить сделку. Изучите методы определения интересов и&nbsp;потребностей клиента, теорию маркетинга и&nbsp;комплекса рыночной деятельности по&nbsp;увеличению объема продаж и&nbsp;продвижению услуг.</p>
                        </div>
                        <div class="specialty__item-footer">
                            <a class="button specialty__item-button" href="#popup-reg" data-fancybox>Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="specialty__item">
                        <div class="specialty__item-picture">
                            <img class="" src="img/specialty/specialty-10.png" alt="">
                        </div>
                        <div class="specialty__item-desc">
                            <h3>Блогинг</h3>
                            <p>Научитесь проектировать, создавать и&nbsp;размещать контент. Получите навыки рерайтинга и&nbsp;копирайтинга, формирования контент-плана и&nbsp;создания текстового, фото- и&nbsp;видеоконтента.</p>
                        </div>
                        <div class="specialty__item-footer">
                            <a class="button specialty__item-button" href="#popup-reg" data-fancybox>Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="specialty__item">
                        <div class="specialty__item-picture">
                            <img class="" src="img/specialty/specialty-9.png" alt="">
                        </div>
                        <div class="specialty__item-desc">
                            <h3>Эмоциональный интеллект в жизни и бизнесе</h3>
                            <p>Научитесь принимать эмоции и&nbsp;управлять ими. Сможете лучше понимать окружающих и&nbsp;строить крепкие деловые отношения. Получите навыки укрепления своей конкурентоспособности и&nbsp;повышения лидерского потенциала.</p>
                        </div>
                        <div class="specialty__item-footer">
                            <a class="button specialty__item-button" href="#popup-reg" data-fancybox>Подробнее</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <a href="#popup-reg" class="specialty__button button" data-fancybox>Получить консультацию</a>
        </div>
    </div>
</section>
<section class="organizer">
    <div class="container">
        <div class="organizer__inner">
            <div class="organizer__content">
                <div class="organizer__content_left">
                    <h2 class="common__title organizer__title">Организатор</h2>
                </div>

                <div class="organizer__content_right">
                    <p>Московский открытый институт&nbsp;&mdash; это один из&nbsp;самых прогрессивных и&nbsp;динамично развивающихся ВУЗов столицы. За&nbsp;более чем десятилетнюю историю ВУЗ проявил себя как мощный образовательный механизм, соответствующий высочайшим требованиям современного образования. По&nbsp;итогам 2012 года он&nbsp;вошел в&nbsp;десятку лучших негосударственных высших учебных заведений Москвы. Институт имеет бессрочную лицензию на&nbsp;осуществление образовательной деятельности.</p>
                    <a href="#popup-reg" class="organizer__button" data-fancybox>Подробнее</a>
                    <img data-src="img/organizer/pic.svg" alt="" class="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="diplom-1" id="diplom-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="diplom-1__item">
                    <img data-src="img/diplom-1/diplom-1.png" alt="" class="lazy">
                    <div>
                        <p>Гос. лицензия на&nbsp;право ведения образовательной деятельности</p>
                        <a href="#popup-reg" class="diplom-1__button button">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="diplom-1__item">
                    <img data-src="img/diplom-1/diplom-2.png" alt="" class="lazy">
                    <div>
                        <p>Свидетельствоо государственной аккредитации</p>
                        <a href="#popup-reg" class="diplom-1__button button">подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="request request_hidden">
    <div class="container">
        <div class="request__form">
            
<form action="<?=$action?>&form=form-section_2" class="form form_horisontal">
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


<section class="diplom-2" id="diplom-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="diplom-2__item">
                    <img data-src="img/diplom-2/diplom-1.png" alt="" class="lazy">
                    <p>Диплом о&nbsp;профессиональной переподготовке установленного образца</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="diplom-2__item">
                    <img data-src="img/diplom-2/diplom-2.png" alt="" class="lazy">
                    <p>Удостоверение о&nbsp;повышении квалификации установленного образца</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="document" id="document">
    <div class="container">
        <div class="document__inner">
            <div class="document__content">
                <h2 class="common__title document__title">Необходимый набор документов</h2>
                <ul>
                    <li>Паспорт</li>
                    <li>Трудовая книжка</li>
                    <li>Свидетельство о рождении ребёнка</li>
                    <li>Документ об образовании</li>
                    <li>СНИЛС</li>
                </ul>
            </div>

            <div class="document__picture">
                <img src="img/document/picture.svg" alt="">
            </div>
        </div>
    </div>
</section>



<section class="request request_bottom">
    <div class="container">
        <div class="request__form">
            
<form action="<?=$action?>&form=form-section_3" class="form form_horisontal">
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