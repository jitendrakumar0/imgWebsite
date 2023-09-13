
$('.case-portfolio-slider').owlCarousel({
    loop: false,
    items: 1,
    margin: 10,
    // nav: true,
    // dots: false,
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
            items: 2,
            nav: true,
            dots: false,
        },
        1299: {
            items: 2,
            nav: true,
            dots: false,
        },
        1499: {
            items: 2,
            // nav: true,
            // dots: false,
        }
    },
    // navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});



$('.owl-portfolio-slider').owlCarousel({
    loop: true,
    items: 1,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    stagePadding: 40,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            dots: true,
            nav: false,
        },
        500: {
            dots: true,
            nav: false,
        },
        600: {
            dots: true,
            nav: false,
        },
        992: {
            dots: true,
            nav: false,
        },
        1000: {
            items: 3,
            dots: true,
            nav: false,
        },
        1299: {
            items: 3,
            dots: false,
            nav: true,
        },
        1499: {
            items: 3,
            dots: false,
            nav: true,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});

$('.customers-testimonials').owlCarousel({
    loop: true,
    center: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      1170: { items: 3 }
    }
});


   
