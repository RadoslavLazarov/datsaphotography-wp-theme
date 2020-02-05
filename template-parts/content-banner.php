<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0 image-slider">
            <div class="swiper-container swiper-banner">
                <div class="swiper-wrapper">
                    <?php if ( have_rows('slider') ): 
                            while ( have_rows('slider') ): the_row(); ?>
                                <div class="swiper-slide" style="background-image:url(<?php the_sub_field('image'); ?>)">
                                    <div class="image-slider__blur-overlay">
                                        <div class="container badka">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row m-0 shadow">
                                                        <div class="col-lg-8 p-0">
                                                            <div class="image-slider__content">
                                                                <div class="image-slider__image" style="background-image:url(<?php the_sub_field('image'); ?>)"></div>
                                                                <div class="swiper-pagination banner-pagination"></div>
                                                                <div class="swiper-button-next banner-button-next"></div>
                                                                <div class="swiper-button-prev banner-button-prev"></div>
                                                            </div>
                                                            <div class="slider-overlay"></div>
                                                        </div>
                                                        <div class="col-lg-4 image-slider__summary">
                                                            <div class="summary-wrapper">
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