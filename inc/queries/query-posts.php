<?php

namespace Your_House\Inc\Queries;

use WP_Query;

function query_posts(int $posts_per_page = 3)
{
    $posts_args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => $posts_per_page,
        'orderby' => 'date',
        'order' => 'DESC',
    ];
    $posts_loop = new WP_Query($posts_args);
    return $posts_loop;
}