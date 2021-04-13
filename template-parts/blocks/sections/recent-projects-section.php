<?php

/**
 * Gutenberg & ACF block with recent projects
 *
 * @package Your_House
 */

require_once YOUR_HOUSE_DIR_PATH . '/inc/queries/query-projects.php';
require_once YOUR_HOUSE_DIR_PATH . '/inc/utils/acf-utils.php';

use function Your_House\Inc\Queries\query_projects;
use function Your_House\Inc\Utils\acf_text;
use function Your_House\Inc\Utils\acf_link;


$title = get_field('recent_projects_title');
$posts_per_page = get_field('recent_projects_number');
$button_text = get_field('recent_projects_button_text');
$button_url = get_field('recent_projects_button_url');


$projects_loop = query_projects($posts_per_page);

?>

<section class="content-narrow">

    <?php acf_text($title, 'h2', 'heading') ?>

    <?php if ($projects_loop->have_posts()) : ?>
    <ul class="project-list">
        <?php
            while ($projects_loop->have_posts()) {
                $projects_loop->the_post();
                get_template_part('template-parts/content/content', 'projects');
            }
            ?>
    </ul>
    <div class="btn-wrapper-end">
        <?php acf_link($button_url, $button_text, 'btn btn-primary') ?>
    </div>

    <?php endif ?>

</section>