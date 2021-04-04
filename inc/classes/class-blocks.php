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
            'name' => 'full_image',
            'title' => __('Full Image'),
            'description' => __('Full size image'),
            'render_template' => 'template-parts/blocks/gallery/full-image.php',
            'keywords' => ['image'],
        ]);
    }

    public function register_section_blocks()
    {
        acf_register_block_type([
            'name' => 'about_section',
            'title' => __('About Section'),
            'description' => __('Full size image'),
            'render_template' => 'template-parts/blocks/sections/about_section.php',
            'keywords' => ['about'],
        ]);
        acf_register_block_type([
            'name' => 'columns_image_text',
            'title' => __('Image & Text Columns'),
            'description' => __('Columns with image and content'),
            'render_template' => 'template-parts/blocks/sections/columns-image-text.php',
            'keywords' => ['image', 'text'],
        ]);
    }
}