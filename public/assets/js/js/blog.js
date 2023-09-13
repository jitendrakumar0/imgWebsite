// $('.blog_category').on('click', function() {
//     if ($('.blog_category_part').addClass('show-category')){
//         $(".blog_category_part ul").slideUp();
//     }
//     else if($('.blog_category_part').removeClass('show-category')){
//       $(".blog_category_part ul").slideDown();
//     }
// });


$('.blog_category').on('click', function () {

   var $this = $(this);
   if ($this.parent().hasClass('show')) {
      $this.parent().removeClass('show');
      $this.next().slideUp(160);
      $this.removeClass("arrow_down");


   } else {
      $this.parent().parent().find('.submenu_part').removeClass('show');
      $this.parent().parent().find('.submenu_part').slideUp(160);
      $this.parent().parent().find('li a').removeClass('arrow_down');
      $this.next().toggleClass('show');
      $this.next().slideToggle(160);
      $this.toggleClass("arrow_down");
   }
});


var colorThief = new ColorThief();
$('img').each(function () {
   if ($(this).attr('data-getcolor')) {
      var x = $(this).attr('src');
      var value = $(this).attr('data-getcolor');
      colorSync = colorThief.getColorFromUrl(x, function (color) {
         // console.log(color);
         $('div').each(function () {
            if ($(this).attr('data-putcolor') == value) {
               // console.log($(this));
               // $(this)[0].style.setProperty('--bg', 'rgb(' + color[0] + ',' + color[1] + ',' + color[2] + ')');
               $(this)[0].style.setProperty('--h', rgb2hsl(color[0], color[1], color[2]).h);
               $(this)[0].style.setProperty('--s', rgb2hsl(color[0], color[1], color[2]).s);
               $(this)[0].style.setProperty('--l', rgb2hsl(color[0], color[1], color[2]).l);
            }
         });
         if (value == "singleBlogBanner") {
            $('[data-root-putcolor]').parent().append('<style>:root {--bg: rgb(' + color[0] + ',' + color[1] + ',' + color[2] + ');}</style>');
         }

      });
   }
});

function rgb2hsl(r, g, b) {

   r /= 255;
   g /= 255;
   b /= 255;

   // Find greatest and smallest channel values
   let cmin = Math.min(r, g, b),
      cmax = Math.max(r, g, b),
      delta = cmax - cmin,
      h = 0,
      s = 0,
      l = 0;

   if (delta == 0)
      h = 0;
   // Red is max
   else if (cmax == r)
      h = ((g - b) / delta) % 6;
   // Green is max
   else if (cmax == g)
      h = (b - r) / delta + 2;
   // Blue is max
   else
      h = (r - g) / delta + 4;

   h = Math.round(h * 60);

   // Make negative hues positive behind 360°
   if (h < 0)
      h += 360;




   l = (cmax + cmin) / 2;

   // Calculate saturation
   s = delta == 0 ? 0 : delta / (1 - Math.abs(2 * l - 1));

   // Multiply l and s by 100
   s = +(s * 100).toFixed(1);
   l = +(l * 100).toFixed(1);

   if (l > 60) {
      l = 59;
   }


   return {
      h: h,
      s: s,
      l: l
   };
}




// Recent Post  Form

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
   'use strict'

   // Fetch all the forms we want to apply custom Bootstrap validation styles to
   var forms = document.querySelectorAll('.recentpostFormValidation')

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
})();
