<?php
/*
Template Name: Om oss
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
            <section class="about-us">
                <h2><?php the_field('headline_for_information_about_us') ?></h2>
                <div class="flex-wrap">
                    <div class="text-description">
                        <?php the_field('text_with_information_about_us') ?>
                    </div>
                    <div class="slider contact-slider">
                        <div class="arrow-left arrow-left-contact arr-primary js-arrow-left">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#arr-l"></use>
                            </svg>
                        </div>
                        <div class="contact-img-line js-slider-line">
                            <?php
                            $images = get_field('slider_about_us', '81');
                            $img = explode(',', $images);
                            foreach ($img as $id) { ?>
                                <img class="js-slider-object" src="<?php echo wp_get_attachment_url($id); ?>" alt="<?php echo get_the_title($id); ?>" />
                            <?php } ?>
                        </div>
                        <div class="arrow-right arrow-right-contact arr-primary js-arrow-right">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#arr-r"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="wrapper">
            <section class="contact">
                <h2><?php the_field('headline_for_contact_block') ?></h2>
                <?php
                $tel = get_field('contact_phone');
                $contact_phone = preg_replace("/[^,.0-9]/", '', $tel);
                ?>
                <div class="flex-wrap">
                    <div class="contact-information"> <strong><a class="info-tel" href="tel:+<?php echo $contact_phone; ?>"><?php the_field('contact_phone') ?></a></strong><strong>
                            <address class="info-address"><?php the_field('contact_adress') ?></address>
                        </strong><strong><a class="info-mail" href="mailto:<?php the_field('contact_e-mail') ?>"><?php the_field('contact_e-mail') ?></a></strong></div>
                    <?php echo do_shortcode( '[contact-form-7 id="296" title="Contact form"]' ); ?>    
                </div>
            </section>
        </div>
    </main>
    <?php include_once('templates/footer-line.php'); ?>
</div>
<?php get_footer(); ?>