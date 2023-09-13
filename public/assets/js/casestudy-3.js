

$('.fabTestimonial').owlCarousel({
    loop: true,
    items: 1,
    margin: 10,
    padding:0,
    animateOut: 'fadeOut',
    nav: false,
    dots: false,
    autoplay: true,
    center: true,
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
            items: 1,
        },
        1000: {
            nav: false,
            dots: false,
            items: 1,
        }
    },
    // navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});
