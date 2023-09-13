  $('.stories').owlCarousel({
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
        items: 1,
        dots: true,
        loop: true,
        nav: false
      },
      500: {
        items: 1,
        dots: true,
        loop: true,
        nav: false
      },
      600: {
        items: 1,
        dots: true,
        loop: true,
        nav: false
      },
      1000: {
        items: 1,
        dots: false,
        loop: false,
        nav: false
      },
      1299: {
        items: 1,
        margin: 13,
        dots: false,
        loop: false,
        nav: false
      },
      1499: {
        items: 1,
        margin: 13,
        dots: false,
        loop: false,
        nav: false
      }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
  });



 // $('.tour').on('mouseenter', function() {
  //  $(this).addClass("default-selected-steps");
  //  });
  //  $('.tour').on('mouseleave', function() {
  //  $(this).removeClass("default-selected-steps");
    
  //  });
  

