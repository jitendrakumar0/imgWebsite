
  $('.fantasy-cricket-sldier').owlCarousel({
    loop: true,
    center: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: true,
    margin: 8,
    responsiveClass: true,
    responsive: {
      0: {
        items: 2,
        dots: true,
        loop: true,
        nav: false
      },
      500: {
        items: 2,
        dots: true,
        loop: true,
        nav: false
      },
      600: {
        items: 2,
        dots: true,
        loop: true,
        nav: false
      },
      1000: {
        items: 4,
        dots: false,
        loop: false,
        nav: false
      },
      1299: {
        items: 4,
        margin: 13,
        dots: false,
        loop: false,
        nav: false
      },
      1499: {
        items: 4,
        margin: 13,
        dots: false,
        loop: false,
        nav: false
      }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
  });



