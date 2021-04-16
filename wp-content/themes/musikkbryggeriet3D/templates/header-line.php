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
                <ul class="sing-menu">
                    <li><a class="sing-up-button" href="#">SIGN&nbsp;UP</a></li>
                    <li><a class="sing-in-button" href="#">SIGN&nbsp;IN</a></li>
                </ul>
            </div>
            <div class="burger"><span></span></div>
        </div>
    </div>
</div>