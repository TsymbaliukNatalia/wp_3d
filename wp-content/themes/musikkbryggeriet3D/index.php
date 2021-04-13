<?php get_header(); ?>
<?php include_once('upcoming_event.php'); ?>
<header>
    <div class="wrapper">
    <?php include_once('templates/header-line.php'); ?>
        <?php if (get_field('first_screen_is_active', '11') == 'Active') { ?>
            <section class="header-content">
                <div class="header-about">
                    <div class="header-text-wrap">
                        <h1><?php the_field('name_of_event', $key_upcoming_event) ?></h1>
                        <p class="header-subtitle"><?php the_field('venue', $key_upcoming_event) ?></p>
                        <p class="header-subtitle"><?php the_field('info_about_event', $key_upcoming_event) ?></p>
                    </div><a class="button" href="<?php echo get_permalink($key_upcoming_event); ?>">Read more</a>
                </div>
                <div class="header-slider">
                    <div class="photos">
                        <?php $event_poster = get_field('event_poster', $key_upcoming_event); ?>
                        <img class="header-slider-img" src="<?php echo $event_poster['url'] ?>" alt="<?php echo $event_poster['title'] ?>" />
                        <?php
                        $images = explode(',', get_field('additional_pictures_for_the_event', $key_upcoming_event)); ?>
                        <?php if ($images) : ?>
                            <?php foreach ($images as $image_id) : ?>
                                <img class="header-slider-img" src="<?php echo wp_get_attachment_url($image_id) ?>" alt="<?php echo $image_id['title'] ?>" />
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="slider-arrows">
                        <div class="arrow-left"></div>
                        <div class="arrow-right"></div>
                    </div>
                </div>
            </section>
        <?php }; ?>
    </div>
</header>

<main>

    <div class="popup-bg">
        <?php include_once('templates/register-template.php'); ?>
        <div class="popup grey-popup printer-popup"><span class="close"> </span>
            <?php $first_preference = get_field('first_preference', '11'); ?>
            <p class="popup-title printer-popup-title"><?php echo $first_preference['the_name_of_the_first_preference'] ?></p>
            <div class="grey-popup-content">
                <div class="popup-images">
                    <?php if (isset($first_preference['more_pictures_for_preference'])) {
                        foreach ($first_preference['more_pictures_for_preference'] as $photo) { ?>
                            <img src="<?php echo $photo["url"]; ?>" alt="<?php echo $photo["title"]; ?>" />
                    <?php  }
                    }; ?>
                </div>
                <div class="popup-text">
                    <?php echo $first_preference['description_of_the_first_preference']; ?>
                </div>
            </div>
        </div>
        <?php $second_preference = get_field('second_preference', '11'); ?>
        <div class="popup grey-popup service-popup sittig-popup"><span class="close"> </span>
            <div>
                <?php if (isset($second_preference['image_for_the_second_preference'])) { ?>
                    <img src="<?php echo $second_preference['image_for_the_second_preference']['url'] ?>" alt="<?php echo $second_preference['the_name_of_the_second_preference'] ?>" />
                <?php }; ?>
            </div>
            <p class="service-popup-title"><?php echo $second_preference['the_name_of_the_second_preference'] ?></p>
            <p><?php echo $second_preference['brief_description_of_the_second_preference'] ?></p>
        </div>
        <?php $third_preference = get_field('third_preference', '11'); ?>
        <div class="popup grey-popup service-popup wifi-popup"><span class="close"> </span>
            <div>
                <?php if (isset($third_preference['image_for_the_third_preference'])) { ?>
                    <img src="<?php echo $third_preference['image_for_the_third_preference']['url'] ?>" alt="<?php echo $third_preference['the_name_of_the_third_preference'] ?>" />
                <?php }; ?>
            </div>
            <p class="service-popup-title"><?php echo $third_preference['the_name_of_the_third_preference'] ?></p>
            <p><?php echo $third_preference['brief_description_of_the_third_preference'] ?></p>
        </div>
        <?php $fourth_preference = get_field('fourth_preference', '11'); ?>
        <div class="popup grey-popup service-popup print-popup"><span class="close"> </span>
            <div>
                <?php if (isset($fourth_preference['image_for_the_fourth_preference'])) { ?>
                    <img src="<?php echo $fourth_preference['image_for_the_fourth_preference']['url'] ?>" alt="<?php echo $fourth_preference['the_name_of_the_fourth_preference'] ?>" />
                <?php }; ?>
            </div>
            <p class="service-popup-title"><?php echo $fourth_preference['the_name_of_the_fourth_preference'] ?></p>
            <p><?php echo $fourth_preference['brief_description_of_the_fourth_preference'] ?></p>
        </div>
        <?php $fifth_preference = get_field('fifth_preference', '11'); ?>
        <div class="popup grey-popup service-popup microwave-popup"><span class="close"> </span>
            <div>
                <?php if (isset($fifth_preference['image_for_the_fifth_preference'])) { ?>
                    <img src="<?php echo $fifth_preference['image_for_the_fifth_preference']['url'] ?>" alt="<?php echo $fifth_preference['the_name_of_the_fifth_preference'] ?>" />
                <?php }; ?>
            </div>
            <p class="service-popup-title"><?php echo $fifth_preference['the_name_of_the_fifth_preference'] ?></p>
            <p><?php echo $fifth_preference['brief_description_of_the_fifth_preference'] ?></p>
        </div>
        <div class="popup grey-popup basket-popup"><span class="close"> </span><b class="your-order">Your order</b>
            <div class="basket-products">
                <p class="basket-clear">Basket is clear</p>
            </div>
            <form class="order-registration">
                <p class="all-price">To pay <span class="sum-price">0$</span></p>
                <p class="mini-inputs input-line"><label for="pr-first-name"><input id="pr-first-name" type="text" name="pr-first-name" placeholder="First name" /></label><label for="pr-last-name"><input id="pr-last-name" type="text" name="pr-last-name" placeholder="Last name" /></label></p>
                <p class="input-line"> <label for="pr-email"><input id="pr-email" type="email" name="pr-email" placeholder="E-mail" /></label></p>
                <p class="input-line"><label for="pr-tel"><input id="pr-tel" type="tel" name="pr-tel" placeholder="Phone number" /></label></p>
                <p class="input-line"> <label for="pr-city"><input id="pr-city" type="text" name="city" placeholder="City" /></label></p><label class="pr-submit" for="pr-submit"><input type="submit" value="Confirm the order" /></label>
            </form>
        </div>
    </div>
    <div class="bg-orange">
        <div class="wrapper">

            <section class="about-us">
                <?php if (get_field('about_us_is_active', '11') == 'Active') { ?>
                    <div class="section-content">
                        <h2><?php the_field('about_us_title', '11') ?></h2>
                        <p class="subtitle"><?php the_field('about_us_text', '11') ?>
                        </p><a class="button transparent-button" href="<?php echo home_url(); ?>/contact">Read more</a>
                    </div>
                <?php }; ?>

                <?php
                if (get_field('event_is_active', '11') == 'Active') { ?>
                    <div class="slider-arrows">
                        <div class="arrow-left arrow-left-event"></div>
                        <div class="arrow-right arrow-right-event"></div>
                    </div>
                    <?php $count_events = $events = get_posts(array(
                        'numberposts' => -1,
                        'post_type'   => 'events',
                        'suppress_filters' => true,
                        'fields' => 'ids'
                    ));
                    $count = ceil(count($count_events) / 4);
                    for ($i = 0; $i < $count; $i++) { ?>
                        <div class="events-line">
                            <?php
                            $events = get_posts(array(
                                'numberposts' => 4,
                                'offset' => $i * 4,
                                'category'    => 0,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  => '',
                                'post_type'   => 'events',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ));
                            foreach ($events as $key => $event) {
                                setup_postdata($event);
                            ?>
                                <figure class="event">
                                    <div class="event-info">
                                        <?php $d = get_field('date_event', $event->ID);
                                        $t = get_field('time_event', $event->ID);
                                        $date = date_create($d . ' ' . $t);
                                        $event_date = date_format($date, 'M j'); ?>
                                        <address><?php the_field('venue', $event->ID); ?></address><time><?php echo $event_date; ?></time>
                                    </div>
                                    <?php $event_poster = get_field('event_poster', $event->ID); ?>
                                    <img src="<?php echo $event_poster["url"]; ?>" alt="<?php the_field('name_of_event', $event->ID); ?>" />
                                    <figcaption>
                                        <h3><?php the_field('name_of_event', $event->ID); ?></h3>
                                        <p class="event-subtitle"><?php the_field('info_about_event', $event->ID); ?></p><a class="button transparent-button event-button" href="<?php echo get_permalink($event->ID); ?>">Read more </a>
                                    </figcaption>
                                </figure>
                            <?php wp_reset_postdata();
                            } ?>
                        </div>
                <?php }
                } ?>
            </section>
            <?php if (get_field('video_is_active', '11') == 'Active') { ?>
                <section class="video">
                    <h2 class="title-mb"><?php the_field('video_section_title', '11') ?></h2>
                    <div class="video-bg">
                        <div class="video-wrap">
                            <div class="video-block"><?php the_field('video_link', '11') ?></div>
                        </div>
                        <?php the_field('video_description', '11') ?>
                    </div>
                </section>
            <?php } ?>
            <?php if (get_field('gallery_is_active', '11') == 'Active') { ?>
                <section class="gallery">
                    <h2 class="title-mb"><?php the_field('photo_gallery_name') ?></h2>
                    <div class="slider-arrows">
                        <div class="arrow-left arrow-left-gallery"></div>
                        <div class="arrow-right arrow-right-gallery"></div>
                    </div>
                    <?php
                    $gallery = get_posts(array(
                        'numberposts' => 6,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  => '',
                        'post_type'   => 'photo_gallery',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    )); ?>
                    <div class="gallery-line">
                        <?php foreach ($gallery as $key => $photo) {
                            setup_postdata($photo); ?>
                            <?php $photo_in_gallery = get_field('photo_in_gallery', $photo->ID);
                            if ($key % 3 == 0) { ?>
                                <div class="big-photo scrolled-picture"><img src="<?php echo $photo_in_gallery["url"]; ?>" alt="<?php $photo_in_gallery['title']; ?>" />
                                    <div class="img-hover">
                                        <div class="text">
                                            <?php get_field('description', $photo->ID) ?>
                                        </div><a class="more" href="<?php get_field('photo_instagram_link', $photo->ID) ?>">mer</a>
                                    </div>
                                </div>
                                <?php if (isset($gallery[$key + 1])) {
                                    $photo_in_gallery = get_field('photo_in_gallery', $gallery[$key + 1]->ID); ?>
                                    <div class="small-photo-wrap">
                                        <div class="small-photo scrolled-picture"><img src="<?php echo $photo_in_gallery["url"]; ?>" alt="<?php $photo_in_gallery['title']; ?>" />
                                            <div class="img-hover">
                                                <div class="text">
                                                    <?php get_field('description', $gallery[$key + 1]->ID) ?>
                                                </div><a class="more" href="<?php get_field('photo_instagram_link', $gallery[$key + 1]->ID) ?>">mer</a>
                                            </div>
                                        </div>
                                    <?php }
                                if (isset($gallery[$key + 2])) {
                                    $photo_in_gallery = get_field('photo_in_gallery', $gallery[$key + 2]->ID); ?>
                                        <div class="small-photo scrolled-picture"><img src="<?php echo $photo_in_gallery["url"]; ?>" alt="<?php $photo_in_gallery['title']; ?>" />
                                            <div class="img-hover">
                                                <div class="text">
                                                    <?php get_field('description', $gallery[$key + 2]->ID) ?>
                                                </div><a class="more" href="<?php get_field('photo_instagram_link', $gallery[$key + 2]->ID) ?>">mer</a>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            }
                            ?>
                        <?php wp_reset_postdata();
                        } ?>
                    </div>

                    <div class="button-line"> <a class="button transparent-button" href="<?php the_field('link_for_a_photo_gallery_button', '11') ?>" target="_blank"><?php the_field('view_more_button_text', '11') ?></a></div>
                </section>
            <?php } ?>
            <?php if (get_field('preferences_is_active', '11') == 'Active') { ?>
                <div class="services-line">
                    <?php $first_preference = get_field('first_preference', '11'); ?>
                    <div class="service service-3d-printer"><img src="<?php echo $first_preference['image_for_the_first_preference']['url'] ?>" alt="<?php echo $first_preference['the_name_of_the_first_preference'] ?>" />
                        <p><?php echo $first_preference['the_name_of_the_first_preference'] ?></p>
                    </div>
                    <?php $second_preference = get_field('second_preference', '11'); ?>
                    <div class="service service-sitting"><img src="<?php echo $second_preference['image_for_the_second_preference']['url'] ?>" alt="<?php echo $second_preference['the_name_of_the_second_preference'] ?>" />
                        <p><?php echo $second_preference['the_name_of_the_second_preference'] ?></p>
                    </div>
                    <?php $third_preference = get_field('third_preference', '11'); ?>
                    <div class="service service-wifi"><img src="<?php echo $third_preference['image_for_the_third_preference']['url'] ?>" alt="<?php echo $third_preference['the_name_of_the_third_preference'] ?>" />
                        <p><?php echo $third_preference['the_name_of_the_third_preference'] ?></p>
                    </div>
                    <?php $fourth_preference = get_field('fourth_preference', '11'); ?>
                    <div class="service service-print"><img src="<?php echo $fourth_preference['image_for_the_fourth_preference']['url'] ?>" alt="<?php echo $fourth_preference['the_name_of_the_fourth_preference'] ?>" />
                        <p><?php echo $fourth_preference['the_name_of_the_fourth_preference'] ?></p>
                    </div>
                    <?php $fifth_preference = get_field('fifth_preference', '11'); ?>
                    <div class="service service-microwave"><img src="<?php echo $fifth_preference['image_for_the_fifth_preference']['url'] ?>" alt="<?php echo $fifth_preference['the_name_of_the_fifth_preference'] ?>" />
                        <p><?php echo $fifth_preference['the_name_of_the_fifth_preference'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="slider-arrows slider-arrows-sp">
        <div class="arrow-left arrow-left-sp"></div>
        <div class="arrow-right arrow-right-sp"></div>
    </div>
    <?php if (get_field('partners_is_active', '11') == 'Active') { ?>
        <div class="sponsor-wrap">
            <div class="sponsor">
                <?php
                $partners = get_field('partners_logo', '11');
                if ($partners) : ?>
                    <?php foreach ($partners as $partner) : ?>
                        <div class="sponsor-img-wrap"> <img src="<?php echo $partner['full_image_url'] ?>" alt="<?php echo $partner['title'] ?>" /></div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php } ?>
    <div class="wrapper bg-black">
        <?php if (get_field('shop_is_active', '11') == 'Active') { ?>
            <section class="shop">
                <h2><?php the_field('the_name_of_the_shop', '11'); ?></h2>
                <div class="shop-info">
                    <div class="shop-cabinet"><span class="balance">0kr</span><button class="basket"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/basket.png" alt="Basket" /></button></div>
                    <form class="search" action="index.php"><input id="shop-search" type="search" name="shop-search" placeholder="Search" /><label for="shop-search"></label><input class="search-submit" id="search-submit" type="submit" /><label for="search-submit"></label></form>
                </div>
                <div class="slider-arrows">
                    <div class="arrow-left arrow-left-shop"></div>
                    <div class="arrow-right arrow-right-shop"></div>
                </div>
                <div class="shop-products">
                    <?php
                    $products = get_posts(array(
                        'numberposts' => -1,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  => '',
                        'post_type'   => 'products',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ));
                    foreach ($products as $product) {
                        setup_postdata($product);
                        $product_img = get_field('main_photo_product', $product->ID);
                    ?>
                        <figure class="shop-product"> <a class="product-link" href="<?php echo get_permalink($product->ID); ?>"></a>
                            <div class="product-img-wrap"><img src="<?php echo $product_img['url'] ?>" alt="<?php the_field('name_of_product', $product->ID); ?>" /></div><a class="button transparent-button product-button" href="#">Donate</a>
                            <figcaption>
                                <div class="bg-orange">
                                    <h4 class="product-name"><?php the_field('name_of_product', $product->ID); ?></h4><span class="price"><?php the_field('product_price', $product->ID); ?>kr </span>
                                </div>
                                <p class="product-card-description"><?php the_field('brief_description_of_the_product', $product->ID); ?></p>
                            </figcaption>
                        </figure>
                    <?php wp_reset_postdata();
                    } ?>
                </div>
            </section>
        <?php } ?>
    </div>
</main>
<footer>
    <p class="copy"><?php the_field('footer_text', '11') ?></p>
</footer>
<?php get_footer(); ?>