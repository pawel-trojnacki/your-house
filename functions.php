<?php

if (!defined('YOUR_HOUSE_DIR_PATH')) {
    define('YOUR_HOUSE_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('YOUR_HOUSE_BUILD_URI')) {
    define('YOUR_HOUSE_BUILD_URI', untrailingslashit(get_template_directory_uri() . '/build'));
}

if (!defined('YOUR_HOUSE_BUILD_JS_URI')) {
    define('YOUR_HOUSE_BUILD_JS_URI', untrailingslashit(get_template_directory_uri() . '/build/js'));
}

if (!defined('YOUR_HOUSE_BUILD_CSS_URI')) {
    define('YOUR_HOUSE_BUILD_CSS_URI', untrailingslashit(get_template_directory_uri() . '/build/css'));
}

require_once 'inc/classes/class-your-house.php';

use Your_House\Inc\Classes\Your_House;

function your_house_get_theme_instance()
{
    Your_House::get_instance();
}

your_house_get_theme_instance();