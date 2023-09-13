@extends('main')
@push('meta')
<!--  Title -->
<title>Enquiry for Fantasy Cricket App Development, MLM Software Development</title>

<!-- Required meta tags -->
<meta name="title" content="Enquiry for Fantasy Cricket App Development, MLM Software Development" />
<meta name="description" content="Enquiry for Fantasy Cricket App, MLM Software Development, Website Design & Digital Marketing Services. We are offering services at the best price." />
{{-- <meta name="keywords" content="request_a_quote_keywords" /> --}}

<!-- Twitter Meta -->
<meta name="twitter:title" content="Enquiry for Fantasy Cricket App Development, MLM Software Development">
<meta name="twitter:description" content="Enquiry for Fantasy Cricket App, MLM Software Development, Website Design & Digital Marketing Services. We are offering services at the best price.">
<meta name="twitter:image" content="{{asset('/public')}}/assets/img/logos/logo.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{asset('/')}}request-a-quote.php">
<meta property="og:title" content="Enquiry for Fantasy Cricket App Development, MLM Software Development">
<meta property="og:description" content="Enquiry for Fantasy Cricket App, MLM Software Development, Website Design & Digital Marketing Services. We are offering services at the best price.">
<meta property="og:image" content="{{asset('/public')}}/assets/img/logos/logo.png">
<meta property="og:image:secure_url" content="{{asset('/public')}}/assets/img/logos/logo.png">



{{-- <meta name="classification" content="request_a_quote_keywords" /> --}}
<link rel="canonical" href="{{asset('/')}}request-a-quote.php" />
<meta name="robots" content="index, follow" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/intl-tel-input/intlTelInput.css">
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/request-a-quote.min.css">
@endpush
@section('content')


<style>

nav.navbar{
   background: linear-gradient(45deg, #0b5a7b, #03151d) !important;
}
</style>

 
   <!-- get-in-touch section -->
   <div class="container-fluid get-in-touch position-relative">
      <div class="container position-relative zi-1 pt-2 pb-2 mt-lg-0 mt-5">
        
         <div class="row">
            <div class="col-12 h-100">
               
               <div class="row ">
                  <div class="col-xl-6 col-lg-6 col-md-11  position-relative mt-0">
                     <div class="bg-white left_form_part shadow">
                  <div class="row mx-0 pb-1 pt-2">
                     <div class="col-12  fs-md-14 fs-12 text-center"><span class="fs-xl-32 fw-l fs-lg-28 fs-md-24 fs-20">Let’s Discuss Your Idea</span></div>
                     <div class="enquiry-tagline d-flex justify-content-between pt-3">
                    
                           <div class="enqury-icons fs-16">
                            <i class="imgr fw-bold ms-2 img-check position-relative bottom-n1px"></i> All our projects are secured by NDA
                            </div>
                              <div class="enqury-icons fs-16">
                              <i class="imgr fw-bold ms-2 img-check position-relative bottom-n1px"></i> 100% Secure. Zero Spam.
                              </div>
                       
                           </div>
                  </div>
                     <div class="row  py-md-4 py-3 px-md-3 px-2 ">
                        <div class="col-12 ">
                           <div class="from-right-block rows pt-0 pb-4">
                              <form id="contactusform" name="contactusform" class="row gx-md-4 gy-xl-4 gy-lg-4 gy-md-3 gy-3 homecontactusformValidation" novalidate  enctype="multipart/form-data">
                                 @csrf
                                 <div class="col-md-6">
                                    <div class="form-quote">
                                       <input type="text" class="form-control rounded" id="contactName" placeholder="Your full name*" required name="getname">
                                       <div class="invalid-feedback fs-12">Please Enter Name.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-quote">
                                       <input type="text" class="form-control rounded" id="contactName" placeholder="Your email Id (optional)" required name="getemail">
                                    
                                       <div class="invalid-feedback fs-12">Please Enter Email Id.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-quote">
                                       <input type="text" name="getnumber" class="form-control rounded w-100  px-5" id="phone1" data-intl-tel-input-id="1" placeholder="Your phone number*" required >
                                     
                                       <div class="invalid-feedback fs-12">Please Enter Mobile Number.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-quote">
                                 <select name="requirement" required="" class="selectpicker form-control py-0 rounded select-css">
                                                        <option value="">Project Type *</option>
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
                                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-quote">
                                        <select name="getbudget" select class="selectpicker form-control py-0 rounded select-css" aria-label="Default select example">
                                          <option value="">Approx. budget</option>
                                          <option value="less than 10000">Less than $10,000</option>
                                          <option value="Under 25,000">$10,000 to $20,000</option>
                                          <option value="25,000 - 1,00,000">$20,000 to $50,000</option>
                                          <option value="Above 1,00,000">$50,000+</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-quote">
                                       <textarea name="getdetail" class="form-control rounded" placeholder="Please brief your requirements in detail. The more we know about your amazing idea, the better we can guide and assist you.*" id="message" required style="height: 100px"></textarea>
                                       <div class="invalid-feedback">Please Leave a Brief Information About Project.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                          <div class="form-quote">
                                          <div class="atteched_file">
                                          <input type="file" name="getfile" id="file-input">
                                                <label for="file-input">
                                                <img  src="{{asset('/public')}}/assets/img/upload-cloud.svg"  alt="Download icon" class="entered litespeed-loaded me-2" width="22" height="18" >
                                                   <span>Upload project brief</span>
                                                </label>
                                                <i class="imgr  img-times remove"></i>
                                                </div>
                                                                                          
                                             </div>
                                             <div class="fs-13 text-dark pt-2">Only Document, Image or ZIP file. (Max size 8MB)</div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="col-md">
                                    <div class="g-recaptcha" data-sitekey="{{GETRECAPTCHADATA('site')}}"></div>
                                    <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                                 </div> -->

                                 <div class="col-auto align-self-center">
                                    <button id="GetQuote" type="button" class="btn btn-theme2 fs-md-14 fs-12 fw-m hero_read_more_btn py-2 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                                       <span class="d-block"><span>Get Your Free Quote </span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                    </button>
                                 </div>

                              </form>
                           </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  position-relative mt-lg-0 mt-5">
                           <div class="right_form_part">
                        <div class="row mx-0">
                        <div class="col-12  text-center">
                           <span class="fs-xl-18 fs-lg-18 fs-md-15 fs-14 text-dark fw-l pb-2">Trusted by</span>
                        </div>
                           <div class="col-12 client-image text-center">
                           <img  src="{{asset('/public')}}/assets/img/Frame-logo.webp" class="img-fluid">
                           </div>

                        </div>

                           <div class="row align-items-center mt-3  client_request_slider owl-carousel mx-0 owl-loaded owl-drag">     
                                 <div class="owl-stage-outer ps-0">
                                    <div class="owl-stage" style="transform: translate3d(-4752px, 0px, 0px); transition: all 1.2s ease 0s; width: 8208px;">
                                    <div class="owl-item" style="width: 432px;">
                                    <div class="col-lg-12 col-md-12 client-testimonial bg-white">
                                       <figure class="position-absolute">
                                          <img  src="{{asset('/public')}}/assets/img/xl-sanjay-sharma.webp" class="img-fluid">
                                       </figure>
                                       <div class="client-name fw-m fs-lg-20 fs-md-19 fs-17 text-dark">Mr. Sanjay Sharma</div>
                                       <div class="client-country fw-l fs-lg-16 fs-md-14 fs-13 text-dark">JPRC Hospital</div>
                                       <div class="desk fs-lg-17 fs-md-15 fs-14 pt-3 text-dark">After searching a lot, we found them via my relative and it is really a good thing for me. They are really professional and co-operative. my account manager Mr. Lokesh is keen to help me in every possible manner. I strongly recommend other people for the same era of services.</div>
                                    </div>
                                    </div>
                                    <div class="owl-item" style="width: 432px;">
                                    <div class="col-lg-12 col-md-12 client-testimonial bg-white">
                                       <figure class="position-absolute">
                                          <img  src="{{asset('/public')}}/assets/img/xl-arpit-jain.webp" class="img-fluid">
                                       </figure>
                                       <div class="client-name fw-m fs-lg-20 fs-md-19 fs-17 text-dark">Mr. Arpit Jain</div>
                                       <div class="client-country fw-l fs-lg-16 fs-md-14 fs-13 text-dark">Samarpan International</div>
                                       <div class="desk fs-lg-17 fs-md-15 fs-14 pt-3 text-dark">They developed my company's Website and helped in driving Website Traffic which in turn reached customers faster. Neeraj Sir & their team has always listened to all the issues and queries.</div>
                                    </div>
                                    </div>
                                    <div class="owl-item" style="width: 432px;">
                                    <div class="col-lg-12 col-md-12 client-testimonial bg-white">
                                       <figure class="position-absolute">
                                          <img  src="{{asset('/public')}}/assets/img/xl-avatar.webp" class="img-fluid">
                                       </figure>
                                       <div class="client-name fw-m fs-lg-20 fs-md-19 fs-17 text-dark">Dr. Subhash Chandra</div>
                                       <div class="client-country fw-l fs-lg-16 fs-md-14 fs-13 text-dark">Mount Litera Zee School</div>
                                       <div class="desk fs-lg-17 fs-md-15 fs-14 pt-3 text-dark">As a part of mount litera zee school, I would like to thanks IMG Global Infotech to build such an impressive website that would help to gain visibility in front of parents as well as students.</div>
                                    </div>
                                    </div>
                                    
                                 
                                 
                                 </div>
                              </div>
                              <div class="owl-nav disabled">
                                 <button type="button" role="presentation" class="owl-prev">
                                    <i class="imgs img-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="imgs img-chevron-right"></i>
                                 </button>
                              </div>
                              <div class="owl-dots disabled"></div>
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
<script src="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.js"></script>
<script src="{{asset('/public')}}/assets/plugins/intl-tel-input/intlTelInput.min.js"></script>
<script src="{{asset('/public')}}/assets/js/request-a-quote.min.js"></script>

<script>
	function submitActionForm(){ 
      e.preventDefault();
		// $.ajax({
		// 	type: "POST",
		// 	url: "{{asset('/quote_action')}}",
		// 	data: $('form#contactusform').serialize(), // <--- THIS IS THE CHANGE
		// 	dataType: "json",
		// 	async: false,
		// 	beforeSend: function(){ 
		// 		$('#loader').show();  					  
		// 	},
		// 	success: function(data){ 
		// 		if(data[0].error=='1'){
      //          $('#msg').html('<p style="color:red;font-size:18px;text-align:center">'+data[0].msg+'</p>'); 
		// 		}else{
      //          console.log('test');
		// 			// window.location = "https://www.imgglobalinfotech.com/thankyou.php";
		// 		} 
      //       $('#loader').hide(); 
            
		// 	},
		// 	error: function() { alert("Error posting feed."); $('#loader').hide();  }
      // });
		
		return false;		 
	}
   $('#GetQuote').click(function(e){
      e.preventDefault();

      var phoneInput = document.querySelector("#phone1");

      var phoneNumber = window.intlTelInput(phoneInput, {
         initialCountry: 'in',
         separateDialCode: true,
         preferredCountries: ['in', 'us'],
      });
      var selectedCountryData = phoneNumber.getSelectedCountryData();
      var countryCode = selectedCountryData.dialCode; 

      var formData = new FormData($("#contactusform")[0]);
      formData.append('country_code',countryCode);


      $.ajax({
			type: "POST",
			url: "{{asset('/quote_action')}}",
			data: formData, // <--- THIS IS THE CHANGE
			dataType: "json",
			processData: false,
         contentType: false,
			beforeSend: function(){ 
				$('#loader').show();  					  
			},
			success: function(data){ 
				if(data[0].error=='1'){
               $('#msg').html('<p style="color:red;font-size:18px;text-align:center">'+data[0].msg+'</p>'); 
				}else{
               // console.log('test');
					window.location = "{{asset('/thankyou.php')}}";
				} 
            $('#loader').hide(); 
            
			},
			error: function() { alert("Error posting feed."); $('#loader').hide();  }
      });
		
		return false;
   });
</script>

@endpush

