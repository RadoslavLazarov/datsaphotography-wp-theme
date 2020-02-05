<?php
/**
 * Template Name: About Template
 */
    get_header();
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo do_shortcode( '[breadcrumb]' ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 heading">
                <h1><?php echo get_the_title() ?></h1>
                <div class="heading__separator"></div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 about-background" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
            <div class="col-lg-6 about-content">
                <?php if ( get_field('content') ): ?>
                    <?php the_field('content') ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>