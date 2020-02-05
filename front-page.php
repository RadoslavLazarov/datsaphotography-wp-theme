<?php get_header('home'); ?>
    
<!-- <img src="<?php // the_post_thumbnail_url() ?>" alt=""> -->

<?php // get_template_part( 'template-parts/content', 'banner' ); ?>

<main>
    <?php get_template_part( 'template-parts/content', 'banner' ); ?>
    
    <div class="container">
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
    <div class="container">
        <div class="row">
            <div class="col-12 heading">
                <h1>Препоръчани албуми</h1>
                <div class="heading__separator"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 recommended-albums">
                <div class="swiper-container swiper-albums">
                    <?php echo do_shortcode('[ngg src="albums" ids="2" display="basic_compact_album"]'); ?>
                </div>
                <div class="swiper-button-next albums-button-next"></div>
                <div class="swiper-button-prev albums-button-prev"></div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>