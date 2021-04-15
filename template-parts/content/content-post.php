<?php

/**
 * Single post content template
 * 
 * @package Your_House
 */

?>

<div class="content-narrow single-post">
    <?php get_template_part('template-parts/components/post-header') ?>
    <?php echo the_post_thumbnail('full', ['class' => 'single-post-image']) ?>
    <div class="single-post-content">
        <?php
        the_content();
        ?>
    </div>
</div>