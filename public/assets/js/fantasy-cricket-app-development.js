$(".fantasy-cricket-sldier").owlCarousel({ loop: !0, items: 4, autoHeight: !0, animateOut: "fadeOut", animateIn: "fadeIn", margin: 10, padding: 0, nav: !0, dots: !1, autoplay: !0, autoplayTimeout: 5e3, autoplayHoverPause: !0, responsiveClass: !0, responsive: { 0: { nav: !1, dots: !0 }, 500: { nav: !1, dots: !0 }, 600: { nav: !1, dots: !0 }, 992: { nav: !0, dots: !1 }, 1299: { nav: !0, dots: !1 }, 1499: { nav: !0, dots: !1 } }, navText: [""] }), jQuery(document).ready((function ($) { $(".customers-testimonials").owlCarousel({ loop: !0, center: !0, autoplay: !0, autoplayTimeout: 3e3, autoplayHoverPause: !0, dots: !1, responsiveClass: !0, responsive: { 0: { nav: !1, dots: !0, items: 1 }, 500: { nav: !1, dots: !0, items: 1 }, 600: { nav: !1, dots: !0, items: 1 }, 768: { nav: !1, dots: !0, items: 2 }, 992: { nav: !0, dots: !1, items: 2 }, 1170: { nav: !0, dots: !1, items: 2 }, 1299: { nav: !0, dots: !1, items: 2 }, 1499: { nav: !0, dots: !1, items: 2 } } }) })), $(".owl-clients-slider").owlCarousel({ loop: !0, items: 9, margin: 0, nav: !0, dots: !1, autoplay: !0, center: !0, freeDrag: !1, lazyLoad: !0, autoplayTimeout: 2e3, autoplayHoverPause: !0, smartSpeed: 1200, responsiveClass: !0, responsive: { 0: { items: 2, nav: !1 }, 500: { items: 3, nav: !1 }, 600: { items: 5, nav: !1 }, 1e3: { items: 6, nav: !0 }, 1299: { items: 7, nav: !0 }, 1499: { items: 8, nav: !0 } }, navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"] }), $(".OverviewForOther").owlCarousel({ loop: !0, center: !1, autoplay: !0, autoplayTimeout: 3e3, autoplayHoverPause: !0, dots: !0, responsiveClass: !0, responsive: { 0: { items: 1, dots: !0, loop: !0, nav: !1 }, 500: { items: 1, dots: !0, loop: !0, nav: !1 }, 600: { items: 2, dots: !0, loop: !0, nav: !1 }, 1e3: { items: 3, dots: !0, loop: !0, nav: !0 }, 1299: { items: 3, dots: !1, loop: !1, nav: !0 }, 1499: { items: 3, dots: !1, loop: !1, nav: !0 } }, navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"] }), $(".owl-portfolio-slider").owlCarousel({ loop: !0, nav: !0, dots: !1, margin: 0, autoplay: !0, left: !1, freeDrag: !1, lazyLoad: !0, autoplayTimeout: 4e3, autoplayHoverPause: !0, smartSpeed: 1200, responsiveClass: !0, responsive: { 0: { items: 1, dots: !1, nav: !1 }, 500: { items: 1, dots: !1, nav: !1 }, 600: { dots: !1, nav: !1 }, 992: { dots: !1, nav: !1, items: 2 }, 1e3: { dots: !1, nav: !1, items: 2 }, 1299: { dots: !1, nav: !1, items: 3 }, 1499: { items: 3, dots: !1, nav: !1 } }, navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"] }), function () { "use strict"; var forms = document.querySelectorAll(".cricketApp"); Array.prototype.slice.call(forms).forEach((function (form) { form.addEventListener("submit", (function (event) { var formName = $(this).attr('name'); form.checkValidity() ? (event.preventDefault(), event.stopPropagation(), $.ajax({ type: "POST", url: $(".ajxURL").val(), data: $("form#" + formName).serialize(), dataType: "json", async: !1, cache: !1, beforeSend: function () { $("#loader").show() }, success: function (data) { "1" == data[0].error ? alert(data[0].msg) : window.location = $("#reUrl").val(), $("#loader").hide() }, error: function () { alert("Error posting feed."), $("#loader").hide() } })) : (event.preventDefault(), event.stopPropagation()), form.classList.add("was-validated") }), !1) })) }()

$('.blog_slider-main').owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    autoplay: false,
    left: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    stagePadding: 0,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            dots: false,
            nav: false,
        },
        500: {
            items: 1,
            dots: false,
            nav: false,
        },
        600: {
            dots: false,
            nav: false,
        },
        992: {
            dots: false,
            nav: false,
            items: 2,
        },
        1000: {
            dots: false,
            nav: false,
            items: 3,
        },
        1299: {
            dots: false,
            nav: false,
            items: 3,
        },
        1499: {
            items: 3,
            dots: false,
            nav: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});
