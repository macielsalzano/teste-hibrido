require([
    'jquery',
    'jquery/ui',
    'slick'
], function($) {
    $(document).ready(function() {
        $(".slick-slider-full").slick({
            autoplay: true,
            dots: true,
            arrows: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    });
});
