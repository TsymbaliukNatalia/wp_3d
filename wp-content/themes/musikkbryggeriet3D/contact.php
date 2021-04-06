<?php
/*
Template Name: Om oss
*/
?>

<?php get_header(); ?>

<div class="second-page">
    <header>
        <div class="wrapper">
            <div class="adaptive-header-line">
                <div class="header-line">
                    <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_black.png" alt="Musikkbryggeriet3d logo" /></a></div>
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
        </div>
    </header>
    <main>
        <div class="popup-bg">
            <form class="popup sing-up" action="index.php"><span class="close"> </span>
                <p class="popup-title">SIGN UP</p>
                <p class="mini-inputs input-line"><label for="first-name"><span>First name</span><input id="first-name" type="text" name="first-name" /></label><label for="last-name"><span>Last name</span><input id="last-name" type="text" name="last-name" /></label></p>
                <p class="input-line"> <label for="username"><span>Username</span><input id="username" type="text" name="username" /></label></p>
                <p class="input-line"><label for="email-sing-up"><span>E-mail</span><input id="email-sing-up" type="email" name="email" /></label></p>
                <p class="input-line"> <label for="password"><span>Pasword</span><input id="password-sing-up" type="password" name="password" /></label></p>
                <p class="have-account"> <a class="sing-in-button" href="#">Already have an account? <span> Join
                        </span></a></p>
                <p class="input-line"> <input class="button" id="sing-up" type="submit" value="SIGN UP" /><label for="sing-up"></label></p>
            </form>
            <form class="popup sing-in" action="index.php"><span class="close"> </span>
                <p class="popup-title">SIGN IN</p>
                <p class="input-line"><label for="email"><span>E-mail</span><input id="email-sing-in" type="email" name="email" /></label></p>
                <p class="input-line"> <label class="password-label" for="password"><span>Pasword</span><a class="forgot-password-button" href="#">Forgot your password?</a><input id="password-sing-in" type="password" name="password" /></label></p>
                <p class="have-account"> <a class="sing-up-button" href="#">Dont have a account? <span> Join </span></a>
                </p>
                <p class="input-line"> <input class="button" id="sing-in" type="submit" value="SIGN IN" /><label for="sing-up"></label></p>
            </form>
            <form class="popup forgot-password" action="index.php"><span class="close"> </span>
                <p class="popup-title">FORGOT YOUR PASSWORD?</p>
                <p class="input-line"><label for="email-forgot-password"><span>E-mail</span><input id="email-forgot-password" type="email" name="email-forgot-password" /></label></p>
                <p class="input-line"> <input class="button" id="send-password" type="submit" value="SEND PASSWORD" /><label for="send-password"></label></p>
            </form>
        </div>
        <hr class="primary-line" />
        <div class="wrapper">
            <section class="about-us">
                <h2><?php the_field('headline_for_information_about_us') ?></h2>
                <div class="flex-wrap">
                    <div class="text-description">
                        <?php the_field('text_with_information_about_us') ?>
                    </div>
                    <div class="slider contact-slider">
                        <div class="arrow-left-contact js-arrow-left"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png" alt="arrow left" />
                        </div>
                        <div class="contact-img-line js-slider-line">
                            <?php
                            $images = get_field('slider_about_us', '81');
                            $img = explode(',', $images);
                            foreach($img as $id){ ?>
                                <img class="js-slider-object" src="<?php echo wp_get_attachment_url($id);?>" alt="<?php echo get_the_title($id);?>" />
                            <?php }?>
                        </div>
                        <div class="arrow-right-contact js-arrow-right"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png" alt="arrow right" /></div>
                    </div>
                </div>
            </section>
        </div>
        <hr class="primary-line" />
        <div class="wrapper">
            <section class="contact">
                <h2><?php the_field('headline_for_contact_block') ?></h2>
                <?php
                $tel = get_field('contact_phone');
                $contact_phone = preg_replace("/[^,.0-9]/", '', $tel);
                ?>
                <div class="flex-wrap">
                    <div class="contact-information"> <strong><a class="info-tel" href="tel:+<?php echo $contact_phone; ?>"><?php the_field('contact_phone') ?></a></strong><strong>
                            <address class="info-address"><?php the_field('contact_adress') ?></address>
                        </strong><strong><a class="info-mail" href="mailto:<?php the_field('contact_e-mail') ?>"><?php the_field('contact_e-mail') ?></a></strong></div>
                    <div class="map"><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1fzyQDJk9dlUwyrcroYMC9DjzSY7vH8tn"></iframe>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="social-line"><a class="soc-inst" href="<?php the_field('instagram') ?>"></a><a class="soc-fb" href="<?php the_field('facebook') ?>"></a><a class="soc-tw" href="<?php the_field('twitter') ?>"></a><a class="soc-yt" href="<?php the_field('youtube') ?>"></a></div>
        <p class="copy"><?php the_field('footer_text', '11') ?></p>
    </footer>
</div>
<?php get_footer(); ?>