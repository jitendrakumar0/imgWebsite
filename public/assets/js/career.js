// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.homecontactusformValidation');

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener(
        'submit',
        function(event) {
            if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            //   Swal.fire('The Internet?', 'That thing is still around?', 'question');
            } else {
                event.preventDefault()
                event.stopPropagation()
                $.ajax({
                    url: $('#ajxURL').val(),
                    type: 'POST',
                    dataType:'json',
                    data: new FormData(this), 
                    beforeSend:function(){
                        $('#loader').css('display','block');
                    },
                    error:function(){ 
                        $('#loader').css('display','none');
                    }, 
                    success: function (data){
                        if(data[0].error=='0'){
                            $('#feedInput')[0].reset();
                            window.location = $('#reUrl').val();
                        }else{
                            // $('#msg').html('<p style="color:red;font-size:18px;text-align:center">'+data[0].msg+'</p>'); 
                            alert(data[0].msg);
                        } 
                        $('#loader').css('display','none');
                    },
                    error: function() { alert("Error posting feed."); $('#loader').hide();  },
                    cache: false,
                    contentType: false,
                    processData: false,
                }); 
            }
            form.classList.add('was-validated');
        },
        false
        );
    });
})();


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

