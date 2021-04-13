<?php

/**
 * Gutenberg & ACF block with recent posts
 *
 * @package Your_House
 */

require_once YOUR_HOUSE_DIR_PATH . '/inc/queries/query-posts.php';
require_once YOUR_HOUSE_DIR_PATH . '/inc/utils/acf-utils.php';

use function Your_House\Inc\Queries\query_posts;
use function Your_House\Inc\Utils\acf_text;
use function Your_House\Inc\Utils\acf_link;

$title = get_field('recent_posts_title');
$posts_per_page = get_field('recent_posts_number');
$button_text = get_field('recent_posts_button_text');
$button_url = get_field('recent_posts_button_url');

$posts_loop = query_posts($posts_per_page);

?>

<section class="content-narrow">

    <?php acf_text($title, 'h2', 'heading') ?>

    <?php if ($posts_loop->have_posts()) : ?>
    <ul class="post-list">
        <?php
            while ($posts_loop->have_posts()) {
                $posts_loop->the_post();
                get_template_part('template-parts/content/content', 'posts');
            }
            ?>
    </ul>
    <div class="btn-wrapper-end">
        <?php acf_link($button_url, $button_text, 'btn btn-primary') ?>
    </div>

    <?php endif ?>

</section>