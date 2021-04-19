<?php

namespace Your_House\Inc\Classes;

use Your_House\Inc\Traits\Singleton;

class Filters
{
    use Singleton;

    private function __construct()
    {
        $this->setup_hooks();
    }

    private function setup_hooks()
    {
        add_action('after_setup_theme', [$this, 'register_filters']);
    }

    public function archive_title(string $title, string $original_title)
    {
        if (is_post_type_archive('portfolio')) {
            return $original_title;
        }
        return $title;
    }

    public function nav_menu_add_classes($classes, $item, $args)
    {
        if (isset($args->li_class)) {
            $classes[] = $args->li_class;
        }
        return $classes;
    }

    public function register_filters()
    {
        add_filter('get_the_archive_title', [$this, 'archive_title'], 10, 2);
        add_filter('nav_menu_css_class', [$this, 'nav_menu_add_classes'], 10, 3);
    }
}