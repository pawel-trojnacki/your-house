<?php

/**
 * Post list item template
 * 
 * @package Your_House
 */

$post_url = esc_url(get_the_permalink());
$post_date = get_the_date('F j, Y');

?>

<li class="post-item">
    <div class="image-wrapper">
        <a href="<?php echo $post_url ?>">
            <?php the_post_thumbnail('medium_large', ['class' => 'post-item-image hover-zoom-out']) ?>
        </a>
    </div>
    <div class="post-info">
        <p class="date"><?php echo $post_date ?></p>
        <?php the_title('<h2 class="heading-secondary post-item-title">', '</h2>') ?>
        <!-- <a href="<?php echo $post_url ?>" class="link">Read more</a> -->
    </div>
</li>