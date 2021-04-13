<?php

/**
 * Archive header
 * 
 * @package Your_House
 */
?>

<header class="archive-header">
    <?php
    if (is_home()) {
        echo '<h1 class="heading">News</h1>';
    } else {
        the_archive_title('<h1 class="heading">', '</h1>');
    }
    ?>

</header>