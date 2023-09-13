

$('.solutionTesimonial').owlCarousel({
    loop: true,
    items: 1,
    margin: 30,
    padding:0,
    // animateOut: 'fadeOut',
    nav: false,
    dots: false,
    autoplay: true,
    // center: true,
    freeDrag: false,
    lazyLoad: true,
    // autoplayTimeout: 9000,
    // autoplayHoverPause: true,
    smartSpeed: 250,
    autoHeight:true,
    responsiveClass: true,
    responsive: {
        0: {
            nav: false,
            dots: false,
            items: 1,
        },
        600: {
            nav: false,
            dots: false,
            items: 2,
        },
        1000: {
            nav: false,
            dots: false,
            items: 4,
        }
    },
    // navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});

$('.testiomnialCarousel').owlCarousel({
    loop: true,
    items: 2,
    margin: 15,
    nav: false,
    dots: false,
    autoplay: true,
    center: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    smartSpeed: 2500,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
        },
        576: {
            items: 1,
            nav: false,
            dots: false,
        },
        768: {
            items: 1.5,
            nav: false,
            dots: false,
        },
        992: {
            items: 2,
            nav: false,
            dots: false,
        },
        1200: {
            items: 1,
            nav: false,
            dots: false,
        },
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});

