<?php

/**
 * Blog category template
 *
 * @package Your_House
 */

get_header();

?>

<div class="content-narrow">

    <?php get_template_part('template-parts/components/archive-header') ?>

    <?php if (have_posts()) : ?>
    <ul class="post-list">
        <?php
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content/content', 'posts');
            }
            ?>
    </ul>

    <?php endif ?>

</div>

<?php get_footer() ?>