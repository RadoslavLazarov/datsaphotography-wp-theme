<?php
/**
 * Template Name: Gallery Template
 */
    get_header();
?>

<main>
    <?php get_template_part( 'template-parts/content', 'page-top' ); ?>
    <div id="gallery-page" class="container">
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