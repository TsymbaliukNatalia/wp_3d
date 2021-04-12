<?php
/*
Template Name: Shop
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
            <?php include_once('register-template.php'); ?>
            <div class="popup grey-popup basket-popup"><b class="your-order">Your order</b>
                <div class="basket-products">
                    <p class="basket-clear">Basket is clear</p>
                </div>
                <p class="all-price">To pay <span class="sum-price">0$</span></p>
                <form class="order-registration">
                    <p class="mini-inputs input-line"><label for="pr-first-name"><input id="pr-first-name" type="text" name="pr-first-name" placeholder="First name" /></label><label for="pr-last-name"><input id="pr-last-name" type="text" name="pr-last-name" placeholder="Last name" /></label></p>
                    <p class="input-line"> <label for="pr-email"><input id="pr-email" type="email" name="pr-email" placeholder="E-mail" /></label></p>
                    <p class="input-line"><label for="pr-tel"><input id="pr-tel" type="tel" name="pr-tel" placeholder="Phone number" /></label></p>
                    <p class="input-line"> <label for="pr-city"><input id="pr-city" type="text" name="city" placeholder="City" /></label></p><label class="pr-submit" for="pr-submit"><input type="submit" value="Confirm the order" /></label>
                </form>
            </div>
        </div>
        <div class="wrapper">
        <section class="product-section">
                <h2><?php the_field('name_of_product'); ?></h2>
                <div class="flex-wrap">
                    <div class="half">
                        <div class="product-menu-line flex-wrap">
                            <form class="search"> <input id="shop-search" type="search" name="shop-search"
                                    placeholder="Search" /><label for="shop-search"></label><input class="search-submit"
                                    id="event-search" type="submit" /><label for="search-submit"></label></form>
                            <div class="shop-cabinet"><span class="balance">0$</span><button class="basket"> <img
                                        src="<?php echo get_template_directory_uri() ?>/assets/img/basket.png" alt="Basket" /></button></div>
                        </div>
                        <div class="text-description">
                        <?php the_field('detailed_description_product'); ?>
                        </div>
                        <form class="product-order"> <button class="button button-plus"> </button><label
                                class="score"><input type="number" name="product-quantity" value="1" /></label><button
                                class="button button-minus"></button><label> <input class="button donate-button"
                                    type="submit" value="Donate" /></label></form>
                    </div>
                    <div class="slider goods-slider">
                        <div class="contact-slider-line flex-wrap">
                            <div class="arrow-left-contact js-arrow-left"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png"
                                    alt="arrow left" /></div>
                            <div class="product-slider-line js-slider-line">
                                <div class="collage js-slider-object"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/shop_product.jpg" alt="Product" />
                                    <div class="product-price-on-img"><span><?php the_field('product_price'); ?>kr</span></div>
                                </div>
                                <div class="collage js-slider-object"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/shop_product.jpg" alt="Product" />
                                    <div class="product-price-on-img"><span><?php the_field('product_price'); ?>kr</span></div>
                                </div>
                                <div class="collage js-slider-object"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/shop_product.jpg" alt="Product" />
                                    <div class="product-price-on-img"><span><?php the_field('product_price'); ?>kr</span></div>
                                </div>
                            </div>
                            <div class="arrow-right-contact js-arrow-right"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png"
                                    alt="arrow right" /></div>
                        </div>
                        <div class="switch-slider-line flex-wrap">
                            <div class="arrow-left-contact switch-arrow-left"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png"
                                    alt="arrow left" /></div>
                            <div class="additional-photo"> </div>
                            <div class="arrow-right-contact switch-arrow-right"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png"
                                    alt="arrow right" /></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="social-line"><a class="soc-inst" href="#"><img src="img/inst.svg" alt="Instagram" /></a><a class="soc-fb" href="#"><svg class="fb-img">
                    <use xlink:href="img/sprite.svg#fb"></use>
                </svg></a><a class="soc-tw" href="#"><img src="img/tw.svg" alt="Twitter" /></a><a class="soc-yt" href="#"><svg>
                    <use xlink:href="img/sprite.svg#yt"></use>
                </svg></a></div>
        <p class="copy"><?php the_field('footer_text', '11') ?></p>
    </footer>
</div>
<?php get_footer(); ?>