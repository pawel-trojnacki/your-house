<?php

/**
 * Theme header
 *
 * @package Your_House
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="site-branding">
                <?php the_custom_logo() ?>
            </div>
            <nav id="site-navigation" class="main-navigation">
                <?php wp_nav_menu([
                    'theme_location' => 'primary-menu',
                    'menu_id'        => 'primary-menu',
                ]) ?>
            </nav>
        </header>
        <main>