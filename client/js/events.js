jQuery(function ($) {

    // Toggle modal window on service page
    var $modal = $('.service-modal');
    var $modalContainer = $('.service-modal__container');
    var $modalContent = $('.service-modal__content');
    var $behindModal = $('header, main, footer');

    $('.service__button').on('click', function () {
        var serviceContent = $(this).closest('.service__box').find('.service__content').clone();

        $modalContent.html(serviceContent);
        $modal.show();

        setTimeout(function () {
            $modalContainer.addClass('show-in');
            $behindModal.addClass('blur-in');
        }, 0);
    });

    $modal.on('click', function (e) {
        if ($(e.target)[0].className == 'service-modal__wrapper') {
            $modalContainer.removeClass('show-in');
            $behindModal.removeClass('blur-in');

            setTimeout(function () {
                $modal.hide();
            }, 300);
        }
    });

    $('.service-modal__close').on('click', function (e) {
        $modalContainer.removeClass('show-in');
        $behindModal.removeClass('blur-in');

        setTimeout(function () {
            $modal.hide();
        }, 300);
    });
    // ====================

});
