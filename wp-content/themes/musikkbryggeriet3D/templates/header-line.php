<div class="adaptive-header-line">
    <div class="header-line">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <?php if (is_page(11)) { ?>
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#logo"></use>
                    </svg>
                <?php } else {  ?>
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#logo"></use>
                    </svg>
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
                <?php if (is_user_logged_in()) { ?>
                    <li><a class="log-out-button" href="#">LOG&nbsp;OUT</a></li>
                <?php } else{ ?>
                    <li><a class="sing-up-button" href="#">SIGN&nbsp;UP</a></li>
                    <li><a class="sing-in-button" href="#">SIGN&nbsp;IN</a></li>
                <?php };?>
                </ul>
            </div>
            <div class="burger"><span></span></div>
        </div>
    </div>
</div>