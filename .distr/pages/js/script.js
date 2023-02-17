$(function () {
    /* Inits */
    initLazy();
    openProgram();
    initMenu();
    initScroll();
    /* Lazy */
    function initLazy() {

        let
            lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
            active = false,
            threshold = 200;

        const lazyLoad = function (e) {
            if (active === false) {
                active = true;

                setTimeout(function () {
                    lazyArr.forEach(function (lazyObj) {
                        if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

                            if (lazyObj.dataset.src) {
                                let
                                    img = new Image(),
                                    src = lazyObj.dataset.src;
                                img.src = src;
                                img.onload = function () {
                                    if (!!lazyObj.parent) {
                                        lazyObj.parent.replaceChild(img, lazyObj);
                                    } else {
                                        lazyObj.src = src;
                                    }
                                }
                                lazyObj.removeAttribute('data-src');
                            }

                            if (lazyObj.dataset.srcset) {
                                lazyObj.srcset = lazyObj.dataset.srcset;
                                lazyObj.removeAttribute('data-srcset');
                            }

                            lazyObj.classList.remove('lazy');
                            lazyObj.classList.add('lazy-loaded');

                            lazyArr = lazyArr.filter(function (obj) {
                                return obj !== lazyObj;
                            });

                            if (lazyArr.length === 0) {
                                document.removeEventListener('scroll', lazyLoad);
                                window.removeEventListener('resize', lazyLoad);
                                window.removeEventListener('orientationchange', lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        lazyLoad();

        document.addEventListener('scroll', lazyLoad);
        window.addEventListener('resize', lazyLoad);
        window.addEventListener('orientationchange', lazyLoad);
    }

    // slowscroll
    function initScroll() {
        if (!$('.scroll').length) return;

        $(document).on('click scroll.init', '.scroll', function (event) {
            event.preventDefault();
            $.fancybox.close();

            var
                hrefId = $(this).attr('href') || $(this).data('href'),
                posTop = $(hrefId).offset().top - $('.header').height() + 0.5;
            $('html, body').animate({
                scrollTop: posTop
            }, 1000);
        });
    }


    // RESULT SLIDER
    let $result_slider = $('.result__slider'),
        settingsResult = {
            mobileFirst: true,
            responsive: [{
                breakpoint: 576,
                settings: "unslick"
            }]
        }

    $result_slider.slick(settingsResult);
    $(window).on('resize', function () {
        if (!$result_slider.hasClass('slick-initialized')) {
            return $result_slider.slick(settingsResult);
        }
    });

    // SPECIALTY SLIDER
    $('.specialty__slider').slick({
        dots: false,
        arrows: true,
        // data-lazy
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 567,
                settings: {
                    slidesToShow: 1,
                    dots: true,
                    arrows: false
                }
            }
        ]
    });


    function openProgram() {
        let programs = $('.program-js')

        programs.each(function (i, el) {
            let program = $(el)
            let programHeader = program.find('.programs__item-header')
            let programContent = program.find('.programs__item-content')

            programHeader.on('click', function () {
                if (program.hasClass('open')) {
                    programContent.slideUp()
                    program.removeClass('open')
                } else {
                    programContent.slideDown()
                    program.addClass('open')
                }
                // programContent.slideDown()
                // programContent.slideToggle()

            })
        })

    }


    function initMenu() {

        let hamBtn = document.querySelector('.ham');
        let hamClose = document.querySelector('.header__mobile-close');
        let menu = document.querySelector('.header__mobile-menu');
        let links = menu.querySelectorAll('.header__mobile-link');

        hamBtn.addEventListener('click', function () {
            menu.classList.toggle('active');
        });

        hamClose.addEventListener('click', function () {
            hamBtn.classList.remove('active');
            menu.classList.remove('active');
        });

        for (var i = 0; i < links.length; i++) {
            var link = links[i];
            link.addEventListener('click', function () {
                hamBtn.classList.remove('active');
                menu.classList.remove('active');
            });
        }
    }

});