<!DOCTYPE html>
<!--[if lt IE 9]><html lang="en" class="no-js lower-than-ie9 ie"><![endif]--><!--[if lt IE 10]><html lang="en" class="no-js lower-than-ie10 ie"><![endif]--><!--[if !IE]>-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>Vaad HaChessed User Portal Login</title>
        <?php
            $baseUrl = Yii::app()->theme->baseUrl;
            $cs = Yii::app()->getClientScript();
            Yii::app()->clientScript->registerCoreScript('jquery');
        ?>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="application-name" content="West Coast Vaad HaChessed" />
        <meta name="author" content="Klaftech Data Systems" />
        <meta name="keywords" content="donate money, give tzedaka, vaad hachessed, tomchei tzedaka " />
        <meta name="description" content="Donate money online in seconds with the Vaad HaChessed User Portal. All you need to do is login." />
        <link rel="shortcut icon" href="<?php echo $baseUrl;?>/assets/icons/favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo $baseUrl;?>/assets/icons/apple-touch-icon.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes" />
        <link rel="stylesheet" href="<?php echo $baseUrl;?>/assets/css/login.app.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/login.ie9.css" /><![endif]-->
        <script src="<?php echo $baseUrl;?>/assets/js/modernizr-2.6.1.js"></script>

    </head>


    <body class="desktop" data-production="true" data-view-name="login">


        <noscript><p class="nonjsAlert" role="alert">NOTE: Many features on the Vaad HaChessed User Portal require Javascript and cookies.</p></noscript>


        <div id="page">
           <?php  echo $content;   ?>

            <div class="transitioning hide"><p class="checkingInfo hide">Checking your info…</p><p class="oneSecond hide">Just a second…</p></div>
        </div>

        <footer class="footer clearfix" role="contentinfo">
            <ul>
                <li><a href="">Contact Us</a></li>
            </ul>
        </footer>



    </body>
</html>