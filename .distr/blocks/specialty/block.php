{% from './data.php' import data as data %}
<section class="specialty" id="specialty">
    <div class="container">
        <div class="specialty__inner">
            <h1 class="common__title specialty__title">Программы обучения</h1>
            <div class="specialty__slider">
                {% for item in data %}
                <div class="swiper-slide">
                    <div class="specialty__item">
                        <div class="specialty__item-picture">
                            <img class="" src="{{ item.image_link | safe}}" alt="">
                        </div>
                        <div class="specialty__item-desc">
                            <h3>{{ item.header | safe}}</h3>
                            <p>{{ item.content | safe}}</p>
                        </div>
                        <div class="specialty__item-footer">
                            <a class="button specialty__item-button" href="#popup-reg" data-fancybox>Подробнее</a>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            <a href="#popup-reg" class="specialty__button button" data-fancybox>Получить консультацию</a>
        </div>
    </div>
</section>