<?php

/**
 * Project list item template
 * 
 * @package Your_House
 */

$project_url = esc_url(get_the_permalink());

?>

<li class="project-item">
    <div class="image-wrapper">
        <a href="<?php echo $project_url ?>">
            <?php the_post_thumbnail('medium_large', ['class' => 'project-item-image']) ?>
        </a>
    </div>
    <div class="actions">
        <?php the_title('<h2 class="heading-secondary project-item-title">', '</h2>') ?>
        <a href="<?php echo $project_url ?>" class="link">View project</a>
    </div>
</li>