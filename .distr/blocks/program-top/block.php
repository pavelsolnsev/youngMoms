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
            {{ form.form( 'reg', form_class='form_horisontal') }}
        </div>
    </div>
</section>