
// Navigation Js Onclick Starts
$(document).ready(function () {
    $('.dropdown-toggle1').click(function () {
        $('.icon').find('.toggleico')
        $('.toggleico').toggleClass("down");

    })
});
// Navigation Js Onclick Ends

// Navigation Js Onclick Starts
$(document).ready(function () {
    $('.dropdown-toggle2').click(function () {
        $('.icon').find('.toggleico2')
        $('.toggleico2').toggleClass("down2");

    })
});
// Navigation Js Onclick Ends

// Slick Slider Starts
$('#slick-carousel').slick({
    infinite: true,
    slidesToShow: 1, // Shows a three slides at a time
    slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
    arrows: true, // Adds arrows to sides of slider
    dots: false // Adds the dots on the bottom

});
// Slick Slider Ends