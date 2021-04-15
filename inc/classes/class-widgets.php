<?php

namespace Your_House\Inc\Classes;

use Your_House\Inc\Traits\Singleton;

class Widgets
{
    use Singleton;

    private function __construct()
    {
        $this->setup_hooks();
    }

    private function setup_hooks()
    {
        add_action('widgets_init', [$this, 'widget_areas']);
    }

    public function widget_areas()
    {
        register_sidebar(array(
            'name'          => 'Footer Area',
            'id'            => 'footer_area',
            'description'   => 'Footer widget area',
            'before_widget' => '<div class="footer-area">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="subheading">',
            'after_title'   => '</h3>',
        ));
    }
}