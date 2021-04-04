<?php

/**
 * Theme archive
 *
 * @package Your_House
 */

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content/content', 'posts');
    }
}

get_footer();