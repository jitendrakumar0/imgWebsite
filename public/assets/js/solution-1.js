AOS.init();

$('.owl-carousel-1').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2500,
    autoplaySpeed:2000,
    responsive:{
        0:{
            items:3,
        },
        600:{
            items:3,

        },
        1000:{
            items:3,
        
            
        }
    }            
});      
$('.owl-carousel-2').owlCarousel({
    loop:true,
    margin:20,
    autoplay:true,
    autoplayTimeout:2500,
    autoplaySpeed:2000,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,

        },
        1000:{
            items:2,
        
            
        }
    }            
});