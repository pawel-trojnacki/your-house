<header class="frontpage-header">
    <style>
    .header-image {
        background-image: url(<?php the_field('header_image_mobile') ?>);
    }

    @media (min-width: 768px) {
        .header-image {
            background-image: url(<?php the_field('header_image') ?>);

        }
    }
    </style>
    <div class="header-image"></div>
    <div class="header-inner">
        <h1 class="heading heading-large white"><?php the_field('header_text') ?></h1>
        <p class="text heading-text white"><?php the_field('header_info') ?></p>
        <div>
            <a href="<?php the_field('header_button_url') ?>"
                class="btn btn-contained"><?php the_field('header_button_text') ?></a>
        </div>
    </div>
</header>