window.Swiper = require('swiper');

var bannerSlider = new Swiper('.swiper-banner', {
    speed: 600,
    effect: 'fade',
    simulateTouch: false,
    pagination: {
        el: '.banner-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.banner-button-next',
        prevEl: '.banner-button-prev',
    },
});

jQuery(function ($) {
    if ($('#recommended-albums .ngg-albumoverview').length) {
        $('#recommended-albums .ngg-albumoverview').addClass('swiper-wrapper');
        $('#recommended-albums .ngg-clear').detach();
    }

    var albumsSwiper = new Swiper('.swiper-albums', {
        init: false,
        speed: 600,
        slidesPerView: 'auto',
        simulateTouch: false,
        navigation: {
            nextEl: '.albums-button-next',
            prevEl: '.albums-button-prev',
        },
    });

    $('#recommended-albums .ngg-album-compact').each(function (i, el) {
        $(el).addClass('swiper-slide');
        albumsSwiper.addSlide(i, el);
    });
    albumsSwiper.init();
});
