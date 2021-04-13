<?php

namespace Your_House\Inc\Classes;

use Your_House\Inc\Traits\Singleton;


class Blocks
{
    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        if (function_exists('acf_register_block_type')) {
            add_action('acf/init', [$this, 'register_images_blocks']);
            add_action('acf/init', [$this, 'register_section_blocks']);
            add_action('acf/init', [$this, 'register_template_blocks']);
        }
    }

    public function register_images_blocks()
    {
        acf_register_block_type([
            'name' => 'grid_images',
            'title' => __('Grid Images'),
            'description' => __('Two grid images'),
            'render_template' => 'template-parts/blocks/gallery/grid-images.php',
            'keywords' => ['gallery'],
        ]);
        acf_register_block_type([
            'name' => 'full_width_image',
            'title' => __('Full Width Image'),
            'description' => __('Full viewport width image'),
            'render_template' => 'template-parts/blocks/gallery/full-width-image.php',
            'keywords' => ['image'],
        ]);
    }

    public function register_section_blocks()
    {
        acf_register_block_type([
            'name' => 'grid_section',
            'title' => __('Grid Section'),
            'description' => __('Full size image'),
            'render_template' => 'template-parts/blocks/sections/grid-section.php',
            'keywords' => ['about'],
        ]);
        acf_register_block_type([
            'name' => 'columns-section',
            'title' => __('Columns Section'),
            'description' => __('Section with two columns'),
            'render_template' => 'template-parts/blocks/sections/columns-section.php',
            'keywords' => ['image', 'text', 'columns'],
        ]);
        acf_register_block_type([
            'name' => 'recent-projects',
            'title' => __('Recent Projects'),
            'description' => __('Section with recent projects'),
            'render_template' => 'template-parts/blocks/sections/recent-projects-section.php',
            'keywords' => [],
        ]);
        acf_register_block_type([
            'name' => 'recent-posts',
            'title' => __('Recent Posts'),
            'description' => __('Section with recent posts'),
            'render_template' => 'template-parts/blocks/sections/recent-posts-section.php',
            'keywords' => [],
        ]);
    }

    public function register_template_blocks()
    {
        acf_register_block_type([
            'name' => 'contact-template',
            'title' => __('Contact Template'),
            'description' => __('Section with contact info and contact form'),
            'render_template' => 'template-parts/blocks/templates/contact-template.php',
            'keywords' => [],
        ]);
    }
}