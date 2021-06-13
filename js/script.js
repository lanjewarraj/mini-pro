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

//responsive tabs
$('.responsiveTabsDemo').responsiveTabs({
    startCollapsed: 'accordion',
    animation: 'slide'
});
