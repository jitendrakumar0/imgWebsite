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
