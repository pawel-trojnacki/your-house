<?php

/**
 * Gutenberg & ACF block with two columns
 * 
 * @package Your_House
 */

require_once YOUR_HOUSE_DIR_PATH . '/inc/utils/acf-utils.php';

use function Your_House\Inc\Utils\acf_image;
use function Your_House\Inc\Utils\acf_text;

$title = get_field('title');
$content = get_field('content');
$image = get_field('image');
$order_reverse = get_field('order_reverse');

?>

<section class="columns-section">
    <?php if (!$order_reverse) : ?>
    <div class="column-content fade-in-reveal">
        <?php
            acf_text($title, 'h2', 'subheading');
            acf_text($content, 'p', 'text');
            ?>
    </div>
    <div class="column-image-wrapper fade-in-reveal">
        <?php acf_image($image, 'column-image') ?>
    </div>
    <?php else : ?>
    <div class="column-image-wrapper fade-in-reveal">
        <?php acf_image($image, 'column-image') ?>
    </div>
    <div class="column-content fade-in-reveal">
        <?php
            acf_text($title, 'h2', 'subheading');
            acf_text($content, 'p', 'text');
            ?>
    </div>
    <?php endif ?>
</section>