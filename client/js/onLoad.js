jQuery(function ($) {

    // $('.badka').height(windowHeight - (headerHeight + percent));
    function calc() {
        var headerHeight = $('header').outerHeight();
        var outerWidth = $('.badka').outerWidth(true);
        var innerWidth = $('.badka').innerWidth();
        var windowWidth = $(window).width();
        var windowHeight = $(window).height();
        var percent = (windowWidth - (windowWidth * 0.90)) / 2;
        // $('.badka').css({ 'padding-top': headerHeight - 90 });
        $('.badka').css({ 'padding-top': headerHeight });
        // $('.badka').css({ 'padding-bottom': percent });
        // $('.shadow').css({ 'height': windowHeight - 32 - (headerHeight + percent) }); // 32 pixels from admin bar
    }
    // calc();
    // if (window.matchMedia('(min-width: 992px)').matches) {
    //     calc();
    // } else {
    //     $('.badka').css({ 'padding': '0' });
    //     $('.shadow').css({ 'height': 'unset' });
    // }

    $(window).on('resize', function () {
        var width = $('.recommended-albums .ngg-album-compact').width();
        $('.recommended-albums .ngg-album-compact').height(width)
    });

    var width = $('.recommended-albums .ngg-album-compact').width();
    $('.recommended-albums .ngg-album-compact').height(width)

    $('.ngg-album-link a').append('<div class="thumbnail-overlay"></div>');
    $('#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent').append('<div class="thumbnail-overlay"></div>');

    $('.ngg-gallery-thumbnail img').attr('title', '');
    $('.ngg-album-compactbox a').attr('title', '');


    $('#gallery-page .ngg-description p').each(function () {
        var maxlength = 200;
        var value = $(this).text();
        if (value.length > maxlength) {
            $(this).text(value.substring(0, maxlength) + '...');
        }
    });

    $('#gallery-page .ngg-albumcontent').each(function () {
        var link = $(this).find('a').attr('href');
        console.log(link);
        $(this).wrap('<a href="' + link + '"></a>');
    });

    $('label').each(function () {
        var $that = $(this);
        // $that.find('br').detach();
        $that.contents().eq(0).wrap('<span class="field-title"></span>');
        var $fieldTitle = $that.find('.field-title');
        $that.find('.wpcf7-form-control-wrap').append($fieldTitle);
    });

    $('input[type="submit"]').attr('id', 'form-submit');
    // $('input[type="submit"]').wrap('<label for="form-submit" class="button">Изпрати</label>');

    $('input, textarea').on('input', function () {
        if ($(this).val()) {
            $(this).addClass('has-value');
        } else {
            $(this).removeClass('has-value');
        }
    });

});
