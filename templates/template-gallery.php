<?php
/**
 * Template Name: Gallery Template
 */
    get_header();
?>

<main>
    <div id="gallery-page" class="container">
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
        <div class="row">
            <div class="col-12">
                <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part( 'template-parts/content');
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>