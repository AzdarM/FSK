$(document).ready(function() {
    $('.slider_slick').slick({
        infinite: true,
        autoplay: false,
        autoplaySpeed: 2500,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        adaptiveHeight: true,
        variableWidth: true,
    });
});