<?php

get_header();

while (have_posts()) :
    the_post();
?>

    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(
            <?php echo get_field('slideshow_background_image'); ?>); background-repeat: no-repeat; background-position: center;">
        </div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            <div class="page-banner__intro">
                <p><?php echo get_field('slideshow_subtitle'); ?></p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?php echo site_url('/') ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to Homepage</a>
            </p>
        </div>
        <div class="generic-content"><?php the_content(); ?></div>
    </div>

<?php endwhile;
get_footer(); ?>