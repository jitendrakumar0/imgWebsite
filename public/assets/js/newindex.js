

var el = document.getElementById('phone');
var input = document.querySelector("#phone");
if (el != null) {
    window.intlTelInput(input, {
        initialCountry: "in",
        separateDialCode: true,
        preferredCountries: ['in', 'us'],
        // utilsScript: "assets/vendor/intl-tel-input/js/utils.js",
    });
}



$('.awards-silde').owlCarousel({
    loop: true,
    items: 3,
    margin: 0,
    stagePadding:0,
    padding:0,
    // animateOut: 'fadeOut',
    nav: false,
    dots: false,
    autoplay: true,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 9000,
    autoplayHoverPause: true,
    smartSpeed: 250,
    autoHeight:true,
    responsiveClass: true,
    responsive: {
        0: {
            nav: false,
            dots: false,
            items: 2,
        },
        600: {
            nav: false,
            dots: false,
            items: 2,
        },
        1000: {
            nav: false,
            dots: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


$('.casestudy').owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    stagePadding:0,
    padding:0,
    // animateOut: 'fadeOut',
    nav: false,
    dots: false,
    autoplay: true,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 9000,
    autoplayHoverPause: true,
    smartSpeed: 250,
    autoHeight:true,
    responsiveClass: true,
    responsive: {
        0: {
            nav: false,
            dots: false,
        },
        600: {
            nav: false,
            dots: false,
        },
        1000: {
            nav: false,
            dots: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


$('.blog_slider-main').owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    autoplay: false,
    left: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    stagePadding: 0,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            dots: false,
            nav: false,
        },
        500: {
            items: 1,
            dots: false,
            nav: false,
        },
        600: {
            dots: false,
            nav: false,
        },
        992: {
            dots: false,
            nav: false,
            items: 2,
        },
        1000: {
            dots: false,
            nav: false,
            items: 3,
        },
        1299: {
            dots: false,
            nav: false,
            items: 3,
        },
        1499: {
            items: 3,
            dots: false,
            nav: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


// if (window.innerWidth > 991) {

// };


