<?php

$title = 'Московский открытый институт | Бинес миссия online';

$unit = "moi";
$type = "young_moms_moi";
$land = "young_moms_moi";

$graccount = "";
$grcampaign = "";
$grtag = "";

$phone = '+7 (495) 232 23&nbsp;37';
$phone_link = '+74952322337';

$phone_2 = '';
$phone_link_2 = '';

$email = '';
$email_link = '';

$GTM = 'GTM-5KS4Q78';

$version_key = $version ? $version : 'default';
$header_button = 'отправить заявку';
$main__title = 'Бесплатное<br> образование<br> для молодых<br> мам';
$form__title = 'Подать заявку на обучение';

/* добавление ссылки utm к программам*/

/* переменные */
$urllink = '';
$utmsourse ='';
$utmmedium ='';
$utmcampaign ='';
$utmterm ='';
$utmmarketer ='';
$utmprodukt ='';
$utmgen ='';
$utmgroup = '';
$utmcontent = '';
$utmsite = '';
$utmotdel = '';


/*проверяю есть ли вообще смысл дополнять ссылку*/
if (!empty($_REQUEST['utm_source'])) {

    $utmsourse = 'utm_source=' . htmlspecialchars($_GET["utm_source"]) . '&amp;';
    $utmmedium = 'utm_medium=' . htmlspecialchars($_GET["utm_medium"]) . '&amp;';
    $utmcampaign = 'utm_campaign=' . htmlspecialchars($_GET["utm_campaign"]) . '&amp;';
    $utmterm = 'utm_term=' . htmlspecialchars($_GET["utm_term"]) . '&amp;';
    $utmmarketer = 'marketer=' . htmlspecialchars($_GET["marketer"]) . '&amp;';
    $utmprodukt = 'produkt=' . htmlspecialchars($_GET["produkt"]) . '&amp;';
    $utmgen = 'utm_gen=' . htmlspecialchars($_GET["utm_gen"]) . '&amp;';
    $utmgroup = 'utm_group=' . htmlspecialchars($_GET["utm_group"]) . '&amp;';
    $utmcontent = 'utm_content=' . htmlspecialchars($_GET["utm_content"]) . '&amp;';
    $utmsite = 'site=' . htmlspecialchars($_GET["site"]) . '&amp;';
    $utmotdel = 'otdel=' . htmlspecialchars($_GET["otdel"]);


    $urllink = 
        '?'.
        $utmsourse .
        $utmmedium .
        $utmcampaign .
        $utmcontent .
        $utmgroup .
        $utmterm .
        $utmsite .
        $utmmarketer .
        $utmprodukt .
        $utmgen .
        $utmotdel;
}

$action = 'https://syn.su/lander.php?r=land/index'
.'&amp;unit='.$unit
.'&amp;type='.$type
.'&amp;land='.$land
.'&amp;version='.$version
.'&amp;partner='.$partner
.'&amp;graccount='.$graccount
.'&amp;grcampaign='.$grcampaign
.'&amp;grtag='.$grtag;
?>
