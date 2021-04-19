<?php

/**
 * Theme header
 *
 * @package Your_House
 */

$main_class = 'fade-in';
if (is_page('contact')) {
    $main_class = 'contact';
}

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

    <div id="page" class="site" data-barba="wrapper">
        <header id="masthead" class="site-header">
            <div class="nav-wrapper">
                <div class="site-branding">
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php echo YOUR_HOUSE_LOGO_URI ?>" alt="your house">
                    </a>
                </div>
                <nav id="site-navigation" class="main-navigation">
                    <?php get_template_part('template-parts/components/nav-menu', 'desktop') ?>
                </nav>
                <?php get_template_part('template-parts/components/hamburger') ?>
                <span class="nav-indicator"></span>
            </div>
            <div class="nav-wrapper-mobile">
                <nav id="site-navigation-mobile" class="main-navigation-mobile">
                    <?php get_template_part('template-parts/components/nav-menu') ?>
                </nav>
            </div>

        </header>
        <div class="barba-container" data-barba="container" data-barba-namespace="cover">
            <div class="cover"></div>
            <main class="<?php echo $main_class ?>">