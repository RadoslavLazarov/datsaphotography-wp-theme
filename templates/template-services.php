<?php
/**
 * Template Name: Services Template
 */
    get_header();
?>

<main>
    <?php get_template_part( 'template-parts/content', 'page-top' ); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 service-wrapper">
                <?php if ( have_rows('services') ): 
                        while ( have_rows('services') ): the_row(); ?>
                            <div class="row no-gutters service">
                                <div class="col-sm-6">
                                    <div class="service__image" style="background-image:url(<?php the_sub_field('image'); ?>)"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service__box">
                                        <div class="service__name">
                                            <h2><?php the_sub_field('name'); ?></h2>
                                            <div class="button service__button">Виж повече</div>
                                        </div>
                                        <div class="service__content">
                                            <h2><?php the_sub_field('name'); ?></h2>
                                            <div class="service__text">
                                                <?php the_sub_field('description'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
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
<div class="modal">
    <div class="modal__wrapper">
        <div class="modal__container">
            <div class="modal__content"></div>
            <div class="modal__close">
                <i class="far fa-times-circle"></i>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
