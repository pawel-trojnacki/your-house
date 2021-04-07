<?php

namespace Your_House\Inc\Utils;

function acf_image(mixed $image, string $classes = '')
{
    if (!empty($image)) {
        $src = $image['url'];
        $alt = $image['alt'];
        echo '<img src="' . esc_html($src) . '" alt="' . esc_attr($alt) . '" class="' . $classes . '" loading="lazy" />';
    }
}

function acf_text(string $text, string $tag = 'p', string $classes = '')
{
    if (!empty($text)) {
        echo '<' . $tag . ' class="' . $classes . '" >' . esc_html($text) . '</' . $tag . '>';
    }
}

function acf_link(string $url, string $text, string $classes = '')
{
    if (!empty($url) && !empty($text)) {
        echo '<a href="' . esc_url($url) . '" class="' . $classes . '" >' . esc_html($text) . '</a>';
    }
}