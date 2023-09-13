

// Active navbar on scroll
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll <= 80) {
    $('nav.navbar').removeClass('nav-active');
  } else {
    $('nav.navbar').addClass('nav-active');
  }
});

$(function () {
  $('[data-bs-toggle="tooltip"]').tooltip()
})

$('.sidebar_close_btn a').click(function () {
  $('.navbar-collapse').removeClass('show');
});

$(document).ready(function () {
  // executes when HTML-Document is loaded and DOM is ready

  // breakpoint and up
  $(window).resize(function () {
    if ($(window).width() >= 980) {
      // when you hover a toggle show its dropdown menu
      $('.navbar .dropdown-toggle').hover(function () {
        $(this).parent().toggleClass('show');
        $(this).parent().find('.dropdown-menu').toggleClass('show');
      });

      // hide the menu when the mouse leaves the dropdown
      $('.navbar .dropdown-menu').mouseleave(function () {
        $(this).removeClass('show');
      });

      // do something here
    }
  });

  // document ready
});

// // Lazy Load Images
document.addEventListener('DOMContentLoaded', function () {
  let lazyImages = [].slice.call(document.querySelectorAll('img.lazy-image'));
  let active = false;

  const lazyLoad = function () {
    if (active === false) {
      active = true;

      setTimeout(function () {
        lazyImages.forEach(function (lazyImage) {
          if (
            lazyImage.getBoundingClientRect().top <= window.innerHeight &&
            lazyImage.getBoundingClientRect().bottom >= 0 &&
            getComputedStyle(lazyImage).display !== 'none'
          ) {
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.srcset = lazyImage.dataset.src;
            lazyImage.classList.remove('lazy');

            lazyImages = lazyImages.filter(function (image) {
              return image !== lazyImage;
            });

            if (lazyImages.length === 0) {
              document.removeEventListener('scroll', lazyLoad);
              window.removeEventListener('resize', lazyLoad);
              window.removeEventListener('orientationchange', lazyLoad);
            }
          }
        });

        active = false;
      }, 200);
    }
  };

  document.addEventListener('scroll', lazyLoad);
  window.addEventListener('resize', lazyLoad);
  window.addEventListener('orientationchange', lazyLoad);
});

$(document).ready(function () {
  window.scrollBy(0, 1);
});

// Search auto focus
function googleSearch() {
  document.getElementById('gsc-i-id1').focus();
  $('#gsc-i-id1').keyup(function () {
    // console.log($("#gsc-i-id1").val());
    if (
      $('#gsc-i-id1').val() != '' &&
      $('#gsc-i-id1').val() != undefined &&
      $('#gsc-i-id1').val() != null
    ) {
      $('#top_search').addClass('active');
    } else {
      $('#top_search').removeClass('active');
      $('.gsc-expansionArea').html('');
    }
  });
  $('#gs_st50 a').click(function () {
    $('#top_search').removeClass('active');
  });
  $('#closeGoogleSearch').click(function () {
    $('#gsc-i-id1').val('');
    $('#top_search').removeClass('active');
  });
  $('.modal-backdrop').click(function () {
    $('#gsc-i-id1').val('');
    $('#top_search').removeClass('active');
  });
}

// function googleSearch() {
//     event.preventDefault();
// }

// Example starter JavaScript for disabling form submissions if there are invalid fields
// (function () {
//   'use strict';

//   // Fetch all the forms we want to apply custom Bootstrap validation styles to
//   var forms = document.querySelectorAll('.googleSearchFormValidation');

//   // Loop over them and prevent submission
//   Array.prototype.slice.call(forms).forEach(function (form) {
//     form.addEventListener(
//       'submit',
//       function (event) {
//         if (!form.checkValidity()) {
//           event.preventDefault();
//           event.stopPropagation();
//           alert('if');
//         }
//         event.preventDefault();
//         alert('else');

//         form.classList.add('was-validated');
//       },
//       false
//     );
//   });
// })();



if( $('.blog_slider').length )         // use this if you are using id to check
{

  $('.blog_slider').owlCarousel({
    loop: false,
    center: false,
    autoplay: false,
    autoplayHoverPause: false,
    dots: true,
    margin: 10,
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
        items: 4,
        dots: false,
        loop: false,
        nav: false
      },
      1299: {
        items: 4,
        dots: false,
        loop: false,
        nav: false
      },
      1499: {
        items: 4,
        dots: false,
        loop: false,
        nav: false
      }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
  });

}


if ($('.portfolio_slider').length)         // use this if you are using id to check
{

	$('.portfolio_slider').owlCarousel({
		loop: true,
		center: false,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		dots: true,
		margin: 10,
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
				items: 3,
				dots: false,
				loop: false,
				nav: false
			},
			1299: {
				items: 3,
				dots: false,
				loop: false,
				nav: false
			},
			1499: {
				items: 3,
				dots: false,
				loop: false,
				nav: false
			}
		},
		navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
	});

}





// // Fastival
// setTimeout(function(){
//   $('.navbar-brand').removeClass('animate');
// }, 1000);
var ss = localStorage.getItem("class-added")
if(ss!="active"){
  $('.cookie_popup').removeClass('active');
}
$('#saveCookie').on('click',function(){
  $('.cookie_popup').addClass('active');
  localStorage.setItem("class-added", "active");
});


   // Lazy loading

  //  let lazyImages = [...document.querySelectorAll('.lazy-image')];
  //  let inAdvance = 8000;

  //  function lazyLoad() {
  //    lazyImages.forEach(image => {
  //      if (image.offsetTop < window.innerHeight + window.pageYOffset + inAdvance) {
  //            image.src = image.dataset.src;
  //            image.onload = () => image.classList.add('loaded');
  //          }
  //      });

     // if all loaded removeEventListener
  //  }

  //  lazyLoad();
  //  window.addEventListener('scroll', _.throttle(lazyLoad, 50));
  //  window.addEventListener('resize', _.throttle(lazyLoad, 50));

   

