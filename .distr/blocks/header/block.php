<header class="header">
    <div class="header__wrapper">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <img src="img/header/logo.svg" alt="МОИ">
                </div>

                {% if IS_MAIN %}
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
                {% endif %}
                {% if PROGRAM_BTN %}
                <nav class="header__nav">
                    <a class="btn header__button" data-fancybox data-src="#popup-reg"><?= $header_button ?></a>
                </nav>
                {% endif %}
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