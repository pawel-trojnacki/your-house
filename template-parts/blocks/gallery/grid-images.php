<?php

/**
 * Gutenberg & ACF block with two images
 * 
 * @package Your_House
 */

require_once YOUR_HOUSE_DIR_PATH . '/inc/utils/acf-utils.php';

use function Your_House\Inc\Utils\acf_image;

$image1 = get_field('image_1');
$image2 = get_field('image_2');

?>

<div class="grid-images">
    <div class="image-wrapper fade-in-reveal">
        <?php acf_image($image1, 'grid-image') ?>
    </div>
    <div class="image-wrapper fade-in-reveal">
        <?php acf_image($image2, 'grid-image') ?>
    </div>
</div>