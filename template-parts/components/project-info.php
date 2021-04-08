<?php

/**
 * Project header component
 * 
 * @package Your_House
 */

require_once YOUR_HOUSE_DIR_PATH . '/inc/utils/acf-utils.php';

use function Your_House\Inc\Utils\acf_image;
use function Your_House\Inc\Utils\acf_text;


$project_image = get_field('project_image');
$project_description = get_field('project_description');

$post_id = get_the_ID();

?>

<header class="project-header">
    <div class="project-info">
        <?php
        the_title('<h1 class="heading">', '</h1>');
        ?>

        <div class="taxonomy">
            <div>
                <h3 class="heading-small">Location</h3>
                <?php the_terms($post_id, 'location') ?>
            </div>
            <div>
                <h3 class="heading-small">Type</h3>
                <?php the_terms($post_id, 'building_type') ?>
            </div>

        </div>

        <?php
        acf_text($project_description, 'p', 'text');
        ?>
    </div>
    <div class="image-wrapper">
        <?php acf_image($project_image, 'project-info-image') ?>
    </div>
</header>