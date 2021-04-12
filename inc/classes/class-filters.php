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

    public function register_filters()
    {
        add_filter('get_the_archive_title', [$this, 'archive_title'], 10, 2);
    }
}