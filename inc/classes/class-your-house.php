<?php

namespace Your_House\Inc\Classes;

require_once YOUR_HOUSE_DIR_PATH . '/inc/traits/trait-singleton.php';
require_once YOUR_HOUSE_DIR_PATH . '/inc/classes/class-setup.php';
require_once YOUR_HOUSE_DIR_PATH . '/inc/classes/class-menus.php';
require_once YOUR_HOUSE_DIR_PATH . '/inc/classes/class-assets.php';
require_once YOUR_HOUSE_DIR_PATH . '/inc/classes/class-blocks.php';
require_once YOUR_HOUSE_DIR_PATH . '/inc/classes/class-filters.php';
require_once YOUR_HOUSE_DIR_PATH . '/inc/classes/class-widgets.php';


use Your_House\Inc\Traits\Singleton;

class Your_House
{
    use Singleton;

    private function __construct()
    {
        Setup::get_instance();
        Widgets::get_instance();
        Filters::get_instance();
        Menus::get_instance();
        Assets::get_instance();
        Blocks::get_instance();
    }
}