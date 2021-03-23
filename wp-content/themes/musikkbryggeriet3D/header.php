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
                    <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="Musikkbryggeriet3d logo" /></a>
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
           