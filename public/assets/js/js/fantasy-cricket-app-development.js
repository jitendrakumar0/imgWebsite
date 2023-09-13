$('.fantasy-cricket-sldier').owlCarousel({
    loop: true,
    items: 1,
    autoHeight:true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    margin: 0,
    padding: 0,
    nav: true,
    dots: false,
    autoplay: true,
    center: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            nav: false,
            dots: true,
        },
        500: {
            nav: false,
            dots: true,
        },
        600: {
            nav: false,
            dots: true,
        },
        992: {
            nav: true,
            dots: false,
        },
        1299: {
            nav: true,
            dots: false,
        },
        1499: {
            nav: true,
            dots: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});

jQuery(document).ready(function($) {

    $('.customers-testimonials').owlCarousel({
        loop: true,
        center: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                nav: false,
                dots: true,
                items: 1 
            },
            500: {
                nav: false,
                dots: true,
                items: 1 
            },
            600: {
                nav: false,
                dots: true,
                items: 1 
            },
            768: { 
                nav: false,
                dots: true,
                items: 2
            },
            992: {
                nav: true,
                dots: false,
                items: 2
            },
            1170: { 
                nav: true,
                dots: false,
                items: 2
            },
            1299: {
                nav: true,
                dots: false,
                items: 2
            },
            1499: {
                nav: true,
                dots: false,
                items: 2
            }
        },
    });
});

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
            items: 2,
            nav: false
        },
        500: {
            items: 3,
            nav: false
        },
        600: {
            items: 5,
            nav: false
        },
        1000: {
            items: 6,
            nav: true
        },
        1299: {
            items: 7,
            nav: true
        },
        1499: {
            items: 8,
            nav: true
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});

$('.OverviewForOther').owlCarousel({
    loop: true,
    center: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: true,
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
            items: 2,
            dots: true,
            loop: true,
            nav: false
        },
        1000: {
            items: 3,
            dots: true,
            loop: true,
            nav: true
        },
        1299: {
            items: 3,
            dots: false,
            loop: false,
            nav: true
        },
        1499: {
            items: 3,
            dots: false,
            loop: false,
            nav: true
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.cricketApp')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }else{
                        event.preventDefault()
                        event.stopPropagation()
                        $.ajax({
                            type: "POST",
                            url: $('.ajxURL').val(),
                            data: $('form#connectForm').serialize(), // <--- THIS IS THE CHANGE
                            dataType: "json",
                            async: false,
                            cache:false,
                            beforeSend: function(){ 
                                $('#loader').show();  					  
                            },
                            success: function(data){ 
                                if(data[0].error=='1'){
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
})()
