$(document).ready(function() {

    setBannerHeight();

    window.addEventListener("resize", setBannerHeight);
/*
    $('.owl-carousel').owlCarousel({
        items: 1,
        lazyLoad: true,
        loop: true,
        dots: true,
        margin: 0
    });
*/
});

function setBannerHeight() {
    var img = document.getElementById('front-image');
    var imageHeight = img.clientHeight;

    document.getElementById("card").style.height = imageHeight + "px";
}