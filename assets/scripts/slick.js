$(window).on('load resize orientationchange', function () {
    $('.carousel-cards').each(function () {
        let $carousel = $(this);

        if ($(window).width() > 768) {
            if ($carousel.hasClass('slick-initialized')) {
                $carousel.slick('unslick');
            }
        }

        else {
            if (!$carousel.hasClass('slick-initialized')) {
                $carousel.slick({
                    dots: false,
                    arrows: true,
                    speed: 400,
                    fade: true
                });
            }
        }
    })

    $('.carousel-topics').each(function () {
        let $carousel = $(this);

        if ($(window).width() > 768) {
            if ($carousel.hasClass('slick-initialized')) {
                $carousel.slick('unslick');
            }
        }

        else {
            if (!$carousel.hasClass('slick-initialized')) {
                $carousel.slick({
                    dots: true,
                    arrows: false,
                    speed: 400,
                    fade: true
                });
            }
        }
    })
})