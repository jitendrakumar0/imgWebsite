@extends('main')
@push('meta')
   <!--  Title -->
   <title>Corporate Website Design Services | Web Designing Company</title>

   <!-- Required meta tags -->
   <meta name="title" content="Corporate Website Design Services | Web Designing Company" />
   <meta name="description" content="Best corporate website design services across the globe. IMG Global Infotech is a leading web designing company that offers custom web design solutions." />
   <meta name="keywords" content="corporate website design, corporate website development, corporate website design agency, website design services" />

   <!-- Twitter Meta -->
   <meta name="twitter:title" content="Corporate Website Design Services | Web Designing Company">
   <meta name="twitter:description" content="Best corporate website design services across the globe. IMG Global Infotech is a leading web designing company that offers custom web design solutions.">
   <meta name="twitter:image" content="{{GETFOLDERPATH()}}/Corporate-Website-Design-Services.webp">

   <!-- Facebook Meta -->
   <meta property="og:url" content="{{asset('/')}}corporate-website-design.php">
   <meta property="og:title" content="Corporate Website Design Services | Web Designing Company">
   <meta property="og:description" content="Best corporate website design services across the globe. IMG Global Infotech is a leading web designing company that offers custom web design solutions.">
   <meta property="og:image" content="{{GETFOLDERPATH()}}/Corporate-Website-Design-Services.webp">
   <meta property="og:image:secure_url" content="{{GETFOLDERPATH()}}/Corporate-Website-Design-Services.webp">


   
   <meta name="classification" content="corporate website design, corporate website development, corporate website design agency, website design services" />
   <link rel="canonical" href="{{asset('/')}}corporate-website-design.php" />
   <meta name="robots" content="index, follow" />
@endpush
@push('styles')
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/corporate-website-design.min.css">
@endpush
@section('content')

   {{-- Hero Section --}}
   @section('hero_hiddenHeading')
   Corporate Website Design Services
   @endsection('hero_hiddenHeading')
   @section('hero_heading')
   <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Corporate Website <b>Design Services</b></span>
   @endsection('hero_heading')
   @section('hero_tagline')
   We transform your website into effective communication channels that deliver the best results and drive online growth. We provide web development solutions within the expected timeframe and budget. We build customized, clear, and clean websites that create lasting impressions interactively and visually for start-up, medium, and large-scale enterprises.
   @endsection('hero_tagline')
   @section('hero_btn')
   <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 text-white fs-xxl-13 fs-11 fw-bold py-xxl-2 py-1 px-lg-4 px-3 mb-xl-0 mb-3">
      <span class="d-block"><span>Get Free Consultation</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
   </a>
   @endsection('hero_btn')
   @section('hero_img')
   <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/Corporate-Website-Design-Services.webp" alt="Corporate Website Design Services">
   @endsection('hero_img')
   @include('inner-page-section.hero.index')

   <!-- bredcrumb section -->
   <div class="container-fluid overflow-hidden px-0 bredcrumb_main py-lg-3 py-md-2 py-2 d-md-block d-none">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                     <li class="breadcrumb-item"><a class="fw-600 fs-lg-16 fs-md-15 fs-14 text-theme2 text-decoration-none" href="{{asset('/')}}">Home</a></li>
                     <li class="breadcrumb-item active fw-600 fs-lg-16 fs-md-15 fs-14 text-dark" aria-current="page">Corporate Website Design</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>

   <!-- understanding-ionic-apps-section -->
   <div class="container-fluid overflow-hidden understanding-ionic-apps-section position-relative">
      <div class="container py-5 position-relative zi-2">
         <div class="row">
            <div class="col-12">
               <div class="row align-items-center">
                  <div class="col-lg-5 col-md-12 pe-lg-5 transform-vision-left-part">
                     <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-5 col-7 position-relative tilt_image_pos" style="transform-style: preserve-3d;" data-tilt="" data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500" data-tilt-reverse="true">
                           <img class="w-100  position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/Best-Corporate-Website-Development-Company-That-Delivers-Guaranteed-Results.webp" alt="Best Corporate Website Development Company That Delivers Guaranteed Results">
                           <img class="w-100  position-absolute tz" style="--tz:20px;" src="{{GETFOLDERPATH()}}/12.webp" alt="IMG Global Infotech Layer">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-12 mt-lg-0 mt-md-5 mt-5">
                     <div class="row">
                        <div class="col-12">
                           <div class="row mx-0 pb-4">
                              <h2 class="d-none invisible">Best Corporate Website Development Company That Delivers Guaranteed Results </h2>
                              <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Best Corporate Website Development Company That <b> Delivers Guaranteed Results </b></span></div>
                           </div>
                        </div>
                        <div class="col-12 fw-600 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted mt-md-3 mt-0 justify">IMG Global Infotech is the prominent & best web design services which holds professionals who deliver a professional corporate website design that effectively communicates the value proposition of your business. As the best corporate website design agency, we develop your brand image, expand your customers, increase your sales, and earn the customers' trust.</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- why choose corporate -->
   <div class="container-fluid overflow-hidden why-choose-ionic-section position-relative">
      <div class="container zi-2 position-relative py-5">
         <div class="row mx-0 pb-4">
            <h2 class="d-none invisible">What Is A Corporate Website?</h2>
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> What Is A <b> Corporate Website? </b></span></div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-12 fw-600 fs-lg-17 fs-md-15 fs-15 text-muted mt-md-3 mt-0 justify text-center">A corporate website reflects the philosophy, standard, culture, and value proposition of your company. Our corporate website development experts create a technical function and strategically designed website to showcase a strong identity to stay ahead of the competitors and incorporate a strong brand image. The corporate website design we deliver to you never fails to engage your audience and yield results.</div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- web-design-sales-drive -->
   <div class="container-fluid overflow-hidden web-design-sales-drive position-relative py-5">
      <div class="container py-lg-4 zi-2 position-relative">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Top-Notch Corporate Website Design & Development Services</h2>
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Top-Notch Corporate Website <b> Design & Development Services</b></span></div>
            <div class="col-12 fw-600 fs-lg-16 fs-md-15 fs-14 text-dark mt-2 mb-3 tz text-center">The corporate website design we deliver is developed to meet the goals and needs of your business requirements. The primary purpose of the IMG Global Infotech web development expert is to offer your corporation with a branded and professional website that will showcase your business top of your competitors. We have effective corporate website design and development services, namely</div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
               <div class="to-access-item active">
                  <div class="to-access-thumb">
                     <span class="anime"></span>
                     <div class="thumb">
                        <img src="{{GETFOLDERPATH()}}/Dominate-Mobile-And-Desktop.webp" alt="Dominate Mobile And Desktop">
                     </div>
                  </div>
                  <div class="row">
                     <h3 class="d-none invisible">Dominate Mobile And Desktop</h3>
                     <div class="col-12 fw-900 text-white mb-1 fs-lg-19 fs-md-17 fs-16 text-capitalize lh-normal tz text-center" style="--tz:30px;">Dominate Mobile And Desktop</div>
                     <div class="col-12 fw-600 fs-lg-16 fs-md-15 fs-sm-15 fs-14 text-white mt-2 mb-3 tz text-center" style="--tz:30px;">Our brand image gets fit in every type of device. Our corporate website design works on all devices, including desktop, tablet, smartphones, and other mobile phones.</div>
                     <div class="col-12 pt-3">
                        <a class="btn btn-theme3 fs-12 fw-bold hero_read_more_btn py-2 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                           <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
               <div class="to-access-item">
                  <div class="to-access-thumb">
                     <span class="anime"></span>
                     <div class="thumb">
                        <img src="{{GETFOLDERPATH()}}/Digital-Marketing-Services.webp" alt="Digital Marketing Services">
                     </div>
                  </div>
                  <div class="row">
                     <h3 class="d-none invisible">Digital Marketing Services</h3>
                     <div class="col-12 fw-900 text-white mb-1 fs-lg-19 fs-md-17 fs-16 text-capitalize lh-normal tz text-center" style="--tz:30px;">Digital Marketing Services</div>
                     <div class="col-12 fw-600 fs-lg-16 fs-md-15  fs-sm-15 fs-14 text-white mt-2 mb-3 tz text-center" style="--tz:30px;">
                        We have an energetic and smart crew of corporate website design professionals who deliver the best corporate website and lead them to success. We have many Digital Marketing Services to provide guaranteed results.
                        <div class="col-12 pt-3">
                           <a class="btn btn-theme3 fs-12 fw-bold hero_read_more_btn py-2 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                              <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
               <div class="to-access-item">
                  <div class="to-access-thumb">
                     <span class="anime"></span>
                     <div class="thumb"> <img src="{{GETFOLDERPATH()}}/Fast-&-Easy.webp" alt="Fast And Easy">
                     </div>
                  </div>
                  <div class="row">
                     <h3 class="d-none invisible">Fast And Easy</h3>
                     <div class="col-12 fw-900 text-white mb-1 fs-lg-19 fs-md-17 fs-16 text-capitalize lh-normal tz text-center" style="--tz:30px;">Fast And Easy</div>
                     <div class="col-12 fw-600 fs-lg-16 fs-md-15  fs-sm-15 fs-14 text-white mt-2 mb-3 tz text-center" style="--tz:30px;">Our corporate website development team uses the latest technology and trends to optimize codes and images so that your website gets loaded at lightning speed in mobile.</div>
                     <div class="col-12 pt-3">
                        <a class="btn btn-theme3 fs-12 fw-bold hero_read_more_btn py-2 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                           <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
               <div class="to-access-item">
                  <div class="to-access-thumb">
                     <span class="anime"></span>
                     <div class="thumb"> <img src="{{GETFOLDERPATH()}}/Secure-Data-And-Code.webp" alt="Secure Data And Code">
                     </div>
                  </div>
                  <div class="row">
                     <h3 class="d-none invisible">Secure Data And Code</h3>
                     <div class="col-12 fw-900 text-white mb-1 fs-lg-19 fs-md-17 fs-16 text-capitalize lh-normal tz text-center" style="--tz:30px;">Secure Data And Code</div>
                     <div class="col-12 fw-600 fs-lg-16 fs-md-15  fs-sm-15 fs-14 text-white mt-2 mb-3 tz text-center" style="--tz:30px;">We make use of the latest corporate web development trends, use the latest in hosting, security, and development standards to keep your data safe.</div>
                     <div class="col-12 pt-3">
                        <a class="btn btn-theme3 fs-12 fw-bold hero_read_more_btn py-2 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                           <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
               <div class="to-access-item">
                  <div class="to-access-thumb">
                     <span class="anime"></span>
                     <div class="thumb"> <img src="{{GETFOLDERPATH()}}/Catalog-And-Ecommerce-Functionality.webp" alt="Catalog And Ecommerce Functionality">
                     </div>
                  </div>
                  <div class="row">
                     <h3 class="d-none invisible">Catalog And Ecommerce Functionality</h3>
                     <div class="col-12 fw-900 text-white mb-1 fs-lg-19 fs-md-17 fs-16 text-capitalize lh-normal tz text-center" style="--tz:30px;">Catalog And Ecommerce Functionality</div>
                     <div class="col-12 fw-600 fs-lg-16 fs-md-15  fs-sm-15 fs-14 text-white mt-2 mb-3 tz text-center" style="--tz:30px;">We enable customers to choose their favorite products displayed on the Catalog mode.</div>
                     <div class="col-12 pt-3">
                        <a class="btn btn-theme3 fs-12 fw-bold hero_read_more_btn py-2 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                           <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Why Choose Portal section -->
   <div class="container-fluid px-0 overflow-hidden why_choose_portal position-relative">
      <div class="row">
         <div class="col-lg-6 col-md-12 px-0">
            <div class="why_choose_portal_left">
            </div>
         </div>
         <div class="col-lg-6 col-md-12 d-flex align-items-stretch px-0">
            <div class="why_choose_portal_right position-relative">
               <div class="row">
                  <div class="col-12">
                     <div class="row mx-0 pb-4">
                        <h2 class="d-none invisible">Why Choose IMG Global Infotech For The Best Digital Marketing Services In Jaipur?</h2>
                        <div class="col-12 heading fs-md-14 fs-12 left text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Why Do You Need A <b>Corporate Website?</b></span></div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto ps-0">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <h3 class="d-none invisible">Easy management</h3>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Easy management</div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto ps-0">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <h3 class="d-none invisible">Advanced Ecommerce capabilities</h3>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Advanced Ecommerce capabilities </div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto ps-0">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <h3 class="d-none invisible">Website credibility</h3>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Website credibility</div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto ps-0">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <h3 class="d-none invisible">Increase customers</h3>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Increase customers</div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto ps-0">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <h3 class="d-none invisible">Access to information</h3>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Access to information</div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto ps-0">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <h3 class="d-none invisible">Easier accessibility</h3>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Easier accessibility</div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto ps-0">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <h3 class="d-none invisible">Affordable</h3>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Affordable</div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto ps-0">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <h3 class="d-none invisible">Better relationship with customers</h3>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Better relationship with customers</div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto ps-0">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <h3 class="d-none invisible">Higher business values</h3>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Higher business values</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- ecommerce solutions section -->
   <div class="container-fluid overflow-hidden ecommerce_solutions position-relative">
      <div class="container py-5 position-relative zi-2">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Why Choose IMG Global Infotech As The Best Corporate Website Design Agency?</h2>
            <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Why Choose IMG Global Infotech As The Best Corporate<b> Website Design Agency? </b></span></div>
         </div>
         <div class="row">
            <div class="col-12 mb-lg-4 md-mb-3 mb-3">
               <div class="ecommerce_solutions_box">
                  <div class="row shadow mx-0 border rounded-end">
                     <div class="col-auto ps-0">
                        <span><i class="imgs img-check rounded-start text-white fs-lg-22 fs-md-19 fs-17 bg-theme1 d-flex w-50px h-100 justify-content-center align-items-center position-relative zi-2"></i></span>
                     </div>
                     <h3 class="d-none invisible">We have the best web designers who can deliver you guaranteed results.</h3>
                     <div class="col fw-bold fs-lg-18 fs-md-16 fs-15 text-dark d-flex align-items-center bg-white ms-n5 py-2 zi-0 ps-5 position-relative">
                        We have the best web designers who can deliver you guaranteed results.
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 mb-lg-4 md-mb-3 mb-3">
               <div class="ecommerce_solutions_box">
                  <div class="row shadow mx-0 border rounded-end">
                     <div class="col-auto ps-0">
                        <span><i class="imgs img-check rounded-start text-white fs-lg-22 fs-md-19 fs-17 bg-theme1 d-flex w-50px h-100 justify-content-center align-items-center position-relative zi-2"></i></span>
                     </div>
                     <h3 class="d-none invisible">We provide 360-degree solutions once after knowing the value propositions and business requirements.</h3>
                     <div class="col fw-bold fs-lg-18 fs-md-16 fs-15 text-dark d-flex align-items-center bg-white ms-n5 py-2 zi-0 ps-5 position-relative">
                        We provide 360-degree solutions once after knowing the value propositions and business requirements.
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 mb-lg-4 md-mb-3 mb-3">
               <div class="ecommerce_solutions_box">
                  <div class="row shadow mx-0 border rounded-end">
                     <div class="col-auto ps-0">
                        <span><i class="imgs img-check rounded-start text-white fs-lg-22 fs-md-19 fs-17 bg-theme1 d-flex w-50px h-100 justify-content-center align-items-center position-relative zi-2"></i></span>
                     </div>
                     <h3 class="d-none invisible">100% customer satisfaction</h3>
                     <div class="col fw-bold fs-lg-18 fs-md-16 fs-15 text-dark d-flex align-items-center bg-white ms-n5 py-2 zi-0 ps-5 position-relative">
                        100% customer satisfaction
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 mb-lg-4 md-mb-3 mb-3">
               <div class="ecommerce_solutions_box">
                  <div class="row shadow mx-0 border rounded-end">
                     <div class="col-auto ps-0">
                        <span><i class="imgs img-check rounded-start text-white fs-lg-22 fs-md-19 fs-17 bg-theme1 d-flex w-50px h-100 justify-content-center align-items-center position-relative zi-2"></i></span>
                     </div>
                     <h3 class="d-none invisible">We support you in crash recovery, fixing bugs, real-time tracking, and more.</h3>
                     <div class="col fw-bold fs-lg-18 fs-md-16 fs-15 text-dark d-flex align-items-center bg-white ms-n5 py-2 zi-0 ps-5 position-relative">
                        We support you in crash recovery, fixing bugs, real-time tracking, and more.
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 mb-lg-4 md-mb-3 mb-3">
               <div class="ecommerce_solutions_box">
                  <div class="row shadow mx-0 border rounded-end">
                     <div class="col-auto ps-0">
                        <span><i class="imgs img-check rounded-start text-white fs-lg-22 fs-md-19 fs-17 bg-theme1 d-flex w-50px h-100 justify-content-center align-items-center position-relative zi-2"></i></span>
                     </div>
                     <h3 class="d-none invisible">24/7 communication and assistance</h3>
                     <div class="col fw-bold fs-lg-18 fs-md-16 fs-15 text-dark d-flex align-items-center bg-white ms-n5 py-2 zi-0 ps-5 position-relative">
                        24/7 communication and assistance
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 mb-lg-4 md-mb-3 mb-3">
               <div class="ecommerce_solutions_box">
                  <div class="row shadow mx-0 border rounded-end">
                     <div class="col-auto ps-0">
                        <span><i class="imgs img-check rounded-start text-white fs-lg-22 fs-md-19 fs-17 bg-theme1 d-flex w-50px h-100 justify-content-center align-items-center position-relative zi-2"></i></span>
                     </div>
                     <h3 class="d-none invisible">Easier and flexible hiring option.</h3>
                     <div class="col fw-bold fs-lg-18 fs-md-16 fs-15 text-dark d-flex align-items-center bg-white ms-n5 py-2 zi-0 ps-5 position-relative">
                        Easier and flexible hiring option.
                     </div>
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
                            <a href="{{asset('/blog')}}" class="btn btn-theme3 fs-xxl-13 fs-11 fw-bold py-2 px-4">
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
                                                               <div class="col-12 fs-14 text-muted fw-bold py-2">
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
                                                               <div class="col-12 fs-14 text-muted fw-bold py-2">
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
                                                               <div class="col-12 fs-14 text-muted fw-bold py-2">
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
                                                               <div class="col-12 fs-14 text-muted fw-bold py-2">
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
                                                               <div class="col-12 fs-14 text-muted fw-bold py-2">
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
                                                               <div class="col-12 fs-14 text-muted fw-bold py-2">
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
                                                               <div class="col-12 fs-14 text-muted fw-bold py-2">
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
                                                               <div class="col-12 fs-14 text-muted fw-bold py-2">
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
                                                                <div class="col-12 fs-14 text-muted fw-bold py-2">
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
                                                          <div class="col-12 fs-14 text-muted fw-bold py-2">
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
                                                            <div class="col-12 fs-14 text-muted fw-bold py-2">
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
                                                            <div class="col-12 fs-14 text-muted fw-bold py-2">
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
                    <a href="{{asset('/blog')}}" class="btn btn-theme3 fs-xxl-13 fs-11 fw-bold py-2 px-4 w-100">
                        <span class="d-block"><span>View All Blogs</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                    </a>
                </div>
				
				 <div id="contactWithUss"></div>
            </div>
        </div>
    </div>


@endsection
@push('scripts')
   <script src="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.js"></script>
   <script src="{{asset('/public')}}/assets/js/corporate-website-design.min.js"></script>
@endpush