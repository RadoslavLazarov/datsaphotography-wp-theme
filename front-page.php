<?php get_header('home'); ?>
    
<main>
    <?php get_template_part( 'template-parts/content', 'banner' ); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-12 heading">
                <h1>Препоръчани албуми</h1>
                <div class="heading__separator"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="recommended-albums">
                <div class="swiper-container swiper-albums">
                    <?php echo do_shortcode('[ngg src="albums" ids="2" display="basic_compact_album"]'); ?>
                </div>
                <div class="swiper-button-next albums-button-next"></div>
                <div class="swiper-button-prev albums-button-prev"></div>
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