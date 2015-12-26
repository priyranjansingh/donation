<!DOCTYPE html>
<html lang="en" ng-app="material-lite">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Vaad HaChessed User Portal Angular Admin Theme">
        <meta name="author" content="Theme Guys - The Netherlands">
        <?php
        $baseUrl = Yii::app()->theme->baseUrl;
        $cs = Yii::app()->getClientScript();
        Yii::app()->clientScript->registerCoreScript('jquery');
        ?>
        <title>Vaad HaChessed User Portal</title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/assets/css/theme.min.css" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/assets/css/styles-core.css" rel="stylesheet">

        <link href="<?php echo $baseUrl; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/vendors.min.cc72de2f21cf6e67f523.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/demo.min.a2f360834fafcc0ef2d1.css">

        <link href="<?php echo $baseUrl; ?>/assets/css/pages.css" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/assets/css/pages-icons.css" rel="stylesheet">
    </head>

    <body>



        <?php require_once 'header.php'; ?>
        <?php echo $content;   ?>
        <?php require_once 'footer.php'; ?>

        <script src="<?php echo $baseUrl; ?>/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/js/jquery-ui.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/js/vendors.min.c95e87841078c8095acf.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/js/demo.min.9506beb44f2c95b2945c.js"></script>
    </body>
</html>
