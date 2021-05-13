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
    <main>
        <div class="popup-bg"><?php include_once('register-template.php'); ?></div>
        <div class="wrapper">
            <section class="video">
                <h2 class="title-mb"><?php the_field('video_section_title', '11') ?></h2>
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'video',
                    'posts_per_page' => 3,
                    'paged' => $paged
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="video-bg video-page">
                        <div class="video-wrap">
                            <div class="video-block"><?php the_field('video_link', $post->ID) ?></div>
                        </div>
                        <?php the_field('video_description', $post->ID) ?>
                    </div>
                <?php endwhile;?>
                <div class="pagination">
                    <?php
                    $big = 999999999;
                    $img_directory = get_template_directory_uri();
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'end_size' => 1,
                        'mid_saze' => 1,
                        'total' => $loop->max_num_pages,
                        'prev_text' => '<svg><use xlink:href="'.$img_directory.'/assets/img/sprite.svg#arr-l"></use></svg>',
                        'next_text' => '<svg><use xlink:href="'.$img_directory.'/assets/img/sprite.svg#arr-r"></use></svg>'
                    ));
                    ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </section>
        </div>
    </main>
    <?php include_once('templates/footer-line.php'); ?>
</div>
<?php get_footer(); ?>