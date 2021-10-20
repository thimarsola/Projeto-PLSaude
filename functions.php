<?php
require_once __DIR__ . "/vendor/autoload.php";

//FORMAT PHONE NUMBER
require_once get_template_directory() . '/inc/Format.php';


//FUNCTION TO FORMAT THE CNPJ AND CPF
require_once get_template_directory() . '/inc/FormatDocument.php';

//CREATE A WHATSAPP ANCHOR
require_once get_template_directory() . '/inc/Whatsapp.php';

//PATH URL IMAGE
require_once get_template_directory() . '/inc/Image.php';

//LOAD CSS
require_once get_template_directory() . '/inc/Styles.php';

//LOAD JS
require_once get_template_directory() . '/inc/Scripts.php';

//REGISTER MENU
require_once get_template_directory() . '/inc/Menu.php';

//THUMBNAILS SUPPORT
require_once get_template_directory() . '/inc/Thumbnails.php';

//EXCERPT SUPPORT
require_once get_template_directory() . '/inc/Excerpt.php';

//PAGINATION SUPPORT
require_once get_template_directory() . '/inc/Pagination.php';

//SITEMAP SUPPORT
require_once get_template_directory() . '/inc/Sitemap.php';

//CUSTOM THEME SUPPORT
require_once get_template_directory() . '/inc/ThemeSupport.php';

//CUSTOM POST TYPE UNITS
require_once get_template_directory() . '/inc/Units.php';