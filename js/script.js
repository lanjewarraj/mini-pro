$(document).ready(function () {
    //hero slider
    $('.hero-slider').slick({
     arrows: true,
    });
    
    //video slider
    $('.latest-tut-slider').owlCarousel({
        items:4,
        merge:true,
        video:true,
        loop:true,
        margin:10,
        video:true,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:1
            },
            600:{
                items:3
            }
        }
    });
    
});