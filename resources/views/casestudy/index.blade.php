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
        <div class="container-fluid overflow-hidden case-study position-relative section vh-100"  data-bg="#03151d">
              <div class="container position-relative py-lg-5 py-md-5 py-sm-5 py-1">
                   <div class="row align-items-center justify-content-center ">
                    <div class="col-lg-11">
                      <div class="row align-items-center justify-content-center flex-lg-row flex-md-row flex-column-reverse">
                        <div class="col-lg-6 col-md-6 col-12 mt-4 mb-4 mb-lg-0">
                            <div class="row">
                              <div class="col-12 text-white text-lg-start text-md-start text-center"> 
                                <span class="fs-lg-45 fs-md-34 fs-md-28 fs-sm-20 fs-20">MYFEB11</span> <span class="fs-lg-45 fs-md-25 fs-sm-20 fs-22 d-block">Fantasy Sports App</span></div>
                                   <div class="col-12 text-lg-start text-md-start text-center pt-xl-4 pt-lg-4 pt-3 pb-xl-0 pb-lg-0 pb-3">
                                      <a href="#0" class="link-btn1 fs-xxl-14 fs-13 fw-bold py-xxl-2 py-2 px-4 me-2 text-white text-decoration-none">
                                      <span class="px-xl-2 px-lg-2 px-sm-2 px-2">Web</span></a>
                                 </div>
                              <div class="col-12 fs-lg-24 fs-md-18 fs-20 my-md-4 mb-2 mt-1 service_content text-lg-start text-center text-md-start text-white">
                              Never wait to pay, Leave when you are ready, Make losing your credit card a thing of the past.
                              </div>
                                <div class="col-12 text-lg-start text-md-start text-center pt-4">
                                    <a href="#0" class="fs-xl-18 fs-lg-18 fs-md-17 fs-sm-22 fs-11 fw-bold py-xxl-2 py-1 text-decoration-none bg-white fw-700 fs-md-18 fs-sm-15 fs-15 text-dark case-view">
                                    View Case Study
                                 </a>
                              </div>
                            </div>
                          </div>
                         <div class="col-lg-6 col-md-6 col-12 text-center">
                              <img src="{{GETFOLDERPATH()}}/myfab11.webp" class="w-lg-80 w-md-70 w-90" alt="Myfab11">
                        </div>
                    </div>
               </div>
             </div>
          </div>
    </div>

          
        <!-- Case study section 2 -->
            <div class="container-fluid overflow-hidden case-study position-relative section vh-100"  data-bg="#D50B0C">
                  <div class="container position-relative py-lg-5 py-md-5 py-sm-5 py-1">
                      <div class="row align-items-center justify-content-center ">
                        <div class="col-lg-11">
                          <div class="row align-items-center justify-content-center flex-lg-row flex-md-row flex-column-reverse">
                            <div class="col-lg-6 col-md-6 col-12 text-center">
                                  <img src="{{GETFOLDERPATH()}}/propira.webp" class="w-lg-80 w-md-70 w-90" alt="Propira">
                              
                            </div>  
                          <div class="col-lg-6 col-md-6 col-12 mt-4 mb-4 mb-lg-0">
                                <div class="row">
                                  <div class="col-12 text-white text-lg-start text-md-start text-center"> 
                                    <span class="fs-lg-45 fs-md-34 fs-md-28 fs-sm-20 fs-20">Propira</span> <span class="fs-lg-45 fs-md-25 fs-sm-20 fs-22 d-block">Real Estate Website</span></div>
                                      <div class="col-12 text-lg-start text-md-start text-center pt-xl-4 pt-lg-4 pt-3 pb-xl-0 pb-lg-0 pb-3">
                                        <a href="#0" class="link-btn1 fs-xxl-14 fs-13 fw-bold py-xxl-2 py-2 px-4 me-2 text-white text-decoration-none">
                                          <span class="px-xl-2 px-lg-2 px-sm-2 px-2">Web</span></a>
                                      
                                          {{-- <a href="#0" class="link-btn1 fs-xxl-14 fs-13 fw-bold py-xxl-2 py-2 px-4 me-2 text-white text-decoration-none">
                                          <span class="px-xl-2 px-lg-2 px-sm-2 px-2">iOS</span></a>--}}
                                          {{--   <a href="#0" class="link-btn1 fs-xxl-14 fs-13 fw-bold py-xxl-2 py-2 px-4 me-2 text-white text-decoration-none">
                                          <span class="px-xl-2 px-lg-2 px-sm-2 px-2">Android</span></a> --}}
                                    </div>
                                  <div class="col-12 fs-lg-24 fs-md-18 fs-20 my-md-4 mb-2 mt-1 service_content text-lg-start text-center text-md-start text-white">
                                  Scroll through hundreds of pictures of jobs in your area that people need help with.
                                  </div>
                                    <div class="col-12 text-lg-start text-md-start text-center pt-4">
                                        <a href="#0" class="fs-xl-18 fs-lg-18 fs-md-17 fs-sm-22 fs-11 fw-bold py-xxl-2 py-1 text-decoration-none bg-white fw-700 fs-md-18 fs-sm-15 fs-15 text-dark case-view">
                                        View Case Study
                                    </a>
                                  </div>
                                </div>
                            </div>
                      </div>
                    </div>
                 </div>
              </div>
          </div>


           
        <!-- Case  study section 3 -->
        <div class="container-fluid overflow-hidden case-study position-relative section vh-100"  data-bg="#A70048">
              <div class="container position-relative py-lg-5 py-md-5 py-sm-5 py-1">
                   <div class="row align-items-center justify-content-center ">
                    <div class="col-lg-11">
                      <div class="row align-items-center justify-content-center flex-lg-row flex-md-row flex-column-reverse">
                        <div class="col-lg-6 col-md-6 col-12 mt-4 mb-4 mb-lg-0">
                            <div class="row">
                              <div class="col-12 text-white text-lg-start text-md-start text-center"> 
                                <span class="fs-lg-45 fs-md-34 fs-md-28 fs-sm-20 fs-20">Fabindia</span> <span class="fs-lg-45 fs-md-25 fs-sm-20 fs-22 d-block">Matrimonial Website</span></div>
                                   <div class="col-12 text-lg-start text-md-start text-center pt-xl-4 pt-lg-4 pt-3 pb-xl-0 pb-lg-0 pb-3">
                                      <a href="#0" class="link-btn1 fs-xxl-14 fs-13 fw-bold py-xxl-2 py-2 px-4 me-2 text-white text-decoration-none">
                                      <span class="px-xl-2 px-lg-2 px-sm-2 px-2">Web</span></a>
                                 </div>
                              <div class="col-12 fs-lg-24 fs-md-18 fs-20 my-md-4 mb-2 mt-1 service_content text-lg-start text-center text-md-start text-white">
                              Rental Marketplace for online auction-based apartment Buying & Selling, without any broker
                              </div>
                                <div class="col-12 text-lg-start text-md-start text-center pt-4">
                                    <a href="#0" class="fs-xl-18 fs-lg-18 fs-md-17 fs-sm-22 fs-11 fw-bold py-xxl-2 py-1 text-decoration-none bg-white fw-700 fs-md-18 fs-sm-15 fs-15 text-dark case-view">
                                    View Case Study
                                 </a>
                              </div>
                            </div>
                          </div>
                         <div class="col-lg-6 col-md-6 col-12 text-center">
                              <img src="{{GETFOLDERPATH()}}/fabindia.webp" class="w-lg-80 w-md-70 w-90" alt="Fabindia">
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