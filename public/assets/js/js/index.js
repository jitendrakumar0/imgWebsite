$('.owl-hero-slider').owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    // animateOut: 'fadeOut',
    nav: false,
    dots: true,
    autoplay: true,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 7000,
    autoplayHoverPause: true,
    smartSpeed: 250,
    autoHeight:true,
    responsiveClass: true,
    responsive: {
        0: {
            nav: false,
            dots: true,
        },
        600: {
            nav: false,
            dots: true,
        },
        1000: {
            nav: false,
            dots: true,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


var $post = $(".hero_image_toggles");
setInterval(function () {
    $post.toggleClass("active");
}, 4000);



$('.owl-clients-slider').owlCarousel({
    loop: true,
    items: 9,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: true,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 4,
            nav: false
        },
        500: {
            items: 5,
            nav: false
        },
        600: {
            items: 5,
            nav: false
        },
        700: {
            items: 6,
            nav: false
        },
        1000: {
            items: 7,
            nav: true
        },
        1299: {
            items: 8,
            nav: true
        },
        1499: {
            items: 9,
            nav: true
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


$('.owl-exclusiveServiceOfferings-slider').owlCarousel({
    loop: false,
    items: 1,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: false,
    center: false,
    freeDrag: false,
    lazyLoad: true,
    responsiveClass: true,
    // autoplayTimeout: 2000,
    // autoplayHoverPause: true,
    // smartSpeed: 1200,
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
            nav: true,
            dots: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});

$('.owl-onTrending-slider').owlCarousel({
    loop: false,
    items: 1,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: false,
    center: false,
    freeDrag: false,
    lazyLoad: true,
    responsiveClass: true,
    // autoplayTimeout: 2000,
    // autoplayHoverPause: true,
    // smartSpeed: 1200,
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
            items: 2,
            nav: false,
            dots: true,
        },
        1000: {
            items: 2,
            nav: false,
            dots: true,
        },
        1299: {
            items: 3,
            nav: false,
            dots: false,
        },
        1499: {
            items: 3,
            nav: false,
            dots: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
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
            dots: true,
            nav: false,
        },
        1299: {
            dots: false,
            nav: true,
        },
        1499: {
            dots: false,
            nav: true,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


if (window.innerWidth > 991) {

};



// Services
function services_dactive() {
    $(".s-sidebar .s-item").each(function () {
        $(this).removeClass('active');
    });
}


$(".s-sidebar .s-item").click(function () {
    services_dactive();
    $(this).addClass('active');
});


$('.owl-services-carousel').owlCarousel({
    items: 1,
    loop: true,
    center: true,
    nav: true,
    dots: true,
    autoplay: false,
    freeDrag: true,
    // autoplayHoverPause: true,
    touchDrag: false,
    mouseDrag: false,
    // smartSpeed: 450,
    stagePadding: 150,
    responsiveClass: true,
    autoHeight:true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: true,
            touchDrag: true,
            mouseDrag: true,
            freeDrag: false,
            stagePadding: 0,
            margin: 10,
            loop: true,
            center: true,
        },
        500: {
            items: 1,
            nav: false,
            dots: true,
            touchDrag: true,
            mouseDrag: true,
            freeDrag: false,
            stagePadding: 0,
            margin: 10,
            loop: true,
            center: true,
        },
        600: {
            items: 1,
            nav: false,
            dots: true,
            touchDrag: true,
            mouseDrag: true,
            freeDrag: false,
            stagePadding: 0,
            margin: 10,
            loop: true,
            center: true,
        },
        992: {
            items: 1,
            nav: false,
            dots: true,
            touchDrag: true,
            mouseDrag: true,
            freeDrag: false,
            stagePadding: 150,
            margin: -20,
            loop: true,
            center: true,
        },
        1000: {
            items: 1,
            nav: true,
            dots: false,
            touchDrag: true,
            mouseDrag: true,
            freeDrag: false,
            stagePadding: 150,
            margin: -20,
            loop: true,
            center: true,
        },
        1199: {
            items: 1,
            nav: true,
            dots: false,
            touchDrag: true,
            mouseDrag: true,
            freeDrag: false,
            loop: true,
            center: true,
            margin: -20,
        },
        1400: {
            items: 1,
            nav: false,
            dots: false,
            touchDrag: false,
            mouseDrag: false,
            freeDrag: true,
            loop: true,
            center: true,
            URLhashListener: true,
            startPosition: 'URLHash',
            margin: -20,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});



jQuery(document).ready(function($) {

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
});



// Trending
function trending_dactive() {
    $(".trending .service-box").each(function () {
        $(this).removeClass('active');
    });
}


$(".trending .service-box").mouseover(function () {
    trending_dactive();
    $(this).addClass('active');
});




// case study load more button
// $(document).ready(function () {
//     $(".case-study-item").slice(0, 4).show();
//     $("#seeMore").click(function (e) {
//         e.preventDefault();
//         $(".case-study-item:hidden").slice(0, 4).fadeIn("slow");

//         if ($(".case-study-item:hidden").length == 0) {
//             $("#seeMore").fadeOut("slow");
//         }
//     });
// });












// Contact Us Form

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.homeContactFormValidation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                else{
                        event.preventDefault()
                        event.stopPropagation()
                        $.ajax({
                            type: "POST",
                            url: $('#ajxURL').val(),
                            data: $('form#feedInput').serialize(), // <--- THIS IS THE CHANGE
                            dataType: "json",
                            async: false,
                            cache:false,
                            beforeSend: function(){ 
                                $('#loader').show();  					  
                            },
                            success: function(data){ 
                                if(data[0].error=='1'){
                                // $('#msg').html('<p style="color:red;font-size:18px;text-align:center">'+data[0].msg+'</p>'); 
                                alert(data[0].msg);
                                }else{
                                    window.location = $('#reUrl').val();
                                } 
                            $('#loader').hide(); 
                            
                            },
                            error: function() { alert("Error posting feed."); $('#loader').hide();  }
                        });
                }
                form.classList.add('was-validated')
            }, false)
        })
})();