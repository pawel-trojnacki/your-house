<?php

namespace Your_House\Inc\Classes;

use Your_House\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        wp_register_style('fonts', get_template_directory_uri() . '/assets/lib/fonts/fonts.css', [], 'all');
        wp_register_style('main', YOUR_HOUSE_BUILD_CSS_URI . '/main.css', ['fonts'], filemtime(YOUR_HOUSE_DIR_PATH . '/build/css/main.css'), 'all');

        wp_enqueue_style('fonts');
        wp_enqueue_style('main');
    }


    public function register_scripts()
    {
        wp_register_script('main', YOUR_HOUSE_BUILD_JS_URI . '/main.js', [], time(), true);
        wp_register_script('frontpage', YOUR_HOUSE_BUILD_JS_URI . '/frontpage.js', [], time(), true);
        wp_register_script('project', YOUR_HOUSE_BUILD_JS_URI . '/project.js', [], time(), true);

        wp_enqueue_script('main');
        if (is_front_page()) {
            wp_enqueue_script('frontpage');
        }
        if (is_singular('portfolio')) {
            wp_enqueue_script('project');
        }
    }
}