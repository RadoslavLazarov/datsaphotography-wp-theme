<?php
/**
 * Template Name: Services Template
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
        <div class="row justify-content-center">
            <div class="col-10 service-wrapper">
                <?php if ( have_rows('services') ): 
                        while ( have_rows('services') ): the_row(); 
                            $name = get_sub_field('name');
                            $image = get_sub_field('image'); 
                            $description = get_sub_field('description'); ?>
                            <div class="row no-gutters service">
                                <div class="col-sm-6">
                                    <div class="service__image" style="background-image:url(<?php echo $image; ?>)"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service__box">
                                        <div class="service__name">
                                            <h2><?php echo $name ?></h2>
                                            <div class="button service__button">Виж повече</div>
                                        </div>
                                        <div class="service__content">
                                            <h2><?php echo $name ?></h2>
                                            <div class="service__text">
                                                <?php echo $description; ?>
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
</main>
<div class="service-modal">
    <div class="service-modal__wrapper">
        <div class="service-modal__container">
            <div class="service-modal__content"></div>
            <div class="service-modal__close">
                <i class="far fa-times-circle"></i>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
