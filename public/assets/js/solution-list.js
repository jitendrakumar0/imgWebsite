AOS.init();



$('.owl-product-carosule').owlCarousel({
    loop:true,
    // margin:10,
    autoplay:true,
    autoplayTimeout:2500,
    autoplaySpeed:2000,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,

        },
        1000:{
            items:1,     
        },
        1200: {
            items:1, 
        },

    }            
});
