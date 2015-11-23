<!DOCTYPE html>
<html class=" US js " lang="en" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Sign up for a Vaad HaChessed User Portal Account</title>
        <?php
             $baseUrl = Yii::app()->theme->baseUrl;
             $cs = Yii::app()->getClientScript();
             Yii::app()->clientScript->registerCoreScript('jquery');
        ?>

        <meta name="application-name" content="Vaad HaChessed">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="shortcut icon" href="<?php echo $baseUrl;?>/assets/icons/favicon.ico">
        <link rel="apple-touch-icon" href="<?php echo $baseUrl;?>/assets/icons/apple-touch-icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

        <link rel="stylesheet" href="<?php echo $baseUrl;?>/assets/css/signup.css">
    </head>

    <body data-is-mobile="" class="view-create">
        <noscript>&lt;p class="nonjsAlert" role="alert"&gt;NOTE: Many features on the Vaad HaChessed Web site require Javascript and cookies.&lt;/p&gt;</noscript>


        <div id="page" class="marketing-ce2">

            <header class="gblHeader">
                <div class="nav">
                    <div class="navOut">
                        <nav class="logo" role="navigation"><img src="<?php echo $baseUrl;?>/assets/images/logo_106x29.png" alt="Vaad HaChessed"></nav>
                    </div>
                </div>
            </header>

           <?php echo $content;  ?>


            <footer id="gblFooter" role="contentinfo">
                <div class="footer">
                    <div class="footerNav">
                        <div class="legal">
                            <p class="copyright">Copyright © 2015 Klaftech Data Systems LLC. All rights reserved.</p>
                            <ul>
                                <li><a href="" target="_blank">Developer</a></li>
                                <li><a href="" target="_blank">Privacy policy</a></li>
                                <li><a href="" target="_blank">Help</a></li>
                                <li><a href="" target="_blank">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

        <script src="<?php echo $baseUrl;?>/assets/js/login.require.js"></script>

    </body>
</html>