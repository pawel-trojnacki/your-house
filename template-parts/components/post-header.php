<?php

/**
 * Single post header
 * 
 * @package Your_House
 */

$post_date = get_the_date('F j, Y');

?>

<header class="archive-header single-post-header">
    <?php the_title('<h1 class="heading">', '</h1>') ?>
    <div class="post-info">
        <span><?php echo $post_date ?> / </span>
        <span>In: <?php the_category(', ') ?></span>
    </div>
</header>