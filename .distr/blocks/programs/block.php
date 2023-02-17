{% import './data.php' as data %}

<section class="programs">
    <div class="container">
        <div class="programs__inner">
            <h1 class="common__title programs__title">Вы изучите</h1>

            <div class="programs__list">
                <?php if ( $version == 'big_data' ) { ?>
                    {% for item in data.big_data %}
                    {% include './program_item.php' %}
                    {% endfor %}

                <?php } elseif ( $version == 'internet_of_things' ) { ?>
                    {% for item in data.internet_of_things %}
                    {% include './program_item.php' %}
                    {% endfor %}

                <?php } elseif ( $version == 'mobile_app_dev' ) { ?>
                    {% for item in data.mobile_app_dev %}
                    {% include './program_item.php' %}
                    {% endfor %}

                <?php } elseif ( $version == 'digital_design' ) { ?>
                    {% for item in data.digital_design %}
                    {% include './program_item.php' %}
                    {% endfor %}

                <?php } elseif ( $version == 'digital_marketing' ) { ?>
                    {% for item in data.digital_marketing %}
                    {% include './program_item.php' %}
                    {% endfor %}

                <?php } elseif ( $version == 'artificial_intelligence' ) { ?>
                    {% for item in data.artificial_intelligence %}
                    {% include './program_item.php' %}
                    {% endfor %}

                <?php }  ?>

            </div>
        </div>
    </div>
</section>