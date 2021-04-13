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
            <?php include_once('templates/header-line.php'); ?>
            </div>
        </div>
    </header>
    <main>
        <div class="popup-bg">
            <?php include_once('templates/register-template.php'); ?>
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
                            <form class="search"> <input id="shop-search" type="search" name="shop-search" placeholder="Search" /><label for="shop-search"></label><input class="search-submit" id="event-search" type="submit" /><label for="search-submit"></label></form>
                            <div class="shop-cabinet"><span class="balance">0$</span><button class="basket"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/basket.png" alt="Basket" /></button></div>
                        </div>
                        <div class="text-description">
                            <?php the_field('detailed_description_product'); ?>
                        </div>
                        <form class="product-order"> <button class="button button-plus"> </button><label class="score"><input type="number" name="product-quantity" value="1" /></label><button class="button button-minus"></button><label> <input class="button donate-button" type="submit" value="Donate" /></label></form>
                    </div>
                    <div class="slider goods-slider">
                        <div class="contact-slider-line flex-wrap">
                            <div class="arrow-left-contact js-arrow-left"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png" alt="arrow left" /></div>
                            <div class="product-slider-line js-slider-line">
                                <?php $product_main_img = get_field('main_photo_product'); ?>
                                <div class="collage js-slider-object"> <img src="<?php echo $product_main_img['url'] ?>" alt="<?php the_field('name_of_product'); ?>" />
                                    <div class="product-price-on-img"><span><?php the_field('product_price'); ?>kr</span></div>
                                </div>
                                <?php
                                $images = explode(',', get_field('additional_photos_product')); ?>
                                <?php if ($images) : ?>
                                    <?php foreach ($images as $image_id) : ?>
                                        <div class="collage js-slider-object"> <img src="<?php echo wp_get_attachment_url($image_id) ?>" alt="<?php the_field('name_of_product'); ?>" />
                                            <div class="product-price-on-img"><span><?php the_field('product_price'); ?>kr</span></div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="arrow-right-contact js-arrow-right"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png" alt="arrow right" /></div>
                        </div>
                        <div class="switch-slider-line flex-wrap">
                            <div class="arrow-left-contact switch-arrow-left"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png" alt="arrow left" /></div>
                            <div class="additional-photo"> </div>
                            <div class="arrow-right-contact switch-arrow-right"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png" alt="arrow right" /></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php include_once('templates/footer-line.php'); ?>
</div>
<?php get_footer(); ?>