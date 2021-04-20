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
        'order'          => 'DESC',
        'orderby'        => 'date',
        's'              => $_POST['term'],
        'posts_per_page' => -1
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
        'order'          => 'DESC',
        'orderby'        => 'date',
        's'              => $_POST['term'],
        'posts_per_page' => -1
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) { ?>
        <div class="events-line">
            <?php while ($query->have_posts()) {
                $query->the_post(); ?>
                <figure class="event"><a class="product-link" href="<?php echo get_permalink(); ?>"></a>
                    <div class="event-info">
                        <?php $d = get_field('date_event');
                        $t = get_field('time_event');
                        $date = date_create($d . ' ' . $t);
                        $event_date = date_format($date, 'M j'); ?>
                        <address><?php the_field('venue'); ?></address><time><?php echo $event_date; ?></time>
                    </div>
                    <?php $event_poster = get_field('event_poster'); ?>
                    <img src="<?php echo $event_poster["url"]; ?>" alt="<?php the_field('name_of_event'); ?>" />
                    <figcaption>
                        <h3><?php the_field('name_of_event'); ?></h3>
                        <p class="event-subtitle"><?php the_field('info_about_event'); ?></p>
                    </figcaption>
                </figure>
            <?php } ?>
        </div>
    <?php } else { ?>
        <br>
        <h3 style="color: red;">Ingenting funnet! Prøv en annen forespørsel!</h3>
<?php }
    exit;
} ?>