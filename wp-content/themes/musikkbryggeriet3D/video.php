<?php
/*
Template Name: Video
*/
?>

<?php get_header(); ?>

<div class="second-page">
    <header>
        <div class="wrapper">
            <?php include_once('templates/header-line.php'); ?>
        </div>
    </header>
    <?php if (is_user_logged_in()) { ?>
        <main>
            <div class="popup-bg"><?php include_once('templates/register-template.php'); ?></div>
            <div class="wrapper">
                <section class="video">
                    <h2 class="title-mb"><?php the_field('video_section_title', '11') ?></h2>
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $query = new WP_Query(array(
                        'post_type' => 'video',
                        'posts_per_page' => 10,
                        'paged' => $paged
                    ));
                    if ($query->have_posts()) { ?>
                        <?php while ($query->have_posts()) {
                            $query->the_post(); ?>

                            <div class="video-bg video-page">
                                <div class="video-wrap">
                                    <div class="video-block"><?php the_field('video_link', $post->ID) ?></div>
                                </div>
                                <?php the_field('video_description', $post->ID) ?>
                            </div>

                        <?php }; ?>
                        <div class="pagination">
                            <?php
                            $img_directory = get_template_directory_uri();
                            echo paginate_links(array(
                                'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                                'total'        => $query->max_num_pages,
                                'current'      => max(1, get_query_var('paged')),
                                'format'       => '?paged=%#%',
                                'show_all'     => false,
                                'type'         => 'plain',
                                'end_size'     => 2,
                                'mid_size'     => 1,
                                'prev_next'    => true,
                                'prev_text'    => '<svg><use xlink:href="' . $img_directory . '/assets/img/sprite.svg#arr-l"></use></svg>',
                                'next_text'    => '<svg><use xlink:href="' . $img_directory . '/assets/img/sprite.svg#arr-r"></use></svg>',
                                'add_args'     => false,
                                'add_fragment' => '',
                            ));
                            ?>
                        </div>
                    <?php wp_reset_postdata();
                    }; ?>
                </section>
            </div>
        </main>
    <?php } else { ?>
        <main>
            <div class="popup-bg"><?php include_once('templates/register-template.php'); ?></div>
            <div class="wrapper">
                <h2 class="no-register-video">Videoer er bare tilgjengelige for autoriserte brukere!</h2>
            </div>
        </main>
    <?php } ?>
    <?php include_once('templates/footer-line.php'); ?>
</div>
<?php get_footer(); ?>