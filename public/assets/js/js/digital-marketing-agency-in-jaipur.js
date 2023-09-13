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