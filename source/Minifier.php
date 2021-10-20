<?php

/**
 * CSS
 */
$homeCss = new MatthiasMullie\Minify\CSS();
$homeCss->add(dirname(__DIR__, 1) . "/assets/css/style.css");
$homeCss->minify(dirname(__DIR__, 1) . "/assets/css/style.min.css");

/**
 * PAGE
 */
$pageCss = new MatthiasMullie\Minify\CSS();
$pageCss->add(dirname(__DIR__, 1) . "/assets/css/style-page.css");
$pageCss->minify(dirname(__DIR__, 1) . "/assets/css/style-page.min.css");

/**
 * SINGLE
 */
$singleCss = new MatthiasMullie\Minify\CSS();
$singleCss->add(dirname(__DIR__, 1) . "/assets/css/style-single.css");
$singleCss->minify(dirname(__DIR__, 1) . "/assets/css/style-single.min.css");

/**
 * PAGE
 */
$blogCss = new MatthiasMullie\Minify\CSS();
$blogCss->add(dirname(__DIR__, 1) . "/assets/css/style-blog.css");
$blogCss->minify(dirname(__DIR__, 1) . "/assets/css/style-blog.min.css");

/**
 * 404
 */
//$errorCss = new MatthiasMullie\Minify\CSS();
//$errorCss->add(dirname(__DIR__, 1) . "/assets/css/style-error.css");
//$errorCss->minify(dirname(__DIR__, 1) . "/assets/css/style-error.min.css");

/**
 * js
 */
$homeJs = new MatthiasMullie\Minify\JS();
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/menu.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/sticky.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/scroll.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/toggle.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/counterup.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.counterup.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.waypoints.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.magnific-popup.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/gallery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/sweetalert2.all.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/request.js");
$homeJs->minify(dirname(__DIR__, 1) . "/assets/js/script-home.min.js");

/**
 * PAGE
 */
$pageJs = new MatthiasMullie\Minify\JS();
$pageJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$pageJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/menu.js");
$pageJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/sticky.js");
$pageJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/toggle.js");
$pageJs->minify(dirname(__DIR__, 1) . "/assets/js/script-page.min.js");

/**
 * Error
 */
//$errorJs = new MatthiasMullie\Minify\JS();
//$errorJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
//$errorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
//$errorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
//$errorJs->minify(dirname(__DIR__, 1) . "/assets/js/script-error.min.js");