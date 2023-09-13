$('.web-design-process-slider').owlCarousel({
    loop: true,
    items: 6,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: true,
    center: false,
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
            items: 2,
            nav: false
        },
       768: {
            items: 3,
            nav: false
        },
        992: {
            items: 6,
            loop: false,
            autoplay: false,
            nav: false
        },
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


// Contact Us Form

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
	'use strict';

	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.querySelectorAll('.homeconnectFormValidation');

	// Loop over them and prevent submission
	Array.prototype.slice.call(forms).forEach(function (form) {
		form.addEventListener(
			'submit',
			function (event) {
				if (!form.checkValidity()) {
					event.preventDefault();
					event.stopPropagation();

					//   Swal.fire('The Internet?', 'That thing is still around?', 'question');
				} else {
					event.preventDefault()
					event.stopPropagation()
					$.ajax({
						type: "POST",
						url: $('#ajxURL').val(),
						data: $('form#feedInput').serialize(), // <--- THIS IS THE CHANGE
						dataType: "json",
						async: false,
						cache: false,
						beforeSend: function () {
							$('#loader').show();
						},
						success: function (data) {
							if (data[0].error == '1') {
								alert(data[0].msg);
							} else {
								// Swal.fire({
								// 	position: 'top-end',
								// 	icon: 'success',
								// 	// title: 'Thanks for signing up. Our team will get back to you soon',
								// 	text: 'Our team will get back to you soon',
								// 	showConfirmButton: false,
								// 	timer: 3000
								//   });
								window.location = $('#reUrl').val();
							}
							$('#loader').hide();

						},
						error: function () { alert("Error posting feed."); $('#loader').hide(); }
					});

				}

				form.classList.add('was-validated');
			},
			false
		);
	});
})();
