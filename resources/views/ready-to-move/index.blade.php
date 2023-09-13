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
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/ready-to-move.min.css">
@endpush
@section('content')


{{-- Hero Section --}}
@section('hero_hiddenHeading')
WE DESIGN AND DEVELOP
@endsection('hero_hiddenHeading')
@section('hero_heading')
<span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">WE DESIGN <b>AND DEVELOP</b></span>
@endsection('hero_heading')
@section('hero_tagline')
A lot of things. And turn your bold ideas into user-friendly mobile and web apps. Check out some of our recent works.
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
<img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/case.png" alt="An Ingenious Web and Mobile App Development Company">
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
        <div class="container-fluid overflow-hidden case-study position-relative section vh-100"  data-bg="#ff8b22">
              <div class="container position-relative py-lg-5 py-md-5 py-sm-5 py-1">
                   <div class="row align-items-center justify-content-center ">
                    <div class="col-lg-10">
                      <div class="row align-items-center justify-content-center flex-lg-row flex-md-row flex-column-reverse">
                        <div class="col-lg-6 col-md-6 col-12 mt-4 mb-4 mb-lg-0">
                            <div class="row">
                              <div class="col-12 text-white text-lg-start text-md-start text-center"> 
                                 <span class="fs-lg-45 fs-md-25 fs-sm-20 fs-22 fw-900">DOLLAR <span class="d-block ">SHAVE CLUB</span></div>
                                  
                              <div class="col-12 fs-lg-18 fs-md-18 fs-14 my-md-4 mb-2 mt-1 service_content text-lg-start text-center text-md-start text-white fw-800">
                              Dollar Shave Club’s goal is to make sure you always have everything you need to look, feel, and smell your best. Uptech helps Dollar Shave Club implement a pixel-perfect design and unique shopping experience in their mobile app to achieve high user retention, engagement, and loyalty.
                              </div>
                                <div class="col-12 text-lg-start text-md-start text-center pt-4">
                                    <a href="#0" class="fs-xl-15 fs-lg-15 fs-md-15 fs-sm-22 fs-11 fw-bold py-xxl-2 py-1 text-decoration-none bg-dark fw-700 fs-md-18 fs-sm-15 fs-15 text-white case-view border border-0">
                                    CASE STUDY
                                 </a>
                              </div>

                              <div class="d-flex text-lg-start text-md-start text-center pt-4 text-white">
                                <span class="fs-xl-13 fs-lg-13 fs-md-15 fs-sm-22 fs-11 fw-900 me-2"># M-COMMERCE</span>
                                <span class="fs-xl-13 fs-lg-13 fs-md-15 fs-sm-22 fs-11 fw-900 me-2"># ANDROID</span>
                                <span class="fs-xl-13 fs-lg-13 fs-md-15 fs-sm-22 fs-11 fw-900 "># USA</span>
                              </div>
                            </div>
                          </div>
                         <div class="col-lg-6 col-md-6 col-12 text-center">
                              <img src="{{GETFOLDERPATH()}}/apps1.webp" class="w-lg-50 w-md-50 w-40" alt="">
                        </div>
                    </div>
               </div>
             </div>
          </div>
       </div>

       <div class="container-fluid overflow-hidden case-study position-relative section vh-100"  data-bg="#22252a">
              <div class="container position-relative py-lg-5 py-md-5 py-sm-5 py-1">
                   <div class="row align-items-center justify-content-center ">
                    <div class="col-lg-10">
                      <div class="row align-items-center justify-content-center flex-lg-row flex-md-row flex-column-reverse">
                        <div class="col-lg-6 col-md-6 col-12 mt-4 mb-4 mb-lg-0">
                            <div class="row">
                              <div class="col-12 text-white text-lg-start text-md-start text-center"> 
                                 <span class="fs-lg-45 fs-md-25 fs-sm-20 fs-22 fw-bold">GOAT <span class="d-block ">SHAVE CLUB</span></div>
                                  
                              <div class="col-12 fs-lg-18 fs-md-18 fs-14 my-md-4 mb-2 mt-1 service_content text-lg-start text-center text-md-start text-white fw-800">
                              GOAT is the global retail platform for products from the past, present, and future. It provides over 2M listings from streetwear and designer brands with flexible filters and a top-notch user experience.
                              </div>
                                <div class="col-12 text-lg-start text-md-start text-center pt-4">
                                    <a href="#0" class="fs-xl-15 fs-lg-15 fs-md-15 fs-sm-22 fs-11 fw-bold py-xxl-2 py-1 text-decoration-none bg-white fw-700 fs-md-18 fs-sm-15 fs-15 text-dark case-view border border-0">
                                    CASE STUDY
                                 </a>
                              </div>

                              <div class="d-flex text-lg-start text-md-start text-center pt-4 text-white">
                                <span class="fs-xl-13 fs-lg-13 fs-md-15 fs-sm-22 fs-11 fw-900 me-2"># M-COMMERCE</span>
                                <span class="fs-xl-13 fs-lg-13 fs-md-15 fs-sm-22 fs-11 fw-900 me-2"># ANDROID</span>
                                <span class="fs-xl-13 fs-lg-13 fs-md-15 fs-sm-22 fs-11 fw-900 "># USA</span>
                              </div>
                            </div>
                          </div>
                         <div class="col-lg-6 col-md-6 col-12 text-center">
                              <img src="{{GETFOLDERPATH()}}/apps1.webp" class="w-lg-50 w-md-50 w-40" alt="">
                        </div>
                    </div>
               </div>
             </div>
          </div>
       </div>


       

          

         










@endsection
@push('scripts')
<script src="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.js"></script>
<script src="{{asset('/public')}}/assets/js/ready-to-move.min.js"></script>
@endpush