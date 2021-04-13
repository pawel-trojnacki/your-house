<?php

/**
 * Content page template
 * 
 * @package Your_House
 */

?>

<div class="content-narrow">
    <?php
    get_template_part('template-parts/components/page-header');
    the_content()
    ?>
</div>