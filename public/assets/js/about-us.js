$('.awards_slider').owlCarousel({
    loop: true,
    items: 3,
    nav: true,
    margin: 0,
    padding: 0,
    dots: false,
    autoplay: true,
    center: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"],
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2, 
        },
        1023:{
            items:3, 
        }
    }
});


jQuery(document).ready(function($) {

    $('.customers-testimonials').owlCarousel({
        loop: true,
        center: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
          0: { items: 1 },
          768: { items: 2 },
          1170: { items: 3 }
        }
    });
});