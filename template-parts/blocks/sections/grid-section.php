<?php

/**
 * Gutenberg & ACF block with images and text
 * 
 * @package Your_House
 */

require_once YOUR_HOUSE_DIR_PATH . '/inc/utils/acf-utils.php';

use function Your_House\Inc\Utils\acf_image;
use function Your_House\Inc\Utils\acf_text;
use function Your_House\Inc\Utils\acf_link;

$main_image = get_field('main_image');
$secondary_image = get_field('secondary_image');
$tertiary_image = get_field('tertiary_image');
$title = get_field('title');
$content = get_field('content');
$button_url = get_field('button_url');
$button_text = get_field('button_text');

?>

<section class="block grid-section">
    <div class="wrapper-content">
        <div class="content-inner">
            <?php
            acf_text($title, 'h2', 'heading');
            acf_text($content, 'p', 'text');
            acf_link($button_url, $button_text, 'btn');
            ?>
        </div>
        <div class="images">
            <?php
            acf_image($secondary_image);
            acf_image($tertiary_image);
            ?>
        </div>
    </div>
    <div class="wrapper-image">
        <?php acf_image($main_image) ?>
    </div>
</section>