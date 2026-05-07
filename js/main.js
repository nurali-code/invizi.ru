$(function () {
    if (window.Fancybox) {
        Fancybox.bind('[data-fancybox]', {});
    }

    $('.hits__slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        infinite: true,
        speed: 400,
        responsive: [
            { breakpoint: 1200, settings: { slidesToShow: 3 } },
            { breakpoint: 900, settings: { slidesToShow: 2 } },
            { breakpoint: 600, settings: { slidesToShow: 1 } }
        ]
    });

    $('.video-reviews__grid').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        infinite: false,
        speed: 400,
        variableWidth: true,
        mobileFirst: true,
        responsive: [
            { breakpoint: 768, settings: 'unslick' }
        ]
    });

    $('.main_brands__slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.main_brands .slick-prev'),
        nextArrow: $('.main_brands .slick-next'),
        dots: false,
        infinite: true,
        speed: 400,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 4 } },
            { breakpoint: 768, settings: { slidesToShow: 3 } }
        ]
    });

    $('.main_objects__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        infinite: false,
        speed: 400,
        responsive: [
            { breakpoint: 1200, settings: { slidesToShow: 2 } },
            { breakpoint: 700, settings: { slidesToShow: 1 } }
        ]
    });

    $('.main_faq__question').on('click', function () {
        const $item = $(this).closest('.main_faq__item');
        const $answer = $item.find('.main_faq__answer');
        const $icon = $(this).find('.ic');
        const isOpen = $answer.is(':visible');

        // Close all other items
        $('.main_faq__item').each(function () {
            if ($(this).find('.main_faq__answer').is(':visible')) {
                $(this).find('.main_faq__answer').slideUp(300);
                $(this).find('.ic').css('transform', 'rotate(0deg)');
            }
        });

        // Toggle current item
        if (!isOpen) {
            $answer.slideDown(300);
            $icon.css('transform', 'rotate(45deg)');
        }
    });

    // File input functionality
    $('#atach').on('change', function () {
        const fileName = $(this).val().split('\\').pop();
        const $label = $(this).siblings('.atach__label');
        const $labelText = $label.find('.atach__label-text');
        
        if (fileName) {
            $labelText.text(fileName);
            $label.addClass('--selected');
        } else {
            $labelText.text('Выбрать');
            $label.removeClass('--selected');
        }
    });
});
