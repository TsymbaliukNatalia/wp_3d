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
            <?php echo do_shortcode( '[contact-form-7 id="295" html_class="registr-popup popup" title="Contact form register"]' ); ?>
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
                        <a class="button transparent-button registr" id="register-event" href="#">Registreringen</a></p>
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
                <h2>MER EVENT</h2>
                <form class="search" id="event-search-form"> <input id="event-search" type="search" name="shop-search" placeholder="Søk" /><label for="shop-search"></label><input class="search-submit" id="event-search" type="submit" /><label for="search-submit"></label></form>
                <div class="codyshop-ajax-search"></div>
                <div class="events-line search-hiden">
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
                        <a class="event-slide" href="<?php echo get_permalink($event->ID); ?>">
                        <figure class="event">
                            <?php $d = get_field('date_event', $event->ID);
                            $t = get_field('time_event', $event->ID);
                            $date = date_create($d . ' ' . $t);
                            $event_date = date_format($date, 'M j');
                            $event_poster = get_field('event_poster', $event->ID); ?>
                            <div class="event-wrap"> <img src="<?php echo $event_poster["url"]; ?>" alt="<?php the_field('name_of_event', $event->ID); ?>" />
                                <div class="event-info">
                                    <address><?php the_field('venue', $event->ID); ?></address><time><?php echo $event_date; ?></time>
                                </div>
                            </div>
                            <figcaption>
                                <h3><?php the_field('name_of_event', $event->ID); ?></h3>
                                <p class="event-subtitle"><?php the_field('info_about_event', $event->ID); ?></p>
                            </figcaption>
                        </figure>
                        </a>
                    <?php wp_reset_postdata();
                    } ?>
                </div>
                <div class="arrow-line">
                    <div class="arrow-left arrow-left-event arr-hov-white"><svg>
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#arr-l"></use>
                        </svg></div>
                    <div class="arrow-right arrow-right-event arr-hov-white"><svg>
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#arr-r"></use>
                        </svg></div>
                </div>
            </section>
        </div>
    </main>
    <?php include_once('templates/footer-line.php'); ?>
</div>
<?php get_footer(); ?>