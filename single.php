<?php

/**
 * Single post template
 *
 * @package Your_House
 */

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content/content', 'post');
    }
}

get_footer();