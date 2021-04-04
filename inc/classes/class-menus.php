<?php

namespace Your_House\Inc\Classes;

use Your_House\Inc\Traits\Singleton;

class Menus
{
    use Singleton;

    private function __construct()
    {
        $this->setup_hooks();
    }

    private function setup_hooks()
    {
        add_action('after_setup_theme', [$this, 'register_menus']);
    }

    public function register_menus()
    {
        register_nav_menus([
            'primary-menu' => esc_html('Primary Menu', 'yourhouse'),
        ]);
    }
}