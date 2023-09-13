@extends('main')
@push('meta')
    <!--  Title -->
    <title>IMG Global Infotech - Web & Mobile App Development Company</title>

    <!-- Required meta tags -->
    <meta name="title" content="IMG Global Infotech - Web & Mobile App Development Company" />
    <meta name="description" content="IMG Global Infotech is an ISO certified Web and Mobile App Development Company that delivered over 600+ projects successfully completed in India, UK & USA." />
    <meta name="keywords" content="Web Development Company, E-Commerce Website, Android App Development, Mobile App, Best Website Design, Web Design Services, Web Development Services in Jaipur, Web Design and Development in India, Ecommerce Web Design Jaipur, Online Shopping Portal Development, Professional Website Design, Website Design Services, Web Development Company in India, Internet Marketing, Online Marketing Agency, Digital Marketing Services, About us IMG Global Infotech, IT Software Company, Best IT Company in Jaipur" />

    <!-- Twitter Meta -->
    <meta name="twitter:title" content="IMG Global Infotech - Web & Mobile App Development Company">
    <meta name="twitter:description" content="IMG Global Infotech is an ISO certified Web and Mobile App Development Company that delivered over 600+ projects successfully completed in India, UK & USA.">
    <meta name="twitter:image" content="{{GETFOLDERPATH()}}/1.webp">

    <!-- Facebook Meta -->
    <meta property="og:url" content="{{asset('/')}}about-us.php">
    <meta property="og:title" content="IMG Global Infotech - Web & Mobile App Development Company">
    <meta property="og:description" content="IMG Global Infotech is an ISO certified Web and Mobile App Development Company that delivered over 600+ projects successfully completed in India, UK & USA.">
    <meta property="og:image" content="{{GETFOLDERPATH()}}/1.webp">
    <meta property="og:image:secure_url" content="{{GETFOLDERPATH()}}/1.webp">


    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/public')}}/assets/img/logos/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/public')}}/assets/img/logos/favicon-16x16.png">
    
    <meta name="classification" content="Web Development Company, E-Commerce Website, Android App Development, Mobile App, Best Website Design, Web Design Services, Web Development Services in Jaipur, Web Design and Development in India, Ecommerce Web Design Jaipur, Online Shopping Portal Development, Professional Website Design, Website Design Services, Web Development Company in India, Internet Marketing, Online Marketing Agency, Digital Marketing Services, About us IMG Global Infotech, IT Software Company, Best IT Company in Jaipur" />
    <link rel="canonical" href="{{asset('/')}}about-us.php" />
    <meta name="robots" content="noindex, nofollow" />
@endpush
@push('styles')
    <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/case-study.min.css">
@endpush
@section('content')


{{-- Hero Section --}}
@section('hero_hiddenHeading')
An Ingenious Web and Mobile App Development Company
@endsection('hero_hiddenHeading')
@section('hero_heading')
<span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Case Study  <b>  Development Portfolio</b></span>
@endsection('hero_heading')
@section('hero_tagline')
Delivering supreme and exclusive web application, Android & iPhone Apps and Digital Marketing services.
@endsection('hero_tagline')
@section('hero_btn')
<div class="col-12 pt-3 text-lg-start text-center">
	   <a href="tel:+91-9694097245" class="btn btn-theme3 text-white fs-14 fw-bold my-3 py-2 px-4">
		  <span class="d-block"><span>9694097245</span> <i class="imgr ms-2 img-phone-volume position-relative bottom-n2px"></i></span>
	   </a>
	   <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 text-white fs-14 fw-bold my-3 py-2 px-4 ms-md-2">
		  <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
	   </a>
	</div>
@endsection('hero_btn')
@section('hero_img')
<img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/1.webp" alt="An Ingenious Web and Mobile App Development Company">
@endsection('hero_img')
@include('inner-page-section.hero.index')


    <!-- Bredcrumb section -->
    <div class="container-fluid overflow-hidden px-0 bredcrumb_main py-lg-3 py-md-2 py-2 d-md-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a class="fw-600 fs-lg-16 fs-md-15 fs-14 text-theme2 text-decoration-none" href="{{asset('/')}}">Home</a></li>
                        <li class="breadcrumb-item active fw-600 fs-lg-16 fs-md-15 fs-14 text-dark" aria-current="page">Case Study Portfolio</li>
                    </ol>
                </nav>
                </div>
            </div>
        </div>
    </div>
	
	
	
   <!-- Case & study section -->
   <div class="container-fluid overflow-hidden case-study bg-white position-relative">
        <div class="container position-relative py-5">

               <div class="row mx-0 pb-5 services ">
                     <!-- Nav tabs -->
                        <ul class="nav nav-tabs border-0 s-sidebar align-items-start px-4 py-3 " role="">
                        <li class="nav-item pe-2 mb-2">
                                 <a class="nav-link s-item text-decoration-none bg-white shadow wave-1 fs-12 fw-bold border-start border-theme1 rounded active" data-bs-toggle="tab" href="#home">
                                    <div class="row align-items-center">
                                       <div class="col-auto pe-0 d-inline-flex overflow-hidden">
                                          <i class="imgd img-chevron-right"></i>
                                        </div>
                                        <div class="col">Mobile App Development</div>
                                    </div>
                                 </a>
                            </li>

                            <li class="nav-item pe-2 mb-2">
                                 <a class="nav-link s-item text-decoration-none bg-white shadow wave-1 fs-12 fw-bold border-start border-theme1 rounded " data-bs-toggle="tab" href="#home1">
                                    <div class="row align-items-center">
                                       <div class="col-auto pe-0 d-inline-flex overflow-hidden">
                                          <i class="imgd img-chevron-right"></i>
                                        </div>
                                        <div class="col">Web Design & Development</div>
                                    </div>
                                 </a>
                            </li>

                            <li class="nav-item pe-2 mb-2">
                                 <a class="nav-link s-item text-decoration-none bg-white shadow wave-1 fs-12 fw-bold border-start border-theme1 rounded " data-bs-toggle="tab" href="#home2">
                                    <div class="row align-items-center">
                                       <div class="col-auto pe-0 d-inline-flex overflow-hidden">
                                          <i class="imgd img-chevron-right"></i>
                                        </div>
                                        <div class="col">Web App Design</div>
                                    </div>
                                 </a>
                            </li>

                            <li class="nav-item pe-2 mb-2">
                                 <a class="nav-link s-item text-decoration-none bg-white shadow wave-1 fs-12 fw-bold border-start border-theme1 rounded " data-bs-toggle="tab" href="#home3">
                                    <div class="row align-items-center">
                                       <div class="col-auto pe-0 d-inline-flex overflow-hidden">
                                          <i class="imgd img-chevron-right"></i>
                                        </div>
                                        <div class="col">SEO Portfolio</div>
                                    </div>
                                 </a>
                            </li>

                            <li class="nav-item pe-2 mb-2">
                                 <a class="nav-link s-item text-decoration-none bg-white shadow wave-1 fs-12 fw-bold border-start border-theme1 rounded " data-bs-toggle="tab" href="#home4">
                                    <div class="row align-items-center">
                                       <div class="col-auto pe-0 d-inline-flex overflow-hidden">
                                          <i class="imgd img-chevron-right"></i>
                                        </div>
                                        <div class="col">Ecommerce App Development</div>
                                    </div>
                                 </a>
                            </li>

                            <li class="nav-item pe-2 mb-2">
                                 <a class="nav-link s-item text-decoration-none bg-white shadow wave-1 fs-12 fw-bold border-start border-theme1 rounded " data-bs-toggle="tab" href="#home5">
                                    <div class="row align-items-center">
                                       <div class="col-auto pe-0 d-inline-flex overflow-hidden">
                                          <i class="imgd img-chevron-right"></i>
                                        </div>
                                        <div class="col">Web Portal  App Development</div>
                                    </div>
                                 </a>
                            </li>
                          </ul>

                        <!-- Tab panes -->
                        <div class="tab-content mt-5 shadow main-case pt-5 pb-5 bg-white">
                            <!-- Case Study 1 -->
                               <div id="home" class="container tab-pane active ">
                                    <div class="row d-flex align-items-center justify-content-center mb-3 ">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                                         <div class="row d-flex align-items-center justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="ol-12 case-outer shadow border border-theme3 border-1 p-4">
                                                   <div class="col-auto position-relative"><span class="no">01</span></div>
                                                     <div class="col-12 case-inner shadow border border-3 pd-3 p-4">
                                                        <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900  fs-md-23 fs-sm-18 fs-16 lh-normal mt-2">Multi-vendor e-commerce <b> marketplace platform</b></span></div>
                                                       <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14  mt-2">Only a wise advice works well for a business. Unlike other digital marketing agencies, we help you to 
                                                          make decisions in every case. We are a trusted source for good advice as we are the experts having great knowledge, unique
                                                        thinking approach and we can make a difference.</div>
                                                        <div class="col-12">
                                                            <ul class="mb-0 list-unstyled list-inline mt-2 ">  
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/android.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/angularjs.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/cake-php.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/codeigniter.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ionic.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ios.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/nodejs.png" alt=""></li>    
                                                             </ul>
                                                       </div>
                                                        <div class="col-5 pt-3 text-lg-start text-center">
                                                         <a href="#0" class="btn btn-theme3 text-white fs-11 fw-bold py-2 px-4">
                                                            <span class="d-block"><span>See case study</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                        </a>
                                                    </div>
                                                  </div>   
                                                </div>   
                                            </div>
                                             <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-5 col-7">
                                                    <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/app.png" alt="">
                                                  </div>
                                             </div>   
                                         </div>

                                         <div class="row d-flex align-items-center justify-content-center mt-5">
                                           <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-5 col-7">
                                                    <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/app.png" alt="">
                                                  </div>
                                             </div>   
                                            <div class="col-lg-6">
                                                <div class="ol-12 case-outer shadow border border-theme3 border-1 p-4">
                                                   <div class="col-auto position-relative"><span class="no">02</span></div>
                                                     <div class="col-12 case-inner shadow border border-3 pd-3 p-4">
                                                        <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-23 fs-sm-18 fs-16 lh-normal mt-2">Multi-vendor e-commerce <b> marketplace platform</b></span></div>
                                                       <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 mt-2">Only a wise advice works well for a business. Unlike other digital marketing agencies, we help you to 
                                                          make decisions in every case. We are a trusted source for good advice as we are the experts having great knowledge, unique
                                                        thinking approach and we can make a difference.</div>
                                                        <div class="col-12">
                                                            <ul class="mb-0 list-unstyled list-inline mt-2 ">  
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/android.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/angularjs.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/cake-php.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/codeigniter.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ionic.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ios.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/nodejs.png" alt=""></li>    
                                                             </ul>
                                                       </div>
                                                        <div class="col-5 pt-3 text-lg-start text-center">
                                                         <a href="#0" class="btn btn-theme3 text-white fs-11 fw-bold py-2 px-4">
                                                            <span class="d-block"><span>See case study</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                        </a>
                                                    </div>
                                                  </div>   
                                                </div>   
                                            </div>
                                      </div>
                                 </div>
                               </div>

                              </div>
                          

                               <!-- Case Study 1 -->
                            <div id="home1" class="container tab-pane fade">
                                   <div class="row d-flex align-items-center justify-content-center mb-3">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                         <div class="row d-flex align-items-center justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="ol-12 case-outer shadow border border-theme3 border-1 p-4">
                                                   <div class="col-auto position-relative"><span class="no">01</span></div>
                                                     <div class="col-12 case-inner shadow border border-3 pd-3 p-4">
                                                        <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900  fs-md-23 fs-sm-18 fs-16 lh-normal mt-2">Multi-vendor e-commerce <b> marketplace platform</b></span></div>
                                                       <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14  mt-2">Only a wise advice works well for a business. Unlike other digital marketing agencies, we help you to 
                                                          make decisions in every case. We are a trusted source for good advice as we are the experts having great knowledge, unique
                                                        thinking approach and we can make a difference.</div>
                                                        <div class="col-12">
                                                            <ul class="mb-0 list-unstyled list-inline mt-2 ">  
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/android.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/angularjs.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/cake-php.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/codeigniter.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ionic.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ios.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/nodejs.png" alt=""></li>    
                                                             </ul>
                                                       </div>
                                                        <div class="col-5 pt-3 text-lg-start text-center">
                                                         <a href="#0" class="btn btn-theme3 text-white fs-11 fw-bold py-2 px-4">
                                                            <span class="d-block"><span>See case study</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                        </a>
                                                    </div>
                                                  </div>   
                                                </div>   
                                            </div>
                                             <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-5 col-7">
                                                    <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/app.png" alt="">
                                                  </div>
                                             </div>   
                                         </div>

                                         <div class="row d-flex align-items-center justify-content-center mt-5">
                                           <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-5 col-7">
                                                    <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/app.png" alt="">
                                                  </div>
                                             </div>   
                                            <div class="col-lg-6">
                                                <div class="ol-12 case-outer shadow border border-theme3 border-1 p-4">
                                                   <div class="col-auto position-relative"><span class="no">02</span></div>
                                                     <div class="col-12 case-inner shadow border border-3 pd-3 p-4">
                                                        <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-23 fs-sm-18 fs-16 lh-normal mt-2">Multi-vendor e-commerce <b> marketplace platform</b></span></div>
                                                       <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 mt-2">Only a wise advice works well for a business. Unlike other digital marketing agencies, we help you to 
                                                          make decisions in every case. We are a trusted source for good advice as we are the experts having great knowledge, unique
                                                        thinking approach and we can make a difference.</div>
                                                        <div class="col-12">
                                                            <ul class="mb-0 list-unstyled list-inline mt-2 ">  
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/android.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/angularjs.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/cake-php.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/codeigniter.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ionic.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ios.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/nodejs.png" alt=""></li>    
                                                             </ul>
                                                       </div>
                                                        <div class="col-5 pt-3 text-lg-start text-center">
                                                         <a href="#0" class="btn btn-theme3 text-white fs-11 fw-bold py-2 px-4">
                                                            <span class="d-block"><span>See case study</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                        </a>
                                                    </div>
                                                  </div>   
                                                </div>   
                                            </div>
                                      </div>
                                 </div>
                               </div>
                            </div>

                               <!-- Case Study 2 -->
                            <div id="home2" class="container tab-pane fade">
                            <div class="row d-flex align-items-center justify-content-center mb-3">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                         <div class="row d-flex align-items-center justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="ol-12 case-outer shadow border border-theme3 border-1 p-4">
                                                   <div class="col-auto position-relative"><span class="no">01</span></div>
                                                     <div class="col-12 case-inner shadow border border-3 pd-3 p-4">
                                                        <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900  fs-md-23 fs-sm-18 fs-16 lh-normal mt-2">Multi-vendor e-commerce <b> marketplace platform</b></span></div>
                                                       <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14  mt-2">Only a wise advice works well for a business. Unlike other digital marketing agencies, we help you to 
                                                          make decisions in every case. We are a trusted source for good advice as we are the experts having great knowledge, unique
                                                        thinking approach and we can make a difference.</div>
                                                        <div class="col-12">
                                                            <ul class="mb-0 list-unstyled list-inline mt-2 ">  
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/android.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/angularjs.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/cake-php.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/codeigniter.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ionic.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ios.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/nodejs.png" alt=""></li>    
                                                             </ul>
                                                       </div>
                                                        <div class="col-5 pt-3 text-lg-start text-center">
                                                         <a href="#0" class="btn btn-theme3 text-white fs-11 fw-bold py-2 px-4">
                                                            <span class="d-block"><span>See case study</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                        </a>
                                                    </div>
                                                  </div>   
                                                </div>   
                                            </div>
                                             <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-5 col-7">
                                                    <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/app.png" alt="">
                                                  </div>
                                             </div>   
                                         </div>

                                         <div class="row d-flex align-items-center justify-content-center mt-5">
                                           <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-5 col-7">
                                                    <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/app.png" alt="">
                                                  </div>
                                             </div>   
                                            <div class="col-lg-6">
                                                <div class="ol-12 case-outer shadow border border-theme3 border-1 p-4">
                                                   <div class="col-auto position-relative"><span class="no">02</span></div>
                                                     <div class="col-12 case-inner shadow border border-3 pd-3 p-4">
                                                        <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-23 fs-sm-18 fs-16 lh-normal mt-2">Multi-vendor e-commerce <b> marketplace platform</b></span></div>
                                                       <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 mt-2">Only a wise advice works well for a business. Unlike other digital marketing agencies, we help you to 
                                                          make decisions in every case. We are a trusted source for good advice as we are the experts having great knowledge, unique
                                                        thinking approach and we can make a difference.</div>
                                                        <div class="col-12">
                                                            <ul class="mb-0 list-unstyled list-inline mt-2 ">  
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/android.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/angularjs.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/cake-php.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/codeigniter.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ionic.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ios.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/nodejs.png" alt=""></li>    
                                                             </ul>
                                                       </div>
                                                        <div class="col-5 pt-3 text-lg-start text-center">
                                                         <a href="#0" class="btn btn-theme3 text-white fs-11 fw-bold py-2 px-4">
                                                            <span class="d-block"><span>See case study</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                        </a>
                                                    </div>
                                                  </div>   
                                                </div>   
                                            </div>
                                      </div>
                                 </div>
                               </div>
                            </div>

                                 <!-- Case Study 3 -->
                            <div id="home3" class="container tab-pane fade">
                            <div class="row d-flex align-items-center justify-content-center mb-3">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                         <div class="row d-flex align-items-center justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="ol-12 case-outer shadow border border-theme3 border-1 p-4">
                                                   <div class="col-auto position-relative"><span class="no">01</span></div>
                                                     <div class="col-12 case-inner shadow border border-3 pd-3 p-4">
                                                        <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900  fs-md-23 fs-sm-18 fs-16 lh-normal mt-2">Multi-vendor e-commerce <b> marketplace platform</b></span></div>
                                                       <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14  mt-2">Only a wise advice works well for a business. Unlike other digital marketing agencies, we help you to 
                                                          make decisions in every case. We are a trusted source for good advice as we are the experts having great knowledge, unique
                                                        thinking approach and we can make a difference.</div>
                                                        <div class="col-12">
                                                            <ul class="mb-0 list-unstyled list-inline mt-2 ">  
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/android.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/angularjs.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/cake-php.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/codeigniter.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ionic.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ios.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/nodejs.png" alt=""></li>    
                                                             </ul>
                                                       </div>
                                                        <div class="col-5 pt-3 text-lg-start text-center">
                                                         <a href="#0" class="btn btn-theme3 text-white fs-11 fw-bold py-2 px-4">
                                                            <span class="d-block"><span>See case study</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                        </a>
                                                    </div>
                                                  </div>   
                                                </div>   
                                            </div>
                                             <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-5 col-7">
                                                    <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/app.png" alt="">
                                                  </div>
                                             </div>   
                                         </div>

                                         <div class="row d-flex align-items-center justify-content-center mt-5">
                                           <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-5 col-7">
                                                    <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/app.png" alt="">
                                                  </div>
                                             </div>   
                                            <div class="col-lg-6">
                                                <div class="ol-12 case-outer shadow border border-theme3 border-1 p-4">
                                                   <div class="col-auto position-relative"><span class="no">02</span></div>
                                                     <div class="col-12 case-inner shadow border border-3 pd-3 p-4">
                                                        <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-23 fs-sm-18 fs-16 lh-normal mt-2">Multi-vendor e-commerce <b> marketplace platform</b></span></div>
                                                       <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 mt-2">Only a wise advice works well for a business. Unlike other digital marketing agencies, we help you to 
                                                          make decisions in every case. We are a trusted source for good advice as we are the experts having great knowledge, unique
                                                        thinking approach and we can make a difference.</div>
                                                        <div class="col-12">
                                                            <ul class="mb-0 list-unstyled list-inline mt-2 ">  
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/android.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/angularjs.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/cake-php.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/codeigniter.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ionic.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ios.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/nodejs.png" alt=""></li>    
                                                             </ul>
                                                       </div>
                                                        <div class="col-5 pt-3 text-lg-start text-center">
                                                         <a href="#0" class="btn btn-theme3 text-white fs-11 fw-bold py-2 px-4">
                                                            <span class="d-block"><span>See case study</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                        </a>
                                                    </div>
                                                  </div>   
                                                </div>   
                                            </div>
                                      </div>
                                 </div>
                               </div>
                            </div>

                                <!-- Case Study 4 -->
                                <div id="home4" class="container tab-pane fade">
                                <div class="row d-flex align-items-center justify-content-center mb-3">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                         <div class="row d-flex align-items-center justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="ol-12 case-outer shadow border border-theme3 border-1 p-4">
                                                   <div class="col-auto position-relative"><span class="no">01</span></div>
                                                     <div class="col-12 case-inner shadow border border-3 pd-3 p-4">
                                                        <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900  fs-md-23 fs-sm-18 fs-16 lh-normal mt-2">Multi-vendor e-commerce <b> marketplace platform</b></span></div>
                                                       <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14  mt-2">Only a wise advice works well for a business. Unlike other digital marketing agencies, we help you to 
                                                          make decisions in every case. We are a trusted source for good advice as we are the experts having great knowledge, unique
                                                        thinking approach and we can make a difference.</div>
                                                        <div class="col-12">
                                                            <ul class="mb-0 list-unstyled list-inline mt-2 ">  
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/android.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/angularjs.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/cake-php.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/codeigniter.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ionic.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ios.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/nodejs.png" alt=""></li>    
                                                             </ul>
                                                       </div>
                                                        <div class="col-5 pt-3 text-lg-start text-center">
                                                         <a href="#0" class="btn btn-theme3 text-white fs-11 fw-bold py-2 px-4">
                                                            <span class="d-block"><span>See case study</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                        </a>
                                                    </div>
                                                  </div>   
                                                </div>   
                                            </div>
                                             <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-5 col-7">
                                                    <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/app.png" alt="">
                                                  </div>
                                             </div>   
                                         </div>

                                         <div class="row d-flex align-items-center justify-content-center mt-5">
                                           <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-5 col-7">
                                                    <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/app.png" alt="">
                                                  </div>
                                             </div>   
                                            <div class="col-lg-6">
                                                <div class="ol-12 case-outer shadow border border-theme3 border-1 p-4">
                                                   <div class="col-auto position-relative"><span class="no">02</span></div>
                                                     <div class="col-12 case-inner shadow border border-3 pd-3 p-4">
                                                        <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-23 fs-sm-18 fs-16 lh-normal mt-2">Multi-vendor e-commerce <b> marketplace platform</b></span></div>
                                                       <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 mt-2">Only a wise advice works well for a business. Unlike other digital marketing agencies, we help you to 
                                                          make decisions in every case. We are a trusted source for good advice as we are the experts having great knowledge, unique
                                                        thinking approach and we can make a difference.</div>
                                                        <div class="col-12">
                                                            <ul class="mb-0 list-unstyled list-inline mt-2 ">  
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/android.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/angularjs.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/cake-php.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/codeigniter.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ionic.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ios.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/nodejs.png" alt=""></li>    
                                                             </ul>
                                                       </div>
                                                        <div class="col-5 pt-3 text-lg-start text-center">
                                                         <a href="#0" class="btn btn-theme3 text-white fs-11 fw-bold py-2 px-4">
                                                            <span class="d-block"><span>See case study</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                        </a>
                                                    </div>
                                                  </div>   
                                                </div>   
                                            </div>
                                      </div>
                                 </div>
                               </div>
                           </div>


                               <!-- Case Study 5 -->
                               <div id="home5" class="container tab-pane fade">
                               <div class="row d-flex align-items-center justify-content-center mb-3">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                         <div class="row d-flex align-items-center justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="ol-12 case-outer shadow border border-theme3 border-1 p-4">
                                                   <div class="col-auto position-relative"><span class="no">01</span></div>
                                                     <div class="col-12 case-inner shadow border border-3 pd-3 p-4">
                                                        <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900  fs-md-23 fs-sm-18 fs-16 lh-normal mt-2">Multi-vendor e-commerce <b> marketplace platform</b></span></div>
                                                       <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14  mt-2">Only a wise advice works well for a business. Unlike other digital marketing agencies, we help you to 
                                                          make decisions in every case. We are a trusted source for good advice as we are the experts having great knowledge, unique
                                                        thinking approach and we can make a difference.</div>
                                                        <div class="col-12">
                                                            <ul class="mb-0 list-unstyled list-inline mt-2 ">  
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/android.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/angularjs.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/cake-php.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/codeigniter.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ionic.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ios.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/nodejs.png" alt=""></li>    
                                                             </ul>
                                                       </div>
                                                        <div class="col-5 pt-3 text-lg-start text-center">
                                                         <a href="#0" class="btn btn-theme3 text-white fs-11 fw-bold py-2 px-4">
                                                            <span class="d-block"><span>See case study</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                        </a>
                                                    </div>
                                                  </div>   
                                                </div>   
                                            </div>
                                             <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-5 col-7">
                                                    <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/app.png" alt="">
                                                  </div>
                                             </div>   
                                         </div>

                                         <div class="row d-flex align-items-center justify-content-center mt-5">
                                           <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-5 col-7">
                                                    <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/app.png" alt="">
                                                  </div>
                                             </div>   
                                            <div class="col-lg-6">
                                                <div class="ol-12 case-outer shadow border border-theme3 border-1 p-4">
                                                   <div class="col-auto position-relative"><span class="no">02</span></div>
                                                     <div class="col-12 case-inner shadow border border-3 pd-3 p-4">
                                                        <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-23 fs-sm-18 fs-16 lh-normal mt-2">Multi-vendor e-commerce <b> marketplace platform</b></span></div>
                                                       <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 mt-2">Only a wise advice works well for a business. Unlike other digital marketing agencies, we help you to 
                                                          make decisions in every case. We are a trusted source for good advice as we are the experts having great knowledge, unique
                                                        thinking approach and we can make a difference.</div>
                                                        <div class="col-12">
                                                            <ul class="mb-0 list-unstyled list-inline mt-2 ">  
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/android.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/angularjs.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/cake-php.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/codeigniter.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ionic.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/ios.png" alt=""></li>    
                                                                <li class="list-inline-item"><img class="position-relative w-30px border rounded-circle p-1 bg-white" src="{{GETFOLDERPATH()}}/icons/nodejs.png" alt=""></li>    
                                                             </ul>
                                                       </div>
                                                        <div class="col-5 pt-3 text-lg-start text-center">
                                                         <a href="#0" class="btn btn-theme3 text-white fs-11 fw-bold py-2 px-4">
                                                            <span class="d-block"><span>See case study</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                        </a>
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
             </div>
         </div>

	











@endsection
@push('scripts')
<script src="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.js"></script>
<script src="{{asset('/public')}}/assets/js/about-us.min.js"></script>
@endpush