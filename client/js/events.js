jQuery(function ($) {

    // Toggle modal window on service page
    var $modal = $('.modal');
    var $modalContainer = $('.modal__container');
    var $modalContent = $('.modal__content');
    var $behindModal = $('header, main, footer');

    $('.service__button').on('click', function () {
        var serviceContent = $(this).closest('.service__box').find('.service__content').clone();
        $('.menu-top-container').hide();
        $modalContent.html(serviceContent);
        $modal.show();

        setTimeout(function () {
            $modalContainer.addClass('show-in');
            $behindModal.addClass('blur-in');
        }, 0);
    });

    $modal.on('click', function (e) {
        if ($(e.target)[0].className == 'modal__wrapper') {
            $('.menu-top-container').show();
            $modalContainer.removeClass('show-in');
            $behindModal.removeClass('blur-in');

            setTimeout(function () {
                $modal.hide();
            }, 300);
        }
    });

    $('.modal__close').on('click', function (e) {
        $('.menu-top-container').show();
        $modalContainer.removeClass('show-in');
        $behindModal.removeClass('blur-in');

        setTimeout(function () {
            $modal.hide();
        }, 300);
    });
    // ====================

});
