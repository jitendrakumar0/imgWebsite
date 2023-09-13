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
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/casestudy.min.css">
@endpush
@section('content')


{{-- Hero Section --}}
@section('hero_hiddenHeading')
Creating success stories for
Startups to Global Brands.
@endsection('hero_hiddenHeading')
@section('hero_heading')
<span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Creating success stories for<b>
Startups to Global Brands.</b></span>
@endsection('hero_heading')
@section('hero_tagline')
Discover how businesses are using our varied services and solutions, and how we add value to our clients and partners every day.
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
<img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/case.png" alt="case">
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
                        <li class="breadcrumb-item active fw-600 fs-lg-16 fs-md-15 fs-14 text-dark" aria-current="page">Case Study </li>
                    </ol>
                </nav>
                </div>
            </div>
        </div>
    </div>


        
        <!-- Case  study section 1 -->
        <div class="container-fluid overflow-hidden case-study position-relative section vh-80"  data-bg="#8803c4">
              <div class="container position-relative py-lg-5 py-md-5 py-sm-5 py-1">
                   <div class="row align-items-center justify-content-center ">
                    <div class="col-lg-12">
                    <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-5 ps-sm-5 ps-5">
                                <div class="row text-lg-start text-md-center text-center position-relative pe-xxl-3 pe-xl-3 pe-lg-3 pe-md-3 pe-sm-1 pe-1 pt-xxl-3 pt-xl-3 pt-lg-3 pt-md-3 pt-sm-1 pt-4">
                                    <div class="col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-0 ps-sm-0 ps-0">
                                        <div class="row">
                                            <div class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-white text-lg-start text-md-start text-start">BOBI Live</div>
                                            <div class="col-12 headingv2 left text-black"><span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22  text-white">Socializing, interacting, exploring, all fascinating things are here for you !</span>
                                            </div>
                                            <div class="divider ms-xl-3"></div>
                                        </div>
                                           <div class="col-12 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-2 pb-1">
                                                <a href="javascript:;" class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2">
                                                   <span class="d-block fw-m"><span class="d-flex">View case study
                                                   <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg" class="w-md-3 w-sm-3 w-5 pt-0 ms-2 arrow" alt=""></span></span>
                                               </a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                                        <div class="row h-100  order-1">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center  order-1">
                                               <img src="{{asset('/public')}}/assets/img/hero-section/frame12.webp" class="w-80 " alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
               </div>
             </div>
          </div>
    </div>

          
        <!-- Case study section 2 -->
            <div class="container-fluid overflow-hidden case-study position-relative section vh-80"  data-bg="#93bf20">
                  <div class="container position-relative py-lg-5 py-md-5 py-sm-5 py-1">
                      <div class="row align-items-center justify-content-center ">
                        <div class="col-lg-12">
                        <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-5 ps-sm-5 ps-5">
                                <div class="row text-lg-start text-md-center text-center position-relative pe-xxl-3 pe-xl-3 pe-lg-3 pe-md-3 pe-sm-1 pe-1 pt-xxl-3 pt-xl-3 pt-lg-3 pt-md-3 pt-sm-1 pt-4">
                                    <div class="col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-0 ps-sm-0 ps-0">
                                        <div class="row">
                                            <div class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-white text-lg-start text-md-start text-start">Hozzo - Car wash</div>
                                            <div class="col-12 headingv2 left text-black"><span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22  text-white">Waterless car washing services across india</span>
                                            </div>
                                            <div class="divider ms-xl-3"></div>
                                        </div>
                                           <div class="col-12 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-2 pb-1">
                                                <a href="javascript:;" class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2">
                                                   <span class="d-block fw-m"><span class="d-flex">View case study
                                                   <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg" class="w-md-3 w-sm-3 w-5 pt-0 ms-2 arrow" alt=""></span></span>
                                               </a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                                        <div class="row h-100  order-1">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center  order-1">
                                               <img src="{{asset('/public')}}/assets/img/hero-section/hozzo.webp" class="w-80 " alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                 </div>
              </div>
          </div>


           
        <!-- Case  study section 3 -->
        <div class="container-fluid overflow-hidden case-study position-relative section vh-80"  data-bg="#0e420c">
              <div class="container position-relative py-lg-5 py-md-5 py-sm-5 py-1">
                   <div class="row align-items-center justify-content-center ">
                    <div class="col-lg-12">
                    <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-5 ps-sm-5 ps-5">
                                <div class="row text-lg-start text-md-center text-center position-relative pe-xxl-3 pe-xl-3 pe-lg-3 pe-md-3 pe-sm-1 pe-1 pt-xxl-3 pt-xl-3 pt-lg-3 pt-md-3 pt-sm-1 pt-4">
                                    <div class="col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-0 ps-sm-0 ps-0">
                                        <div class="row">
                                            <div class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-white text-lg-start text-md-start text-start">MyFab11</div>
                                            <div class="col-12 headingv2 left text-black"><span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22  text-white">Principle Partner of KKR. india's most trusted Fantasy Cricket App</span>
                                            </div>
                                            <div class="divider ms-xl-3"></div>
                                        </div>
                                           <div class="col-12 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-2 pb-1">
                                                <a href="javascript:;" class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2">
                                                   <span class="d-block fw-m"><span class="d-flex">View case study
                                                   <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg" class="w-md-3 w-sm-3 w-5 pt-0 ms-2 arrow" alt=""></span></span>
                                               </a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                                        <div class="row h-100  order-1">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center  order-1">
                                               <img src="{{asset('/public')}}/assets/img/hero-section/fab11.webp" class="w-80 " alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
               </div>
             </div>
          </div>
    </div>



    
           
        <!-- Case  study section 4 -->
        <div class="container-fluid overflow-hidden case-study position-relative section vh-80"  data-bg="#9c1313">
              <div class="container position-relative py-lg-5 py-md-5 py-sm-5 py-1">
                   <div class="row align-items-center justify-content-center ">
                    <div class="col-lg-12">
                    <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-5 ps-sm-5 ps-5">
                                <div class="row text-lg-start text-md-center text-center position-relative pe-xxl-3 pe-xl-3 pe-lg-3 pe-md-3 pe-sm-1 pe-1 pt-xxl-3 pt-xl-3 pt-lg-3 pt-md-3 pt-sm-1 pt-4">
                                    <div class="col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-0 ps-sm-0 ps-0">
                                        <div class="row">
                                            <div class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-white text-lg-start text-md-start text-start">Fabindia</div>
                                            <div class="col-12 headingv2 left text-black"><span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22  text-white">Shop for Handwoven Garments & home furnishings</span>
                                            </div>
                                            <div class="divider ms-xl-3"></div>
                                        </div>
                                           <div class="col-12 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-2 pb-1">
                                                <a href="javascript:;" class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2">
                                                   <span class="d-block fw-m"><span class="d-flex">View case study
                                                   <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg" class="w-md-3 w-sm-3 w-5 pt-0 ms-2 arrow" alt=""></span></span>
                                               </a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                                        <div class="row h-100  order-1">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center  order-1">
                                               <img src="{{asset('/public')}}/assets/img/hero-section/fabindia.webp" class="w-80 " alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
               </div>
             </div>
          </div>
    </div>

    <!-- Case  study section 5 -->
    <div class="container-fluid overflow-hidden case-study position-relative section vh-80"  data-bg="#d90c0b">
              <div class="container position-relative py-lg-5 py-md-5 py-sm-5 py-1">
                   <div class="row align-items-center justify-content-center ">
                    <div class="col-lg-12">
                    <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-5 ps-sm-5 ps-5">
                                <div class="row text-lg-start text-md-center text-center position-relative pe-xxl-3 pe-xl-3 pe-lg-3 pe-md-3 pe-sm-1 pe-1 pt-xxl-3 pt-xl-3 pt-lg-3 pt-md-3 pt-sm-1 pt-4">
                                    <div class="col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-0 ps-sm-0 ps-0">
                                        <div class="row">
                                            <div class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-white text-lg-start text-md-start text-start">propira</div>
                                            <div class="col-12 headingv2 left text-black"><span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22  text-white">Your Local Property Expert</span>
                                            </div>
                                            <div class="divider ms-xl-3"></div>
                                        </div>
                                           <div class="col-12 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-2 pb-1">
                                                <a href="javascript:;" class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2">
                                                   <span class="d-block fw-m"><span class="d-flex">View case study
                                                   <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg" class="w-md-3 w-sm-3 w-5 pt-0 ms-2 arrow" alt=""></span></span>
                                               </a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                                        <div class="row h-100  order-1">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center  order-1">
                                               <img src="{{asset('/public')}}/assets/img/hero-section/propira.webp" class="w-80 " alt="">
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
<script src="{{asset('/public')}}/assets/js/casestudy.min.js"></script>



@endpush