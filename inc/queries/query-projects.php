<?php

namespace Your_House\Inc\Queries;

use WP_Query;

function query_projects(int $posts_per_page = 4)
{
    $projects_args = [
        'post_type' => 'portfolio',
        'post_status' => 'publish',
        'posts_per_page' => $posts_per_page,
        'orderby' => 'date',
        'order' => 'DESC',
    ];
    $projects_loop = new WP_Query($projects_args);
    return $projects_loop;
}