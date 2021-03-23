<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <title><?php bloginfo('description'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans&family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="wrapper">
            <div class="adaptive-header-line">
                <div class="header-line">
                    <div class="logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="Musikkbryggeriet3d logo" />
                    </div>
                    <nav class="header-menu">
                        <?php wp_nav_menu([
                            'theme_location'  => 'primary',
                        ]); ?>
                    </nav>
                    <div class="right-part">
                        <div class="profile">
                            <ul class="sing-menu">
                                <li><a class="sing-up-button" href="#">SIGN&nbsp;UP</a></li>
                                <li><a class="sing-in-button" href="#">SIGN&nbsp;IN</a></li>
                            </ul>
                        </div>
                        <div class="burger"><span></span></div>
                    </div>
                </div>
            </div>
            <section class="header-content">
                <div class="header-about">
                    <div class="header-text-wrap">
                        <h1><?php the_field('main_text', '11') ?></h1>
                        <p class="header-subtitle"><?php the_field('smaller_main_text', '11') ?></p>
                    </div><a class="button" href="#"><?php the_field('first_screen_button_text', '11') ?></a>
                </div>
                <div class="header-slider">
                    <div class="photos">
                        <?php
                        $images = get_field('first_screen_slider', '11');
                        if ($images) : ?>
                            <?php foreach ($images as $image_id) : ?>
                                <img class="header-slider-img" src="<?php echo $image_id['full_image_url'] ?>" alt="<?php echo $image_id['title'] ?>" />
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="slider-arrows">
                        <div class="arrow-left"></div>
                        <div class="arrow-right"></div>
                    </div>
                </div>
            </section>
        </div>
    </header>