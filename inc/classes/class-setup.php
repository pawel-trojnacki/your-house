<?php

namespace Your_House\Inc\Classes;

use Your_House\Inc\Traits\Singleton;

class Setup
{
    use Singleton;

    private function __construct()
    {
        $this->setup_hooks();
    }

    private function setup_hooks()
    {
        add_action('after_setup_theme', [$this, 'theme_support']);
    }

    public function theme_support()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            ]
        );
        add_theme_support('custom-logo', [
            'header-text'          => array('site-title', 'site-description'),
            'height'               => 512,
            'width'                => 512,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true,
        ]);
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('automatic-feed-links');
        add_theme_support('align-wide');

        global $content_width;
        if (!isset($content_width)) {
            $content_width = 1240;
        }
    }
}