function devolopment_service_dactive() {
    $(".devolopment_service_tab .s-sidebar .s-item").each(function () {
        $(this).removeClass('active');
    });
}
$(document).ready(function () {
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



    $(".s-item").click(function () {
        devolopment_service_dactive();
        $(this).addClass('active');
        let sr = $(this).attr('id');
        $(`.all-app-services`).children('div').hide();
        $(`[data-hash=${sr}]`).fadeIn();
        console.log(sr);
    });
});


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
                } else {
                    event.preventDefault()
                  event.stopPropagation()
                  $.ajax({
                      type: "POST",
                      url: $('#ajxURL').val(),
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
                      error: function() { alert("Error posting feed."); $('#loader').hide();  }
                  });
                
              }

                form.classList.add('was-validated')
            }, false)
        })
})()