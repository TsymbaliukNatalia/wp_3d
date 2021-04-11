<?php
/*
Template Name: Eventer
*/
?>
<?php include_once ('upcoming_event.php'); ?>
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
            <form class="registr-popup popup"><span class="close"> </span>
                <p class="popup-title">HVA KAN VI HJELPE DEG MED?</p>
                <p class="mini-inputs"><label for="registr-name"><input id="registr-name" type="text"
                            name="registr-name" placeholder="Fornavn" /></label><label for="registr-surname"><input
                            id="registr-surname" type="text" name="registr-surname" placeholder="Etternavn" /></label>
                </p>
                <p class="mini-inputs"><label for="registr-tif"><input id="registr-tif" type="text" name="registr-tif"
                            placeholder="Tif.nr." /></label><label for="registr-mail"><input id="registr-mail"
                            type="email" name="registr-mail" placeholder="E-post" /></label></p>
                <p class="input-line"> <label class="request"><textarea id="request" name="request" cols="30" rows="10"
                            placeholder="Scriv inn din henvendelse her..."></textarea></label></p>
                <p class="input-line registr-submit-line"> <label for="registr-submit"><input class="button"
                            id="registr-submit" type="submit" value="Send inn" /></label></p>
            </form>
            <?php include_once('register-template.php'); ?>
        </div>
        <!-- <hr class="primary-line" /> -->
        <div class="wrapper">
            <section class="one-event">
                <div class="flex-wrap">
                    <div class="text-description">
                        <h2><?php the_field('name_of_event'); ?></h2>
                        <p class="about-us-text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel
                            velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                            ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit
                            amet mauris.</p>
                        <p class="about-us-text">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                            ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti
                            sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        <p class="about-us-text">Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit
                            amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.
                            Etiam pharetra, erat sed fermentum f </p>
                        <p> <a class="button transparent-button registr" href="#">Registreringen</a></p>
                    </div>
                    <div class="slider event-slider">
                        <div class="event-img-line">
                            <figure> <img src="img/event_slider_1.jpg" alt="Event" />
                                <figcaption class="event-description">
                                    <div class="cell"><time>Feb 18</time></div>
                                    <div class="cell"><time>18:30</time></div>
                                    <div class="cell">
                                        <address>Stokata 18</address>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- <hr class="primary-line" /> -->
        <div class="wrapper">
            <section class="more-event">
                <h2>MORE EVENT</h2>
                <form class="search"> <input id="shop-search" type="search" name="shop-search"
                        placeholder="Search" /><label for="shop-search"></label><input class="search-submit"
                        id="event-search" type="submit" /><label for="search-submit"></label></form>
                <div class="events-line">
                    <figure class="event">
                        <div class="event-info">
                            <address>San-Francisco </address><time>Feb 01</time>
                        </div><img src="img/event.jpg" alt="Event" />
                        <figcaption>
                            <h3>NAME OF EVENT</h3>
                            <p class="event-subtitle">INFO ABOUT EVENT. This is Photoshop's version of Lorem Ipsum.
                                Proin gravida nibh vel</p>
                        </figcaption>
                    </figure>
                    <figure class="event">
                        <div class="event-info">
                            <address>San-Francisco </address><time>Feb 02</time>
                        </div><img src="img/event.jpg" alt="Event" />
                        <figcaption>
                            <h3>NAME OF EVENT</h3>
                            <p class="event-subtitle">INFO ABOUT EVENT. This is Photoshop's version of Lorem Ipsum.
                                Proin gravida nibh vel </p>
                        </figcaption>
                    </figure>
                    <figure class="event">
                        <div class="event-info">
                            <address>San-Francisco </address><time>Feb 03</time>
                        </div><img src="img/event.jpg" alt="Event" />
                        <figcaption>
                            <h3>NAME OF EVENT</h3>
                            <p class="event-subtitle">INFO ABOUT EVENT. This is Photoshop's version of Lorem Ipsum.
                                Proin gravida nibh vel</p>
                        </figcaption>
                    </figure>
                    <figure class="event">
                        <div class="event-info">
                            <address>San-Francisco </address><time>Feb 04</time>
                        </div><img src="img/event.jpg" alt="Event" />
                        <figcaption>
                            <h3>NAME OF EVENT</h3>
                            <p class="event-subtitle">INFO ABOUT EVENT. This is Photoshop's version of Lorem Ipsum.
                                Proin gravida nibh vel</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="arrow-line">
                    <div class="arrow-left-event"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png" alt="arrow left" /></div>
                    <div class="arrow-right-event"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png" alt="arrow right" /></div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="social-line"><a class="soc-inst" href="#"></a><a class="soc-fb" href="#"></a><a class="soc-tw"
                href="#"></a><a class="soc-yt" href="#"></a></div>
        <p class="copy">Copyricht © 2020 All rights reserved</p>
    </footer>
    
   
    </div>  
<?php get_footer(); ?>
