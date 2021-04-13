<?php
/*
Template Name: Eventer
*/
?>
<?php include_once('upcoming_event.php'); ?>
<?php get_header(); ?>
<div class="second-page">
    <header>
        <div class="wrapper">
            <?php include_once('templates/header-line.php'); ?>
        </div>
    </header>
    <main>
        <div class="popup-bg">
            <form class="registr-popup popup"><span class="close"> </span>
                <p class="popup-title">HVA KAN VI HJELPE DEG MED?</p>
                <p class="mini-inputs"><label for="registr-name"><input id="registr-name" type="text" name="registr-name" placeholder="Fornavn" /></label><label for="registr-surname"><input id="registr-surname" type="text" name="registr-surname" placeholder="Etternavn" /></label>
                </p>
                <p class="mini-inputs"><label for="registr-tif"><input id="registr-tif" type="text" name="registr-tif" placeholder="Tif.nr." /></label><label for="registr-mail"><input id="registr-mail" type="email" name="registr-mail" placeholder="E-post" /></label></p>
                <p class="input-line"> <label class="request"><textarea id="request" name="request" cols="30" rows="10" placeholder="Scriv inn din henvendelse her..."></textarea></label></p>
                <p class="input-line registr-submit-line"> <label for="registr-submit"><input class="button" id="registr-submit" type="submit" value="Send inn" /></label></p>
            </form>
            <?php include_once('register-template.php'); ?>
        </div>
        <!-- <hr class="primary-line" /> -->
        <div class="wrapper">
            <section class="one-event">
                <?php
                if (get_field('name_of_event')) {
                    $id_event = get_the_ID();
                } else {
                    $id_event = $key_upcoming_event;
                } ?>
                <div class="flex-wrap">
                    <div class="text-description">
                        <h2><?php the_field('name_of_event', $id_event) ?></h2>
                        <?php the_field('detailed_information_about_the_event', $id_event); ?>
                        <a class="button transparent-button registr" href="#">Registreringen</a></p>
                    </div>
                    <div class="slider event-slider">
                        <div class="event-img-line">
                            <?php $event_poster = get_field('event_poster', $id_event); ?>
                            <figure> <img src="<?php echo $event_poster["url"]; ?>" alt="<?php the_field('name_of_event', $id_event); ?>" />
                                <figcaption class="event-description">
                                    <?php $d = get_field('date_event', $id_event);
                                    $t = get_field('time_event', $id_event);
                                    $date = date_create($d . ' ' . $t);
                                    $event_date = date_format($date, 'M j');
                                    $time = date_format($date, 'H:i'); ?>
                                    <div class="cell  date"><svg>
                                            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#date"></use>
                                        </svg><time><?php echo $event_date; ?></time></div>
                                    <div class="cell time"><svg>
                                            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#clock"></use>
                                        </svg><time><?php echo $time; ?></time></div>
                                    <div class="cell place"><svg>
                                            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#place"></use>
                                        </svg>
                                        <address><?php the_field('venue', $id_event) ?></address>
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
                <form class="search"> <input id="shop-search" type="search" name="shop-search" placeholder="Search" /><label for="shop-search"></label><input class="search-submit" id="event-search" type="submit" /><label for="search-submit"></label></form>
                <div class="events-line">
                    <?php
                    $events = get_posts(array(
                        'numberposts' => -1,
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
                        setup_postdata($event); ?>
                        <figure class="event"><a class="product-link" href="<?php echo get_permalink($event->ID); ?>"></a>
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
                                <p class="event-subtitle"><?php the_field('info_about_event', $event->ID); ?></p>
                            </figcaption>
                        </figure>
                    <?php wp_reset_postdata();
                    } ?>
                </div>
                <div class="arrow-line">
                    <div class="arrow-left-event"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png" alt="arrow left" /></div>
                    <div class="arrow-right-event"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow_black.png" alt="arrow right" /></div>
                </div>
            </section>
        </div>
    </main>
    <?php include_once('templates/footer-line.php'); ?>
</div>
<?php get_footer(); ?>