// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.homeconnectFormValidation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()


jQuery(document).ready(function($) {

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
});
    