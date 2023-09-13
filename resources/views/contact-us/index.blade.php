@extends('main')
@push('meta')
   <!--  Title -->
   <title>Contact Us to Build Your Web and Mobile Application | IMG Global Infotech</title>

   <!-- Required meta tags -->
   <meta name="title" content="Contact Us to Build Your Web and Mobile Application | IMG Global Infotech" />
   <meta name="description" content="Contact us for affordable mobile app development, web development, ecommerce development requirements. You can also contact to hire remote developers for your projects." />
   <meta name="keywords" content="Website Development Design Company in Jaipur , IT Consulting Company in India, Online Reputation Management, Android Apps Development" />

   <!-- Twitter Meta -->
   <meta name="twitter:title" content="Contact Us to Build Your Web and Mobile Application | IMG Global Infotech">
   <meta name="twitter:description" content="Contact us for affordable mobile app development, web development, ecommerce development requirements. You can also contact to hire remote developers for your projects.">
   <meta name="twitter:image" content="{{GETFOLDERPATH()}}/Contact-Us.webp">

   <!-- Facebook Meta -->
   <meta property="og:url" content="{{asset('/')}}contact-us.php">
   <meta property="og:title" content="Contact Us to Build Your Web and Mobile Application | IMG Global Infotech">
   <meta property="og:description" content="Contact us for affordable mobile app development, web development, ecommerce development requirements. You can also contact to hire remote developers for your projects.">
   <meta property="og:image" content="{{GETFOLDERPATH()}}/Contact-Us.webp">
   <meta property="og:image:secure_url" content="{{GETFOLDERPATH()}}/Contact-Us.webp">


   
   <meta name="classification" content="Website Development Design Company in Jaipur , IT Consulting Company in India, Online Reputation Management, Android Apps Development" />
   <link rel="canonical" href="{{asset('/')}}contact-us.php" />
   <meta name="robots" content="index, follow" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/intl-tel-input/intlTelInput.css">
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/contact-us.min.css">


   <style>
      .footer-form-section {
         display: none;
      }
   </style>
   
@endpush
@section('content')

   <h1 class="d-none">Contact IMG Global Infotech Contact Form Submitted Successfully</h1>

   <!-- get-in-touch section -->
   <div class="container-fluid get-in-touch position-relative pt-5">
      <div class="container position-relative zi-1 pt-5 pb-5">
         <div class="row py-lg-5 py-md-4">
            <div class="col-12 h-100">
               <div class="row align-items-center">
                  <div class="col-lg-7 left_form_part position-relative mt-0">
                     <div class="row bg-white py-md-4 py-3 px-md-2 px-2 left_bg_part">
                        <div class="col-12 pt-3">
                           <div class="from-right-block rows pt-0 pb-4">
                              <form method="post" id="feedInputContact" name="contactusform" class="row gy-4 homecontactusformValidationcontact" novalidate>
                                 @csrf
                                 <input type="hidden" id="ajxURLContact" value="{{asset('/contact_action')}}" />
                                 <input type="hidden" id="reUrl" value="{{asset('/thankyou.php')}}" />
                                 <input type="hidden" id="country-code-contact" name="phonecode">
                                 <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="text" class="form-control rounded-0" id="contactName" minlength="1" maxlength="30" placeholder="Enter Contact Name" name="contactname" Required>
                                       <label class="fw-m" for="contactName">Name</label>
                                       <div class="invalid-feedback fs-12">Please Enter Full Name.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="row">
                                    <div class="col-2 position-absolute pe-0 flot-intli-input">
                                                    <input type="text" id="phone1" class="flot-input">
                                                    </div>
                                     <div class="col-12">
                                                <div class="form-floating">                                                
                                                    <input type="tel" name="contactnumber" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control rounded-0 fs-md-16 fs-14  border-left"  placeholder="Enter Phone Number" required style="padding-left: 55px">
                                                    <label class="fw-m fs-md-16 fs-14 flot-label" for="phoneNumber">Mobile Number <label class="text-danger">* </label></label>
                                                    <div class="invalid-feedback fs-12">Please Enter a Valid Phone Number.</div>
                                                </div>
                                                </div>
                                                </div>
                                            </div>
                                 <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="email" name="contactemail" class="form-control rounded-0" id="emailID" placeholder="Enter Email ID"  pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$">
                                       <label class="fw-m" for="emailID">Email ID (Optional)</label>
                                       <div class="invalid-feedback fs-12">Please Enter a Valid Email ID.</div>
                                    </div>
                                 </div>
                                 {{-- <div class="col-md-12">
                                    <div class="form-floating">
                                       <input type="text" name="organization" class="form-control rounded-0" id="organization" placeholder="Enter Organization Name" required>
                                       <label class="fw-m" for="organization">Organization <span class="text-danger">*</span></label>
                                       <div class="invalid-feedback fs-12">Please Enter Organization Name.</div>
                                    </div>
                                 </div> --}}
                                 <div class="col-md-6">
                                   <div class="col-md-12">
                                                <div class="form-floating">
                                                    <select name="requirement" required="" class="form-control rounded-0 pt-2 fw-400">
                                                        <option value="">Project Brief *</option>
                                                        <option value="Fantasy Cricket App Development">Fantasy Cricket App Development</option>
                                                            <option value="Fantasy Sports App Development">Fantasy Sports App Development</option>
                                                            <option value="Mobile App Development">Mobile App Development</option>
                                                            <option value="E-commerce Development">E-commerce Development</option>
                                                            <option value="MLM Software Development">MLM Software Development</option>
                                                            <option value="Website Design">Website Design</option>
                                                            <option value="Web Portal Development">Web Portal Development</option>
                                                            <option value="Custom ERP Development">Custom ERP Development</option>
                                                            <option value="Hire Dedicated Developer">Hire Dedicated Developer</option>
                                                            <option value="SEO/Social Media Marketing">SEO/Social Media Marketing</option>
                                                            <option value="Other Servicest">Other Services</option>
                                                       
                                                    </select>
                                                 <div class="invalid-feedback fs-12">Please Enter a Valid Requierment.</div>
                                                    <!-- <input type="text" name="requirement" class="form-control rounded-0 fs-md-16 fs-14" id="Requierment" placeholder="Enter Requierment Name" required> -->
                                                    <!-- <label class="fw-m fs-md-16 fs-14" for="Requierment"></label> -->
                                                    <!-- <div class="invalid-feedback fs-12">Please Enter a Valid Requierment.</div> -->
                                                </div>
                                            </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-floating">
                                       <textarea name="mmessage" class="form-control rounded-0" placeholder="Leave a message here" id="message" style="height: 100px">@if(isset($_GET['url'])){{$_GET['url']}}@endif</textarea>
                                       <label for="message">Write a Message <span class="text-danger">*</span></label>
                                       <div class="invalid-feedback">Please Leave a message here.</div>
                                    </div>
                                 </div>
                                 
                                 <div class="col-auto align-self-center">
                                    <button type="submit" id="conBtn" class="btn btn-theme2 fs-md-14 fs-12 fw-m hero_read_more_btn py-2 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                                       <span class="d-block"><span>Send Now</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                    </button>
                                 </div>

                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 position-relative ps-lg-5 pt-lg-0 pt-md-3 pt-3">
                     <div class="sparater-block">
                        <span class="fw-900">OR</span>
                     </div>
                     <div class="row mx-0 ms-lg-4">
                        <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-26 fs-lg-26 fs-md-24 fs-20">Contact <b>IMG Global Infotech</b></span></div>
                        <div class="col-12 px-0 pt-4">
                           <div class="emailid-block rows">
                              <a href="mailto:info@imgglobalinfotech.com" class="transition text-decoration-none wave-1 my-3 w-100 rounded position-relative" tabindex="-1">
                                 <i class="imgl img-envelope position-absolute left-md-22px left-15px top-md-23px top-14px w-md-28px w-18px h-39px fs-md-32 fs-24 text-theme2 d-flex align-items-center"></i> <span class="small-text rows">mail to our sales department</span>
                                 <span class="large-text rows">info@imgglobalinfotech.com</span>
                              </a>
                           </div>
                        </div>
                        <div class="col-12 px-0">
                           <div class="emailid-block skype_block rows">
                              <a href="skype:kunwar.neeraj.rajput?call" class="transition text-decoration-none wave-1 mb-3 w-100 rounded position-relative" tabindex="-1">
                                 <i class="imgb img-skype position-absolute left-md-22px left-15px top-md-23px top-14px w-md-28px w-18px h-39px fs-md-32 fs-24 text-theme1 d-flex align-items-center"></i> <span class="small-text rows">Our Skype Id</span>
                                 <span class="large-text rows">live:kunwar.neeraj.rajput</span>
                              </a>
                           </div>
                        </div>
                        <!-- <div class="col-12 px-0">
                           <div class="emailid-block rows">
                              <a href="tel:919887034345" class="transition text-decoration-none wave-1 mb-3 w-100 rounded position-relative" tabindex="-1">
                                 <i class="imgb img-whatsapp position-absolute left-md-22px left-15px top-md-23px top-14px w-md-28px w-18px h-39px fs-md-32 fs-24 text-success d-flex align-items-center"></i> <span class="small-text rows">Call or Whatsapp</span>
                                 <span class="large-text rows">+91-9887034345</span>
                              </a>
                           </div>
                        </div> -->
                        <div class="col-12 px-0">
                           <div class="listing-block rows mt-2">
                              <div class="titlelings fw-m">&amp; What you will get:</div>
                              <ul class="bluts ps-0 mb-0">
                                 <li>On-call inquiry assistance</li>
                                 <li>Project consulting by experts</li>
                                 <li class="mb-0">Detailed project estimation</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection
@push('scripts')
<script src="{{asset('/public')}}/assets/plugins/intl-tel-input/intlTelInput.min.js"></script>
   <script src="{{asset('/public')}}/assets/js/contact-us.min.js"></script>
   <script>
      $( function() {  
         $( "#tags" ).autocomplete({
            source: availableTags
         });
      });
   </script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var phoneInput = document.getElementById('phone1');
  var countryCodeInput = document.getElementById('country-code-contact');

  var phoneNumber = window.intlTelInput(phoneInput, {
    initialCountry: 'in',
    separateDialCode: true,
    preferredCountries: ['in', 'us'],
  });

  phoneNumber.promise.then(function() {
    var selectedCountry = phoneNumber.getSelectedCountryData();
    countryCodeInput.value = selectedCountry.dialCode;
  });

  phoneInput.addEventListener('input', function() {
    var fullNumber = phoneNumber.getNumber(intlTelInputUtils.numberFormat.E164);
    phoneInput.value = fullNumber;

    var selectedCountry = phoneNumber.getSelectedCountryData();
    countryCodeInput.value = selectedCountry.dialCode;
  });

  phoneInput.addEventListener('countrychange', function() {
    var selectedCountry = phoneNumber.getSelectedCountryData();
    countryCodeInput.value = selectedCountry.dialCode;
  });
});
</script>

<script>

(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.homecontactusformValidationcontact')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }else{
                        event.preventDefault()
                        event.stopPropagation()
                        $.ajax({
                            type: "POST",
                            url: $('#ajxURLContact').val(),
                            data: $('form#feedInputContact').serialize(), // <--- THIS IS THE CHANGE
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

</script>

@endpush
