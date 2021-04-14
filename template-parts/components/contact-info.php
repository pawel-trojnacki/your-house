<?php

/**
 * Contact info component
 * 
 * @package Your House
 */

require_once YOUR_HOUSE_DIR_PATH . '/inc/utils/acf-utils.php';

use function Your_House\Inc\Utils\acf_image;
use function Your_House\Inc\Utils\acf_text;

$phone = get_field('phone');
$email = get_field('email');
$address = get_field('address');
$image = get_field('image');

$info_fields = [
    [
        'icon' => 'phone',
        'field' => $phone,
    ],
    [
        'icon' => 'email',
        'field' => $email,
    ],
    [
        'icon' => 'place',
        'field' => $address,
    ],
]

?>

<section class="contact-info">
    <h2 class="subheading">Get in touch</h2>
    <ul class="info-list">
        <?php foreach ($info_fields as $info_field) : ?>
        <li class="info-item">
            <img class="icon"
                src="<?php echo YOUR_HOUSE_DIR_URI . '/assets/lib/svg/icons/' . $info_field['icon'] . '.svg' ?>"
                alt="<?php echo $info_field['icon'] ?>">
            <?php acf_text($info_field['field'], 'span', 'field') ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php acf_image($image, 'contact-image') ?>
</section>