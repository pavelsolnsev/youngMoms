{% if section1 %}
<section class="request request_hidden">
    <div class="container">
        <div class="request__form">
            {{ form.form( 'form-main', form_class='form_horisontal form_hidden') }}
        </div>
    </div>
</section>
{% elif section2 %}
<section class="request request_hidden">
    <div class="container">
        <div class="request__form">
            {{ form.form( 'form-catalog', form_class='form_horisontal form_hidden form_catalog', title='Скачать каталог программ профессиональной переподготовки и&nbsp;дополнительного образования', form_text='В&nbsp;каталоге вы&nbsp;найдете список программ, продолжительность обучения и&nbsp;перечень изучаемых дисциплин') }}
        </div>
    </div>
</section>

{% elif section3 %}
<section class="request request_hidden">
    <div class="container">
        <div class="request__form">
            {{ form.form( 'form-section_1', form_class='form_horisontal') }}
        </div>
    </div>
</section>

{% elif section4 %}
<section class="request request_hidden">
    <div class="container">
        <div class="request__form">
            {{ form.form( 'form-section_2', form_class='form_horisontal') }}
        </div>
    </div>
</section>

{% elif section5 %}
<section class="request request_bottom">
    <div class="container">
        <div class="request__form">
            {{ form.form( 'form-section_3', form_class='form_horisontal') }}
        </div>
    </div>
</section>
{% endif %}