<!DOCTYPE html>
<html lang="en_US" dir="ltr" class="js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <?php
        $baseUrl = Yii::app()->theme->baseUrl;
        $cs = Yii::app()->getClientScript();
        Yii::app()->clientScript->registerCoreScript('jquery');
        ?>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $baseUrl; ?>/assets/icons/pp144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $baseUrl; ?>/assets/icons/pp114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseUrl; ?>/assets/icons/pp72.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $baseUrl; ?>/assets/icons/pp64.png">
        <link rel="shortcut icon" sizes="196x196" href="<?php echo $baseUrl; ?>/assets/icons/pp196.png">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $baseUrl; ?>/assets/icons/favicon.ico">
        <link rel="icon" type="image/x-icon" href="<?php echo $baseUrl; ?>/assets/icons/pp32.png">

        <title>Vaad HaChessed: Summary</title>

        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/summary.app.ltr.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/summary.ltr.css">
        <script type="text/javascript" async="" src="<?php echo $baseUrl; ?>/assets/js/802b93f0fe41b41869a2e449e704709d.js"></script>
        <script>document.documentElement.className = "js";</script>
        

        <!--[if lt IE 9]>
        <script>(function (a) {var b = ('section,article,aside,hgroup,header,footer,nav,figure,figcaption,video,audio,track,embed,mark,progress,' +'meter,time,data,ruby,rt,rp,bdi,wbr,canvas,command,details,datalist,keygen,output').split(','), c = b.length;while (c) { a(b[c-=1]); }}(document.createElement));</script>
        <link rel="stylesheet" href="https://www.paypalobjects.com/web/res/709/23abf5e8b1bf8b1ab6bb4f64a09fa/css/ie.ltr.css" />
        <script src="https://www.paypalobjects.com/web/res/709/23abf5e8b1bf8b1ab6bb4f64a09fa/js/lib/shim/es5.min.js"></script>
        <![endif]-->

        <script type="text/javascript" charset="utf-8" async="" src="<?php echo $baseUrl; ?>/assets/js/summary-4.4.js"></script>
    </head>


    <body data-iswireless="" data-istablet="" data-view-name="summary/index">


        <!--[if lte IE 8]>
        <div class="banner-notification--container js_banner-notification--container nemo_banner-notification--container"><div class="banner-notification--content js_banner-notification--content"><div class="banner-notification--table js_banner-notification--table"><span class="icon icon-small icon-attention-small"></span><p>Your browser is out of date. Get the latest version to see all your account features.</p></div></div></div><![endif]-->

        <!-- Page Header with Links -->
        <?php require_once 'header.php'; ?>


       <?php echo $content;   ?>
   

<?php require_once 'footer.php'; ?>

</body>
</html>