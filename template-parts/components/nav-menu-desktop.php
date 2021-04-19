<?php

/**
 * Desktop navigation menu
 * 
 * @package Your_House
 */


wp_nav_menu([
    'theme_location' => 'primary-menu',
    'menu_id'        => 'primary-menu',
    'depth'         => 1,
    'fallback_cb'   => false,
    'li_class' => 'menu-item-desktop',
]);