// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.homecontactusformValidation')

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


var el = document.getElementById('phone1');
var input = document.querySelector("#phone1");
if (el != null) {
    window.intlTelInput(input, {
        initialCountry: "in",
        separateDialCode: true,
        preferredCountries: ['in', 'us'],
        // utilsScript: "assets/vendor/intl-tel-input/js/utils.js",
    });
}


$('.client_request_slider').owlCarousel({
    loop: false,
    items: 1,
    padding:0,
    nav: true,
    margin: 20,
    dots: false,
    autoplay: true,
    // center: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    navText: ["<i class='imgs img-minus me-2 fs-30 text-dark'></i>", "<i class='imgs img-minus fs-30 text-dark'></i>"],
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:1, 
        },
        1023:{
            items:1, 
        }
    }
  });
  
  
  
  
  
  
  $('document').ready(function(){
    
      var $file = $('#file-input'),
          $label = $file.next('label'),
          $labelText = $label.find('span'),
          $labelRemove = $('i.remove'),
          labelDefault = $labelText.text();
      
      // on file change
      $file.on('change', function(event){
        var fileName = $file.val().split( '\\' ).pop();
            if( fileName ){
          console.log($file)
                $labelText.text(fileName);
          $labelRemove.show();
        }else{
                $labelText.text(labelDefault);
          $labelRemove.hide();
        }
      });
      
      // Remove file   
      $labelRemove.on('click', function(event){
        $file.val("");
        $labelText.text(labelDefault);
        $labelRemove.hide();
        console.log($file)
      });
    })
  
  
    