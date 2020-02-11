jQuery(function ($) {

    var width = $('#recommended-albums .ngg-album-compact').width();
    $('#recommended-albums .ngg-album-compact').height(width)

    $(window).on('resize', function () {
        var width = $('#recommended-albums .ngg-album-compact').width();
        $('#recommended-albums .ngg-album-compact').height(width)
    });

    $('.ngg-album-link a').append('<div class="thumbnail-overlay"></div>');
    $('#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent').append('<div class="thumbnail-overlay"></div>');

    $('.ngg-gallery-thumbnail img').attr('title', '');
    $('.ngg-album-compactbox a').attr('title', '');


    $('#gallery-page .ngg-description p').each(function () {
        var $that = $(this);
        var maxlength = 200;
        var value = $that.text();
        if (value.length > maxlength) {
            $that.text(value.substring(0, maxlength) + '...');
        }
    });

    $('#gallery-page .ngg-albumcontent').each(function () {
        var $that = $(this);
        var link = $that.find('a').attr('href');
        $that.wrap('<a href="' + link + '"></a>');
    });

    $('label').each(function () {
        var $that = $(this);
        $that.contents().eq(0).wrap('<span class="field-title"></span>');
        var $fieldTitle = $that.find('.field-title');
        $that.find('.wpcf7-form-control-wrap').append($fieldTitle);
    });

    $('input[type="submit"]').attr('id', 'form-submit');

    $('input, textarea').on('input', function () {
        if ($(this).val()) {
            $(this).addClass('has-value');
        } else {
            $(this).removeClass('has-value');
        }
    });

});
