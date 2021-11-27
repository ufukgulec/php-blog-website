<?php
@session_start();
@ob_start();
define("DATA", "data/");
define("SAYFA", "include/");
define('SINIF', 'class/');
include_once(DATA . "baglanti.php");
define("SITE", $siteurl);
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?= $sitebaslik ?></title>
    <meta name="description" content="<?= $aciklama ?>">
    <meta http-equiv="keywords" content="<?= $anahtar ?>">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?= SITE ?>css/base.css">
    <link rel="stylesheet" href="<?= SITE ?>css/vendor.css">
    <link rel="stylesheet" href="<?= SITE ?>css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
<style>
    #top > section.s-pageheader.s-pageheader--home > div > div > div > div.featured__column.featured__column--big > div > div > h1 > a{
        background: <?=$aciklama?>;
    }
</style>
</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <?php
    include_once(DATA . "header.php")
    ?>
    <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <?php
    include_once(SAYFA . "home.php")
    ?>
    <!-- s-content -->


    <!-- s-extra
    ================================================== -->
    <?php
    include_once(DATA . "extra.php")
    ?>
    <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
    <?php
    include_once(DATA . "footer.php")
    ?>
    <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>