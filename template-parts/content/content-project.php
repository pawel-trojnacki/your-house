<?php

/**
 * Single project content template
 * 
 * @package Your_House
 */

get_template_part('template-parts/components/project', 'image');

?>

<div class="content content-margin-responsive">
    <?php
    get_template_part('template-parts/components/project', 'info');
    the_content();
    ?>
</div>