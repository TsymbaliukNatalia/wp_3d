<?php
if (wp_doing_ajax()) {
    add_action('wp_ajax_nopriv_shop_ajax_search', 'shop_ajax_search');
    add_action('wp_ajax_shop_ajax_search', 'shop_ajax_search');
    add_action('wp_ajax_nopriv_event_ajax_search', 'event_ajax_search');
    add_action('wp_ajax_event_ajax_search', 'event_ajax_search');
};

function shop_ajax_search()
{
    $args = array(
        'post_type'      => 'products',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'meta_query' => array(
            'relation' => 'OR',
            array(
                'key' => 'name_of_product',
                'value' => $_POST['term'],
                'compare' => 'LIKE'
            ),
            array(
                'key' => 'brief_description_of_the_product',
                'value' => $_POST['term'],
                'compare' => 'LIKE'
            )
        )
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) { ?>
        <div class="shop-products ">
            <?php while ($query->have_posts()) {
                $query->the_post();
                $product_img = get_field('main_photo_product'); ?>
                <figure class="shop-product"> <a class="product-link" href="<?php echo get_permalink(); ?>"></a>
                    <div class="product-img-wrap"><img src="<?php echo $product_img['url'] ?>" alt="<?php the_field('name_of_product'); ?>" /></div><a class="button transparent-button product-button" href="#">Donate</a>
                    <figcaption>
                        <div class="bg-orange">
                            <h4 class="product-name"><?php the_field('name_of_product'); ?></h4><span class="price"><?php the_field('product_price'); ?>kr </span>
                        </div>
                        <p class="product-card-description"><?php the_field('brief_description_of_the_product'); ?></p>
                    </figcaption>
                </figure>
            <?php } ?>
        </div>
    <?php } else { ?>
        <br>
        <h3 style="color: red;">Ingenting funnet! Prøv en annen forespørsel!</h3>
    <?php }
    exit;
}

function event_ajax_search()
{
    $args = array(
        'post_type'      => 'events',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'meta_query' => array(
            'relation' => 'OR',
            array(
                'key' => 'venue',
                'value' => $_POST['term'],
                'compare' => 'LIKE'
            ),
            array(
                'key' => 'name_of_event',
                'value' => $_POST['term'],
                'compare' => 'LIKE'
            ),
            array(
                'key' => 'info_about_event',
                'value' => $_POST['term'],
                'compare' => 'LIKE'
            )
        )
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) { ?>
        <div class="events-line">
            <?php while ($query->have_posts()) {
                $query->the_post(); ?>
                <a class="event-slide" href="<?php echo get_permalink(); ?>">
                    <figure class="event">
                        <?php $d = get_field('date_event');
                        $t = get_field('time_event');
                        $date = date_create($d . ' ' . $t);
                        $event_date = date_format($date, 'M j');
                        $event_poster = get_field('event_poster'); ?>
                        <div class="event-wrap"> <img src="<?php echo $event_poster["url"]; ?>" alt="<?php the_field('name_of_event'); ?>" />
                            <div class="event-info">
                                <address><?php the_field('venue'); ?></address><time><?php echo $event_date; ?></time>
                            </div>
                        </div>
                        <figcaption>
                            <h3><?php the_field('name_of_event'); ?></h3>
                            <p class="event-subtitle"><?php the_field('info_about_event'); ?></p>
                        </figcaption>
                    </figure>
                </a>
            <?php } ?>
        </div>
    <?php } else { ?>
        <br>
        <h3 style="color: red;">Ingenting funnet! Prøv en annen forespørsel!</h3>
        <br>
<?php }
    exit;
} ?>