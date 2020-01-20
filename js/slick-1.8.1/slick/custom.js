$(document).ready(function() {
    $('.slider_slick').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2500,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        adaptiveHeight: true,
        variableWidth: true,
    });
});