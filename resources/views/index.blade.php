@extends('main')
    @push('meta')
    <!--  Title -->
    <title>Trusted Mobile App Development Company in India | IMG Global Infotech</title>
      <!-- Required meta tags -->
    <meta name="title" content="Trusted Mobile App Development Company in India | IMG Global Infotech" />
    <meta name="description" content=" IMG is a trusted web & mobile app development company in India, USA, UK. We provide a full suite of services like fantasy sports app development, website development & mobile app development." />
    <meta name="keywords" content="web and mobile app development company, software development, eCommerce development services, fantasy sports app development, online exam app" />

    <!-- Twitter Meta -->
    <meta name="twitter:title" content="Trusted Mobile App Development Company in India | IMG Global Infotech">
    <meta name="twitter:description" content="IMG is a trusted web & mobile app development company in India, USA, UK. We provide a full suite of services like fantasy sports app development, website development & mobile app development.">

    <!-- Facebook Meta -->
    <meta property="og:url" content="{{asset('/')}}">
    <meta property="og:title" content="Trusted Mobile App Development Company in India | IMG Global Infotech">
    <meta property="og:description" content="IMG is a trusted web & mobile app development company in India, USA, UK. We provide a full suite of services like fantasy sports app development, website development & mobile app development.">

    <meta name="classification" content="web and mobile app development company, software development, eCommerce development services, fantasy sports app development, online exam app" />
    <link rel="canonical" href="{{asset('/')}}" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/index.min.css">


<!--you can put this line anywhere in the site-->
@endpush
@section('content')

{{-- @include('layouts/header-link')
@include('layouts/header') --}}

{{-- <main class="main-scrollbar"> --}}

    <h1 class="d-none invisible">Web and Mobile App Development Company</h1>
    <!-- hero section -->
    <div class="heroSectionTopWrapper position-relative">
        <div class="container-fluid overflow-hidden px-0 hero-section vh-md-70 owl-carousel d-block owl-theme owl-hero-slider">
            <div class="row h-xl-100 h-lg-100 h-md-100 mx-0 w-100 overflow-hidden slide-1">
                <div class="container-fluid h-xl-100 h-lg-100 h-md-100 slide-itemss align-items-center d-flex">
                    <div class="container h-xl-100 h-lg-100 h-md-100 position-relative zi-1 py-lg-0 py-md-5 pt-5 pb-0">
                        <div class="row h-h-xl-100 h-lg-100 h-md-100 align-items-md-center justify-content-around">
                            <div class="col-lg-6 col-md-7 hero_text-section order-md-1 order-2 mt-xl-5 mt-lg-5 mt-md-5">
                                <div class="row">
                                    <div class="col-auto mt-xl-5 mt-lg-5 mt-md-5">
                                        <div class="row justify-content-md-start justify-content-center">
                                            <div class="col-auto">
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto hero_title1 fs-xxl-60 fs-xl-60 fs-lg-60 fs-md-30 fs-sm-30 fs-25 text-white text-center">Fantasy Sports </div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto hero_title2 fs-xxl-60 fs-xl-60 fs-lg-60 fs-md-40 fs-sm-40 fs-25 fw-100 text-light"> App Development </div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto py-lg-1 py-2">
                                                        <div class="row">
                                                            <div class="col-auto hero_taging text-light py-2 fs-xxl-17 fs-xl-15 fs-lg-16 fs-md-14 fs-sm-15 fs-14 text-md-start text-center">
                                                            Creating, Processing and Deploying intuitive fantasy sports apps, being an intuitive and insight driven app it delivers seamless user experience that is assisting in accelerating your business growth. 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto pt-lg-3 pt-0 hero_slider_btn p-0">
                                                        <div class="row justify-content-md-start justify-content-center">
                                                            <div class="col-auto text-center text-md-left pb-5">
                                                            <a href="tel:+91-9694097245" class="btn btn-theme3 text-white fs-lg-14 fs-12 fw-100 my-3 py-2 px-lg-4 px-3">
                                                                    <span class="d-block"><span>+91-9694097245</span> <i class="imgr ms-2 img-phone-volume position-relative bottom-n2px"></i></span>
                                                                </a>
                                                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 text-white fs-lg-14 fs-12 fw-100 my-3 px-lg-4 py-2 px-3 ms-md-2">
                                                                    <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
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
                            <div class="col-lg-6 col-md-5 hero_logo_section position-relative order-md-2 order-1 pt-4">
                                <div class="row hero_image_toggles2 align-items-center w-100 justify-content-center">
                                    <div class="col-xxl-9 col-md-9 col-sm-7 col-10 hero_img_toggles2_inner">
                                        <img class="hero_img2_step1" src="{{asset('/public')}}/assets/img/hero-section/slide2/xl-fantasy-sports-app.webp" srcset="{{asset('/public')}}/assets/img/hero-section/slide2/m-fantasy-sports-app.webp 700w, {{asset('/public')}}/assets/img/hero-section/slide2/t-fantasy-sports-app.webp 1000w, {{asset('/public')}}/assets/img/hero-section/slide2/xl-fantasy-sports-app.webp 1400w"  alt="fantasy-sports-app" width="365" height="365">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row h-100 mx-0 w-100 overflow-hidden">
                <div class="container-fluid h-100 slide-itemss align-items-center d-flex">
                    <div class="container h-100 position-relative zi-1 py-lg-0 py-md-5 pt-5 pb-0">
                        <div class="row h-100 align-items-md-center justify-content-around">
                            <div class="col-lg-6 col-md-7 hero_text-section order-md-1 order-2 mt-xl-5 mt-lg-5 mt-md-5">
                                <div class="row">
                                    <div class="col-auto mt-xl-4 mt-lg-4 mt-md-4">
                                        <div class="row justify-content-md-start justify-content-center">
                                            <div class="col-auto">
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto hero_title1 fs-xxl-60 fs-xl-60 fs-lg-60 fs-md-30 fs-sm-30 fs-25 text-white text-center">Hire Dedicated</div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto hero_title2 fs-xxl-60 fs-xl-60 fs-lg-60 fs-md-40 fs-sm-40 fs-25 fw-100 text-light"> Developers</div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto py-lg-1 py-2">
                                                        <div class="row">
                                                            <div class="col-auto hero_taging text-light py-2 fs-xxl-17 fs-xl-15 fs-lg-16 fs-md-14 fs-sm-15 fs-14 text-md-start text-center">
                                                            Find the dedicated developer for your next big project as here you will get a flexible team model. We have an expert team which will deliver the best-in-class service while updating you on the progress at all times.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto pt-lg-3 pt-0 hero_slider_btn p-0">
                                                        <div class="row justify-content-md-start justify-content-center">
                                                            <div class="col-auto text-center text-md-left pb-5">
                                                            <a href="tel:+91-9694097245" class="btn btn-theme3 text-white fs-lg-14 fs-12 fw-100 my-3 py-2 px-lg-4 px-3">
                                                                    <span class="d-block"><span>+91-9694097245</span> <i class="imgr ms-2 img-phone-volume position-relative bottom-n2px"></i></span>
                                                                </a>
                                                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 text-white fs-lg-14 fs-12 fw-100 my-3 px-lg-4 py-2 px-3 ms-md-2">
                                                                    <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
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
                            <div class="col-lg-6 col-md-5 hero_logo_section position-relative order-md-2 order-1 pt-4 pb-4">
                                <div class="row hero_image_toggles2 align-items-center w-100 justify-content-center">
                                    <div class="col-xxl-9 col-md-9 col-sm-7 col-10 hero_img_toggles2_inner">
                                        <img class="hero_img2_step1" src="{{asset('/public')}}/assets/img/hero-section/slide3/xl-hire-developer.webp" srcset="{{asset('/public')}}/assets/img/hero-section/slide3/m-hire-developer.webp 700w, {{asset('/public')}}/assets/img/hero-section/slide3/t-hire-developer.webp 1000w, {{asset('/public')}}/assets/img/hero-section/slide3/xl-hire-developer.webp 1400w" alt="hire-developer" width="365" height="365">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row h-100 mx-0 w-100 overflow-hidden">
                <div class="container-fluid h-100 slide-itemss align-items-center d-flex">
                    <div class="container h-100 position-relative zi-1 py-lg-0 py-md-5 pt-5 pb-0">
                        <div class="row h-100 align-items-md-center justify-content-around">
                            <div class="col-lg-6 col-md-7 hero_text-section order-md-1 order-2 mt-xl-5 mt-lg-5 mt-md-5">
                                <div class="row justify-content-md-start justify-content-center">
                                    <div class="col-auto mt-xl-4 mt-lg-4 mt-md-4">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto hero_title1 fs-xxl-6060 fs-xl-60 fs-lg-60 fs-md-30 fs-sm-30 fs-30 text-white">Mobile App</div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto hero_title2 fs-xxl-60 fs-xl-60 fs-lg-60 fs-md-40 fs-sm-40 fs-30 fw-100 text-light"> Development</div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto py-lg-1 py-2">
                                                        <div class="row">
                                                            <div class="col-auto hero_taging text-light py-2 fs-xxl-17 fs-xl-15 fs-lg-16 fs-md-14 fs-sm-15 fs-14 text-md-start text-center">
                                                            Building and delivering customised mobile apps for both platforms that are Android, iOS and . You can connect with our expert for free consulting service and to avail end to end robust app solutions.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto pt-lg-3 pt-0 hero_slider_btn p-0">
                                                        <div class="row justify-content-md-start justify-content-center">
                                                            <div class="col-auto text-center text-md-left pb-5">
                                                            <a href="tel:+91-9694097245" class="btn btn-theme3 text-white fs-lg-14 fs-12 fw-100 my-3 py-2 px-lg-4 px-3">
                                                                    <span class="d-block"><span>+91-9694097245</span> <i class="imgr ms-2 img-phone-volume position-relative bottom-n2px"></i></span>
                                                                </a>
                                                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 text-white fs-lg-14 fs-12 fw-100 my-3 px-lg-4 py-2 px-3 ms-md-2">
                                                                    <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
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
                            <div class="col-lg-6 col-md-5 hero_logo_section position-relative order-md-2 order-1 pt-4">
                                <div class="row hero_image_toggles2 align-items-center w-100 justify-content-center">
                                    <div class="col-xxl-9 col-md-9 col-sm-7 col-10 hero_img_toggles2_inner">
                                        <img class="hero_img2_step1" src="{{asset('/public')}}/assets/img/hero-section/slide3/xl-mobileappdevelopment.webp" srcset="{{asset('/public')}}/assets/img/hero-section/slide3/m-mobileappdevelopment.webp 700w, {{asset('/public')}}/assets/img/hero-section/slide3/t-mobileappdevelopment.webp 1000w, {{asset('/public')}}/assets/img/hero-section/slide3/xl-mobileappdevelopment.webp 1400w" alt="mobileappdevelopment" width="365" height="365">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row h-100 mx-0 w-100 overflow-hidden">
                <div class="container-fluid h-100 slide-itemss align-items-center d-flex">
                    <div class="container h-100 position-relative zi-1 py-lg-0 py-md-5 pt-5 pb-0">
                        <div class="row h-100 align-items-md-center justify-content-around">
                            <div class="col-lg-6 col-md-7 hero_text-section order-md-1 order-2 mt-xl-5 mt-lg-5 mt-md-5">
                                <div class="row">
                                    <div class="col-auto mt-xl-1 mt-lg-1 mt-md-1">
                                        <div class="row justify-content-md-start justify-content-center">
                                            <div class="col-auto">
                                                <div class="row justify-content-md-start justify-content-center text-center">
                                                    <div class="col-auto hero_title1 fs-xxl-60 fs-xl-60 fs-lg-60 fs-md-30 fs-sm-30 fs-25 text-white">eCommerce </div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center text-center">
                                                    <div class="col-auto hero_title2 fs-xxl-60 fs-xl-60 fs-lg-60 fs-md-40 fs-sm-40 fs-30 fw-100 text-light">Development </div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto py-lg-1 py-2">
                                                        <div class="row">
                                                            <div class="col-auto hero_taging text-light py-2 fs-xxl-17 fs-xl-15 fs-lg-16 fs-md-14 fs-sm-15 fs-14 text-md-start text-center">
                                                            We build scalable ecommerce web apps for your customised business requirements that is an ideal solution. Proffering best-in-class ecommerce web app platforms that are easy to use and robust. 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto pt-lg-3 pt-0 hero_slider_btn p-0">
                                                        <div class="row justify-content-md-start justify-content-center">
                                                            <div class="col-auto text-center text-md-left pb-5">
                                                            <a href="tel:+91-9694097245" class="btn btn-theme3 text-white fs-lg-14 fs-12 fw-100 my-3 py-2 px-lg-4 px-3">
                                                                    <span class="d-block"><span>+91-9694097245</span> <i class="imgr ms-2 img-phone-volume position-relative bottom-n2px"></i></span>
                                                                </a>
                                                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 text-white fs-lg-14 fs-12 fw-100 my-3 px-lg-4 py-2 px-3 ms-md-2">
                                                                    <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
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
                            <div class="col-lg-6 col-md-5 hero_logo_section position-relative order-md-2 order-1 pt-4">
                                <div class="row hero_image_toggles2 align-items-center w-100 justify-content-center">
                                    <div class="col-xxl-9 col-md-9 col-sm-7 col-10 hero_img_toggles2_inner">
                                        <img class="hero_img2_step1" src="{{asset('/public')}}/assets/img/hero-section/slide1/xl-web-development.webp" srcset="{{asset('/public')}}/assets/img/hero-section/slide1/m-web-development.webp 700w, {{asset('/public')}}/assets/img/hero-section/slide1/t-web-development.webp 1000w, {{asset('/public')}}/assets/img/hero-section/slide1/xl-web-development.webp 1400w" alt="eCommerce-development" width="365" height="365">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row h-100 mx-0 w-100 overflow-hidden">
                <div class="container-fluid h-100 slide-itemss align-items-center d-flex">
                    <div class="container h-100 position-relative zi-1 py-lg-0 py-md-5 pt-5 pb-0">
                        <div class="row h-100 align-items-md-center justify-content-around">
                            <div class="col-lg-6 col-md-7 hero_text-section order-md-1 order-2 mt-xl-5 mt-lg-5 mt-md-5">
                                <div class="row">
                                    <div class="col-auto mt-xl-1 mt-lg-1 mt-md-1">
                                        <div class="row justify-content-md-start justify-content-center">
                                            <div class="col-auto">
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto hero_title1 fs-xxl-60 fs-xl-60 fs-lg-60 fs-md-30 fs-sm-30 fs-30 text-white">MLM Software</div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto hero_title2 fs-xxl-60 fs-xl-60 fs-lg-60 fs-md-40 fs-sm-40 fs-30 fw-100 text-light">Development</div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto py-lg-1 py-2">
                                                        <div class="row">
                                                            <div class="col-auto hero_taging text-light py-2 fs-xxl-17 fs-xl-15 fs-lg-16 fs-md-14 fs-sm-15 fs-14 text-md-start text-center">
                                                            Our experts collect your software requirements and build functional MLM software enduring all the needs of your business. Using cut-edge technology and delivering smoothly designed software and its operations. 

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-md-start justify-content-center">
                                                    <div class="col-auto pt-lg-3 pt-0 hero_slider_btn p-0">
                                                        <div class="row justify-content-md-start justify-content-center">
                                                            <div class="col-auto text-center text-md-left pb-5">
                                                            <a href="tel:+91-9694097245" class="btn btn-theme3 text-white fs-lg-14 fs-12 fw-100 my-3 py-2 px-lg-4 px-3">
                                                                    <span class="d-block"><span>+91-9694097245</span> <i class="imgr ms-2 img-phone-volume position-relative bottom-n2px"></i></span>
                                                                </a>
                                                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 text-white fs-lg-14 fs-12 fw-100 my-3 px-lg-4 py-2 px-3 ms-md-2">
                                                                    <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
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
                            <div class="col-lg-6 col-md-5 hero_logo_section position-relative order-md-2 order-1 pt-4">
                                <div class="row hero_image_toggles2 align-items-center w-100 justify-content-center">
                                    <div class="col-xxl-9 col-md-9 col-sm-7 col-10 hero_img_toggles2_inner">
                                        <img class="hero_img2_step1" src="{{asset('/public')}}/assets/img/hero-section/slide4/xl-mlm-software.webp" srcset="{{asset('/public')}}/assets/img/hero-section/slide4/m-mlm-software.webp 700w, {{asset('/public')}}/assets/img/hero-section/slide4/t-mlm-software.webp 1000w, {{asset('/public')}}/assets/img/hero-section/slide4/xl-mlm-software.webp 1400w" alt="mlm-software" width="365" height="365">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-dots">
            <button role="button" class="owl-dot">1</button>
            <button role="button" class="owl-dot">2</button>
            <button role="button" class="owl-dot">3</button>
            <button role="button" class="owl-dot">4</button>
            <button role="button" class="owl-dot">5</button>
        </div>
    </div>

    {{-- about us new section --}}
    <div class="container-fluid overflow-hidden aboutNewSection">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xxl-5 order-2 order-lg-1 mt-3 mt-lg-0">
                    <div class="row mx-0">
                        <h3 class="d-none invisible">We Are The Leading Mobile App Development Company</h3>
                        <div class="col-12 heading fs-md-14 fs-12 text-center text-md-start left"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"><span class="fs-xl-22 fs-lg-20 fs-md-18 fs-16">We Are The Leading</span><br><b>Mobile App Development Company</b></span></div>
                        <div class="col-12 fs-lg-17 fs-md-15 fs-sm-15 fs-14 text-dark my-3 px-0 text-center text-md-start">We are the most promising and trusted IT company proffering web and mobile app development, custom software solution and digital marketing services to start-up, mid size enterprises and various big enterprises aiming to proffer digital success with robust applications.</div>
                        <div class="col-12 fs-lg-17 fs-md-15 fs-sm-15 fs-14 text-dark my-3 px-0 text-center text-md-start">IMG Global Infotech is an ISO 9001:2008 certified Web And Mobile App Development Company with the motive of delivering mobility solutions to power business and acquire digital success. We acquire an established record in delivering various services such as custom software development, SEO/Social Media Marketing services , Mobile and web app development, e-commerce website development. 
                        </div>
                        {{-- <div class="col-12 fs-lg-17 fs-md-15 fs-sm-15 fs-14 text-dark my-3 px-0 text-center text-md-start">Powered by an expert team committed towards their work and possessing required skills and capabilities to shine the client's business through processing digital innovation and intuitive mobile solutions based on their requirements.</div> --}}
                        <div class="col-12 px-0">
                            <div class="row countBoxOuter mx-0 g-3 text-center me-lg-n4">
                                <div class="col-sm-3 col-6">
                                    <div class="countBox" style="--d: 0s">
                                        <div class="aboutNumberText">1200+</div>
                                        <div class="fs-xxl-16 fs-xl-15 fs-lg-14 fs-sm-13 fs-12 lh-normal text-dark fw-600">Successful <br>Projects</div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-6">
                                    <div class="countBox" style="--d: 1s">
                                        <div class="aboutNumberText">98%</div>
                                        <div class="fs-xxl-16 fs-xl-15 fs-lg-14 fs-sm-13 fs-12 lh-normal text-dark fw-600">Success <br>Ratio</div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-6">
                                    <div class="countBox" style="--d: 2s">
                                        <div class="aboutNumberText">100+</div>
                                        <div class="fs-xxl-16 fs-xl-15 fs-lg-14 fs-sm-13 fs-12 lh-normal text-dark fw-600">Team <br>Members</div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-6">
                                    <div class="countBox" style="--d: 3s">
                                        <div class="aboutNumberText">8+</div>
                                        <div class="fs-xxl-16 fs-xl-15 fs-lg-14 fs-sm-13 fs-12 lh-normal text-dark fw-600">Years in <br>Industry</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-auto text-center text-md-left px-0 mt-4">
                            <a href="#portfolioTarget" class="btn btn-theme1 text-white fs-lg-14 fs-12 fw-600 my-3 px-lg-4 py-2 px-3 ms-md-2">
                                <span class="d-block"><span>Our Recent Work</span><i class="imgr ms-2 img-long-arrow-right  position-relative bottom-n2px"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-7 order-1 order-lg-2">
                    <img src="{{asset('/public')}}/assets/img/about-us-new/xl-aboutNew2.webp" srcset="{{asset('/public')}}/assets/img/about-us-new/m-aboutNew2.webp 700w, {{asset('/public')}}/assets/img/about-us-new/t-aboutNew2.webp 1000w, {{asset('/public')}}/assets/img/about-us-new/xl-aboutNew2.webp 1400w" class="w-100 h-auto" width="746" height="633" alt="About-us">
                    {{-- <div class="row countBoxOuter mx-0 g-3 text-center row-cols-2 d-none d-sm-flex">
                        <div class="col-6">
                            <div class="countBox" style="--d: 0s">
                                <div class="aboutNumberText">1200+</div>
                                <div class="fs-xxl-18 fs-xl-17 fs-lg-16 fs-15 lh-normal text-dark fw-600">Successful <br>Projects</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="countBox" style="--d: 1s">
                                <div class="aboutNumberText">98%</div>
                                <div class="fs-xxl-18 fs-xl-17 fs-lg-16 fs-15lh-norma text-dark fw-600">Success <br>Ratio</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="countBox" style="--d: 1s">
                                <div class="aboutNumberText">100+</div>
                                <div class="fs-xxl-18 fs-xl-17 fs-lg-16 fs-15 lh-normal text-dark fw-600">Team <br>Members</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="countBox" style="--d: 0s">
                                <div class="aboutNumberText">8+</div>
                                <div class="fs-xxl-18 fs-xl-17 fs-lg-16 fs-15 lh-normal text-dark fw-600">Years in <br>Industry</div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- about us section end --}}

    {{-- service section --}}
    <div class="container-fluid servicesSection p-0 py-4">
        <div class="row mx-0">
            <div class="col-12 text-center pb-4">
                <h3 class="d-none invisible">Innovative Services</h3>
                <div class="heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Innovative <b>Services</b></span></div>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 px-0 serviceItem right bottom">
                <div class="container servicesSectionInner">
                    <div class="row">
                        <div class="col-12">
                            <div class="row ">
                                <div class="col-lg-6 col-md-5 col-12 leftPart p-xxl-4 p-2">
                                    <div class="row">
                                        <h4 class="d-none invisible">Mobile App Development</h4>
                                        <div class="col-12 fs-md-22 fs-sm-20 fs-18 text-theme1 fw-600 text-md-start text-center">Mobile App Development</div>
                                        <div class="col-12 fs-md-17 fs-15 my-md-4 mb-md-4 mb-1 mt-1 serviceContent text-md-start text-center">If you have an idea, that's not enough, a team of professionals is always required to transform the idea into reality. We intend to deliver a best-in-class and intuitive mobile app by executing plans based on your idea. Our experts are available at your service without any time barrier.</div>
                                        <div class="col-12 py-3">
                                            <div class="row row-cols-lg-2 g-3 row-cols-md-1 row-cols-2">
                                                <div class="col d-flex">
                                                    <a href="{{asset('/android-application-development.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/android.webp" class="w-100" width="20" height="25" alt="Android App">
                                                        </div>
                                                        Android App
                                                    </a>
                                                </div>
                                                <div class="col d-flex">
                                                    <a href="{{asset('/ios-app-development.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/apple.webp" class="w-100" width="20" height="22" alt="iOS App">
                                                        </div>
                                                        iOS App
                                                    </a>
                                                </div>
                                                <div class="col d-flex">
                                                    <a href="{{asset('/flutter-app-development.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/fluter.webp" class="w-100" width="20" height="21" alt="Flutter App">
                                                        </div>
                                                        Flutter App
                                                    </a>
                                                </div>
                                                <div class="col d-flex">
                                                    <a href="{{asset('/react-native-app-development.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/react.webp" class="w-100" width="20" height="20" alt="React Native App">
                                                        </div>
                                                        React Native App  
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center text-md-start pt-3 pb-3 pb-md-0">
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                                <span class="d-block"><span>Talk to our Experts</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-12 rightPart">
                                    <div class="imgOuter">
                                        <img src="{{asset('/public')}}/assets/img/new-services/xl-mobile-application-development.webp" srcset="{{asset('/public')}}/assets/img/new-services/m-mobile-application-development.webp 700w, {{asset('/public')}}/assets/img/new-services/t-mobile-application-development.webp 1000w, {{asset('/public')}}/assets/img/new-services/xl-mobile-application-development.webp 1400w" class="h-auto" width="512" height="516" alt="mobile-app-development">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 serviceItem bottom">
                <div class="container servicesSectionInner">
                    <div class="row">
                        <div class="col-12">
                            <div class="row flex-row-reverse">
                                <div class="col-lg-6 col-md-5 col-12 leftPart p-xxl-4 p-2">
                                    <div class="row">
                                        <h4 class="d-none invisible">Website Designing</h4>
                                        <div class="col-12 fs-md-22 fs-sm-20 fs-18 text-theme3 fw-600 text-md-start text-center">Website Designing</div>
                                        <div class="col-12 fs-md-17 fs-15 my-md-4 mb-md-4 mb-1 mt-1 serviceContent text-md-start text-center">IMG is a growing and the most trusted company delivering website designing services. Transforming your designing idea into full fledged reality made us one of the most reputed <a href="javascript:;" class="text-decoration-none text-dark fw-600">website designing company in Jaipur</a> and allowed us to stand out from others.</div>
                                        <div class="col-12 py-3">
                                            <div class="row row-cols-lg-2 g-3 row-cols-md-1 row-cols-2">
                                                <div class="col d-flex">
                                                    <a href="{{asset('/parallax-web-designing.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/parllax-website-designing.webp" width="20" height="20" class="w-100" alt="Parallax Website Designing">
                                                        </div>
                                                        Parallax Website Designing
                                                    </a>
                                                </div>
                                                <div class="col d-flex">
                                                    <a href="{{asset('/dynamic-website-designing.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/dynamic-web-designing.webp" width="20" height="20" class="w-100" alt="Dynamic Website Designing">
                                                        </div>
                                                        Dynamic Website Designing
                                                    </a>
                                                </div>
                                                <div class="col d-flex">
                                                    <a href="{{asset('/responsive-web-designing.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/responsive-website.webp" width="20" height="19" class="w-100" alt="Website Responsive">
                                                        </div>
                                                        Website Responsive
                                                    </a>
                                                </div>
                                                <div class="col d-flex">
                                                    <a href="{{asset('/website-redesigning.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/responsive.webp" width="20" height="20" class="w-100" alt="Website Re-designing">
                                                        </div>
                                                        Website Re-designing
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center text-md-start pt-3 pb-3 pb-md-0">
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme3 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                                <span class="d-block"><span>Talk to our Experts</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-12 rightPart">
                                    <div class="imgOuter">
                                        <img src="{{asset('/public')}}/assets/img/new-services/xl-website-designing.webp" srcset="{{asset('/public')}}/assets/img/new-services/m-website-designing.webp 700w, {{asset('/public')}}/assets/img/new-services/t-website-designing.webp 1000w, {{asset('/public')}}/assets/img/new-services/xl-website-designing.webp 1400w" class="h-auto" width="512" height="512" alt="website-designing">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 serviceItem right bottom">
                <div class="container servicesSectionInner">
                    <div class="row">
                        <div class="col-12">
                            <div class="row ">
                                <div class="col-lg-6 col-md-5 col-12 leftPart p-xxl-4 p-2">
                                    <div class="row">
                                        <h4 class="d-none invisible">Web Development</h4>
                                        <div class="col-12 fs-md-22 fs-sm-20 fs-18 text-theme1 fw-600 text-md-start text-center">Web Development</div>
                                        <div class="col-12 fs-md-17 fs-15 my-md-4 mb-md-4 mb-1 mt-1 serviceContent text-md-start text-center">We transform your website into effective communication channels that deliver the best results and drive online growth. We provide web development solutions within the expected timeframe and budget. We build customized, clear, and clean websites that create lasting impressions interactively.</div>
                                        <div class="col-12 py-3">
                                            <div class="row row-cols-lg-2 g-3 row-cols-md-1 row-cols-2">
                                                <div class="col d-flex">
                                                    <a href="{{asset('/ecommerce-website-development.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/ecommerce-developement.webp" width="20" height="20" class="w-100" alt="Ecommerce Development">
                                                        </div>
                                                        Ecommerce Development
                                                    </a>
                                                </div>
                                                <div class="col d-flex">
                                                    <a href="{{asset('/web-portal-development.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/web-portal-development.webp" width="20" height="20" class="w-100" alt="Web Portal Development">
                                                        </div>
                                                        Web Portal Development
                                                    </a>
                                                </div>
                                                <div class="col d-flex">
                                                    <a href="{{asset('/cms-development.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/cms-development.webp" width="20" height="20" class="w-100" alt="CMS Development">
                                                        </div>
                                                        CMS Development
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center text-md-start pt-3 pb-3 pb-md-0">
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                                <span class="d-block"><span>Talk to our Experts</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-12 rightPart">
                                    <div class="imgOuter">
                                        <img src="{{asset('/public')}}/assets/img/new-services/xl-website-development.webp" srcset="{{asset('/public')}}/assets/img/new-services/m-website-development.webp 700w, {{asset('/public')}}/assets/img/new-services/t-website-development.webp 1000w, {{asset('/public')}}/assets/img/new-services/xl-website-development.webp 1400w" width="512" height="512" alt="web-development">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 serviceItem bottom">
                <div class="container servicesSectionInner">
                    <div class="row">
                        <div class="col-12">
                            <div class="row flex-row-reverse">
                                <div class="col-lg-6 col-md-5 col-12 leftPart p-xxl-4 p-2">
                                    <div class="row">
                                        <h4 class="d-none invisible">Custom ERP Development</h4>
                                        <div class="col-12 fs-md-22 fs-sm-20 fs-18 text-theme3 fw-600 text-md-start text-center">Custom ERP Development</div>
                                        <div class="col-12 fs-md-17 fs-15 my-md-4 mb-md-4 mb-1 mt-1 serviceContent text-md-start text-center">We specialize in developing customized ERP solutions that meet the unique needs of your business. Contact us today to learn more about our services and how we can help streamline your operations and improve your bottom line.</div>
                                        <div class="col-12 py-3">
                                            <div class="row row-cols-lg-2 g-3 row-cols-md-1 row-cols-2">
                                                <div class="col d-flex">
                                                    <a href="{{asset('/school-management-software.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/school-managment-com.webp" width="20" height="20" class="w-100" alt="School Management Software">
                                                        </div>
                                                        School Management Software
                                                    </a>
                                                </div>
                                                <div class="col d-flex">
                                                    <a href="{{asset('/mlm-software-development-company.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/mlm-software.webp" width="20" height="20" class="w-100" alt="MLM Software">
                                                        </div>
                                                        MLM Software
                                                    </a>
                                                </div>
                                                <div class="col d-flex">
                                                    <a href="{{asset('/online-exam-app-development.php')}}" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/web-portal-development.webp" width="20" height="20" class="w-100" alt="Online Exam">
                                                        </div>
                                                        Online Exam
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center text-md-start pt-3 pb-3 pb-md-0">
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme3 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                                <span class="d-block"><span>Talk to our Experts</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-12 rightPart">
                                    <div class="imgOuter">
                                        <img src="{{asset('/public')}}/assets/img/new-services/xl-custome-erp.webp" srcset="{{asset('/public')}}/assets/img/new-services/m-custome-erp.webp 700w, {{asset('/public')}}/assets/img/new-services/t-custome-erp.webp 1000w, {{asset('/public')}}/assets/img/new-services/xl-custome-erp.webp 1400w" width="512" height="512" alt="custom-erp-development">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 serviceItem right bottom">
                <div class="container servicesSectionInner">
                    <div class="row">
                        <div class="col-12">
                            <div class="row ">
                                <div class="col-lg-6 col-md-5 col-12 leftPart p-xxl-4 p-2">
                                    <div class="row">
                                        <h4 class="d-none invisible">MVP Startups</h4>
                                        <div class="col-12 fs-md-22 fs-sm-20 fs-18 text-theme1 fw-600 text-md-start text-center">MVP Startups</div>
                                        <div class="col-12 fs-md-17 fs-15 my-md-4 mb-md-4 mb-1 mt-1 serviceContent text-md-start text-center">We specialize in helping startups launch their products quickly and efficiently, with a focus on validating ideas and minimizing risk. Contact us today to learn more about our services and how we can help bring your idea to life.</div>
                                        {{-- <div class="col-12 py-3">
                                            <div class="row row-cols-lg-2 g-3 row-cols-md-1 row-cols-2">
                                                <div class="col d-flex">
                                                    <a href="https://www.imgglobalinfotech.com/ecommerce-development-company.php" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/apple.webp" class="w-100" alt="Ecommerce Development">
                                                        </div>
                                                        Ecommerce Development
                                                    </a>
                                                </div>
                                                <div class="col d-flex">
                                                    <a href="https://www.imgglobalinfotech.com/web-portal-development-company.php" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/fluter.webp" class="w-100" alt="Web Portal Development">
                                                        </div>
                                                        Web Portal Development
                                                    </a>
                                                </div>
                                                <div class="col d-flex">
                                                    <a href="https://www.imgglobalinfotech.com/cms-development-company.php" class="serivcesLinks fs-md-15 fs-13 w-md-100 w-lg-auto w-100 w-sm-auto mx-sm-auto ms-lg-0 justify-content-sm-center justify-content-md-start">
                                                        <div class="imgOuter">
                                                            <img src="{{asset('/public')}}/assets/img/new-services/android.webp" class="w-100" alt="CMS Development">
                                                        </div>
                                                        CMS Development
                                                    </a>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-12 text-center text-md-start pt-3 pb-3 pb-md-0">
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                                <span class="d-block"><span>Talk to our Experts</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-12 rightPart">
                                    <div class="imgOuter">
                                        <img src="{{asset('/public')}}/assets/img/new-services/xl-mvp-development.webp" srcset="{{asset('/public')}}/assets/img/new-services/m-mvp-development.webp 700w, {{asset('/public')}}/assets/img/new-services/t-mvp-development.webp 1000w, {{asset('/public')}}/assets/img/new-services/xl-mvp-development.webp 1400w" width="512" height="512" alt="mvp-startups">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- service section end --}}


    {{-- success story new section --}}
    <div class="container-fluid overflow-hidden successStorySection pt-lg-5">
        <div class="container py-4 py-lg-5">
            <div class="row">
                <div class="col-lg-6 mb-4 pb-5 mb-lg-0 pb-lg-0">
                    <div class="row mx-0">
                        <h3 class="d-none invisible">Exclusive Offering</h3>
                        <div class="col-12 heading fs-md-14 fs-12 text-center text-lg-start left"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Exclusive <b> Offering</b></span></div>
                        <div class="col-12 fs-lg-17 fs-md-15 fs-sm-15 fs-14 text-dark my-3 px-0 text-center text-lg-start">Our comprehensive suite of on-demand solutions can help you improve efficiency, reduce costs, and increase customer satisfaction. Contact us today to learn more about how we can help your business thrive in the on-demand economy.</div>
                        <div class="col-12 text-md-start text-center d-none d-lg-block px-0 mt-2">
                            <a href="{{asset('/mobile-app-development.php')}}" class="btn btn-theme1 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                <span class="d-block"><span>Explore More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row mx-0">
                        <div class="col-12 d-flex justify-content-start justify-content-sm-center">
                            <div class="animateCardWrapper d-flex align-items-center justify-content-center position-relative">
                                <div class="animateCardOuter position-relative">
                                    <a href="https://www.imgglobalinfotech.com/food-delivery-app-development.php" class="animateCard position-absolute top-0 start-0 zi-2 bg-white overflow-hidden w-100 h-100 text-decoration-none" style="--i:1; --j:12s">
                                        <div class="animateCardInner row mx-0 shadow-none rounded-0 p-0 position-relative w-100 bg-white overflow-hidden">
                                            <div class="col-12 animateImg position-relative d-flex align-items-center justify-content-center">
                                                <img width="300" height="200" src="{{asset('/public')}}/assets/img/success-story-new/Food-Delivery-App.webp" class="w-100" alt="food-delivery-app">
                                            </div>
                                            <div class="col-12">
                                                <div class="row animateDetailBox">
                                                    <h4 class="d-none invisible">Food Delivery app</h4>
                                                    <div class="col-12 animateHeading fs-md-20 fs-sm-20 fs-18 fw-600 lh-normal text-center text-md-start">Food Delivery app</div>
                                                    <div class="col-12 animateSubHeading fs-lg-15 fs-md-15 fs-sm-15 fs-14 text-dark my-1 text-center text-md-start">We design mobile applications that enable users to order food from local restaurants.</div>
                                                    <div class="col-12 text-md-start text-center mt-2">
                                                        <button class="btn btn-theme1 fs-xxl-12 fs-11 fw-600 py-xxl-2 py-1 px-3">
                                                            <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://www.imgglobalinfotech.com/grocery-app-development.php" class="animateCard position-absolute top-0 start-0 zi-2 bg-white overflow-hidden w-100 h-100 text-decoration-none" style="--i:2; --j:12s">
                                        <div class="animateCardInner row mx-0 shadow-none rounded-0 p-0 position-relative w-100 bg-white overflow-hidden">
                                            <div class="col-12 animateImg position-relative d-flex align-items-center justify-content-center">
                                                <img width="300" height="200" src="{{asset('/public')}}/assets/img/success-story-new/grocerry-app2.webp" class="w-100" alt="grocery-app">
                                            </div>
                                            <div class="col-12">
                                                <div class="row animateDetailBox">
                                                    <h4 class="d-none invisible">Grocery App</h4>
                                                    <div class="col-12 animateHeading fs-md-20 fs-sm-20 fs-18 fw-600 lh-normal text-center text-md-start">Grocery App</div>
                                                    <div class="col-12 animateSubHeading fs-lg-15 fs-md-15 fs-sm-15 fs-14 text-dark my-1 text-center text-md-start">Leverage the best mobile Grocery App Development using the most robust and latest technology you've ever come across.</div>
                                                    <div class="col-12 text-md-start text-center mt-2">
                                                        <button class="btn btn-theme1 fs-xxl-12 fs-11 fw-600 py-xxl-2 py-1 px-3">
                                                            <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://www.imgglobalinfotech.com/pharmacy-app-development.php" class="animateCard position-absolute top-0 start-0 zi-2 bg-white overflow-hidden w-100 h-100 text-decoration-none" style="--i:3; --j:12s">
                                        <div class="animateCardInner row mx-0 shadow-none rounded-0 p-0 position-relative w-100 bg-white overflow-hidden">
                                            <div class="col-12 animateImg position-relative d-flex align-items-center justify-content-center">
                                                <img width="300" height="200" src="{{asset('/public')}}/assets/img/success-story-new/Medicine-Delivery-App.webp" class="w-100" alt="medicine-delivery-app">
                                            </div>
                                            <div class="col-12">
                                                <div class="row animateDetailBox">
                                                    <h4 class="d-none invisible">Medicine Delivery App</h4>
                                                    <div class="col-12 animateHeading fs-md-20 fs-sm-20 fs-18 fw-600 lh-normal text-center text-md-start">Medicine Delivery App</div>
                                                    <div class="col-12 animateSubHeading fs-lg-15 fs-md-15 fs-sm-15 fs-14 text-dark my-1 text-center text-md-start">Get the best medicine delivery app and evaluate your business to a height.</div>
                                                    <div class="col-12 text-md-start text-center mt-2">
                                                        <button class="btn btn-theme1 fs-xxl-12 fs-11 fw-600 py-xxl-2 py-1 px-3">
                                                            <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://www.imgglobalinfotech.com/taxi-app-development-company.php" class="animateCard position-absolute top-0 start-0 zi-2 bg-white overflow-hidden w-100 h-100 text-decoration-none" style="--i:4; --j:12s">
                                        <div class="animateCardInner row mx-0 shadow-none rounded-0 p-0 position-relative w-100 bg-white overflow-hidden">
                                            <div class="col-12 animateImg position-relative d-flex align-items-center justify-content-center">
                                                <img width="300" height="200" src="{{asset('/public')}}/assets/img/success-story-new/Taxi-Booking-App.webp" class="w-100" alt="taxi-booking-app">
                                            </div>
                                            <div class="col-12">
                                                <div class="row animateDetailBox">
                                                    <h4 class="d-none invisible">Taxi Booking App</h4>
                                                    <div class="col-12 animateHeading fs-md-20 fs-sm-20 fs-18 fw-600 lh-normal text-center text-md-start">Taxi Booking App</div>
                                                    <div class="col-12 animateSubHeading fs-lg-15 fs-md-15 fs-sm-15 fs-14 text-dark my-1 text-center text-md-start">Get user-friendly, feature-rich Uber like Taxi Booking Apps with 100% customization.</div>
                                                    <div class="col-12 text-md-start text-center mt-2">
                                                        <button class="btn btn-theme1 fs-xxl-12 fs-11 fw-600 py-xxl-2 py-1 px-3">
                                                            <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    {{-- <a href="javascript:;" class="animateCard position-absolute top-0 start-0 zi-2 bg-white overflow-hidden w-100 h-100 text-decoration-none" style="--i:5; --j:16s">
                                        <div class="animateCardInner row mx-0 shadow-none rounded-0 p-0 position-relative w-100 bg-white overflow-hidden">
                                            <div class="col-12 animateImg position-relative d-flex align-items-center justify-content-center">
                                                <img width="300" height="200" src="{{asset('/public')}}/assets/img/success-story-new/Home-Services-App.webp" class="w-100" alt="home-services-app">
                                            </div>
                                            <div class="col-12">
                                                <div class="row animateDetailBox">
                                                    <div class="col-12 animateHeading fs-md-20 fs-sm-20 fs-18 fw-600 lh-normal text-center text-md-start">Home Services App</div>
                                                    <div class="col-12 animateSubHeading fs-lg-15 fs-md-15 fs-sm-15 fs-14 text-dark my-1 text-center text-md-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quibusdam praesentium sapiente unde illum laudantium saepe odio eveniet adipisci dolore. Necessitatibus quisquam sit rerum omnis, quod architecto nostrum laudantium cupiditate!</div>
                                                    <div class="col-12 text-md-start text-center mt-2">
                                                        <button class="btn btn-theme1 fs-xxl-12 fs-11 fw-600 py-xxl-2 py-1 px-3">
                                                            <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> --}}

                                    <a href="https://www.imgglobalinfotech.com/elearning-app-development.php" class="animateCard position-absolute top-0 start-0 zi-2 bg-white overflow-hidden w-100 h-100 text-decoration-none" style="--i:5; --j:12s">
                                        <div class="animateCardInner row mx-0 shadow-none rounded-0 p-0 position-relative w-100 bg-white overflow-hidden">
                                            <div class="col-12 animateImg position-relative d-flex align-items-center justify-content-center">
                                                <img width="300" height="200" src="{{asset('/public')}}/assets/img/success-story-new/E-learning-App.webp" class="w-100" alt="elearning-app">
                                            </div>
                                            <div class="col-12">
                                                <div class="row animateDetailBox">
                                                    <h4 class="d-none invisible">eLearning App</h4>
                                                    <div class="col-12 animateHeading fs-md-20 fs-sm-20 fs-18 fw-600 lh-normal text-center text-md-start">eLearning App</div>
                                                    <div class="col-12 animateSubHeading fs-lg-15 fs-md-15 fs-sm-15 fs-14 text-dark my-1 text-center text-md-start">eLearning solutions that redefine the way how education is imparted</div>
                                                    <div class="col-12 text-md-start text-center mt-2">
                                                        <button class="btn btn-theme1 fs-xxl-12 fs-11 fw-600 py-xxl-2 py-1 px-3">
                                                            <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://www.imgglobalinfotech.com/online-exam-app-development.php" class="animateCard position-absolute top-0 start-0 zi-2 bg-white overflow-hidden w-100 h-100 text-decoration-none" style="--i:6; --j:12s">
                                        <div class="animateCardInner row mx-0 shadow-none rounded-0 p-0 position-relative w-100 bg-white overflow-hidden">
                                            <div class="col-12 animateImg position-relative d-flex align-items-center justify-content-center">
                                                <img width="300" height="200" src="{{asset('/public')}}/assets/img/success-story-new/Online-Classes-App.webp" class="w-100" alt="online-classes-app">
                                            </div>
                                            <div class="col-12">
                                                <div class="row animateDetailBox">
                                                    <h4 class="d-none invisible">Online Classes App</h4>
                                                    <div class="col-12 animateHeading fs-md-20 fs-sm-20 fs-18 fw-600 lh-normal text-center text-md-start">Online Classes App</div>
                                                    <div class="col-12 animateSubHeading fs-lg-15 fs-md-15 fs-sm-15 fs-14 text-dark my-1 text-center text-md-start">Taking Online Examination to the Next Level with Customized App Solutions</div>
                                                    <div class="col-12 text-md-start text-center mt-2">
                                                        <button class="btn btn-theme1 fs-xxl-12 fs-11 fw-600 py-xxl-2 py-1 px-3">
                                                            <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    {{-- <a href="javascript:;" class="animateCard position-absolute top-0 start-0 zi-2 bg-white overflow-hidden w-100 h-100 text-decoration-none" style="--i:8; --j:16s">
                                        <div class="animateCardInner row mx-0 shadow-none rounded-0 p-0 position-relative w-100 bg-white overflow-hidden">
                                            <div class="col-12 animateImg position-relative d-flex align-items-center justify-content-center">
                                                <img width="300" height="200" src="{{asset('/public')}}/assets/img/success-story-new/Lecture-Notes-Selling-App.webp" class="w-100" alt="lecture-notes-selling-App">
                                            </div>
                                            <div class="col-12">
                                                <div class="row animateDetailBox">
                                                    <h4 class="d-none invisible">Lecture Notes Selling App</h4>
                                                    <div class="col-12 animateHeading fs-md-20 fs-sm-20 fs-18 fw-600 lh-normal text-center text-md-start">Lecture Notes Selling App</div>
                                                    <div class="col-12 animateSubHeading fs-lg-15 fs-md-15 fs-sm-15 fs-14 text-dark my-1 text-center text-md-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quibusdam praesentium sapiente unde illum laudantium saepe odio eveniet adipisci dolore. Necessitatibus quisquam sit rerum omnis, quod architecto nostrum laudantium cupiditate!</div>
                                                    <div class="col-12 text-md-start text-center mt-2">
                                                        <button class="btn btn-theme1 fs-xxl-12 fs-11 fw-600 py-xxl-2 py-1 px-3">
                                                            <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-lg-start text-center d-lg-none mt-4">
                            <a href="{{asset('/mobile-app-development.php')}}" class="btn btn-theme1 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                <span class="d-block"><span>Explore More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- success story section end --}}


    {{-- cta section --}}
    <div class="container-fluid py-md-5 py-4 ctaSection">
        <div class="container">
            <div class="row">
                <div class="col-12 ctaCardSection">
                    <div class="row">
                        <div class="col-xl-9 col-12 mx-auto">
                            <div class="row">
                                <h3 class="col-12 d-none invisible">Let’s turn your business idea into reality</h3>
                                <div class="col-12 fs-lg-38 fs-md-34 fs-sm-28 fs-20 fw-600 text-white mb-4 text-center">
                                    Let’s turn your business idea into reality
                                </div>
                                <div class="col-12 text-center fs-lg-20 fs-md-18 fs-sm-16 fs-14 fw-500 text-white mb-5">
                                    Do you want to experience the best in class quality mobile apps? Send us your inquiry and
                                    one of our executives will catch you up in no time by Call, Email or Skype.
                                </div>
                                <div class="col-12 text-center">
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme3 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                        <span class="d-block"><span>Book A Discovery Call</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- cta section end --}}

    {{-- process flow section --}}
    <div class="container-fluid overflow-hidden processFlowSection">
        <div class="container py-4 pb-lg-5 pt-0">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-12 col-lg-10">
                    <img src="{{asset('/public')}}/assets/img/process-flow/xl-process-flow.webp" srcset="{{asset('/public')}}/assets/img/process-flow/m-process-flow.webp 700w, {{asset('/public')}}/assets/img/process-flow/t-process-flow.webp 1000w, {{asset('/public')}}/assets/img/process-flow/xl-process-flow.webp 1400w" width="1076" height="793" class="w-100 h-auto d-none d-sm-block" alt="your-idea">
                    <img src="{{asset('/public')}}/assets/img/process-flow/m-mobileprocess.webp" width="373" height="798" class="w-100 h-auto d-sm-none" alt="your-idea">
                </div>
            </div>
        </div>
    </div>
    {{-- process flow section end --}}


    {{-- industry section --}}
    <div class="container-fluid weServeIndSection bg-light">
        <div class="container py-4 py-md-5">
            <div class="row">
                <div class="col-12 text-center pb-4">
                    <h3 class="d-none invisible">Industries We Serve</h3>
                    <div class="heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Industries <b>We Serve</b></span></div>
                </div>
                <div class="col-12 text-dark text-center fs-md-17 fs-sm-15 fs-14 ">We have experienced and skilled developers who have delivered successful mobile apps for various industry verticals. Our professionals gather the client's needs and then plan for the right solutions, execute them, and make the client taste the success in their respective industries.</div>
                <div class="col-12 pt-4">
                    <div class="row newindustriesboxwrapper  row-cols-xl-5 row-cols-lg-4 row-cols-md-3 justify-content-center mt-0 g-md-4 g-2">
                        <div class="col-md col-sm-7 col-auto">
                            <h4 class="d-none invisible">Fantasy Sports</h4>
                            <a href="javascript:;" class="card">
                                <div class="card-body row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/fantacy-sports.webp" class="w-100 h-auto" alt="Fantasy-Sports">
                                        </div>
                                    </div>
                                    <div class="col-12 text-muted pt-2 fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Fantasy Sports
                                    </div>
                                </div>
                                <div class="card-body body2 row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/fantacy-sports.webp" class="w-100 h-auto" alt="Fantasy-Sports">
                                        </div>
                                    </div>
                                    <div class="col-12 text-white pt-2 text-white fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Fantasy Sports
                                    </div>
                                    <div class="col-12 fs-12 pt-2 text-white text-center">
                                        We provide fully functional and engaging fantasy sports apps that will be enrolling flawless features and will be built based on your customised needs.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md col-sm-7 col-auto">
                            <h4 class="d-none invisible">Healthcares</h4>
                            <a href="javascript:;" class="card">
                                <div class="card-body row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/health-care.webp" class="w-100 h-auto" alt="Healthcare">
                                        </div>
                                    </div>
                                    <div class="col-12 text-muted pt-2 fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Healthcare
                                    </div>
                                </div>
                                <div class="card-body body2 row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/health-care.webp" class="w-100 h-auto" alt="Healthcare">
                                        </div>
                                    </div>
                                    <div class="col-12 text-white pt-2 text-white fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Healthcare
                                    </div>
                                    <div class="col-12 fs-12 pt-2 text-white text-center">
                                        We create customised and seamless healthcare apps for better integration and rich featured operations leading to higher user engagement.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md col-sm-7 col-auto">
                            <h4 class="d-none invisible">Banking and Finance</h4>
                            <a href="javascript:;" class="card">
                                <div class="card-body row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/banking-and-finance.webp" class="w-100 h-auto" alt="Banking-and-Finance">
                                        </div>
                                    </div>
                                    <div class="col-12 text-muted pt-2 fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Banking and Finance
                                    </div>
                                </div>
                                <div class="card-body body2 row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/banking-and-finance.webp" class="w-100 h-auto" alt="Banking-and-Finance">
                                        </div>
                                    </div>
                                    <div class="col-12 text-white pt-2 text-white fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Banking and Finance
                                    </div>
                                    <div class="col-12 fs-12 pt-2 text-white text-center">
                                        We provide banking and finance apps to accelerate the growth of your business, by building ROI centric and flawless features.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md col-sm-7 col-auto">
                            <h4 class="d-none invisible">Travel and Tourism</h4>
                            <a href="javascript:;" class="card">
                                <div class="card-body row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/travel-and-tourism.webp" class="w-100 h-auto" alt="Travel-and-Tourism">
                                        </div>
                                    </div>
                                    <div class="col-12 text-muted pt-2 fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Travel and Tourism
                                    </div>
                                </div>
                                <div class="card-body body2 row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/travel-and-tourism.webp" class="w-100 h-auto" alt="Travel-and-Tourism">
                                        </div>
                                    </div>
                                    <div class="col-12 text-white pt-2 text-white fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Travel and Tourism
                                    </div>
                                    <div class="col-12 fs-12 pt-2 text-white text-center">
                                        Travel app makes travel easier and we deliver advanced features that will be helping app users in various ways and making it more feasible.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md col-sm-7 col-auto">
                            <h4 class="d-none invisible">Edtech Solution</h4>
                            <a href="javascript:;" class="card">
                                <div class="card-body row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/edtech-solution.webp" class="w-100 h-auto" alt="Edtech-Solution">
                                        </div>
                                    </div>
                                    <div class="col-12 text-muted pt-2 fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Edtech Solution
                                    </div>
                                </div>
                                <div class="card-body body2 row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/edtech-solution.webp" class="w-100 h-auto" alt="Edtech-Solution">
                                        </div>
                                    </div>
                                    <div class="col-12 text-white pt-2 text-white fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Edtech Solution
                                    </div>
                                    <div class="col-12 fs-12 pt-2 text-white text-center">
                                        We build edtech softwares installing SDK giving seamless experience to app users. Providing customised solutions for all edt5ech institutions.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md col-sm-7 col-auto">
                            <h4 class="d-none invisible">Logistic Services Apps</h4>
                            <a href="javascript:;" class="card">
                                <div class="card-body row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/logistic-services-app.webp" class="w-100 h-auto" alt="Logistic-Services-Apps">
                                        </div>
                                    </div>
                                    <div class="col-12 text-muted pt-2 fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Logistic Services Apps
                                    </div>
                                </div>
                                <div class="card-body body2 row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/logistic-services-app.webp" class="w-100 h-auto" alt="Logistic-Services-Apps">
                                        </div>
                                    </div>
                                    <div class="col-12 text-white pt-2 text-white fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Logistic Services Apps
                                    </div>
                                    <div class="col-12 fs-12 pt-2 text-white text-center">
                                        We build an app that assists your business requirement in such a way that it exceeds the traffic and increases the range of your services.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md col-sm-7 col-auto">
                            <h4 class="d-none invisible">Media and Entertainment</h4>
                            <a href="javascript:;" class="card">
                                <div class="card-body row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/media-and-entertainment.webp" class="w-100 h-auto" alt="Media-and-Entertainment">
                                        </div>
                                    </div>
                                    <div class="col-12 text-muted pt-2 fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Media and Entertainment
                                    </div>
                                </div>
                                <div class="card-body body2 row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/media-and-entertainment.webp" class="w-100 h-auto" alt="Media-and-Entertainment">
                                        </div>
                                    </div>
                                    <div class="col-12 text-white pt-2 text-white fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Media and Entertainment
                                    </div>
                                    <div class="col-12 fs-12 pt-2 text-white text-center">
                                        We apply cutting edge technologies to deliver best-in-industry creative media and entertainment apps able to engage the highest number of users.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md col-sm-7 col-auto">
                            <h4 class="d-none invisible">Retails and Ecommerce Apps</h4>
                            <a href="javascript:;" class="card">
                                <div class="card-body row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/retails-and-ecommerce.webp" class="w-100 h-auto" alt="Retails-and-Ecommerce-Apps">
                                        </div>
                                    </div>
                                    <div class="col-12 text-muted pt-2 fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Retails and Ecommerce Apps
                                    </div>
                                </div>
                                <div class="card-body body2 row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/retails-and-ecommerce.webp" class="w-100 h-auto" alt="Retails-and-Ecommerce-Apps">
                                        </div>
                                    </div>
                                    <div class="col-12 text-white pt-2 text-white fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                       Retails and Ecommerce Apps
                                    </div>
                                    <div class="col-12 fs-12 pt-2 text-white text-center">
                                        We create Retail and ecommerce apps that improve the shopping experience resulting in high user satisfaction and engagement.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md col-sm-7 col-auto">
                            <h4 class="d-none invisible">Social Apps</h4>
                            <a href="javascript:;" class="card">
                                <div class="card-body row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/social-apps.webp" class="w-100 h-auto" alt="Social-Apps">
                                        </div>
                                    </div>
                                    <div class="col-12 text-muted pt-2 fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Social Apps
                                    </div>
                                </div>
                                <div class="card-body body2 row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/social-apps.webp" class="w-100 h-auto" alt="Social-Apps">
                                        </div>
                                    </div>
                                    <div class="col-12 text-white pt-2 text-white fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Social Apps
                                    </div>
                                    <div class="col-12 fs-12 pt-2 text-white text-center">
                                        Our development process will deliver a resilient social app with advanced features enrolled in it helping in gaining market share.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md col-sm-7 col-auto">
                            <h4 class="d-none invisible">Automobile</h4>
                            <a href="javascript:;" class="card">
                                <div class="card-body row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/auto-mobile.webp" class="w-100 h-auto" alt="Automobile">
                                        </div>
                                    </div>
                                    <div class="col-12 text-muted pt-2 fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Automobile
                                    </div>
                                </div>
                                <div class="card-body body2 row mx-0">
                                    <div class="col-12 px-0 imgMiddal">
                                        <div class="imgOuter">
                                            <img width="54" height="54" src="{{asset('/public')}}/assets/img/new-industries/auto-mobile.webp" class="w-100 h-auto" alt="Automobile">
                                        </div>
                                    </div>
                                    <div class="col-12 text-white pt-2 text-white fw-600 fs-xl-17 fs-lg-15 fs-14 text-center">
                                        Automobile
                                    </div>
                                    <div class="col-12 fs-12 pt-2 text-white text-center">
                                        Developing a mobile app and website for the automobile industry can be a great way to engage customers, streamline operations, and improve overall business performance.
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- industry section end --}}

    {{-- hire developer section --}}
    <div class="container-fluid hireDeveloperSection px-lg-0 py-4 py-md-5">
        <div class="row mx-0">
            <div class="col-auto letImgOuter px-0">
                <div class="leftImg">
                    <img src="{{asset('/public')}}/assets/img/new-hire-developers/xl-hire-developer.webp" srcset="{{asset('/public')}}/assets/img/new-hire-developers/hire-developer.webp 700w, {{asset('/public')}}/assets/img/new-hire-developers/t-hire-developer.webp 1000w, {{asset('/public')}}/assets/img/new-hire-developers/xl-hire-developer.webp 1400w" width="478" height="606" class="w-100" alt="Hire-Remote-Developer">
                </div>
            </div>
            <div class="col-auto rightSide">
                <div class="row flex-column">
                    <div class="col">
                        <div class="row justify-space-between align-items-end mb-4">
                            <div class="col-md col-12">
                                <div class="row flex-column">
                                    <div class="col-auto text-center">
                                        <h3 class="d-none invisible">Hire Remote Developer</h3>
                                        <div class="heading fs-md-14 fs-12 left d-none d-md-block">
                                            <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20 fw-600 lh-1 pt-0"> Hire Remote <br><b class="fs-xxl-56 fs-xl-46 fs-md-36 fs-26 fw-600 lh-sm">Developer</b></span>
                                        </div>
                                        <div class="heading fs-md-14 fs-12 text-center d-md-none">
                                            <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20 fw-600 lh-1 pt-0"> Hire Remote <b class="fs-xxl-56 fs-xl-46 fs-md-36 fs-26 fw-600 lh-sm">Developer</b></span>
                                        </div>
                                    </div>
                                    <div class="col-auto pt-4 fs-xl-18 fs-md-16 fs-14 text-dark text-md-start text-center me-lg-5 pe-lg-5">We are offering a dedicated team model that consists of developers and team members who hold the best industry experience along with strong technical knowledge and expertise.</div>
                                </div>
                            </div>
                            {{-- <div class="col-md-auto col-12 text-center d-none d-md-block">
                                <a href="javascript:;" class="btn btn-theme1 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                    <span class="d-block"><span>let's Connect</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col hireDevCard">
                        <div class="row row-cols-xxl-5 justify-content-center justify-content-lg-start  row-cols-lg-4 row-cols-lg-2 row-cols-md-4 row-cols-sm-3 row-cols-2 g-sm-4 g-2">
                            <div class="col">
                                <a href="{{ asset('/hire-android-app-developers.php') }}" class="card">
                                    <div class="card-body">
                                        <div class="imgOuter">
                                            <img width="50" height="67" src="{{asset('/public')}}/assets/img/new-hire-developers/android.webp" alt="Hire-Android-Developer">
                                        </div>
                                        <strong class="text-dark fs-15 d-block fw-600">Hire Android Developer </strong>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/hire-java-developers.php') }}" class="card">
                                    <div class="card-body">
                                        <div class="imgOuter">
                                            <img width="50" height="67" src="{{asset('/public')}}/assets/img/new-hire-developers/java.webp" alt="Hire-Java-Developer">
                                        </div>
                                        <strong class="text-dark fs-15 d-block fw-600">Hire Java Developer </strong>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/hire-nodejs-developers.php') }}" class="card">
                                    <div class="card-body">
                                        <div class="imgOuter">
                                            <img width="50" height="67" src="{{asset('/public')}}/assets/img/new-hire-developers/node-js.webp" alt="Hire-Node.JS-Developer">
                                        </div>
                                        <strong class="text-dark fs-15 d-block fw-600">Hire Node.JS Developer </strong>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/hire-react-native-app-developers.php') }}" class="card">
                                    <div class="card-body">
                                        <div class="imgOuter">
                                            <img width="50" height="67" src="{{asset('/public')}}/assets/img/new-hire-developers/react-native.webp" alt="Hire-React-Native-Developer">
                                        </div>
                                        <strong class="text-dark fs-15 d-block fw-600">Hire React Native Developer </strong>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/hire-flutter-app-developers.php') }}" class="card">
                                    <div class="card-body">
                                        <div class="imgOuter">
                                            <img width="50" height="67" src="{{asset('/public')}}/assets/img/new-hire-developers/flutter.webp" alt="Hire-Flutter-Developer">
                                        </div>
                                        <strong class="text-dark fs-15 d-block fw-600">Hire Flutter Developer </strong>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/hire-reactjs-developers.php') }}" class="card">
                                    <div class="card-body">
                                        <div class="imgOuter">
                                            <img width="50" height="67" src="{{asset('/public')}}/assets/img/new-hire-developers/reactsvg.webp" alt="Hire-React.JS-Developer">
                                        </div>
                                        <strong class="text-dark fs-15 d-block fw-600">Hire React.JS Developer </strong>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/hire-web-designers.php') }}" class="card">
                                    <div class="card-body">
                                        <div class="imgOuter">
                                            <img width="50" height="67" src="{{asset('/public')}}/assets/img/new-hire-developers/webdesign.webp" alt="Hire-Web-Designer">
                                        </div>
                                        <strong class="text-dark fs-15 d-block fw-600"> Hire Web Designer </strong>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/hire-php-developers.php') }}" class="card">
                                    <div class="card-body">
                                        <div class="imgOuter">
                                            <img width="50" height="67" src="{{asset('/public')}}/assets/img/new-hire-developers/Php.webp" alt="Hire-php-Developer">
                                        </div>
                                        <strong class="text-dark fs-15 d-block fw-600">Hire php Developer </strong>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('/hire-angular-developers.php') }}" class="card">
                                    <div class="card-body">
                                        <div class="imgOuter">
                                            <img width="50" height="67" src="{{asset('/public')}}/assets/img/new-hire-developers/angular.webp" alt="Hire-Angular-Developer">
                                        </div>
                                        <strong class="text-dark fs-15 d-block fw-600">Hire Angular Developer </strong>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('offshore-web-development-india.php') }}" class="card customBg p-1">
                                    <div class="card-body d-flex align-items-center py-4 justify-content-center flex-column text-white">
                                        <i class="imgd fs-md-25 fs-20 img-long-arrow-right position-relative bottom-n2px ms-2 mb-2"></i>
                                        <strong class="fs-md-15 fs-14 d-block text-uppercase text-center fw-600">Let's Connect</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row flex-column">
                            {{-- <div class="col fs-xl-18 fs-md-16 fs-14 text-dark fw-600 mt-4 text-center text-md-start">
                                We are offering a dedicated team model that consists of developers and team members who hold the best industry experience along with strong technical knowledge and expertise.
                            </div> --}}
                            {{-- <div class="col text-center mt-4 d-block d-md-none">
                                <a href="javascript:;" class="btn btn-theme1 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                    <span class="d-block"><span>let's contact</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- hire developer section end --}}


    {{-- trending section --}}
    <div class="container-fluid trandingSection">
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <h3 class="d-none invisible">Trending</h3>
                        <div class="col-12 heading fs-md-14 fs-12">
                            <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> <b> Trending</b></span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row mt-md-5 mt-4">
                        <div class="col-12 trandingTabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active h-100 customNavBtn card" id="arVr-tab" data-bs-toggle="tab" data-bs-target="#arVr-tab-pane" type="button" role="tab" aria-controls="arVr-tab-pane" aria-selected="true">
                                        <div class="card-body">
                                            <div class="imgOuter">
                                                <img width="50" height="50" src="{{asset('/public')}}/assets/img/new-tranding/ar-vr.webp" srcset="{{asset('/public')}}/assets/img/new-tranding/m-ar-vr.webp 850w, {{asset('/public')}}/assets/img/new-tranding/ar-vr.webp 1280w" class="w-100 h-auto" alt="AR-&-VR">
                                            </div>
                                            <div class="text-center text-dark fs-md-13 fs-xl-14 fs-12">AR/VR</div>
                                        </div>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link h-100 customNavBtn card" id="wireableApp-tab" data-bs-toggle="tab" data-bs-target="#wireableApp-tab-pane" type="button" role="tab" aria-controls="wireableApp-tab-pane" aria-selected="false">
                                        <div class="card-body">
                                            <div class="imgOuter">
                                                <img width="50" height="50" src="{{asset('/public')}}/assets/img/new-tranding/wearable.webp" srcset="{{asset('/public')}}/assets/img/new-tranding/m-wearable.webp 850w, {{asset('/public')}}/assets/img/new-tranding/wearable.webp 1280w" class="w-100 h-auto" alt="Wearable-App">
                                            </div>
                                            <div class="text-center text-dark fs-md-13 fs-xl-14 fs-12">Wearable App</div>
                                        </div>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link h-100 customNavBtn card" id="iotApp-tab" data-bs-toggle="tab" data-bs-target="#iotApp-tab-pane" type="button" role="tab" aria-controls="iotApp-tab-pane" aria-selected="false">
                                        <div class="card-body">
                                            <div class="imgOuter">
                                                <img width="50" height="50" src="{{asset('/public')}}/assets/img/new-tranding/iot.webp" srcset="{{asset('/public')}}/assets/img/new-tranding/m-iot.webp 850w, {{asset('/public')}}/assets/img/new-tranding/iot.webp 1280w" class="w-100 h-auto" alt="IOT-Apps">
                                            </div>
                                            <div class="text-center text-dark fs-md-13 fs-xl-14 fs-12">IOT App</div>
                                        </div>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 tabsContentSection">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="arVr-tab-pane" role="tabpanel" aria-labelledby="arVr-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-5 col-12 mb-4 mb-lg-0 leftSide">
                                            <div class="row">
                                                <h4 class="d-none invisible">AR/VR App Development</h4>
                                                <div class="col-12 fs-md-22 fs-sm-20 fs-18 text-theme3 fw-600 text-lg-start text-center">AR/VR App Development</div>
                                                <div class="col-12 fs-lg-17 fs-md-16 fs-14 my-md-4 mb-2 mt-1 service_content text-lg-start text-center">
                                                    Do you want to expand your business with innovative AR/VR development services? As a leading augmented reality development company, that merges experience with creativity to deliver highly-immersive applications for your brand which aim to create an inexorable whirl in the market - and we do this by offering the following set of AR/VR app development services.
                                                </div>
                                                <div class="col-12 pt-4 d-none d-lg-block">
                                                    <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                                        <span class="d-block"><span>View More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-12 rightSide">
                                            {{-- <div class="row newAddedCarousel2 owl-carousel mx-0">
                                                <a href="javascript:;" class="col-12">
                                                    <img src="{{asset('/public')}}/assets/img/new-tranding/AR-VR-App-Development.webp" class="w-100" alt="AR-VR-App-Development">
                                                </a>
                                                <a href="javascript:;" class="col-12">
                                                    <img src="{{asset('/public')}}/assets/img/new-tranding/AR-VR-App-Development.webp" class="w-100" alt="AR-VR-App-Development">
                                                </a>
                                            </div> --}}
                                            <div class="norImg">
                                                <img class="h-auto" src="{{asset('/public')}}/assets/img/new-tranding/xl-AR-VR-App-Development.webp" srcset="{{asset('/public')}}/assets/img/new-tranding/m-AR-VR-App-Development.webp 700w, {{asset('/public')}}/assets/img/new-tranding/t-AR-VR-App-Development.webp 1000w, {{asset('/public')}}/assets/img/new-tranding/xl-AR-VR-App-Development.webp 1400w" width="746" height="501" alt="AR-VR-App-Development">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-5 text-center d-lg-none">
                                            <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                                <span class="d-block"><span>View More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="wireableApp-tab-pane" role="tabpanel" aria-labelledby="wireableApp-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-5 col-12 mb-4 mb-lg-0 leftSide">
                                            <div class="row">
                                                <h4 class="d-none invisible">Wearable App Development</h4>
                                                <div class="col-12 fs-md-22 fs-sm-20 fs-18 text-theme3 fw-600 text-lg-start text-center">Wearable App Development</div>
                                                <div class="col-12 fs-lg-17 fs-md-16 fs-14 my-md-4 mb-2 mt-1 service_content text-lg-start text-center">
                                                    We perform end-to-end app development for wearable devices. Right from the creation of robust backend infrastructure to the integration of APIs bringing multiple applications and features on a single platform, we specialize in creating a wearable app that doesn’t let wearable device limitations get in the way of experience.
                                                </div>
                                                <div class="col-12 pt-4 d-none d-lg-block">
                                                    <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                                        <span class="d-block"><span>View More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-12 rightSide">
                                            {{-- <div class="row newAddedCarousel2 owl-carousel mx-0">
                                                <a href="javascript:;" class="col-12">
                                                    <img src="{{asset('/public')}}/assets/img/new-tranding/Wearable-App.webp" class="w-100" alt="Wearable-App">
                                                </a>
                                                <a href="javascript:;" class="col-12">
                                                    <img src="{{asset('/public')}}/assets/img/new-tranding/Wearable-App.webp" class="w-100" alt="Wearable-App">
                                                </a>
                                            </div> --}}
                                            <div class="norImg">
                                                <img class="h-auto" src="{{asset('/public')}}/assets/img/new-tranding/xl-Wearable-App.webp" srcset="{{asset('/public')}}/assets/img/new-tranding/m-Wearable-App.webp 700w, {{asset('/public')}}/assets/img/new-tranding/t-Wearable-App.webp 1000w, {{asset('/public')}}/assets/img/new-tranding/xl-Wearable-App.webp 1400w" width="746" height="501" alt="Wearable-App">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-5 text-center d-lg-none">
                                            <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                                <span class="d-block"><span>View More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="iotApp-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-5 col-12 mb-4 mb-lg-0 leftSide">
                                            <div class="row">
                                                <h4 class="d-none invisible">IoT App Development</h4>
                                                <div class="col-12 fs-md-22 fs-sm-20 fs-18 text-theme3 fw-600 text-lg-start text-center">IoT App Development</div>
                                                <div class="col-12 fs-lg-17 fs-md-16 fs-14 my-md-4 mb-0 mt-1 service_content text-lg-start text-center">
                                                    IoT app development is a whole different ballgame as compared to traditional application development. That’s why our services in this field keep in mind the intricacies of an IoT ecosystem, as well as the changing hardware and software requirements that enable a seamless UX for IoT applications. We build cloud based, high speed IoT solutions that leverage the tremendous power of our client’s data.
                                                </div>
                                                <div class="col-12 pt-4 d-none d-lg-block">
                                                    <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                                        <span class="d-block"><span>View More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-12 rightSide">
                                            {{-- <div class="row newAddedCarousel2 owl-carousel mx-0">
                                                <a href="javascript:;" class="col-12">
                                                    <img src="{{asset('/public')}}/assets/img/new-tranding/IOT-App-development.webp" class="w-100" alt="IOT-App-development">
                                                </a>
                                                <a href="javascript:;" class="col-12">
                                                    <img src="{{asset('/public')}}/assets/img/new-tranding/IOT-App-development.webp" class="w-100" alt="IOT-App-development">
                                                </a>
                                            </div> --}}
                                            <div class="norImg">
                                                <img class="h-auto" src="{{asset('/public')}}/assets/img/new-tranding/xl-IOT-App-development.webp" srcset="{{asset('/public')}}/assets/img/new-tranding/m-IOT-App-development.webp 700w, {{asset('/public')}}/assets/img/new-tranding/t-IOT-App-development.webp 1000w, {{asset('/public')}}/assets/img/new-tranding/xl-IOT-App-development.webp 1400w" width="746" height="501" alt="IOT-App-development">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-5 text-center d-lg-none">
                                            <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                                                <span class="d-block"><span>View More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
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
    {{-- trending section end --}}



    <!-- Portfolio Section -->
    <div class="container-fluid overflow-hidden bg-white new-portfolio position-relative">
        <div class="forTargetSection" id="portfolioTarget"></div>
        <div class="container py-4 position-relative ">
            <div class="row">
                <div class="row mx-0 mb-lg-4 mb-md-4 mb-3">
                    <h3 class="d-none invisible">Portfolio</h3>
                    <div class="col-12 heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"><b>Portfolio</b> </span></div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center owl-portfolio-slider owl-carousel mx-0">
                <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox ">
                        <img width="415" height="519" src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" srcset="{{asset('/public')}}/assets/img/portfolio-section/m-beliver11.webp 700w, {{asset('/public')}}/assets/img/portfolio-section/t-beliver11.webp 1000w, {{asset('/public')}}/assets/img/portfolio-section/xl-beliver11.webp 1400w" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1" 
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/xl-beliver11.webp"  alt="beliver11"  >
                            <div class="portfolioBoxContent">
                                <h4 class="d-none invisible">Beliver11</h4>
                                <div class="h5 text-white fw-600">Beliver11</div>
                            <p>Fantasy Sports App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox ">
                    <img width="415" height="519" src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" srcset="{{asset('/public')}}/assets/img/portfolio-section/m-EcoCosmo-Project.webp 700w, {{asset('/public')}}/assets/img/portfolio-section/t-EcoCosmo-Project.webp 1000w, {{asset('/public')}}/assets/img/portfolio-section/xl-EcoCosmo-Project.webp 1400w" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/xl-EcoCosmo-Project.webp" alt="EcoCosmo-Project">
                        <div class="portfolioBoxContent">
                            <h4 class="d-none invisible">EcoCosmo</h4>
                            <div class="h5 text-white fw-600">EcoCosmo</div>
                            <p>Tracking App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox ">
                        <img width="415" height="519" src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" srcset="{{asset('/public')}}/assets/img/portfolio-section/m-myfab11.webp 700w, {{asset('/public')}}/assets/img/portfolio-section/t-myfab11.webp 1000w, {{asset('/public')}}/assets/img/portfolio-section/xl-myfab11.webp 1400w" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/xl-myfab11.webp"  alt="MyFab11">
                            <div class="portfolioBoxContent">
                                <h4 class="d-none invisible">MyFab11 App</h4>
                            <div class="h5 text-white fw-600">MyFab11 App </div>
                            <p>Fantasy Sports App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox ">
                    <img width="415" height="519" src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" srcset="{{asset('/public')}}/assets/img/portfolio-section/Health-app.webp 700w, {{asset('/public')}}/assets/img/portfolio-section/t-Health-app.webp 1000w, {{asset('/public')}}/assets/img/portfolio-section/xl-Health-app.webp 1400w" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/xl-Health-app.webp" alt="I-KNOW">
                            <div class="portfolioBoxContent">
                                <h4 class="d-none invisible">I-KNOW</h4>
                            <div class="h5 text-white fw-600">I-KNOW</div>
                            <p>Health App</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox ">
                    <img width="415" height="519" src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" srcset="{{asset('/public')}}/assets/img/portfolio-section/m-royal11-project.webp 700w, {{asset('/public')}}/assets/img/portfolio-section/t-royal11-project.webp 1000w, {{asset('/public')}}/assets/img/portfolio-section/xl-royal11-project.webp 1400w" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/xl-royal11-project.webp"  alt="royal11-project">
                        <div class="portfolioBoxContent">
                            <h4 class="d-none invisible">Royal 11</h4>
                            <div class="h5 text-white fw-600">Royal 11 </div>
                            <p>Fantasy Sports App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox ">
                    <img width="415" height="519" src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" srcset="{{asset('/public')}}/assets/img/portfolio-section/m-now-vue.webp 700w, {{asset('/public')}}/assets/img/portfolio-section/t-now-vue.webp 1000w, {{asset('/public')}}/assets/img/portfolio-section/xl-now-vue.webp 1400w" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/xl-now-vue.webp" alt="now-vue">
                            <div class="portfolioBoxContent">
                                <h4 class="d-none invisible">Now Vue</h4>
                            <div class="h5 text-white fw-600">Now Vue </div>
                            <p>Guest Check In App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox">
                        <img width="415" height="519" src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" srcset="{{asset('/public')}}/assets/img/portfolio-section/m-My-Pitch.webp 700w, {{asset('/public')}}/assets/img/portfolio-section/t-My-Pitch.webp 1000w, {{asset('/public')}}/assets/img/portfolio-section/xl-My-Pitch.webp 1400w" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/xl-My-Pitch.webp" alt="My-Pitch">
                                <div class="portfolioBoxContent">
                                    <h4 class="d-none invisible">My Pitch </h4>
                            <div class="h5 text-white fw-600">My Pitch </div>
                            <p>Fantasy Sports App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 ">
                    <div class="portfolioBox">
                        <img width="415" height="519" src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" srcset="{{asset('/public')}}/assets/img/portfolio-section/m-ipay.webp 700w, {{asset('/public')}}/assets/img/portfolio-section/t-ipay.webp 1000w, {{asset('/public')}}/assets/img/portfolio-section/xl-ipay.webp 1400w" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/xl-ipay.webp"  alt="ipay">
                                <div class="portfolioBoxContent">
                                    <h4 class="d-none invisible">iPay</h4>
                            <div class="h5 text-white fw-600">iPay</div>
                            <p>Recharge App</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox">
                        <img width="415" height="519" src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" srcset="{{asset('/public')}}/assets/img/portfolio-section/m-destist-online.webp 700w, {{asset('/public')}}/assets/img/portfolio-section/t-destist-online.webp 1000w, {{asset('/public')}}/assets/img/portfolio-section/xl-destist-online.webp 1400w" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                            data-src="{{asset('/public')}}/assets/img/portfolio-section/xl-destist-online.webp" alt="destist-online">
                            <div class="portfolioBoxContent">
                                <h4 class="d-none invisible">Dentist Online</h4>
                            <div class="h5 text-white fw-600">Dentist Online</div>
                            <p>Health App</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Portfolio end --}}

    {{-- case study section --}}
    <div class="container-fluid caseStudy">
        <div class="container py-4 pb-md-5">
            <div class="row">
                <h3 class="d-none invisible">Case Study</h3>
                <div class="col-12 heading fs-md-14 fs-12">
                    <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Case<b> Study</b></span>
                </div>
                <div class="col-12 pt-4 pt-md-5">
                    <div class="row g-4">
                        <div class="col-md-6 col-12">
                            <div class="card caseCard">
                                <div class="card-body row mx-0">
                                    <div class="col-12 imgOuter p-0">
                                        <img src="{{asset('/public')}}/assets/img/new-case-study/xl-myfab11-casestudy.webp" srcset="{{asset('/public')}}/assets/img/new-case-study/m-myfab11-casestudy.webp 700w, {{asset('/public')}}/assets/img/new-case-study/t-myfab11-casestudy.webp 1000w, {{asset('/public')}}/assets/img/new-case-study/xl-myfab11-casestudy.webp 1400w" width="636" height="461" alt="MyFab11">
                                    </div>
                                    <div class="col-12 cardTextSection p-lg-4 p-3">
                                        <div class="row mx-0">
                                            <div class="col-12 fs-lg-20 fs-18 fw-600 text-center text-dark">
                                                MyFab11
                                            </div>
                                            <div class="col-12 px-0 pt-lg-3 pt-2">
                                                <div class="row mx-0 align-items-center justify-content-center gap-3">
                                                    <a href="https://apk.myfab11.com/myfab11.apk" class="col-auto cardBtn text-decoration-none" target="_blank">
                                                        <div class="row g-2 align-items-center">
                                                            <div class="col-auto iconOuter p-0">
                                                                <img src="{{asset('/public')}}/assets/img/new-case-study/tagiconandroid.webp" class="h-auto" width="19" height="23" alt="Android">
                                                            </div>
                                                            <div class="col-auto fs-lg-16 fs-15 fw-600 cardBtnText">
                                                                Android
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="https://myfab11.com/" class="col-auto cardBtn text-decoration-none" target="_blank">
                                                        <div class="row g-2 align-items-center">
                                                            <div class="col-auto iconOuter p-0">
                                                                <img src="{{asset('/public')}}/assets/img/new-case-study/tagiconwebsite.webp" width="19" height="20" alt="Website">
                                                            </div>
                                                            <div class="col-auto fs-lg-16 fs-15 fw-600 text-theme1">
                                                                Website
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card caseCard">
                                <div class="card-body row mx-0">
                                    <div class="col-12 imgOuter p-0">
                                        <img src="{{asset('/public')}}/assets/img/new-case-study/xl-propira-casestudy.webp" srcset="{{asset('/public')}}/assets/img/new-case-study/m-propira-casestudy.webp 700w, {{asset('/public')}}/assets/img/new-case-study/t-propira-casestudy.webp 1000w, {{asset('/public')}}/assets/img/new-case-study/xl-propira-casestudy.webp 1200w" width="636" height="461" alt="Propia">
                                    </div>
                                    <div class="col-12 cardTextSection p-lg-4 p-3">
                                        <div class="row mx-0">
                                            <div class="col-12 fs-lg-20 fs-18 fw-600 text-center text-dark">
                                                Propira
                                            </div>
                                            <div class="col-12 px-0 pt-lg-3 pt-2">
                                                <div class="row mx-0 align-items-center justify-content-center gap-3">
                                                    {{-- <a href="" class="col-auto cardBtn text-decoration-none" target="_blank">
                                                        <div class="row g-2 align-items-center">
                                                            <div class="col-auto iconOuter">
                                                                <img src="{{asset('/public')}}/assets/img/new-case-study/tagiconandroid.webp" width="12" height="20" alt="Android">
                                                            </div>
                                                            <div class="col-auto fs-lg-16 fs-15 fw-600 cardBtnText">
                                                                Android
                                                            </div>
                                                        </div>
                                                    </a> --}}
                                                    <a href="https://www.propira.com/" class="col-auto cardBtn text-decoration-none" target="_blank">
                                                        <div class="row g-2 align-items-center">
                                                            <div class="col-auto iconOuter p-0">
                                                                <img src="{{asset('/public')}}/assets/img/new-case-study/tagiconwebsite.webp" width="19" height="20" alt="Website">
                                                            </div>
                                                            <div class="col-auto fs-lg-16 fs-15 fw-600 text-theme1">
                                                                Website
                                                            </div>
                                                        </div>
                                                    </a>
                                                    {{-- <a href="" class="col-auto cardBtn text-decoration-none" target="_blank">
                                                        <div class="row g-2 align-items-center">
                                                            <div class="col-auto iconOuter">
                                                                <img src="{{asset('/public')}}/assets/img/new-case-study/tagiconios.webp" alt="iOS">
                                                            </div>
                                                            <div class="col-auto fs-lg-16 fs-15 fw-600 text-dark">
                                                                iOS
                                                            </div>
                                                        </div>
                                                    </a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 text-center pt-md-5 pt-4 pb-2">
                    <a href="javascript:;" class="btn btn-theme3 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-1 px-4">
                        <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- case study end --}}

    {{-- testimonial new section --}}
    <div class="container-fluid overflow-hidden newTesimonialSection position-relative">
        <div class="container newTesimonialSectionInner h-100 position-relative zi-1 py-4 py-lg-5 py-xl-0">
            <div class="row h-100 justify-content-center">
                <div class="col-lg-10 col-xl-4">
                    <div class="row align-items-center h-100">
                        <div class="col-12">
                            <div class="row">
                                <h3 class="d-none invisible">Why Our Client Love Us?</h3>
                                <div class="col-12 px-0 heading fs-md-14 fs-12 left text-dark text-center text-xl-start"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Why Our Client  <br class="d-sm-none d-xl-block"><b> Love Us?</b></span></div>
                                <div class="col-12 fs-md-17 fs-sm-15 fs-14 text-dark px-0 py-3 text-center text-xl-start">Our global clients are elemental to our success story. We pride ourselves on exceptional service & retention. No matter how small or big your project, we assure you the highest level of dedication to deliver upon your expectations. See what our clients have to say about working with team IMG Global Infotech.                                </div>
                                <div class="col-xl-auto text-center text-xl-start px-0 d-none d-xl-block">
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 text-white fs-lg-14 fs-12 fw-600 my-3 px-lg-4 py-2 px-3">
                                        <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 testimonialCol">
                    <div class="row">
                        <div class="col-12">
                            <div class="row mx-0 testiomnialCarousel owl-carousel">
                                <div class="col-12 testimonialCard">
                                    <div class="row align-items-center">
                                        <div class="col-auto testimonialUserImgCol">
                                            <div class="testimonialUserImg rounded-circle overflow-hidden">
                                                <img src="{{asset('/public')}}/assets/img/new-testimonial/xl-arpit-jain.webp" srcset="{{asset('/public')}}/assets/img/new-testimonial/m-arpit-jain.webp 700w, {{asset('/public')}}/assets/img/new-testimonial/t-arpit-jain.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/xl-arpit-jain.webp 1200w" class="w-100 h-100" width="300" height="300" alt="Mr-Arpit-Jain">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row bg-white mx-0">
                                                <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-600">Mr. Arpit Jain</div>
                                                <div class="col-12 userDes fs-xl-17 fs-lg-15  fs-13 text-dark">Samarpan International</div>
                                                <div class="col-12 userLocation fs-xl-17 fs-lg-15  fs-13 text-dark fw-600 d-flex align-items-center">
                                                    <img src="{{asset('/public')}}/assets/img/new-testimonial/locationicon.webp" class="h-16px w-11px me-1" width="11" height="16" alt="location-icon">
                                                    <span>India</span>
                                                </div>
                                                <div class="col-12 userMessage fs-xl-17 fs-md-15 fs-sm-15 fs-14 text-dark mt-3">They developed my company's Website and helped in driving Website Traffic which in turn reached customers faster. Neeraj Sir & their team has always listened to all the issues and queries.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 testimonialCard">
                                    <div class="row align-items-center">
                                        <div class="col-auto testimonialUserImgCol">
                                            <div class="testimonialUserImg rounded-circle overflow-hidden">
                                                <img src="{{asset('/public')}}/assets/img/new-testimonial/xl-avatar.webp" srcset="{{asset('/public')}}/assets/img/new-testimonial/m-avatar.webp 700w, {{asset('/public')}}/assets/img/new-testimonial/t-avatar.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/xl-avatar.webp 1200w"  class="w-100 h-100" width="300" height="300" alt="Dr-Subhash-Chandra">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row bg-white mx-0">
                                                <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-600">Dr. Subhash Chandra</div>
                                                <div class="col-12 userDes fs-xl-17 fs-lg-15  fs-13 text-dark">Mount Litera Zee School</div>
                                                <div class="col-12 userLocation fs-xl-17 fs-lg-15 fs-13 text-dark fw-600 d-flex align-items-center">
                                                    <img src="{{asset('/public')}}/assets/img/new-testimonial/locationicon.webp" class="h-16px w-11px me-1" width="11" height="16" alt="location-icon">
                                                    <span>India</span>
                                                </div>
                                                <div class="col-12 userMessage fs-xl-17 fs-md-15 fs-sm-15 fs-14 text-dark mt-3">As a part of mount litera zee school, I would like to thanks IMG Global Infotech to build such an impressive website that would help to gain visibility in front of parents as well as students.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 testimonialCard">
                                    <div class="row align-items-center">
                                        <div class="col-auto testimonialUserImgCol">
                                            <div class="testimonialUserImg rounded-circle overflow-hidden">
                                                <img src="{{asset('/public')}}/assets/img/new-testimonial/xl-sanjay-sharma.webp" srcset="{{asset('/public')}}/assets/img/new-testimonial/m-sanjay-sharma.webp 700w, {{asset('/public')}}/assets/img/new-testimonial/t-sanjay-sharma.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/xl-sanjay-sharma.webp 1200w" class="w-100 h-100" width="300" height="300" alt="Mr-Sanjay-Sharma">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row bg-white mx-0">
                                                <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-600">Mr. Sanjay Sharma</div>
                                                <div class="col-12 userDes fs-xl-17 fs-lg-15  fs-13 text-dark">JPRC Hospital</div>
                                                <div class="col-12 userLocation fs-xl-17 fs-lg-15 fs-13 text-dark fw-600 d-flex align-items-center">
                                                    <img src="{{asset('/public')}}/assets/img/new-testimonial/locationicon.webp" class="h-16px w-11px me-1" width="11" height="16" alt="location-icon">
                                                    <span>India</span>
                                                </div>
                                                <div class="col-12 userMessage fs-xl-17 fs-md-15 fs-sm-15 fs-14 text-dark mt-3">After searching a lot, we found them via my relative and it is really a good thing for me. They are really professional and co-operative. my account manager Mr. Lokesh is keen to help me in every possible manner. I strongly recommend other people for the same era of services.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-auto text-center text-xl-start px-0 d-xl-none mt-2">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 text-white fs-lg-14 fs-12 fw-600 my-3 px-lg-4 py-2 px-3">
                                <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- latest blog section -->
    <div class="container-fluid insights position-relative overflow-hidden">
        <div class="container position-relative zi-1 py-md-5 py-4">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center">
                        <h3 class="d-none invisible">Latest Blogs</h3>
                        <div class="col heading fs-md-14 fs-12 left mb-sm-0 mb-3"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Latest <b> Blogs</b></span></div>
                        <div class="col-auto d-sm-block d-none">
                            <a href="{{asset('/blog')}}" class="btn btn-theme3 fs-xxl-13 fs-11 fw-600 py-2 px-4">
                                <span class="d-block"><span>View All Blogs</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 h-100">
                    <div class="row align-items-start">
                        <div class="col-12">
                            <div class="row">
                              <div class="col-12 h-100 px-0 pt-2">
                                    <div class="row align-items-start mt-md-3 mt-2">
                                            <div class="col-12">
                                                <div class="row blog_slider owl-carousel">

                                                         <a href="https://www.imgglobalinfotech.com/blog/web-development-services-outsourcing-all-you-need-to-know" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/Web-Development-Services-Outsourcing-All-you-Need-to-Know.avif" class="img-fluid" alt="Web Development Services Outsourcing: All You Need To Know" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-600 py-2">
                                                                   <span class="text-theme3 me-2">May 30, 2023</span> 
                                                                   <span> By Lokesh Saini</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-600 lanth-text lanth-text">Web Development Services Outsourcing: All You Need To Know</div>
                                                           </div>
                                                        </a> 

                                                        <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-a-flutter-app" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/How-Much-Does-It-Cost-To-Develop-A-Flutter-App.avif" class="img-fluid" alt="How Much Does It Cost To Develop A Flutter App" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-600 py-2">
                                                                   <span class="text-theme3 me-2">May 25, 2023</span> 
                                                                   <span> By Lokesh Saini</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-600 lanth-text lanth-text">How Much Does It Cost To Develop A Flutter App?</div>
                                                           </div>
                                                        </a> 


                                                     <a href="https://www.imgglobalinfotech.com/blog/doctor-on-demand-mobile-application-development-cost-and-features" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/Doctor-On-Demand-Mobile-Application-Development-Overall-Cost-and-Features.webp" class="img-fluid" alt="Doctor On-Demand Mobile Application Development- Overall Cost And Features" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-600 py-2">
                                                                   <span class="text-theme3 me-2">May 23, 2023</span> 
                                                                   <span> By Lokesh Saini</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-600 lanth-text lanth-text">Doctor On-Demand Mobile Application Development- Overall Cost And Features</div>
                                                           </div>
                                                     </a> 

                                                     <a href="https://www.imgglobalinfotech.com/blog/10-best-real-estate-application-for-buyers-sellers" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/10-Best-Real-Estate-Application-For-Buyers-Sellers-in-2023.webp" class="img-fluid" alt="10 Best Real Estate Application For Buyers & Sellers In 2023" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-600 py-2">
                                                                   <span class="text-theme3 me-2">May 19, 2023</span> 
                                                                   <span> By Lokesh Saini</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-600 lanth-text lanth-text">10 Best Real Estate Application For Buyers & Sellers In 2023</div>
                                                           </div>
                                                     </a> 

                                                    <a href="https://www.imgglobalinfotech.com/blog/fuel-delivery-mobile-app-development" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/On-Demand-Fuel-Delivery-Mobile-App-Development-in-2023.webp" class="img-fluid" alt="On-Demand Fuel Delivery Mobile App Development In 2023" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-600 py-2">
                                                                   <span class="text-theme3 me-2">May 16, 2023</span> 
                                                                   <span> By Lokesh Saini</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-600 lanth-text lanth-text">On-Demand Fuel Delivery Mobile App Development In 2023</div>
                                                           </div>
                                                     </a> 

                                                <a href="https://www.imgglobalinfotech.com/blog/top-15-celebrity-look-alike-apps" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/Top-15-Celebrity-Look-Alike-Apps-2023.webp" class="img-fluid" alt="Top 15 Celebrity Look-Alike Apps 2023: Features, App Ideas, & Development" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-600 py-2">
                                                                   <span class="text-theme3 me-2">May 10, 2023</span> 
                                                                   <span> By Lokesh Saini</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-600 lanth-text lanth-text">Top 15 Celebrity Look-Alike Apps 2023: Features, App Ideas, & Development</div>
                                                           </div>
                                                     </a> 



                                                    <a href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-food-delivery-app-development" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/The-Ultimate-Guide-to-Food-Delivery-App-Development-Right-Tech-Stack-and-Features.webp" class="img-fluid" alt="The Ultimate Guide To Food Delivery App Development" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-600 py-2">
                                                                   <span class="text-theme3 me-2">May 09, 2023</span> 
                                                                   <span> By Lokesh Saini</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-600 lanth-text lanth-text">The Ultimate Guide To Food Delivery App Development: [Right Tech Stack And Features]</div>
                                                           </div>
                                                     </a> 

                                                  <a href="https://www.imgglobalinfotech.com/blog/how-to-build-a-mobile-app-from-scratch" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/step-By-Step-Process-on-How-to-Build-a-Mobile-App-from-Scratch.png" class="img-fluid" alt="Step By Step Process on How to Build a Mobile App from Scratch" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-600 py-2">
                                                                   <span class="text-theme3 me-2">May 03, 2023</span> 
                                                                   <span> By Lokesh Saini</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-600 lanth-text lanth-text">Step By Step Process On How To Build A Mobile App From Scratch </div>
                                                           </div>
                                                     </a> 
                                                    <a href="https://www.imgglobalinfotech.com/blog/time-and-cost-to-develop-fantasy-cricket-app-like-myteam11-and-howzat" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                            <div class="row mx-1 py-3 bg-white">
                                                                <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                 <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto"  
                                                                 data-src="{{asset('/public')}}/assets/img/blog-section/time-and-Cost-to-Develop-Fantasy-Mobile-App-like-Myteam11-and-Howzatt.webp" class="img-fluid" alt="time-and-Cost-to-Develop-Fantasy-Mobile-App-like-Myteam11-and-Howzatt" width="298" height="170" >
                                                                 </div>
                                                                <div class="col-12 fs-14 text-muted fw-600 py-2">
                                                                    <span class="text-theme3 me-2">Apr 21, 2023</span> 
                                                                    <span> By Lokesh Saini</span>
                                                                </div>
                                                                <div class="col-12 fs-14 fw-600 lanth-text lanth-text">Time and Cost to Develop Fantasy Cricket App like Myteam11 and Howzat </div>
                                                            </div>
                                                      </a> 
                                                    <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-app-development-like-my11circle-and-myfab11" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                       <div class="row mx-1 py-3 bg-white">
                                                          <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                          <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto"  
                                                          data-src="{{asset('/public')}}/assets/img/blog-section/fantasy-Cricket-App-Development-like-Mycircle11-and-Myfab11.webp" class="img-fluid" alt="fantasy-Cricket-App-Development-like-Mycircle11-and-Myfab11" width="298" height="170" >
                                                          </div>
                                                          <div class="col-12 fs-14 text-muted fw-600 py-2">
                                                             <span class="text-theme3 me-2">Apr 12, 2023</span> 
                                                             <span> By Lokesh Saini</span>
                                                          </div>
                                                          <div class="col-12 fs-14 fw-600 lanth-text lanth-text">Fantasy Cricket App Development like My11Circle and Myfab11
                                                          </div>
                                                       </div>
                                                    </a>  

                                                     <a href="https://www.imgglobalinfotech.com/blog/readymade-fantasy-cricket-app-development-cost" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white rounded">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                             <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto"  
                                                             data-src="{{asset('/public')}}/assets/img/blog-section/readymade-Fantasy-Cricket-App-Development-Cost-A-Complete-Guide.webp" class="img-fluid" alt="readymade-Fantasy-Cricket-App-Development-Cost-A-Complete-Guide" width="298" height="170" >
                                                             </div>
                                                            <div class="col-12 fs-14 text-muted fw-600 py-2">
                                                                <span class="text-theme3 me-2">Apr 03, 2023</span> 
                                                                <span> By Lokesh Saini</span>
                                                            </div>
                                                            <div class="col-12 fs-14 fw-600 lanth-text lanth-text">Readymade Fantasy Cricket App Development Cost- [A Complete Guide]
                                                            </div>
                                                        </div>
                                                    </a>

                                                  <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-app-development-for-ipl-2023" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white rounded">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                             <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto"  
                                                             data-src="{{asset('/public')}}/assets/img/blog-section/Fantasy-Cricket-App-Development-for-IPL-2023.webp" class="img-fluid" alt="Fantasy-Cricket-App-Development-for-IPL-2023" width="298" height="170" >
                                                             </div>
                                                            <div class="col-12 fs-14 text-muted fw-600 py-2">
                                                                <span class="text-theme3 me-2">Feb 21, 2023</span> 
                                                                <span> By Lokesh Saini</span>
                                                            </div>
                                                            <div class="col-12 fs-14 fw-600 lanth-text lanth-text">Fantasy Cricket App Development For IPL 2023
                                                            </div>
                                                        </div>
                                                    </a>

                                                  
                                                </div>
                                            </div> 
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="col-12 d-sm-none d-block pt-4">
                    <a href="{{asset('/blog')}}" class="btn btn-theme3 fs-xxl-13 fs-11 fw-600 py-2 px-4 w-100">
                        <span class="d-block"><span>View All Blogs</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                    </a>
                </div>
				
				 <div id="contactWithUss"></div>
            </div>
        </div>
    </div>



    <!-- get-in-touch section -->
    <div class="container-fluid get-in-touch position-relative">
        <div class="container py-md-5 py-4 position-relative zi-1">
            <div class="row">
                <div class="col-12 h-100">
                    <div class="row align-items-start">
                        <div class="col-12 d-xl-none d-block">
                            <div class="row mx-0">
                                <h3 class="d-none invisible">Lets talk about your project!</h3>
                                <div class="col-12 heading fs-md-14 fs-12 left text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Lets talk about <b> your project!</b></span></div>
                            </div>
                        </div>
                        <div class="col-xl-6 left_form_part position-relative pt-xl-0 pt-4">
                            <div class="row bg-white py-4 px-3 left_bg_part">
                                <div class="col-12 p-0">
                                    <div class="from-right-block rows">
                                        <form method="post" id="feedInput" id="contactForm" name="contactForm" class="row gx-4 homeContactFormValidation" novalidate>
                                            @csrf
                                            <input type="hidden" id="ajxURL" value="{{asset('/contact_action')}}" />
                                            <input type="hidden" id="reUrl" value="{{asset('/thankyou.php')}}" />
                                            <div class="py-md-2 py-2 col-md-6 ">
                                                <div class="form-floating">
                                                    <input type="text" name="contactname" class="form-control rounded-0 fs-md-16 fs-14" id="contactname" placeholder="Enter Full Name" required>
                                                    <label class="fw-600 fs-md-16 fs-14" for="contactname"> Name <label class="text-danger">* </label></label>
                                                    <div class="invalid-feedback fs-12">Please Enter Full Name.</div>
                                                </div>
                                            </div>
                                            <div class="py-md-2 py-2 col-md-6 ps-0">
                                                <!-- <div class="row">
                                                   <div class="col-md-3 col-3 pe-md-0 ps-4">
                                                      <input type="text" id="phonecode" class="form-select form-control mobile_code" name="name">
                                                        
                                                    </div>
                                                    <div class="col-md-9 col-9 ps-0">
                                                        <div class="form-floating">
                                                          <input type="tel" name="contactnumber" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control rounded-0 fs-md-16 fs-14 border border-left" id="phoneNumber" placeholder="Enter Phone Number" required>
                                                            <label class="fw-600 fs-md-16 fs-14" for="phoneNumber">Mobile Number <label class="text-danger">* </label></label>
                                                            <div class="invalid-feedback fs-12">Please Enter a Valid Phone Number.</div>
                                                        </div>
                                                    </div>
                                               </div> -->

                                               <div class="row mx-0">
                                        <div class="col-4 pe-0">
                                            <select class="form-select rounded-0 fw-400" name="phonecode" id="contactphonecode" aria-label="Default select example" style="padding: 0.375rem 0.25rem 0.375rem 0.75rem !important;">
                                            <option value="IN +91" selected="selected"> IN +91</option>
                                       <option value="US +1">US +1</option>
                                       <option value="AF +93">AF +93</option>
                                       <option value="AL +355">AL +355</option>
                                       <option value="DZ +213">DZ +213</option>
                                       <option value="AS +1-684">AS +1-684</option>
                                       <option value="AD +376">AD +376</option>
                                       <option value="AO +244">AO +244</option>
                                       <option value="AI +1-264">AI +1-264</option>
                                       <option value="AQ +672">AQ +672</option>
                                       <option value="AG +1-268">AG +1-268</option>
                                       <option value="AR +54">AR +54</option>
                                       <option value="AM +374">AM +374</option>
                                       <option value="AW +297">AW +297</option>
                                       <option value="AU +61">AU +61</option>
                                       <option value="AT +43">AT +43</option>
                                       <option value="AZ +994">AZ +994</option>
                                       <option value="BS +1-242">BS +1-242</option>
                                       <option value="BH +973">BH +973</option>
                                       <option value="BD +880">BD +880</option>
                                       <option value="BB +1-246">BB +1-246</option>
                                       <option value="BY +375">BY +375</option>
                                       <option value="BE +32">BE +32</option>
                                       <option value="BZ +501">BZ +501</option>
                                       <option value="BJ +229">BJ +229</option>
                                       <option value="BM +1-441">BM +1-441</option>
                                       <option value="BT +975">BT +975</option>
                                       <option value="BO +591">BO +591</option>
                                       <option value="BA +387">BA +387</option>
                                       <option value="BW +267">BW +267</option>
                                       <option value="BR +55">BR +55</option>
                                       <option value="IO +246">IO +246</option>
                                       <option value="VG +1-284">VG +1-284</option>
                                       <option value="BN +673">BN +673</option>
                                       <option value="BG +359">BG +359</option>
                                       <option value="BF +226">BF +226</option>
                                       <option value="BI +257">BI +257</option>
                                       <option value="KH +855">KH +855</option>
                                       <option value="CM +237">CM +237</option>
                                       <option value="CA +1">CA +1</option>
                                       <option value="CV +238">CV +238</option>
                                       <option value="KY +1-345">KY +1-345</option>
                                       <option value="CF +236">CF +236</option>
                                       <option value="TD +235">TD +235</option>
                                       <option value="CL +56">CL +56</option>
                                       <option value="CN +86">CN +86</option>
                                       <option value="CX +61">CX +61</option>
                                       <option value="CC +61">CC +61</option>
                                       <option value="CO +57">CO +57</option>
                                       <option value="KM +269">KM +269</option>
                                       <option value="CK +682">CK +682</option>
                                       <option value="CR +506">CR +506</option>
                                       <option value="HR +385">HR +385</option>
                                       <option value="CU +53">CU +53</option>
                                       <option value="CW +599">CW +599</option>
                                       <option value="CY +357">CY +357</option>
                                       <option value="CZ +420">CZ +420</option>
                                       <option value="CD +243">CD +243</option>
                                       <option value="DK +45">DK +45</option>
                                       <option value="DJ +253">DJ +253</option>
                                       <option value="DM +1-767">DM +1-767</option>
                                       <option value="DO +1-809, 1-829, 1-849">DO +1-809, 1-829, 1-849</option>
                                       <option value="TL +670">TL +670</option>
                                       <option value="EC +593">EC +593</option>
                                       <option value="EG +20">EG +20</option>
                                       <option value="SV +503">SV +503</option>
                                       <option value="GQ +240">GQ +240</option>
                                       <option value="ER +291">ER +291</option>
                                       <option value="EE +372">EE +372</option>
                                       <option value="ET +251">ET +251</option>
                                       <option value="FK +500">FK +500</option>
                                       <option value="FO +298">FO +298</option>
                                       <option value="FJ +679">FJ +679</option>
                                       <option value="FI +358">FI +358</option>
                                       <option value="FR +33">FR +33</option>
                                       <option value="PF +689">PF +689</option>
                                       <option value="GA +241">GA +241</option>
                                       <option value="GM +220">GM +220</option>
                                       <option value="GE +995">GE +995</option>
                                       <option value="DE +49">DE +49</option>
                                       <option value="GH +233">GH +233</option>
                                       <option value="GI +350">GI +350</option>
                                       <option value="GR +30">GR +30</option>
                                       <option value="GL +299">GL +299</option>
                                       <option value="GD +1-473">GD +1-473</option>
                                       <option value="GU +1-671">GU +1-671</option>
                                       <option value="GT +502">GT +502</option>
                                       <option value="GG +44-1481">GG +44-1481</option>
                                       <option value="GN +224">GN +224</option>
                                       <option value="GW +245">GW +245</option>
                                       <option value="GY +592">GY +592</option>
                                       <option value="HT +509">HT +509</option>
                                       <option value="HN +504">HN +504</option>
                                       <option value="HK +852">HK +852</option>
                                       <option value="HU +36">HU +36</option>
                                       <option value="IS +354">IS +354</option>
                                       <option value="ID +62">ID +62</option>
                                       <option value="IR +98">IR +98</option>
                                       <option value="IQ +964">IQ +964</option>
                                       <option value="IE +353">IE +353</option>
                                       <option value="IM +44-1624">IM +44-1624</option>
                                       <option value="IL +972">IL +972</option>
                                       <option value="IT +39">IT +39</option>
                                       <option value="CI +225">CI +225</option>
                                       <option value="JM +1-876">JM +1-876</option>
                                       <option value="JP +81">JP +81</option>
                                       <option value="JE +44-1534">JE +44-1534</option>
                                       <option value="JO +962">JO +962</option>
                                       <option value="KZ +7">KZ +7</option>
                                       <option value="KE +254">KE +254</option>
                                       <option value="KI +686">KI +686</option>
                                       <option value="XK +383">XK +383</option>
                                       <option value="KW +965">KW +965</option>
                                       <option value="KG +996">KG +996</option>
                                       <option value="LA +856">LA +856</option>
                                       <option value="LV +371">LV +371</option>
                                       <option value="LB +961">LB +961</option>
                                       <option value="LS +266">LS +266</option>
                                       <option value="LR +231">LR +231</option>
                                       <option value="LY +218">LY +218</option>
                                        </select>
                                            </div>
                                            <div class="col-8 ps-0">
                                            <div class="form-floating">
                                                <input type="tel" name="contactnumber" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control rounded-0 " id="contactphoneNumber" placeholder="Enter Phone Number" required>
                                                <label class="fw-600" for="contactphoneNumber">Mobile Number <label class="text-danger">* </label></label>
                                                <div class="invalid-feedback fs-12">Please Enter a Valid Phone Number.</div>
                                            </div>
                                            </div>
                                        </div>
                                            </div>
                                            <div class="py-md-2 py-2 col-md-12">
                                                <div class="form-floating">
                                                    <input type="email" name="contactemail" class="form-control rounded-0 fs-md-16 fs-14" id="contactemailID" placeholder="Enter Email ID" >
                                                    <label class="fw-600 fs-md-16 fs-14" for="contactemailID">Email ID (Optional)</label>
                                                    <div class="invalid-feedback fs-12">Please Enter a Valid Email ID.</div>
                                                </div>
                                            </div>
                                          
                                            <div class="py-md-2 py-2 col-md-12 lg-mb-4 mb-2">
                                                <div class="form-floating">
                                                    <select name="requirement" required="" class="form-control rounded-0 pt-2 fw-600">
                                                    <option value="">Looking For <label class="text-danger">* </label> </option>
                                                    <option value="Fantasy Cricket App Development">Fantasy Cricket App Development</option>
                                                    <option value="Fantasy Sports App Development">Fantasy Sports App Development</option>
                                                    <option value="Fantasy Football App Development">Fantasy Football App Development</option>
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
                                                   
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-floating">
                                                    <input type="text" name="type" class="form-control rounded-0" id="typemessage" placeholder="Wirte a Message" required >
                                                    <label class="fw-600 fs-md-16 fs-14" for="Requierment"> Wirte a Message</label> 
                                                        <div class="invalid-feedback fs-12">Please Enter a Valid Type Message.</div> 
                                                    </div>
                                            </div> 
                                           

                                            <div class="col-sm-auto col-12 align-self-center pt-4">
                                                <button type="btn" id="conBtn" class="btn btn-theme2 fs-xxl-13 fs-11 fw-600 py-xxl-2 py-2 px-4 w-xl-auto w-100">
                                                    <span class="d-block"><span>Send Now</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 position-relative ps-xl-5 ps-3">
                            <div class="sparater-block w-xl-1px w-100 h-xl-100 h-1px left-xl-30px left-0px top-xl-0 top-30px">
                                <span class="fw-600 left-xl-n24px left-0 right-xl-auto right-0 mx-auto mt-n4">OR</span>
                            </div>
                            <div class="row mx-0 ms-xl-4 ms-n1 pd-xl-0 pd-lg-0 pd-md-0 pt-xl-0 pt-lg-0 pt-5">
                                <div class="col-12 heading fs-md-14 fs-12 left text-white d-xl-grid d-none mb-3"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Lets talk about <b> your project!</b></span></div>
                                <div class="col-12 px-0 mb-3">
                                    <div class="emailid-block rows">
                                        <a href="mailto:info@imgglobalinfotech.com" class="transition text-decoration-none wave-1 my-1 w-100 rounded position-relative" tabindex="-1">
                                            <i class="imgl img-envelope position-absolute left-22px top-23px w-28px h-39px fs-md-32 fs-sm-28 fs-26 text-theme3"></i> <span class="small-text rows fs-md-15 fs-sm-14 fs-12">mail to our sales department</span>
                                            <span class="large-text rows fs-md-15 fs-sm-14 fs-14">info@imgglobalinfotech.com</span>
                                            <div class="d-none invisible">info@imgglobalinfotech.com</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="emailid-block skype_block rows">
                                        <a href="skype:kunwar.neeraj.rajput?call" class="transition text-decoration-none wave-1 mb-2 w-100 rounded position-relative" tabindex="-1">
                                            <i class="imgb img-skype position-absolute left-22px top-23px w-28px h-39px fs-md-32 fs-sm-28 fs-26 text-theme1"></i> <span class="small-text rows fs-md-15 fs-sm-14 fs-12">Our Skype Id</span>
                                            <span class="large-text rows fs-md-15 fs-sm-14 fs-14">live:kunwar.neeraj.rajput</span>
                                            <div class="d-none invisible">live:kunwar.neeraj.rajput</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 px-0">
                                    <div class="listing-block rows mt-2">
                                        <div class="fs-md-16 fs-sm-15 fs-14 text-white">&amp; What you will get:</div>
                                        <ul class="bluts ps-0 mb-0">
                                            <li class="fs-md-15 fs-sm-14 fs-13">On-call inquiry assistance</li>
                                            <li class="fs-md-15 fs-sm-14 fs-13">Project consulting by experts</li>
                                            <li class="fs-md-15 fs-sm-14 fs-13 mb-0">Detailed project estimation</li>
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

    <!-- Modal -->
    <div class="modal fade contactModal" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered mt-md-5 mt-1 mb-5">
       <form method="post" id="connectForm" name="connectForm" class="modal-content cricketApp" novalidate>
          @csrf
          <input type="hidden" class="ajxURL" value="{{asset('/digitalform_action')}}" />
          <input type="hidden" id="reUrl" value="{{asset('/thankyou.php')}}" />
          <input type="hidden" name="type" value="Fantasy Cricket App Development" />
          <div class="modal-header align-items-start">
             <div class="modal-title fw-600" id="exampleModalLabel">
                <div class="col-lg-12 col-md-12 col-12 mb-lg-0 mb-md-0 pb-md-1 px-4">
                   <div class="row align-items-center">
                      <div class="col heading fs-md-14 fs-12 left text-white"><span class="fs-xl-22 fs-lg-23 fs-md-19 fs-17">Get Appointment With <b> Our Experts</b></span></div>
                   </div>
                </div>
             </div>
             <!-- <button type="button" class="btn-close opacity-100 position-relative top-10px right-20px bg-white rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button> -->
             <button type="button" class="btn-close opacity-100 position-relative top-10px right-20px bg-white rounded-pill close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
          </div>
          <div class="modal-body p-0">
             <div class="container-fluid contact-with-us-section position-relative overflow-hidden h-100">
                <div class="container position-relative zi-1 h-100">
                   <div class="row align-items-center border border-5 rounded p-lg-3 p-md-4 pt-4 border-white align-items-center h-100">
                      <div class="col-lg-12 col-md-12 col-12">
                         <div class="row gx-md-3 gx-3 gy-md-3 gy-3">
                            <div class="col-md-12">
                               <div class="form-floating">
                                  <input type="text" name="name" class="form-control rounded-0" id="name" placeholder="Enter Full Name" required>
                                  <label class="fw-600" for="name">Name <label class="text-danger">* </label></label>
                                  <div class="invalid-feedback fs-12">Please Enter Full Name. </div>
                               </div>
                            </div>
                            <div class="col-md-12">
                                  <div class="row">
                                      <div class="col-4 pe-0">
                                          <select class="form-select rounded-0 fw-400" name="phonecode" id="phonecode" aria-label="Default select example" style="padding: 0.375rem 0.25rem 0.375rem 0.75rem !important;">
                                          <option value="IN +91" selected="selected"> IN +91</option>
                                     <option value="US +1">US +1</option>
                                     <option value="AF +93">AF +93</option>
                                     <option value="AL +355">AL +355</option>
                                     <option value="DZ +213">DZ +213</option>
                                     <option value="AS +1-684">AS +1-684</option>
                                     <option value="AD +376">AD +376</option>
                                     <option value="AO +244">AO +244</option>
                                     <option value="AI +1-264">AI +1-264</option>
                                     <option value="AQ +672">AQ +672</option>
                                     <option value="AG +1-268">AG +1-268</option>
                                     <option value="AR +54">AR +54</option>
                                     <option value="AM +374">AM +374</option>
                                     <option value="AW +297">AW +297</option>
                                     <option value="AU +61">AU +61</option>
                                     <option value="AT +43">AT +43</option>
                                     <option value="AZ +994">AZ +994</option>
                                     <option value="BS +1-242">BS +1-242</option>
                                     <option value="BH +973">BH +973</option>
                                     <option value="BD +880">BD +880</option>
                                     <option value="BB +1-246">BB +1-246</option>
                                     <option value="BY +375">BY +375</option>
                                     <option value="BE +32">BE +32</option>
                                     <option value="BZ +501">BZ +501</option>
                                     <option value="BJ +229">BJ +229</option>
                                     <option value="BM +1-441">BM +1-441</option>
                                     <option value="BT +975">BT +975</option>
                                     <option value="BO +591">BO +591</option>
                                     <option value="BA +387">BA +387</option>
                                     <option value="BW +267">BW +267</option>
                                     <option value="BR +55">BR +55</option>
                                     <option value="IO +246">IO +246</option>
                                     <option value="VG +1-284">VG +1-284</option>
                                     <option value="BN +673">BN +673</option>
                                     <option value="BG +359">BG +359</option>
                                     <option value="BF +226">BF +226</option>
                                     <option value="BI +257">BI +257</option>
                                     <option value="KH +855">KH +855</option>
                                     <option value="CM +237">CM +237</option>
                                     <option value="CA +1">CA +1</option>
                                     <option value="CV +238">CV +238</option>
                                     <option value="KY +1-345">KY +1-345</option>
                                     <option value="CF +236">CF +236</option>
                                     <option value="TD +235">TD +235</option>
                                     <option value="CL +56">CL +56</option>
                                     <option value="CN +86">CN +86</option>
                                     <option value="CX +61">CX +61</option>
                                     <option value="CC +61">CC +61</option>
                                     <option value="CO +57">CO +57</option>
                                     <option value="KM +269">KM +269</option>
                                     <option value="CK +682">CK +682</option>
                                     <option value="CR +506">CR +506</option>
                                     <option value="HR +385">HR +385</option>
                                     <option value="CU +53">CU +53</option>
                                     <option value="CW +599">CW +599</option>
                                     <option value="CY +357">CY +357</option>
                                     <option value="CZ +420">CZ +420</option>
                                     <option value="CD +243">CD +243</option>
                                     <option value="DK +45">DK +45</option>
                                     {{-- <option value="DJ +253">DJ +253</option>
                                     <option value="DM +1-767">DM +1-767</option>
                                     <option value="DO +1-809, 1-829, 1-849">DO +1-809, 1-829, 1-849</option>
                                     <option value="TL +670">TL +670</option>
                                     <option value="EC +593">EC +593</option>
                                     <option value="EG +20">EG +20</option>
                                     <option value="SV +503">SV +503</option>
                                     <option value="GQ +240">GQ +240</option>
                                     <option value="ER +291">ER +291</option>
                                     <option value="EE +372">EE +372</option>
                                     <option value="ET +251">ET +251</option>
                                     <option value="FK +500">FK +500</option>
                                     <option value="FO +298">FO +298</option>
                                     <option value="FJ +679">FJ +679</option>
                                     <option value="FI +358">FI +358</option>
                                     <option value="FR +33">FR +33</option>
                                     <option value="PF +689">PF +689</option>
                                     <option value="GA +241">GA +241</option>
                                     <option value="GM +220">GM +220</option>
                                     <option value="GE +995">GE +995</option>
                                     <option value="DE +49">DE +49</option>
                                     <option value="GH +233">GH +233</option>
                                     <option value="GI +350">GI +350</option>
                                     <option value="GR +30">GR +30</option>
                                     <option value="GL +299">GL +299</option>
                                     <option value="GD +1-473">GD +1-473</option>
                                     <option value="GU +1-671">GU +1-671</option>
                                     <option value="GT +502">GT +502</option>
                                     <option value="GG +44-1481">GG +44-1481</option>
                                     <option value="GN +224">GN +224</option>
                                     <option value="GW +245">GW +245</option>
                                     <option value="GY +592">GY +592</option>
                                     <option value="HT +509">HT +509</option>
                                     <option value="HN +504">HN +504</option>
                                     <option value="HK +852">HK +852</option>
                                     <option value="HU +36">HU +36</option>
                                     <option value="IS +354">IS +354</option>
                                     <option value="ID +62">ID +62</option>
                                     <option value="IR +98">IR +98</option>
                                     <option value="IQ +964">IQ +964</option>
                                     <option value="IE +353">IE +353</option>
                                     <option value="IM +44-1624">IM +44-1624</option>
                                     <option value="IL +972">IL +972</option>
                                     <option value="IT +39">IT +39</option>
                                     <option value="CI +225">CI +225</option>
                                     <option value="JM +1-876">JM +1-876</option>
                                     <option value="JP +81">JP +81</option>
                                     <option value="JE +44-1534">JE +44-1534</option>
                                     <option value="JO +962">JO +962</option>
                                     <option value="KZ +7">KZ +7</option>
                                     <option value="KE +254">KE +254</option>
                                     <option value="KI +686">KI +686</option>
                                     <option value="XK +383">XK +383</option>
                                     <option value="KW +965">KW +965</option>
                                     <option value="KG +996">KG +996</option>
                                     <option value="LA +856">LA +856</option>
                                     <option value="LV +371">LV +371</option>
                                     <option value="LB +961">LB +961</option>
                                     <option value="LS +266">LS +266</option>
                                     <option value="LR +231">LR +231</option>
                                     <option value="LY +218">LY +218</option> --}}
                                     {{-- <option value="LI +423">LI +423</option>
                                     <option value="LT +370">LT +370</option>
                                     <option value="LU +352">LU +352</option>
                                     <option value="MO +853">MO +853</option>
                                     <option value="MK +389">MK +389</option>
                                     <option value="MG +261">MG +261</option>
                                     <option value="MW +265">MW +265</option>
                                     <option value="MY +60">MY +60</option>
                                     <option value="MV +960">MV +960</option>
                                     <option value="ML +223">ML +223</option>
                                     <option value="MT +356">MT +356</option>
                                     <option value="MH +692">MH +692</option>
                                     <option value="MR +222">MR +222</option>
                                     <option value="MU +230">MU +230</option>
                                     <option value="YT +262">YT +262</option>
                                     <option value="MX +52">MX +52</option>
                                     <option value="FM +691">FM +691</option>
                                     <option value="MD +373">MD +373</option>
                                     <option value="MC +377">MC +377</option>
                                     <option value="MN +976">MN +976</option>
                                     <option value="ME +382">ME +382</option>
                                     <option value="MS +1-664">MS +1-664</option>
                                     <option value="MA +212">MA +212</option>
                                     <option value="MZ +258">MZ +258</option>
                                     <option value="MM +95">MM +95</option>
                                     <option value="NA +264">NA +264</option>
                                     <option value="NR +674">NR +674</option>
                                     <option value="NP +977">NP +977</option>
                                     <option value="NL +31">NL +31</option>
                                     <option value="AN +599">AN +599</option>
                                     <option value="NC +687">NC +687</option>
                                     <option value="NZ +64">NZ +64</option>
                                     <option value="NI +505">NI +505</option>
                                     <option value="NE +227">NE +227</option>
                                     <option value="NG +234">NG +234</option>
                                     <option value="NU +683">NU +683</option>
                                     <option value="KP +850">KP +850</option>
                                     <option value="MP +1-670">MP +1-670</option>
                                     <option value="NO +47">NO +47</option>
                                     <option value="OM +968">OM +968</option>
                                     <option value="PK +92">PK +92</option>
                                     <option value="PW +680">PW +680</option>
                                     <option value="PS +970">PS +970</option>
                                     <option value="PA +507">PA +507</option>
                                     <option value="PG +675">PG +675</option>
                                     <option value="PY +595">PY +595</option>
                                     <option value="PE +51">PE +51</option>
                                     <option value="PH +63">PH +63</option>
                                     <option value="PN +64">PN +64</option>
                                     <option value="PL +48">PL +48</option>
                                     <option value="PT +351">PT +351</option>
                                     <option value="PR +1-787, 1-939">PR +1-787, 1-939</option>
                                     <option value="QA +974">QA +974</option>
                                     <option value="CG +242">CG +242</option>
                                     <option value="RE +262">RE +262</option>
                                     <option value="RO +40">RO +40</option>
                                     <option value="RU +7">RU +7</option>
                                     <option value="RW +250">RW +250</option>
                                     <option value="BL +590">BL +590</option>
                                     <option value="SH +290">SH +290</option>
                                     <option value="KN +1-869">KN +1-869</option>
                                     <option value="LC +1-758">LC +1-758</option>
                                     <option value="MF +590">MF +590</option>
                                     <option value="PM +508">PM +508</option>
                                     <option value="VC +1-784">VC +1-784</option>
                                     <option value="WS +685">WS +685</option>
                                     <option value="SM +378">SM +378</option>
                                     <option value="ST +239">ST +239</option>
                                     <option value="SA +966">SA +966</option>
                                     <option value="SN +221">SN +221</option>
                                     <option value="RS +381">RS +381</option>
                                     <option value="SC +248">SC +248</option>
                                     <option value="SL +232">SL +232</option>
                                     <option value="SG +65">SG +65</option>
                                     <option value="SX +1-721">SX +1-721</option>
                                     <option value="SK +421">SK +421</option>
                                     <option value="SI +386">SI +386</option>
                                     <option value="SB +677">SB +677</option>
                                     <option value="SO +252">SO +252</option>
                                     <option value="ZA +27">ZA +27</option>
                                     <option value="KR +82">KR +82</option>
                                     <option value="SS +211">SS +211</option>
                                     <option value="ES +34">ES +34</option>
                                     <option value="LK +94">LK +94</option>
                                     <option value="SD +249">SD +249</option>
                                     <option value="SR +597">SR +597</option>
                                     <option value="SJ +47">SJ +47</option>
                                     <option value="SZ +268">SZ +268</option>
                                     <option value="SE +46">SE +46</option>
                                     <option value="CH +41">CH +41</option>
                                     <option value="SY +963">SY +963</option>
                                     <option value="TW +886">TW +886</option>
                                     <option value="TJ +992">TJ +992</option>
                                     <option value="TZ +255">TZ +255</option>
                                     <option value="TH +66">TH +66</option>
                                     <option value="TG +228">TG +228</option>
                                     <option value="TK +690">TK +690</option>
                                     <option value="TO +676">TO +676</option>
                                     <option value="TT +1-868">TT +1-868</option>
                                     <option value="TN +216">TN +216</option>
                                     <option value="TR +90">TR +90</option>
                                     <option value="TM +993">TM +993</option>
                                     <option value="TC +1-649">TC +1-649</option>
                                     <option value="TV +688">TV +688</option>
                                     <option value="VI +1-340">VI +1-340</option>
                                     <option value="UG +256">UG +256</option>
                                     <option value="UA +380">UA +380</option>
                                     <option value="AE +971">AE +971</option>
                                     <option value="GB +44">GB +44</option>
                                     <option value="UY +598">UY +598</option>
                                     <option value="UZ +998">UZ +998</option>
                                     <option value="VU +678">VU +678</option>
                                     <option value="VA +379">VA +379</option>
                                     <option value="VE +58">VE +58</option>
                                     <option value="VN +84">VN +84</option>
                                     <option value="WF +681">WF +681</option>
                                     <option value="EH +212">EH +212</option>
                                     <option value="YE +967">YE +967</option>
                                     <option value="ZM +260">ZM +260</option>
                                     <option value="ZW +263">ZW +263</option> --}}
                                      </select>
                                          </div>
                                          <div class="col-8 ps-0">
                                          <div class="form-floating">
                                              <input type="tel" name="tel" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control rounded-0 " id="phoneNumber" placeholder="Enter Phone Number" required>
                                              <label class="fw-600" for="phoneNumber">Mobile Number <label class="text-danger">* </label></label>
                                              <div class="invalid-feedback fs-12">Please Enter a Valid Phone Number.</div>
                                          </div>
                                          </div>
                                      </div>
                              </div>
                            <div class="col-md-12">
                               <div class="form-floating">
                                  <input type="email" name="email" class="form-control rounded-0" id="emailID" placeholder="Enter Email ID">
                                  <label class="fw-600" for="emailID">Email ID (Optional)</label>
                                  {{-- <div class="invalid-feedback fs-12">Please Enter a Valid Email ID.</div> --}}
                               </div>
                            </div>
                           

                            <div class="col-md-12 ">
                                  <div class="form-floating">
                                          <select name="type"required="" id="type" class="form-control rounded-0 pt-2 fw-400">
                                              <option value="">Looking For *</option>
                                              <option value="Fantasy Cricket App Development">Fantasy Cricket App Development</option>
                                              <option value="Fantasy Sports App Development">Fantasy Sports App Development</option>
                                              <option value="Fantasy Football App Development">Fantasy Football App Development</option>
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

                              <div class="col-md-12">
                                  <div class="form-floating">
                                      <input type="text" name="type" class="form-control rounded-0" id="contactMessage" placeholder="Wirte a Message" required >
                                      <label class="fw-600 fs-md-16 fs-14" for="contactMessage"> Wirte a Message</label> 
                                          <div class="invalid-feedback fs-12">Please Enter a Valid Type Message.</div> 
                                      </div>
                              </div> 
                           </div>
                      </div>
                   </div>
                </div>
             </div> 
          </div>
          <div class="modal-footer px-5 pb-4">
             <button type="submit" id="digitalBTN" class="btn btn-theme3 fs-md-14 fs-13 fw-600 py-2 px-md-4 px-3 w-100">
                <span class="d-block"><span>Submit</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
             </button>
          </div>
        </form>
        </div>
    </div>

@endsection
@push('scripts')
<ul style="display:none;"itemscope itemtype="http://www.schema.org/SiteNavigationElement">
  <li itemprop="name"><a itemprop="url" href="https://www.imgglobalinfotech.com/fantasy-sports-app-development.php">Fantasy Sports App Development</a></li>
  <li itemprop="name"><a itemprop="url" href="https://www.imgglobalinfotech.com/fantasy-cricket-app-development.php">Fantasy Cricket App Development</a></li>
  <li itemprop="name"><a itemprop="url" href="https://www.imgglobalinfotech.com/fantasy-football-app-development.php">Fantasy Football App Development</a></li>
  <li itemprop="name"><a itemprop="url" href="https://www.imgglobalinfotech.com/mobile-app-development.php">Mobile App Development</a></li>
  <li itemprop="name"><a itemprop="url" href="https://www.imgglobalinfotech.com/ecommerce-website-development.php">Ecommerce Development</a></li>
  <li itemprop="name"><a itemprop="url" href="https://www.imgglobalinfotech.com/blog">IMG Blogs</a></li>
  <li itemprop="name"><a itemprop="url" href="https://www.imgglobalinfotech.com/about-us.php">About us</a></li>
</ul>
<script src="{{asset('/public')}}/assets/js/contact-us.min.js"></script>
<script src="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.js"></script>
<script src="{{asset('/public')}}/assets/js/index.min.js"></script>
<script src="{{asset('/public')}}/assets/js/fantasy-cricket-app-development.min.js"></script>


<script>
    $('.newAddedCarousel2').owlCarousel({
        loop: true,
        items: 3,
        margin: 20,
        nav: false,
        dots: true,
        autoplay: true,
        center: true,
        freeDrag: false,
        lazyLoad: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 1200,
        responsiveClass: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
              items: 1,
            },
            992: {
              items: 1,
            },
            1200: {
              items: 1,
          },
        },
        navText: ["", ""]
    });
</script>



<script>
    $('.testiomnialCarousel').owlCarousel({
    loop: true,
    items: 2,
    margin: 15,
    nav: false,
    dots: false,
    autoplay: true,
    center: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    smartSpeed: 2500,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
        },
        576: {
            items: 1,
            nav: false,
            dots: false,
        },
        768: {
            items: 1.5,
            nav: false,
            dots: false,
        },
        992: {
            items: 2,
            nav: false,
            dots: false,
        },
        1200: {
            items: 1,
            nav: false,
            dots: false,
        },
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});
</script>

@endpush