

// $('.portfolio_category').on('click', function () {

//   var $this = $(this);
//   if ($this.parent().hasClass('show')) {
//     $this.parent().removeClass('show');
//     $this.next().slideUp(160);
//     $this.removeClass("arrow_down");


//   } else {
//     $this.parent().parent().find('.submenu_part').removeClass('show');
//     $this.parent().parent().find('.submenu_part').slideUp(160);
//     $this.parent().parent().find('li a').removeClass('arrow_down');
//     $this.next().toggleClass('show');
//     $this.next().slideToggle(160);
//     $this.toggleClass("arrow_down");
//   }
// });

// var colorThief = new ColorThief();
// $('img').each(function () {
//   if ($(this).attr('data-getcolor')) {
//     var x = $(this).attr('src');
//     var value = $(this).attr('data-getcolor');
//     colorSync = colorThief.getColorFromUrl(x, function (color) {
//       // console.log(color);
//       $('div').each(function () {
//         if ($(this).attr('data-putcolor') == value) {
//           // console.log($(this));
//           // $(this)[0].style.setProperty('--bg', 'rgb(' + color[0] + ',' + color[1] + ',' + color[2] + ')');
//           $(this)[0].style.setProperty('--h', rgb2hsl(color[0], color[1], color[2]).h);
//           $(this)[0].style.setProperty('--s', rgb2hsl(color[0], color[1], color[2]).s);
//           $(this)[0].style.setProperty('--l', rgb2hsl(color[0], color[1], color[2]).l);
//         }
//       });
//       if (value == "singleBlogBanner") {
//         $('[data-root-putcolor]').parent().append('<style>:root {--bg: rgb(' + color[0] + ',' + color[1] + ',' + color[2] + ');}</style>');
//       }

//     });
//   }
// });

// function rgb2hsl(r, g, b) {

//   r /= 255;
//   g /= 255;
//   b /= 255;

//   // Find greatest and smallest channel values
//   let cmin = Math.min(r, g, b),
//     cmax = Math.max(r, g, b),
//     delta = cmax - cmin,
//     h = 0,
//     s = 0,
//     l = 0;

//   if (delta == 0)
//     h = 0;
//   // Red is max
//   else if (cmax == r)
//     h = ((g - b) / delta) % 6;
//   // Green is max
//   else if (cmax == g)
//     h = (b - r) / delta + 2;
//   // Blue is max
//   else
//     h = (r - g) / delta + 4;

//   h = Math.round(h * 60);

//   // Make negative hues positive behind 360°
//   if (h < 0)
//     h += 360;




//   l = (cmax + cmin) / 2;

//   // Calculate saturation
//   s = delta == 0 ? 0 : delta / (1 - Math.abs(2 * l - 1));

//   // Multiply l and s by 100
//   s = +(s * 100).toFixed(1);
//   l = +(l * 100).toFixed(1);

//   if (l > 60) {
//     l = 59;
//   }


//   return {
//     h: h,
//     s: s,
//     l: l
//   };
// }



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
