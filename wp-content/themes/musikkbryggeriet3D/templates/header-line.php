<div class="adaptive-header-line">
    <div class="header-line">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <?php if (is_page(11)) { ?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="Musikkbryggeriet3d logo" />
                <?php } else {  ?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_black.png" alt="Musikkbryggeriet3d logo" />
                <?php } ?>
            </a>
        </div>
        <nav class="header-menu">
            <?php wp_nav_menu([
                'theme_location'  => 'primary',
            ]); ?>
        </nav>
        <div class="right-part">
            <div class="profile"><svg>
                    <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#profile"></use>
                </svg>
                <!-- <ul class="sing-menu"> -->
                    <?php wp_nav_menu([
                        'theme_location'  => 'login-menu',
                        'container' => 'false',
                        'menu_class' => 'sing-menu',
                        
                    ]); ?>
                <!-- </ul> -->
            </div>
            <div class="burger"><span></span></div>
        </div>
    </div>
</div>