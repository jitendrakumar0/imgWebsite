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
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/intl-tel-input/intlTelInput.css">
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/request-a-quote.min.css">
@endpush
@section('content')

 
   <!-- get-in-touch section -->
   <div class="container-fluid get-in-touch position-relative pt-5">
      <div class="container position-relative zi-1 pt-5 pb-5">
         <div class="row mx-0 pb-5 mt-lg-5">
            <h1 class="d-none invisible">Request A Quote</h1>
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Request A <b> Quote </b></span></div>
         </div>
         <div class="row">
            <div class="col-12 h-100">
               <div class="row align-items-center justify-content-center">
                  <div class="col-xl-7 col-lg-8 col-md-11 left_form_part position-relative mt-0">
                     <div class="row bg-white py-md-4 py-3 px-md-3 px-2 left_bg_part shadow">
                        <div class="col-12 pt-3">
                           <div class="from-right-block rows pt-0 pb-4">
                              <form id="contactusform" name="contactusform" class="row gx-md-4 gy-xl-4 gy-lg-4 gy-md-3 gy-3 homecontactusformValidation" novalidate  enctype="multipart/form-data">
                                 @csrf
                                 <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="text" class="form-control rounded-0" id="contactName" placeholder="Enter Contact Name" required name="getname">
                                       <label class="fw-600" for="contactName">Name<span class="text-danger">*</span></label>
                                       <div class="invalid-feedback fs-12">Please Enter Name.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="text" class="form-control rounded-0" id="contactName" placeholder="Enter Contact Name" required name="getemail">
                                       <label class="fw-600" for="contactName">Email Id<span class="text-danger">*</span></label>
                                       <div class="invalid-feedback fs-12">Please Enter Email Id.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="text" name="getnumber" class="form-control rounded-0 w-100 h-md-57px h-52px" id="phone" placeholder="" required >
                                       <!-- <label class="fw-600" for="phone">(+91) Mobile Number<span class="text-danger">*</span></label> -->
                                       <div class="invalid-feedback fs-12">Please Enter Mobile Number.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="text" class="form-control rounded-0" id="contactName" placeholder="Enter Contact Name" required name="getskype">
                                       <label class="fw-600" for="contactName">Skype User-Id/Number</label>
                                       <div class="invalid-feedback fs-12">Please Enter Skype User-Id/Number.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="text" class="form-control rounded-0" id="contactName" placeholder="Enter Contact Name" required name="companyname">
                                       <label class="fw-600" for="contactName">Company Name</label>
                                       <div class="invalid-feedback fs-12">Please Enter Company Name.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="text" class="form-control rounded-0" id="contactName" placeholder="Enter Contact Name" required name="website">
                                       <label class="fw-600" for="contactName">Website</label>
                                       <div class="invalid-feedback fs-12">Please Enter Website url.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="looking_for px-3 py-4 rounded border border-3 border-theme3 position-relative">
                                       <label class="bg-white fw-bold fs-md-14 fs-13 px-md-2 px-1 left-5px position-absolute top-n12px" for="">Looking For<span class="text-danger">*</span></label>
                                       <div class="row">
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-1" class="d-none" name="getlooking">
                                                <label for="featured-1">Website Design</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-2" class="d-none" name="getlooking">
                                                <label for="featured-2">Fantasy Development</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-3" class="d-none" name="getlooking">
                                                <label for="featured-3">Mobile App Development</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-4" class="d-none" name="getlooking">
                                                <label for="featured-4">E-Commerce Development</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-5" class="d-none" name="getlooking">
                                                <label for="featured-5">MLM Software</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-6" class="d-none" name="getlooking">
                                                <label for="featured-6">Digital Marketing Services</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-7" class="d-none" name="getlooking">
                                                <label for="featured-7">SEO Services</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-8" class="d-none" name="getlooking">
                                                <label for="featured-8">Social Media Services</label>
                                             </div>
                                          </div> 
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-9" class="d-none" name="getlooking">
                                                <label for="featured-9">Google Ad Services</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-10" class="d-none" name="getlooking">
                                                <label for="featured-10">Web Portal Development(School ERP/Software)</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-11" class="d-none" name="getlooking">
                                                <label for="featured-11">Clinic ERP(Hospital Outdoor ERP)</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-12" class="d-none" name="getlooking">
                                                <label for="featured-12">Nidhi Software/ERP</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-13" class="d-none" name="getlooking">
                                                <label for="featured-13">Customized ERP Development</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-14" class="d-none" name="getlooking">
                                                <label for="featured-14">College ERP</label>
                                             </div>
                                          </div>
                                          <div class="col-md-6 mb-2">
                                             <div class="form-group custom_radio">
                                                <input type="radio" id="featured-15" class="d-none" name="getlooking">
                                                <label for="featured-15">Onlie App Development</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-floating">
                                        <select name="getbudget" select class="selectpicker form-control py-0 rounded-0">
                                          <option value="">How Much You Want To Invest?</option>
                                          <option value="Under 25,000">Under 25,000</option>
                                          <option value="25,000 - 1,00,000">25,000 - 1,00,000</option>
                                          <option value="Above 1,00,000">Above 1,00,000</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-floating">
                                       <textarea name="getdetail" class="form-control rounded-0" placeholder="Leave a message here" id="message" required style="height: 100px"></textarea>
                                       <label for="message">Brief Information About Project <span class="text-danger">*</span></label>
                                       <div class="invalid-feedback">Please Leave a Brief Information About Project.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="looking_for px-3 py-3 rounded border border-3 border-theme3 position-relative">
                                       <label class="bg-white fw-bold fs-md-14 fs-12 px-md-2 px-1 left-5px position-absolute top-n12px" for="">Attach Files (doc, xls, pdf, txt, ppt and zip files only, max filesize 25MB)</label>
                                       <div class="row">
                                          <div class="form-floating atteched_files text-center mt-md-2 mt-3">
                                             <input class="w-82 text-center mx-auto h-38px" type="file" name="getfile" id="atteched_files">
                                             <label class="w-80 bg-theme1 h-auto text-white fs-md-16 fs-14 text-center p-2 rounded top-0 mx-auto left-0 right-0" for="atteched_files">Select a file....</label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md">
                                    <div class="g-recaptcha" data-sitekey="{{GETRECAPTCHADATA('site')}}"></div>
                                    <!-- <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div> -->
                                 </div>

                                 <div class="col-auto align-self-center">
                                    <button id="GetQuote" type="button" class="btn btn-theme2 fs-md-14 fs-12 fw-bold hero_read_more_btn py-2 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                                       <span class="d-block"><span>Submit</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                    </button>
                                 </div>

                              </form>
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
      $.ajax({
			type: "POST",
			url: "{{asset('/quote_action')}}",
			data: $('form#contactusform').serialize(), // <--- THIS IS THE CHANGE
			dataType: "json",
			async: false,
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