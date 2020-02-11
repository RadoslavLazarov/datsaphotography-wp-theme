<?php
/**
 * Template Name: About Template
 */
    get_header();
?>

<main>
    <?php get_template_part( 'template-parts/content', 'page-top' ); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 about__background" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
            <div class="col-lg-6 about__content">
                <?php if ( get_field('content') ): ?>
                    <?php the_field('content') ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if (have_posts()): ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php   
                        while (have_posts()) {
                                the_post();
                                get_template_part( 'template-parts/content');
                        } 
                    ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>