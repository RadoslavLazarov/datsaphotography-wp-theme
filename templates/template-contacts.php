<?php
/**
 * Template Name: Contacts Template
 */
    get_header();
?>

<main id="contacts-page">
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
    <div class="container-fluid mt-5 p-0">
        <div class="row">
            <div class="col-12 form-wrapper" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
                <?php echo do_shortcode('[contact-form-7 id="308" title="Contact form"]') ?>
            </div>
        </div>
    </div>
    <div class="container map-wrapper">
        <div class="row">
            <div class="col-8 pr-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.1869938817204!2d25.95677961567333!3d43.85195274757348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40ae60c9466f5df5%3A0x2a2a1d25150e9a19!2sDat&#39;s%20A%20Photography!5e0!3m2!1sbg!2sbg!4v1580632874509!5m2!1sbg!2sbg"
                    width="" height="" frameborder="0" style="border:0;" allowfullscreen="" id="map">
                </iframe>
            </div>
            <div class="col-4 pl-0">
                <div class="contacts">
                    <?php if ( have_rows('contacts', 'option') ): 
                            while ( have_rows('contacts', 'option') ): the_row();  
                                $blank = get_sub_field('blank'); ?>

                                <div class="contact" style="color:<?php the_sub_field('color'); ?>">
                                    <i class="<?php the_sub_field('icon'); ?>"></i>
                                    <a href="<?php the_sub_field('link'); ?>" <?php echo ($blank ? 'target="blank"' : '' ) ?>><?php the_sub_field('name'); ?></a>
                                </div>
                            <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div> 
        </div>
    </div>
</main>

<?php get_footer(); ?>