
$('.case-portfolio').owlCarousel({
    loop: false,
    items: 1,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: false,
    center: false,
    freeDrag: false,
    // lazyLoad: true,
    responsiveClass: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 1200,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: true,
        },
        500: {
            items: 1,
            nav: false,
            dots: true,
        },
        600: {
            items: 1,
            nav: false,
            dots: true,
        },
        992: {
            items: 1,
            nav: false,
            dots: true,
        },
        1000: {
            items: 1,
            nav: true,
            dots: false,
        },
        1299: {
            items: 1,
            nav: true,
            dots: false,
        },
        1499: {
            items: 1,
            // nav: true,
            // dots: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});
