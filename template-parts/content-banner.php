<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0 image-slider">
            <div class="swiper-container swiper-banner">
                <div class="swiper-wrapper">
                    <?php if ( have_rows('slider') ): 
                            while ( have_rows('slider') ): the_row(); ?>
                                <div class="swiper-slide" style="background-image:url(<?php the_sub_field('image'); ?>)">
                                    <div class="image-slider__wrapper">
                                        <div class="container image-slider__container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row m-0 image-slider__inside">
                                                        <div class="col-lg-8 p-0">
                                                            <div class="image-slider__image-wrapper">
                                                                <div class="image-slider__image" style="background-image:url(<?php the_sub_field('image'); ?>)"></div>
                                                                <div class="swiper-pagination banner-pagination"></div>
                                                                <div class="swiper-button-next banner-button-next"></div>
                                                                <div class="swiper-button-prev banner-button-prev"></div>
                                                            </div>
                                                            <div class="image-slider__mobile-overlay"></div>
                                                        </div>
                                                        <div class="col-lg-4 image-slider__summary-wrapper">
                                                            <div class="image-slider__summary">
                                                                <?php the_sub_field('content') ?>
                                                            </div>
                                                        </div>
                                                    </div>
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
    </div>
</div>