$('.web-design-process-slider').owlCarousel({
    loop: true,
    items: 6,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: true,
    center: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            nav: false
        },
        500: {
            items: 2,
            nav: false
        },
       768: {
            items: 3,
            nav: false
        },
        992: {
            items: 6,
            loop: false,
            autoplay: false,
            nav: false
        },
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});