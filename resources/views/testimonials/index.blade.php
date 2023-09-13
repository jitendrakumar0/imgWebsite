@extends('main')
@push('meta')
   <!--  Title -->
   <title>Client Testimonials | IMG Global Infotech Pvt. Ltd.</title>

   <!-- Required meta tags -->
   <meta name="title" content="Client Testimonials | IMG Global Infotech Pvt. Ltd." />
   <meta name="description" content="Look out what our client has to say about us about their trust and their experience. We are grateful for their faith in our web and app development services." />
   <meta name="keywords" content="Testimonial for Responsive Website Design, E-Commerce Website Testimonial, Mobile App Development Testimonial India, SEO Services Testimonials India, Website Development Testimonial Jaipur, Software Development Testimonial" />

   <!-- Twitter Meta -->
   <meta name="twitter:title" content="Client Testimonials | IMG Global Infotech Pvt. Ltd.">
   <meta name="twitter:description" content="Look out what our client has to say about us about their trust and their experience. We are grateful for their faith in our web and app development services.">
   <meta name="twitter:image" content="{{asset('/public')}}/assets/img/testimonials/1.webp">

   <!-- Facebook Meta -->
   <meta property="og:url" content="{{asset('/')}}testimonials.php">
   <meta property="og:title" content="Client Testimonials | IMG Global Infotech Pvt. Ltd.">
   <meta property="og:description" content="Look out what our client has to say about us about their trust and their experience. We are grateful for their faith in our web and app development services.">
   <meta property="og:image" content="{{asset('/public')}}/assets/img/testimonials/1.webp">
   <meta property="og:image:secure_url" content="{{asset('/public')}}/assets/img/testimonials/1.webp">


	
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('/public')}}/assets/img/logos/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('/public')}}/assets/img/logos/favicon-16x16.png">
	
   <meta name="classification" content="Testimonial for Responsive Website Design, E-Commerce Website Testimonial, Mobile App Development Testimonial India, SEO Services Testimonials India, Website Development Testimonial Jaipur, Software Development Testimonial" />
   <link rel="canonical" href="{{asset('/')}}testimonials.php" />
   <meta name="robots" content="index, follow" />
@endpush
@push('styles')
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/testimonials.min.css">
@endpush
@section('content')

   <!-- top banner section -->
   <div class="container-fluid overflow-hidden bg-white top_banner position-relative" style="--bg:url({{GETFOLDERPATH()}}/hero.webp);">
      <div class="container py-5 position-relative zi-2">
         <div class="row pt-4">
            <div class="col-12">
               <div class="row pt-4 align-items-center">
                  <div class="col-lg-6 py-lg-5 pt-md-5 pb-md-4 py-4 order-lg-0 order-md-1 order-1">
                     <div class="row pt-3 text-lg-start text-md-center text-center">
                        <div class="col-12">
                           <div class="row mx-0 pb-2">
                              <h1 class="d-none invisible">Clients Reviews and Testimonials </h1>
                              <div class="col-12 heading fs-md-14 fs-12 left text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Clients Reviews <b> and Testimonials </b></span>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 fw-l fs-md-20 fs-16 text-white mt-3">Words Marking Our Worth!</div>
                        <div class="col-12 fw-l fs-md-16 fs-14 text-white mb-3 mt-3">Our global clients are elemental to our success story. We pride ourselves on exceptional service & retention. No matter how small or big your project, we assure you the highest level of dedication to deliver upon your expectations. See what our clients have to say about working with team IMG Global Infotech.</div>
                        <div class="col-12 pt-4">
                           <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 fs-md-14 fs-13 fw-m hero_read_more_btn py-2 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                              <span class="d-block"><span>Enquire Now</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 pe-lg-5 top_banner-left-part">
                     <div class="row justify-content-lg-end justify-content-md-center justify-content-center">
                        <div class="col-lg-8 col-md-5 col-7 position-relative">
						   <img src="{{asset('/public')}}/assets/img/testimonials/testimonials.webp" class="lazy-image w-100" data-src="{{GETFOLDERPATH()}}/clients-reviews-estimonials.webp"alt="Clients Reviews and Testimonials " width="100" height="auto">
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Bredcrumb section -->
   <div class="container-fluid overflow-hidden px-0 bredcrumb_main py-lg-3 py-md-2 py-2 d-md-block d-none">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                     <li class="breadcrumb-item"><a class="fw-l fs-lg-16 fs-md-15 fs-14 text-theme2 text-decoration-none" href="{{asset('/')}}">Home</a></li>
                     <li class="breadcrumb-item active fw-l fs-lg-16 fs-md-15 fs-14 text-dark" aria-current="page">Testimonials</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>

   <!-- our achievements section -->
   <div class="container-fluid achievements position-relative overflow-hidden" style="--bg:white;">
      <div class="container position-relative zi-1 py-5">
         <div class="row align-items-center">
            <div class="col-12">
               <div class="row align-items-end">
                  <div class="col-lg-6 col-md-12 position-relative mb-lg-0 mb-md-4 mb-4">
                     <div class="row justify-content-md-start justify-content-center text-md-left text-center">
                        <h2 class="d-none invisible">Why Does Our Client Love Us?</h2>
                        <div class="col-12 heading fs-md-14 fs-12 right mb-5"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Why Does Our <b> Client Love Us?</b></span></div>
                        <div class="col-md-12">
                           <div class="py-3 px-4 bg-dark shadow rounded mb-3 border-top border-theme3 border-4 text-md-end text-center">
                              <h3 class="d-none invisible">We are proactive, efficient & experienced.</h3>
                              <div class="col-12 fw-l text-light fs-md-16 fs-sm-15 fs-14 lh-normal">We are proactive, efficient & experienced.<span class="imgl img-star ms-2 d-lg-inline-block d-none"></span></div>
                           </div>
                           <div class="py-3 px-4 bg-dark shadow rounded mb-3 border-top border-theme3 border-4 text-md-end text-center">
                              <h3 class="d-none invisible">We deliver practical IT solutions for startups, SMEs, and large enterprises.</h3>
                              <div class="col-12 fw-l text-light fs-md-16 fs-sm-15 fs-14 lh-normal">We deliver practical IT solutions for startups, SMEs, and large enterprises.<span class="imgl img-star ms-2 d-lg-inline-block d-none"></span></div>
                           </div>
                           <div class="py-3 px-4 bg-dark shadow rounded mb-3 border-top border-theme3 border-4 text-md-end text-center">
                              <h3 class="d-none invisible">We offer dedicated client support.</h3>
                              <div class="col-12 fw-l text-light fs-md-16 fs-sm-15 fs-14 lh-normal">We offer dedicated client support. <span class="imgl img-star ms-2 d-lg-inline-block d-none"></span></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 position-relative">
                     <div class="row">
                        <div class="col-md-4 col-6">
                           <a href="javascript:;" class="w-100 text-center py-md-4 py-3 d-block">
                              <img src="{{GETFOLDERPATH()}}/certified1.webp" class="h-100px" alt="Certified 1">
                           </a>
                        </div>
                        <div class="col-md-4 col-6">
                           <a href="javascript:;" class="w-100 text-center py-md-4 py-3 d-block">
                              <img src="{{GETFOLDERPATH()}}/certified2.webp" class="h-100px" alt="Certified 2">
                           </a>
                        </div>
                        <div class="col-md-4 col-6">
                           <a href="javascript:;" class="w-100 text-center py-md-4 py-3 d-block">
                              <img src="{{GETFOLDERPATH()}}/certified3.webp" class="h-100px" alt="Certified 3">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

<!-- testimonials page section -->
<div class="container-fluid testimonials_page_section position-relative overflow-hidden">
   <div class="container position-relative zi-1 py-5">
      <div class="row mx-0 pb-5">
      <h2 class="d-none invisible">Testimonials</h2>
      <div class="col-12 heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Testimonials <b> </b></span></div>
      </div>
<div class="row">
	<div class="col-12 mb-4">
	  <div class="testimonials_revive_box bg-white position-relative shadow p-4 ps-4 pt-5 rounded">
		 <div class="col-12 fw-l fs-lg-16 fs-md-15 fs-14 text-muted ps-5 description-box">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="background-color:white"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#222222">They developed my company&#39;s Website and helped in driving Website Traffic which in turn reached customers faster. Neeraj Sir &amp; their team has always listened to all the issues and queries.</span></span></span></span></span></span></p>
		 </div>
		 <div class="row align-items-end">
			<div class="col-md-6">
			   <div class="row align-items-center mt-md-4 mt-3 justify-content-md-start justify-content-center pt-2">
				  <div class="col-md-auto text-center">
					 <span class="testimonials_ico">
						<img src="{{GETFOLDERPATH()}}/samarpan-international.webp" class="img-fluid" alt="samarpan-international">
					 </span>
				  </div>
				  <div class="col-md-auto py-2 text-center border-end border-start">
					 <div class="fw-l text-theme1 rounded-pill fs-lg-16 fs-md-17 fs-16 lh-normal">Samarpan International</div>
					 <h3 class="d-none invisible">Samarpan International</h3>
				  </div>
				  <div class="col-auto py-2">
					 <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i>
						India</span>
				  </div>
			   </div>
			</div>
			<div class="col-md-6 text-md-end text-center">
				 <div class="py-2 px-2 bg-dark shadow rounded mt-md-0 mt-2 border-top border-theme2 border-4 row d-inline-flex mx-0 align-items-center">
					 <div class="col-auto pe-0">
						<div class="fw-l text-white fs-md-14 fs-13">Google Review:</div>
					 </div>
					 <div class="col">
						
						   
										<div class="rate_ico">
														   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
														<i class="imgs img-star"></i>
													 </a>
														   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
												<i class="imgs img-star"></i>
											 </a>
														   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
												<i class="imgs img-star"></i>
											 </a>
														   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
												<i class="imgs img-star"></i>
											 </a>
														   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
											<i class="imgs img-star"></i>
										 </a>
										
						   </div>
						   
					 </div>
				  </div>
			 </div>
		 </div>
	  </div>
   </div>


	  <div class="col-12 mb-4">
	  <div class="testimonials_revive_box bg-white position-relative shadow p-4 ps-4 pt-5 rounded">
		 <div class="col-12 fw-l fs-lg-16 fs-md-15 fs-14 text-muted ps-5 description-box">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="background-color:white"><span style="color:#222222">As a part of mount litera zee school, I would like to thanks IMG Global Infotech to build such an impressive website that would help to gain visibility in front of parents as well as students.</span></span></span></span></span></p>
		 </div>
		 <div class="row align-items-end">
			<div class="col-md-6">
			   <div class="row align-items-center mt-md-4 mt-3 justify-content-md-start justify-content-center pt-2">
				  <div class="col-md-auto text-center">
					 <span class="testimonials_ico">
						<img src="{{GETFOLDERPATH()}}/mount-litera-zee-school-alwar.webp" class="img-fluid" alt="Mount Litera Zee School Alwar">
					 </span>
				  </div>
				  <div class="col-md-auto py-2 text-center border-end border-start">
					 <div class="fw-l text-theme1 rounded-pill fs-lg-16 fs-md-17 fs-16 lh-normal">Mount Litera Zee School Alwar</div>
					 <h3 class="d-none invisible">Mount Litera Zee School Alwar</h3>
				  </div>
				  <div class="col-auto py-2">
					 <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i>
						India</span>
				  </div>
			   </div>
			</div>
			<div class="col-md-6 text-md-end text-center">
											 <div class="py-2 px-2 bg-dark shadow rounded mt-md-0 mt-2 border-top border-theme2 border-4 row d-inline-flex mx-0 align-items-center">
					 <div class="col-auto pe-0">
						<div class="fw-l text-white fs-md-14 fs-13">Google Review:</div>
					 </div>
					 <div class="col">
						 <div class="rate_ico">
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
							
						   </div>
						   
					 </div>
				  </div>
		   </div>
		 </div>
	  </div>
   </div>


	<div class="col-12 mb-4">
	  <div class="testimonials_revive_box bg-white position-relative shadow p-4 ps-4 pt-5 rounded">
		 <div class="col-12 fw-l fs-lg-16 fs-md-15 fs-14 text-muted ps-5 description-box">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="background-color:white"><span style="color:#222222">I have been taking services from IMG for digital marketing activities for quite some time now. There has been a substantial increase in customers at my business. The traditional marketing ways were getting too slow for the digital age. Thank to IMG Global Infotech Pvt. Ltd. that now I can promote my business online and upgrade with the technology.</span></span></span></span></span></p>
		 </div>
		 <div class="row align-items-end">
			<div class="col-md-6">
			   <div class="row align-items-center mt-md-4 mt-3 justify-content-md-start justify-content-center pt-2">
				  <div class="col-md-auto text-center">
					 <span class="testimonials_ico">
						<img src="{{GETFOLDERPATH()}}/nandini-infosys.webp" class="img-fluid" alt="Nandini Infosys">
					 </span>
				  </div>
				  <div class="col-md-auto py-2 text-center border-end border-start">
					 <div class="fw-l text-theme1 rounded-pill fs-lg-16 fs-md-17 fs-16 lh-normal">Nandini Infosys</div>
					 <h3 class="d-none invisible">Nandini Infosys</h3>
				  </div>
				  <div class="col-auto py-2">
					 <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i>
						India</span>
				  </div>
			   </div>
			</div>
			<div class="col-md-6 text-md-end text-center">
				 <div class="py-2 px-2 bg-dark shadow rounded mt-md-0 mt-2 border-top border-theme2 border-4 row d-inline-flex mx-0 align-items-center">
					 <div class="col-auto pe-0">
						<div class="fw-l text-white fs-md-14 fs-13">Google Review:</div>
					 </div>
					 <div class="col">
						 <div class="rate_ico">
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
								
						   </div>
						   
					 </div>
				  </div>
			 </div>
		 </div>
	  </div>
   </div>


		 <div class="col-12 mb-4">
                  <div class="testimonials_revive_box bg-white position-relative shadow p-4 ps-4 pt-5 rounded">
                     <div class="col-12 fw-l fs-lg-16 fs-md-15 fs-14 text-muted ps-5 description-box">
                        <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="background-color:white"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#222222">The best company for website designing. my website looks stunning and designed in a committed timeline. Great work. Recommended for the website.</span></span></span></span></span></span></p>
                     </div>
                     <div class="row align-items-end">
                        <div class="col-md-6">
                           <div class="row align-items-center mt-md-4 mt-3 justify-content-md-start justify-content-center pt-2">
                           <div class="col-md-auto text-center">
                              <span class="testimonials_ico">
                                 <img src="{{GETFOLDERPATH()}}/akki-art-and-craft.webp" class="img-fluid" alt="akki-art-and-craft">
                              </span>
                           </div>
                           <div class="col-md-auto py-2 text-center border-end border-start">
                              <div class="fw-l text-theme1 rounded-pill fs-lg-16 fs-md-17 fs-16 lh-normal">Anu Rajput</div>
                              <h3 class="d-none invisible">Anu Rajput</h3>
                           </div>
                           <div class="col-auto py-2">
                              <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i>
                                 India</span>
                           </div>
                           </div>
                        </div>


			<div class="col-md-6 text-md-end text-center">
				 <div class="py-2 px-2 bg-dark shadow rounded mt-md-0 mt-2 border-top border-theme2 border-4 row d-inline-flex mx-0 align-items-center">
					 <div class="col-auto pe-0">
						<div class="fw-l text-white fs-md-14 fs-13">Google Review:</div>
					 </div>
					    <div class="col">
						    <div class="rate_ico">
									 <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
									  <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
									  <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
									 <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
									 <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
									
						   </div>
						   
					 </div>
				  </div>
			</div>
		 </div>
	  </div>
   </div>


	 <div class="col-12 mb-4">
	  <div class="testimonials_revive_box bg-white position-relative shadow p-4 ps-4 pt-5 rounded">
		 <div class="col-12 fw-l fs-lg-16 fs-md-15 fs-14 text-muted ps-5 description-box">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="background-color:white"><span style="color:#222222">After searching a lot, we found them via my relative and it is really a good thing for me. they are really professional and co-operative. my account manager mr. lokesh is keen to help me in every possible manner. i strongly recommend to other people for the same era of services.</span></span></span></span></span></p>
		 </div>
		 <div class="row align-items-end">
			<div class="col-md-6">
			   <div class="row align-items-center mt-md-4 mt-3 justify-content-md-start justify-content-center pt-2">
				  <div class="col-md-auto text-center">
					 <span class="testimonials_ico">
						<img src="{{GETFOLDERPATH()}}/jprc.webp" class="img-fluid" alt="jprc">
					 </span>
				  </div>
				  <div class="col-md-auto py-2 text-center border-end border-start">
					 <div class="fw-l text-theme1 rounded-pill fs-lg-16 fs-md-17 fs-16 lh-normal">Sanjay Sharma</div>
					 <h3 class="d-none invisible">Sanjay Sharma</h3>
				  </div>
				  <div class="col-auto py-2">
					 <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i>
						India</span>
				  </div>
			   </div>
			</div>

			<div class="col-md-6 text-md-end text-center">
				 <div class="py-2 px-2 bg-dark shadow rounded mt-md-0 mt-2 border-top border-theme2 border-4 row d-inline-flex mx-0 align-items-center">
					 <div class="col-auto pe-0">
						<div class="fw-l text-white fs-md-14 fs-13">Google Review:</div>
					 </div>
					 <div class="col">
						  <div class="rate_ico">
								 <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
								
						   </div>
						   
					 </div>
				  </div>
			  </div>
		 </div>
	  </div>
   </div>
			 
   
   <div class="col-12 mb-4">
	  <div class="testimonials_revive_box bg-white position-relative shadow p-4 ps-4 pt-5 rounded">
		 <div class="col-12 fw-l fs-lg-16 fs-md-15 fs-14 text-muted ps-5 description-box">
			<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="background-color:white"><span style="color:#222222">Best web and app development company. they help in every manner to satisfy the client. we are very happy with the services they provided.</span></span></span></span></span></p>
		 </div>
		 <div class="row align-items-end">
			<div class="col-md-6">
			   <div class="row align-items-center mt-md-4 mt-3 justify-content-md-start justify-content-center pt-2">
				  <div class="col-md-auto text-center">
					 <span class="testimonials_ico">
						<img src="{{GETFOLDERPATH()}}/negocia-global.webp" class="img-fluid" alt="Negocia Global">
					 </span>
				  </div>
				  <div class="col-md-auto py-2 text-center border-end border-start">
					 <div class="fw-l text-theme1 rounded-pill fs-lg-16 fs-md-17 fs-16 lh-normal">Negocia Global</div>
					 <h3 class="d-none invisible">Negocia Global</h3>
				  </div>
				  <div class="col-auto py-2">
					 <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i>
						India</span>
				  </div>
			   </div>
			</div>
			<div class="col-md-6 text-md-end text-center">
											 <div class="py-2 px-2 bg-dark shadow rounded mt-md-0 mt-2 border-top border-theme2 border-4 row d-inline-flex mx-0 align-items-center">
					 <div class="col-auto pe-0">
						<div class="fw-l text-white fs-md-14 fs-13">Google Review:</div>
					 </div>
					 <div class="col">
						
						   
						   <div class="rate_ico">
								  <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
									<a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
								  <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
								  <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
									<a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
							
						   </div>
						   
					 </div>
				  </div>
			   </div>
		 </div>
	  </div>
   </div>

		 <div class="col-12 mb-4">
         <div class="testimonials_revive_box bg-white position-relative shadow p-4 ps-4 pt-5 rounded">
            <div class="col-12 fw-l fs-lg-16 fs-md-15 fs-14 text-muted ps-5 description-box">
               <p>I would like to thanks IMG global Infotech and its team to build such an appealing and attractive website and mobile app for our institute.</p>
            </div>
            <div class="row align-items-end">
               <div class="col-md-6">
                  <div class="row align-items-center mt-md-4 mt-3 justify-content-md-start justify-content-center pt-2">
                  <div class="col-md-auto text-center">
                     <span class="testimonials_ico">
                        <img src="{{GETFOLDERPATH()}}/civilian-institute.webp" class="img-fluid" alt="Civilian Institute">
                     </span>
                  </div>
                  <div class="col-md-auto py-2 text-center border-end border-start">
                     <div class="fw-l text-theme1 rounded-pill fs-lg-16 fs-md-17 fs-16 lh-normal">Civilian Institute</div>
                     <h3 class="d-none invisible">Civilian Institute</h3>
                  </div>
                  <div class="col-auto py-2">
                     <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i>
                        India</span>
                  </div>
                  </div>
               </div>
			<div class="col-md-6 text-md-end text-center">
				 <div class="py-2 px-2 bg-dark shadow rounded mt-md-0 mt-2 border-top border-theme2 border-4 row d-inline-flex mx-0 align-items-center">
					 <div class="col-auto pe-0">
						<div class="fw-l text-white fs-md-14 fs-13">Google:</div>
					 </div>
					 <div class="col">
						 <div class="rate_ico">
								<a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
								   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
								   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
								   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
						   </div>
						   
					 </div>
				  </div>
			 </div>
		 </div>
	  </div>
   </div>

	<div class="col-12 mb-4">
	  <div class="testimonials_revive_box bg-white position-relative shadow p-4 ps-4 pt-5 rounded">
		 <div class="col-12 fw-l fs-lg-16 fs-md-15 fs-14 text-muted ps-5 description-box">
			Enjoyed working with IMG Global Infotech. My project was well executed by IMG website developing team and it was delivered to me in stipulated time. Thanks IMG!                     </div>
		 <div class="row align-items-end">
			<div class="col-md-6">
			   <div class="row align-items-center mt-md-4 mt-3 justify-content-md-start justify-content-center pt-2">
				  <div class="col-md-auto text-center">
					 <span class="testimonials_ico">
						<img src="{{GETFOLDERPATH()}}/samarpan-internationalpng.png" class="img-fluid" alt="Samarpan Art & Handicrafts">
					 </span>
				  </div>
				  <div class="col-md-auto py-2 text-center border-end border-start">
					 <div class="fw-l text-theme1 rounded-pill fs-lg-16 fs-md-17 fs-16 lh-normal">Samarpan Art &amp; Handicrafts</div>
					 <h3 class="d-none invisible">Samarpan Art &amp; Handicrafts</h3>
				  </div>
				  <div class="col-auto py-2">
					 <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i>
						India</span>
				  </div>
			   </div>
			</div>
			<div class="col-md-6 text-md-end text-center">
									   </div>
		 </div>
	  </div>
   </div>
		 <div class="col-12 mb-4">
            <div class="testimonials_revive_box bg-white position-relative shadow p-4 ps-4 pt-5 rounded">
               <div class="col-12 fw-l fs-lg-16 fs-md-15 fs-14 text-muted ps-5 description-box">
                  <p>IMG Global Infotech did a Great job with my project. They suggested and worked with me on the various designs and functions of my website until I was satisfied. The technical and designing skills of IMG&acirc;&euro;&trade;s developers are great with PHP.</p>
               </div>
               <div class="row align-items-end">
                  <div class="col-md-6">
                     <div class="row align-items-center mt-md-4 mt-3 justify-content-md-start justify-content-center pt-2">
                     <div class="col-md-auto text-center">
                        <span class="testimonials_ico">
                           <img src="{{GETFOLDERPATH()}}/nida-designing-institute-agra.webp" class="img-fluid" alt="NIDA Designing Institute Agra">
                        </span>
                     </div>
                     <div class="col-md-auto py-2 text-center border-end border-start">
                        <div class="fw-l text-theme1 rounded-pill fs-lg-16 fs-md-17 fs-16 lh-normal">NIDA Designing Institute Agra</div>
                        <h3 class="d-none invisible">NIDA Designing Institute Agra</h3>
                     </div>
                     <div class="col-auto py-2">
                        <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i>
                           India</span>
                     </div>
                     </div>
                  </div>
                  <div class="col-md-6 text-md-end text-center">
                     </div>
               </div>
              </div>
            </div>


			   <div class="col-12 mb-4">
               <div class="testimonials_revive_box bg-white position-relative shadow p-4 ps-4 pt-5 rounded">
                  <div class="col-12 fw-l fs-lg-16 fs-md-15 fs-14 text-muted ps-5 description-box">
                     IMG Global Infotech Pvt. Ltd. helped us in reaching to the needed ones through a global stage. I recommend them to everyone who wants to build a responsive website.
                  </div>
                  <div class="row align-items-end">
                     <div class="col-md-6">
                        <div class="row align-items-center mt-md-4 mt-3 justify-content-md-start justify-content-center pt-2">
                        <div class="col-md-auto text-center">
                           <span class="testimonials_ico">
                              <img src="{{GETFOLDERPATH()}}/sethichildrenhospital.png" class="img-fluid" alt="Sethi Children Hospital">
                           </span>
                        </div>
                        <div class="col-md-auto py-2 text-center border-end border-start">
                           <div class="fw-l text-theme1 rounded-pill fs-lg-16 fs-md-17 fs-16 lh-normal">Sethi Children Hospital</div>
                           <h3 class="d-none invisible">Sethi Children Hospital</h3>
                        </div>
                        <div class="col-auto py-2">
                           <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i>
                              India</span>
                        </div>
                        </div>
                     </div>
                     <div class="col-md-6 text-md-end text-center">
                   </div>
                  </div>
                 </div>
               </div>
			  
   
   <div class="col-12 mb-4">
	  <div class="testimonials_revive_box bg-white position-relative shadow p-4 ps-4 pt-5 rounded">
		 <div class="col-12 fw-l fs-lg-16 fs-md-15 fs-14 text-muted ps-5 description-box">
			<p>Enjoyed working with IMG Global Infotech. My project was well executed by IMG&rsquo;s website developing team and it was delivered to me in stipulated time.</p>
		 </div>
		 <div class="row align-items-end">
			<div class="col-md-6">
			   <div class="row align-items-center mt-md-4 mt-3 justify-content-md-start justify-content-center pt-2">
				  <div class="col-md-auto text-center">
					 <span class="testimonials_ico">
						<img src="{{GETFOLDERPATH()}}/tija-Icecream.png" class="img-fluid" alt="Tija Icecream">
					 </span>
				  </div>
				  <div class="col-md-auto py-2 text-center border-end border-start">
					 <div class="fw-l text-theme1 rounded-pill fs-lg-16 fs-md-17 fs-16 lh-normal">Tija Icecream</div>
					 <h3 class="d-none invisible">Tija Icecream</h3>
				  </div>
				  <div class="col-auto py-2">
					 <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i>
						India</span>
				  </div>
			   </div>
			</div>
			<div class="col-md-6 text-md-end text-center">
											 <div class="py-2 px-2 bg-dark shadow rounded mt-md-0 mt-2 border-top border-theme2 border-4 row d-inline-flex mx-0 align-items-center">
					 <div class="col-auto pe-0">
						<div class="fw-l text-white fs-md-14 fs-13">Google:</div>
					 </div>
					 <div class="col">
						
						   
						   <div class="rate_ico">
									<a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
								  <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
								   <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
									<i class="imgs img-star"></i>
								 </a>
																		<!-- <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
								 <i class="imgs img-star"></i>
							  </a>
							  <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
								 <i class="imgs img-star"></i>
							  </a>
							  <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
								 <i class="imgs img-star"></i>
							  </a>
							  <a class="text-theme3 fs-md-15 fs-13 d-inline-block ml-1" href="javascript:;">
								 <i class="imgl img-star"></i>
							  </a> -->
						   </div>
						   
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
   <script src="{{asset('/public')}}/assets/js/testimonials.min.js"></script>
@endpush