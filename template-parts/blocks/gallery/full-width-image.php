<?php

/**
 * Gutenberg & ACF block with full width image
 * 
 * @package Your_House
 */

require_once YOUR_HOUSE_DIR_PATH . '/inc/utils/acf-utils.php';

use function Your_House\Inc\Utils\acf_image;

$image = get_field('image');

?>

<div class="full-width-image-wrapper fade-in-reveal">
    <?php acf_image($image, 'full-width-image') ?>
</div>