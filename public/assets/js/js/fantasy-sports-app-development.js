$('.fantasy-cricket-sldier').owlCarousel({
	loop: true,
	items: 1,
	nav: true,
	margin: 0,
	padding: 0,
	dots: true,
	autoplay: true,
	center: true,
	autoplayTimeout: 5000,
	autoplayHoverPause: true,
	navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});

$('.dashboard_live_demo_carousel').owlCarousel({
	items: 1,
	merge: true,
	loop: true,
	margin: 10,
	lazyLoad: true,
	center: true,
	responsive: {
		480: {
			items: 2
		},
		600: {
			items: 4
		}
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



var lightbox = GLightbox();
lightbox.on('open', (target) => {
	console.log('lightbox opened');
});
var lightboxVideo = GLightbox({
	selector: '.glightbox3'
});
lightboxVideo.on('slide_changed', ({ prev, current }) => {
	console.log('Prev slide', prev);
	console.log('Current slide', current);

	const { slideIndex, slideNode, slideConfig, player } = current;

	if (player) {
		if (!player.ready) {
			// If player is not ready
			player.on('ready', (event) => {
				// Do something when video is ready
			});
		}

		player.on('play', (event) => {
			console.log('Started play');
			$("#player").contents().find(".ytp-pause-overlay").remove();
			console.log($("#player").contents().find(".ytp-pause-overlay"))
		});

		player.on('volumechange', (event) => {
			console.log('Volume change');
		});

		player.on('ended', (event) => {
			console.log('Video ended');
		});
	}
});

