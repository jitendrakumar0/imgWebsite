function devolopment_service_dactive() {
    $(".devolopment_service_tab .s-sidebar .s-item").each(function () {
        $(this).removeClass('active');
    });
}
$(document).ready(function () {
 
    $('.appSlider').owlCarousel({
        loop: true,
        items: 4,
        autoHeight:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        margin: 0,
        padding: 0,
        nav: true,
        dots: false,
        autoplay: true,
        // center: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items:3,
                nav: false,
                dots: false,
            },
            500: {
                nav: false,
                dots: false,
            },
            600: {
                nav: false,
                dots: false,
            },
            992: {
                nav: false,
                dots: false,
            },
            1299: {
                nav: false,
                dots: false,
            },
            1499: {
                nav: false,
                dots: false,
            }
        },
        navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
    });


    $(".s-item").click(function () {
        devolopment_service_dactive();
        $(this).addClass('active');
        let sr = $(this).attr('id');
        $(`.all-app-services`).children('div').hide();
        $(`[data-hash=${sr}]`).fadeIn();
        console.log(sr);
    });
});