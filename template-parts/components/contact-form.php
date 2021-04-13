<?php

/**
 * Contact form component
 * 
 * @package Your House
 */

$form_shortcode = get_field('form_shortcode');

?>

<section class="form">
    <h2 class="subheading">Send a message</h2>
    <?php echo do_shortcode($form_shortcode) ?>
</section>