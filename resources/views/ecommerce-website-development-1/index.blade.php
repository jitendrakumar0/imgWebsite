@extends('main')
@push('meta')
   <!--  Title -->
   <title>Best eCommerce Web Development Company in Jaipur</title>

   <!-- Required meta tags -->
   <meta name="title" content="Best eCommerce Web Development Company in Jaipur" />
   <meta name="description" content="Custom eCommerce Solutions company in Jaipur. Grow your online store with our top-notch eCommerce Web Development services. Call Today!" />
   <meta name="keywords" content="e commerce service provider, ecommerce website development company, ecommerce website development services, ecommerce web development services, ecommerce web development company, e commerce solutions services, ecommerce portal development, ecommerce development solutions, ecommerce developer" />

   <!-- Twitter Meta -->
   <meta name="twitter:title" content="Best eCommerce Web Development Company in Jaipur">
   <meta name="twitter:description" content="Custom eCommerce Solutions company in Jaipur. Grow your online store with our top-notch eCommerce Web Development services. Call Today!">
   <meta name="twitter:image" content="{{GETFOLDERPATH()}}/ECommerce-Web-Development.webp">

   <!-- Facebook Meta -->
   <meta property="og:url" content="{{asset('/')}}ecommerce-website-development.php">
   <meta property="og:title" content="Best eCommerce Web Development Company in Jaipur">
   <meta property="og:description" content="Custom eCommerce Solutions company in Jaipur. Grow your online store with our top-notch eCommerce Web Development services. Call Today!">
   <meta property="og:image" content="{{GETFOLDERPATH()}}/ECommerce-Web-Development.webp">
   <meta property="og:image:secure_url" content="{{GETFOLDERPATH()}}/ECommerce-Web-Development.webp">



   <meta name="classification" content="e commerce service provider, ecommerce website development company, ecommerce website development services, ecommerce web development services, ecommerce web development company, e commerce solutions services, ecommerce portal development, ecommerce development solutions, ecommerce developer" />
   <link rel="canonical" href="{{asset('/')}}ecommerce-website-development.php" />
   <meta name="robots" content="noindex, nofollow" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/ecommerce-website-development-1.min.css">
 
@endpush
@section('content')

 {{-- Hero Section --}}
   @section('hero_hiddenHeading')
   Ecommerce Website Development
   @endsection('hero_hiddenHeading')
   @section('hero_heading')
   <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Ecommerce Website Design & <b>  Development</b></span>
   @endsection('hero_heading')
   @section('hero_tagline')
   We’re a digital agency that specializes in world-class ecommerce website design and mobile app solutions for platforms and businesses.
   @endsection('hero_tagline')
   @section('hero_btn')
   <div class="col-12 pt-3 text-lg-start text-center">
	   <a href="tel:+91-9694097245" class="btn btn-theme3 text-white fs-14 fw-bold my-3 py-2 px-4">
		  <span class="d-block"><span>+91 -9694097245</span> <i class="imgr ms-2 img-phone-volume position-relative bottom-n2px"></i></span>
	   </a>
	   <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 text-white fs-14 fw-bold my-3 py-2 px-4 ms-md-2">
		  <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
	   </a>
	</div>
   @endsection('hero_btn')
   @section('hero_img')
   <div class="leftside">
   <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/ecommerce-web-development.webp" alt="ecommerce-web-development"></div>
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
                     <li class="breadcrumb-item"><a class="fw-600 fs-lg-16 fs-md-15 fs-14 text-theme2 text-decoration-none" href="{{asset('/web-development.php')}}">Web Development</a></li>
                     <li class="breadcrumb-item active fw-600 fs-lg-16 fs-md-15 fs-14 text-dark" aria-current="page">ecommerce Website Development</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>


   <!-- Best Ecommerce Development Company In India section -->
   <div class="container-fluid overflow-hidden best-development-company bg-white position-relative">
      <div class="container py-lg-5 py-md-5 py-2 position-relative zi-2">
         <div class="row">
            <div class="col-12">
               <div class="row align-items-center">
                  <div class="col-lg-5 pe-lg-5 top_banner-left-part leftside">
                     <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-5 col-7 position-relative" >
                           <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/ecommerce-website-development2.webp" alt="ecommerce-website-development">

                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="row">
                        <div class="col-12">
                           <div class="row mx-0 pb-4 pt-lg-0 pt-4">
                              <h2 class="d-none invisible">Best Ecommerce Development Company in India </h2>
                              <div class="col-12 heading fs-md-14 fs-12 left text-lg-start text-md-center text-center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Best Ecommerce Development <b> Company in India  </b></span></div>
                           </div>
                        </div>
                        <div class="col-12 fw-600 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted text-lg-start text-center mt-0">Anyone looking to sell products online needs to have an ecommerce website with the motive of selling products to customers. However, amazon is a great platform to use but they charge astronomically high commission on every sale that your product makes. Therefore, it is always feasible to build your own portal which can be done through taking assistance from an eCommerce website development company in Jaipur.</div>
                         <div class="col-12 fw-600 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted text-lg-start text-center mt-3">When it comes to eCommerce website design in Jaipur, no competition can match the level of IMG. eCommerce websites are evolving at a fast pace requiring professionals to handle it by adopting latest trends and using advanced technologies. IMG possesses all the professional experts who can perform the above description with effectiveness.</div>
                          <div class="col-12 pt-3 text-lg-start text-md-center text-center mt-md-1">
                           <a href="tel:+91-9694097245" class="btn btn-theme3 text-white fs-xxl-13 fs-11 fw-bold py-xxl-2 py-1 px-lg-4 px-3 mb-xl-0 mb-3">
                              <span class="d-block"><span>let's Get Connect</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!--eCommerce Strategy section   -->
   <div class="container-fluid eCommerce-strategy-section overflow-hidden position-relative">
      <div class="container position-relative zi-2">
         <div class="row mx-0 pb-5">
            <div class="col-12">
               <div class="row align-items-center">
                 <div class="col-lg-6 pe-lg-6 p-lg-0 p-md-0 p-0">
                     <div class="row">
                        <div class="col-12">
                           <div class="row mx-0 pb-4 pt-lg-0 pt-md-0 pt-0">
                              <h2 class="d-none invisible">eCommerce Strategy </h2>
                              <div class="col-12 heading2 mb-2 fs-lg-23 fs-md-14 left"><span class="fs-lg-23 fs-md-25 fs-24">eCommerce <b> Strategy </b></span></div>
                              <div class="col-12 fs-md-17 fs-sm-15 fs-16 text-dark text-md-center text-center fw-bold p-0">“It is more important to do what is strategically right than what is immediately profitable.”</div>
                           </div>
                        </div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start mb-1">As a leading <span class="fw-900">website designing company in Delhi NCR, </span>we rely on sales driven eCommerce strategies before diving into the eCommerce space to ensure business success.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start"> <i class="imgd img-arrow-circle-right position-relative me-2"></i>Research and strategy, planning, and information architecture are all part of our eCommerce strategy session.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start"> <i class="imgd img-arrow-circle-right position-relative me-2"></i>Ensuring that your website has very easy usability for users.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start"> <i class="imgd img-arrow-circle-right position-relative me-2"></i>Making a strategy to develop an engaging shopping experience.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start"> <i class="imgd img-arrow-circle-right position-relative me-2"></i>Developing a proper content flow by drafting a sample template that talks about what content needs to be placed.</div>
                        <!-- <div class="col-12 pt-3 text-md-start text-center">
                           <a href="{{asset('contact-us.php')}}" class="get-in-touch fs-xxl-11 fs-11 py-xxl-1 py-1 px-lg-3 px-3 mb-xl-0 mb-3 text-decoration-none rounded rounded-6">
                              Get in Touch <i class="imgd img-angle-double-right position-relative bottom-n2px ms-2"></i></span>
                           </a>
                        </div> -->
                     </div>
                  </div>

                  <div class="col-lg-6 pe-lg-6">
                     <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-5 col-12 position-relative pt-5" >
                           <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/eCommerce-strategy.webp" alt="eCommerce-strategy">

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

     <!--eCommerce Strategy section   -->
     <div class="container-fluid eCommerce-strategy-section overflow-hidden position-relative">
      <div class="container position-relative zi-2">
         <div class="row mx-0 pb-5">
            <div class="col-12">
               <div class="row align-items-center">
                 <div class="col-lg-6 pe-lg-6">
                     <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-5 col-12 position-relative pt-2" >
                           <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/store.webp" alt="eCommerce-strategy">

                        </div>
                     </div>
                  </div> 
                 <div class="col-lg-6 pe-lg-6 p-lg-0 p-md-0 p-0">
                     <div class="row">
                        <div class="col-12">
                           <div class="row mx-0 pb-0 pt-lg-0 pt-md-0 pt-0 pb-lg-0">
                              <h2 class="d-none invisible">Store Management </h2>
                              <div class="col-12 heading2 mb-2 fs-lg-23 fs-md-14 left text-start p-0"><span class="fs-lg-23 fs-md-25 fs-24 p-0">Store <b> Management </b></span></div>
                              <!-- <div class="col-12 fs-md-17 fs-sm-15 fs-16 text-dark text-md-center text-center fw-bold p-0">“It is more important to do what is strategically right than what is immediately profitable.”</div> -->
                           </div>
                        </div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start mb-1">As a leading <span class="fw-900">website designing company in Delhi NCR, </span>we rely on sales driven eCommerce strategies before diving into the eCommerce space to ensure business success.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start"> <i class="imgd img-arrow-circle-right position-relative me-2"></i>Research and strategy, planning, and information architecture are all part of our eCommerce strategy session.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start"> <i class="imgd img-arrow-circle-right position-relative me-2"></i>Ensuring that your website has very easy usability for users.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start"> <i class="imgd img-arrow-circle-right position-relative me-2"></i>Making a strategy to develop an engaging shopping experience.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start"> <i class="imgd img-arrow-circle-right position-relative me-2"></i>Developing a proper content flow by drafting a sample template that talks about what content needs to be placed.</div>
                        <!-- <div class="col-12 pt-3 text-md-start text-center">
                           <a href="{{asset('contact-us.php')}}" class="get-in-touch fs-xxl-11 fs-11 py-xxl-1 py-1 px-lg-3 px-3 mb-xl-0 mb-3 text-decoration-none rounded rounded-6">
                              Get in Touch <i class="imgd img-angle-double-right position-relative bottom-n2px ms-2"></i></span>
                           </a>
                        </div> -->
                     </div>
                  </div>
                </div>
            </div>
         </div>
      </div>
   </div>

   <!--eCommerce Strategy section   -->
   <div class="container-fluid eCommerce-strategy-section overflow-hidden position-relative">
      <div class="container py-lg-5 py-md-2 pt-4 position-relative zi-2">
         <div class="row mx-0 pb-5">
            <div class="col-12">
               <div class="row align-items-center">
                 <div class="col-lg-6 pe-lg-6 p-lg-0 p-md-0 p-0">
                     <div class="row">
                     <div class="col-12">
                           <div class="row mx-0 pb-0 pt-lg-0 pt-md-0 pt-0 pb-lg-0">
                              <h2 class="d-none invisible">Cross-Device Solution</h2>
                              <div class="col-12 heading2 mb-2 fs-lg-23 fs-md-14 left text-start p-0"><span class="fs-lg-23 fs-md-25 fs-24 p-0">Cross-Device Solution </b></span></div>
                              <!-- <div class="col-12 fs-md-17 fs-sm-15 fs-16 text-dark text-md-center text-center fw-bold p-0">“It is more important to do what is strategically right than what is immediately profitable.”</div> -->
                           </div>
                        </div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start mb-1">As a leading <span class="fw-900">website designing company in Delhi NCR, </span>we rely on sales driven eCommerce strategies before diving into the eCommerce space to ensure business success.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start"> <i class="imgd img-arrow-circle-right position-relative me-2"></i>Research and strategy, planning, and information architecture are all part of our eCommerce strategy session.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start"> <i class="imgd img-arrow-circle-right position-relative me-2"></i>Ensuring that your website has very easy usability for users.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start"> <i class="imgd img-arrow-circle-right position-relative me-2"></i>Making a strategy to develop an engaging shopping experience.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-17 fs-sm-15 fs-16 text-muted text-lg-start text-start"> <i class="imgd img-arrow-circle-right position-relative me-2"></i>Developing a proper content flow by drafting a sample template that talks about what content needs to be placed.</div>
                        <!-- <div class="col-12 pt-3 text-md-start text-center">
                           <a href="{{asset('contact-us.php')}}" class="get-in-touch fs-xxl-11 fs-11 py-xxl-1 py-1 px-lg-3 px-3 mb-xl-0 mb-3 text-decoration-none rounded rounded-6">
                              Get in Touch <i class="imgd img-angle-double-right position-relative bottom-n2px ms-2"></i></span>
                           </a>
                        </div> -->
                     </div>
                  </div>

                  <div class="col-lg-6 pe-lg-6">
                     <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-5 col-12 mb-5position-relative" >
                           <img class="w-100 position-relative tz pt-5" style="--tz:90px;" src="{{GETFOLDERPATH()}}/cross-device.webp" alt="eCommerce-strategy">

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

 

   
   <!-- want to join section -->
   <div class="container-fluid want-to-join-section-2">
      <div class="container py-lg-5 py-md-3 py-3 zi-2 position-relative p-0">
         <div class="row mx-0 align-items-center gy-md-0 gy-4">
            <div class="col-lg-3 col-md-12 col-12 text-lg-start text-md-start text-center">
                <div class="col-12 fs-lg-30 fs-md-25 fs-25 text-balck fw-900 text-lg-start text-md-center text-cnter"> Acclamations</div>
                <div class="col-12 fs-lg-15 fs-md-15 fs-15 text-balck text-lg-start text-md-center text-cnter">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 text-lg-start text-md-start text-center position-relative mt-md-5 mt-5 pe-lg-5 pe-md-1 acclamations">
               <div class="col-lg-10 col-md-10 col-10 fw-900 position-absolute left-lg-n5 left-md-n0 left-n0 top-md-n50 top-sm-n85 top-n50 ps-3 pb-2 color rounded rounded-60 p-lg-2 p-md-2 p-2">
                  <img class="w-lg-25 w-md-25 w-25 tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/clutchLogo.webp" alt="clutchLogo">
                </div>
                <div class="col-12 fs-md-14 fs-15 bg-white border border-1 pt-lg-3 pt-md-3 pt-3 pb-1 ps-2 fw-600 h-60 pe-md-2">Recognized as a Top Developers india by Clutch</div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 text-lg-start text-md-start text-center position-relative mt-md-5 mt-5 pe-lg-5 pe-md-1 acclamations">
               <div class="col-lg-10 col-md-10 col-10 fw-900 position-absolute left-lg-n5 left-md-n0 left-n0 top-md-n50 top-n50 top-sm-n85 ps-3 pb-2 color rounded rounded-60 p-lg-2 p-md-2 p-2">
                  <img class="w-50 tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/goodfirmsLogo.webp" alt="goodfirmsLogo">
                </div>
                <div class="col-12 fs-md-14 fs-15 bg-white border border-1 pt-lg-3 pt-md-3 pt-3 pb-1 ps-2 fw-600 h-60 pe-md-2">Top Blockchain Development Companies in india</div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 text-lg-start text-md-start text-center position-relative mt-md-5 mt-5 pe-lg-5 pe-md-1 acclamations">
               <div class="col-lg-10 col-md-10 col-10 fw-900 position-absolute left-lg-n5 left-md-n0 left-n0 top-md-n50 top-n50 top-sm-n85 ps-3 pb-2 color rounded rounded-60 p-lg-2 p-md-2 p-2">
                  <img class="w-30 tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/yourstoryLogo.webp" alt="yourstoryLogo">
                </div>
                <div class="col-12 fs-md-14 fs-15 bg-white border border-1 pt-lg-3 pt-md-3 pt-3 pb-1 ps-2 fw-600 h-60 pe-md-2">Most trued android app development Companies</div>
            </div>
           
         </div>
      </div>
   </div>


    <!-- We work with Agile Technology section   -->
   <div class="container-fluid services  overflow-hidden position-relative">
      <div class="container py-lg-5 py-md-3 py-3 position-relative zi-9">
         <div class="row devolopment_service_tab align-items-center">
            <div class="col-md-12 ps-lg-5 pe-md-5 p-0 ">
               <div class="row mx-0 pb-3">
                  <div class="col-12 heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> We work with <b> Agile Technology </b></span></div>
                  <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 text-center mt-4">We build innovative designs using advanced technologies that are exclusively delivering best outcomes. We use these well known platforms that are PHP, Laravel, Angular.JS, React.JS, Node.JS. These platforms assure marvellous results by delivering ignite and flexible solutions for Ecommerce website design.</div>
               </div>
               <div class="row mx-0 py-4 gap-lg-4 gap-md-4 gap-3 align-items-center justify-content-center">
                  <a href="javascript:;" class="col-lg-2 col-md-2 col-sm-6 col-5 s-item wave-1  bg-white" style="--tz:20px;">
                     <div class="row">
                        <div class="col-12 border border-1 text-center"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/Angular.webp" alt="Angular"></span></div>
                     </div>
                  </a>
                  <a href="javascript:;" class="col-lg-2 col-md-2 col-sm-5 col-5 s-item wave-1  bg-white" style="--tz:20px;">
                      <div class="row">
                        <div class="col-12 border border-1 text-center"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/Php.webp" alt="Php"></span></div>
                     </div>
                  </a>
                  <a href="javascript:;" class="col-lg-2 col-md-2 col-sm-5 col-5 s-item wave-1  bg-white" style="--tz:20px;">
                      <div class="row">
                        <div class="col-12 border border-1 text-center"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/reac.webp" alt="reac"></span></div>
                     </div>
                  </a>
                  <a href="javascript:;" class="col-lg-2 col-md-2 col-sm-5 col-5 s-item wave-1  bg-white" style="--tz:20px;">
                      <div class="row">
                        <div class="col-12 border border-1 text-center"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/Laravel.webp" alt="Laravel"></span></div>
                     </div>
                  </a>
                  {{-- <a href="javascript:;" class="col-auto s-item wave-1  bg-white" style="--tz:20px;">
                     < <div class="row">
                        <div class="col border border-1"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/Magento.webp" alt="Magento"></span></div>
                     </div>
                  </a>
                  <a href="javascript:;" class="col s-item wave-1  bg-white" style="--tz:20px;">
                     <div class="row align-items-center">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-6  border border-1"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/shopify.webp" alt="shopify"></span></div>
                     </div>
                  </a> --}}
                  <a href="javascript:;" class="col-lg-2 col-md-2 col-sm-5 col-5 s-item wave-1  bg-white" style="--tz:20px;">
                        <div class="row">
                        <div class="col-12 border border-1 text-center"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/java.webp" alt="java"></span></div>
                     </div>
                  </a>
                  <a href="javascript:;" class="col-lg-2 col-md-2 col-sm-5 col-5 s-item wave-1  bg-white" style="--tz:20px;">
                     <div class="row">
                        <div class="col-12 border border-1 text-center"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/codeigniter.webp" alt="codeigniter"></span></div>
                     </div>
                  </a>
                  <a href="javascript:;" class="col-lg-2 col-md-2 col-sm-5 col-5 s-item wave-1  bg-white" style="--tz:20px;">
                      <div class="row">
                        <div class="col-12 border border-1 text-center"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/node.webp" alt="node"></span></div>
                     </div>
                  </a>
                  <!-- <a href="javascript:;" class="col-lg-2 col-md-2 col-sm-6 col-6 s-item wave-1  bg-white" style="--tz:20px;">
                         <div class="row">
                        <div class="col-12 border border-1 text-center"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/react.webp" alt="react"></span></div>
                     </div>
                  </a> -->
                   <a href="javascript:;" class="col-lg-2 col-md-2 col-sm-5 col-5 s-item wave-1  bg-white" style="--tz:20px;">
                      <div class="row">
                        <div class="col-12 border border-1 text-center"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/bootstrap.webp" alt="bootstrap"></span></div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>


   
     <!-- Industries We Serve section -->
     <div class="container-fluid overflow-hidden wework_section case-study bg-white position-relative">
        <div class="container position-relative py-lg-5 py-md-5 py-5 p-0">
           <div class="row">
                <div class="row mx-0 mb-lg-4 mb-md-4 mb-3">
                    <h2 class="d-none invisible">Industries We Serve</h2>
                    <h2 class="col-12 heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Industries <b> We Serve</b> </span></h2>
                   
                </div>
            </div>

            <div class="row mx-auto">
                <div class="col-lg-12 mt-lg-3 mt-md-3 mt-2 mb-lg-3 mb-md-3 mb-2">
                    <div class="tab-container">
                        <ul class="tabs wework-tab owl-carousel" id="navMenus">
                            <li class="tab-link current active" data-tab="demo1">
                              <div class="text-center">
                                 <div class="col-12 pe-0 mb-2">
                                    <img class="w-md-60px w-50px mx-auto" src="{{GETFOLDERPATH()}}/fantasy-sports.webp" alt="Fantasy-Sports">
                                 </div>
                                 <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-dark text-decoration-none">Fantasy Sports</div>
                              </div>
                            </li>

                            <li class="tab-link" data-tab="demo2">
                               <div class="text-center">
                                 <div class="col-12 pe-0 mb-2">
                                    <img class="w-md-60px w-50px mx-auto" src="{{GETFOLDERPATH()}}/bank.webp" alt="Banking and Finance">
                                 </div>
                                 <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-dark text-decoration-none">Banking and Finance</div>
                              </div>
                            </li>
                            <li class="tab-link" data-tab="demo3">
                            <div class="text-center">
                                 <div class="col-12 pe-0 mb-2">
                                    <img class="w-md-60px w-50px mx-auto" src="{{GETFOLDERPATH()}}/e-commerce.png" alt="e-commerce">
                                 </div>
                                 <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-dark text-decoration-none">E-commerce</div>
                              </div>
                            </li>

                            <li class="tab-link" data-tab="demo4">
                             <div class="text-center">
                                 <div class="col-12 pe-0 mb-2">
                                    <img class="w-md-60px w-50px mx-auto" src="{{GETFOLDERPATH()}}/on-demand-delivery.webp" alt="On-demand Delivery">
                                 </div>
                                 <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-dark text-decoration-none">On-demand Delivery</div>
                              </div>
                            </li>


                            <li class="tab-link" data-tab="demo5">
                              <div class="text-center">
                                 <div class="col-12 pe-0 mb-2">
                                    <img class="w-md-60px w-50px mx-auto" src="{{GETFOLDERPATH()}}/real-estate.webp" alt="Real Estate">
                                 </div>
                                 <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-dark text-decoration-none">Real Estate</div>
                              </div>
                            </li>


                            <li class="tab-link" data-tab="demo6">
                            <div class="text-center">
                                 <div class="col-12 pe-0 mb-2">
                                    <img class="w-md-60px w-50px mx-auto" src="{{GETFOLDERPATH()}}/fashion.webp" alt="Fashion">
                                 </div>
                                 <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-dark text-decoration-none">Fashion</div>
                              </div>
                            </li>


                            <li class="tab-link" data-tab="demo7">
                            <div class="text-center">
                                 <div class="col-12 pe-0 mb-2">
                                    <img class="w-md-60px w-50px mx-auto" src="{{GETFOLDERPATH()}}/healthcare.webp" alt="Healthcare">
                                 </div>
                                 <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-dark text-decoration-none">Healthcare</div>
                              </div>
                            </li>


                            <li class="tab-link" data-tab="demo8">
                            <div class="text-center">
                                 <div class="col-12 pe-0 mb-2">
                                    <img class="w-md-60px w-50px mx-auto" src="{{GETFOLDERPATH()}}/social-networking.webp" alt="social-networking">
                                 </div>
                                 <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-dark text-decoration-none">Social Networking</div>
                              </div>
                            </li>


                            <li class="tab-link" data-tab="demo9">
                            <div class="text-center">
                                 <div class="col-12 pe-0 mb-2">
                                    <img class="w-md-60px w-50px mx-auto" src="{{GETFOLDERPATH()}}/tourism.webp" alt="Tourism">
                                 </div>
                                 <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-dark text-decoration-none">Tourism</div>
                              </div>
                            </li>


                            <li class="tab-link" data-tab="demo10">
                              <div class="text-center">
                                 <div class="col-12 pe-0 mb-2">
                                    <img class="w-md-60px w-50px mx-auto" src="{{GETFOLDERPATH()}}/media-and-entertainment.webp" alt="Media and Entertainment">
                                 </div>
                                 <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-dark text-decoration-none">Media and Entertainment</div>
                              </div>
                            </li>

                            <li class="tab-link" data-tab="demo11">
                              <div class="text-center">
                                 <div class="col-12 pe-0 mb-2">
                                    <img class="w-md-60px w-50px mx-auto" src="{{GETFOLDERPATH()}}/ed-tech.webp" alt="ed-tech">
                                 </div>
                                 <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-dark text-decoration-none">Ed-Tech</div>
                              </div>
                            </li>

                            <li class="tab-link" data-tab="demo12">
                              <div class="text-center">
                                 <div class="col-12 pe-0 mb-2">
                                    <img class="w-md-60px w-50px mx-auto" src="{{GETFOLDERPATH()}}/blogchain.webp" alt="blogchain">
                                 </div>
                                 <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-dark text-decoration-none">Blockchain/NFTs</div>
                              </div>
                            </li>
                        </ul>
                     </div>
                 </div>
             </div>

                  <div class="row mx-lg-5 mx-md-5 mx-3">
                     <div class="col-lg-12">
                        <div id="demo1" class="tab-content current ">
                            <div class="row d-flex align-items-center justify-content-center mb-3">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                       <div class="row d-flex align-items-center justify-content-center ps-lg-4 ps-md-4 border border-1 shadow boxs">
                                          <div class="col-lg-6 p-md-0 mt-lg-3 mt-md-3 mt-3  mb-md-3 mb-3">
                                             <div class="ol-12 case-outer">
                                                <div class="col-12 text-align-lg-start text-align-md-center text-align-center position-relative">  
                                                      <img class="w-lg-80px w-md-80px w-50px" src="{{GETFOLDERPATH()}}/fantasy-sports.webp" alt="fantasy-sports">
                                                </div>
                                                   <div class="col-12 case-inner pd-3 pt-3">
                                                   <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-30 fs-sm-18 fs-16 lh-normal mt-2">Fantasy Sports</span></div>
                                                      <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 py-3"> We develop mobile apps that facilitate users to easily compete in fantasy sports leagues and track their real-time performance,
                                                            including all the app's essential features, like contest participation, team comparison, instant money withdrawal, etc.</div>
                                                   
                                                    <div class="col-12 pt-3 pb-3 text-lg-start text-center">
                                                      <a href="tel:+91-9694097245" class="btn btn-theme1 text-white fs-md-11 fs-10 fw-bold py-2 px-4">
                                                         <span class="d-block"><span>Contect To Experts</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                   </a>
                                                </div>
                                              </div>   
                                             </div>   
                                             </div>
                                              <div class="col-lg-6 text-center">
                                               <div class="row justify-content-md-center justify-content-md-center justify-content-center mt-lg-3 mt-md-4 mt-4 leftside d-lg-block d-md-none d-none">
                                                <img class="w-lg-60 w-md-50 w-80 position-relative " src="{{GETFOLDERPATH()}}/fantasyapp.webp" alt="fantasyapp">
                                          </div>
                                       </div>   
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>


                    <div class="col-lg-12">
								<div id="demo2" class="tab-content">
                            <div class="row d-flex align-items-center justify-content-center mb-3">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                       <div class="row d-flex align-items-center justify-content-center ps-lg-4 ps-md-4 border border-1 shadow boxs">
                                          <div class="col-lg-6 p-md-0 mt-lg-3 mt-md-3 mt-3  mb-md-3 mb-3">
                                             <div class="ol-12 case-outer">
                                                <div class="col-12 text-align-lg-start text-align-md-center text-align-center position-relative">  
                                                      <img class="w-lg-80px w-md-80px w-50px" src="{{GETFOLDERPATH()}}/bankingandFinance.webp" alt="bankingandFinance">
                                                </div>
                                                   <div class="col-12 case-inner pd-3 pt-3">
                                                   <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-30 fs-sm-18 fs-16 lh-normal mt-2">Banking and Finance</span></div>
                                                      <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 py-3"> Our team of experienced mobile app developers offers top-quality mobility solutions that may facilitate users to make payments, 
                                                         track their investments, and manage their finances.</div>
                                                   
                                                    <div class="col-12 pt-3 pb-3 text-lg-start text-center">
                                                      <a href="tel:+91-9694097245" class="btn btn-theme1 text-white fs-md-11 fs-10 fw-bold py-2 px-4">
                                                         <span class="d-block"><span>Contect To Experts</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                   </a>
                                                </div>
                                              </div>   
                                             </div>   
                                             </div>
                                              <div class="col-lg-6 text-center">
                                               <div class="row justify-content-md-center justify-content-md-center justify-content-center mt-lg-3 mt-md-4 mt-4 leftside d-lg-block d-md-none d-none">
                                                <img class="w-lg-60 w-md-50 w-80 position-relative " src="{{GETFOLDERPATH()}}/bankingandfinance-app.webp" alt="bankingandfinance">
                                          </div>
                                       </div>   
                                    </div>
                                 </div>
                            </div>
								</div>
							</div>


							<div class="col-lg-12">
								<div id="demo3" class="tab-content">
                            <div class="row d-flex align-items-center justify-content-center mb-3">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                       <div class="row d-flex align-items-center justify-content-center ps-lg-4 ps-md-4 border border-1 shadow boxs">
                                          <div class="col-lg-6 p-md-0 mt-lg-3 mt-md-3 mt-3  mb-md-3 mb-3">
                                             <div class="ol-12 case-outer">
                                                <div class="col-12 text-align-lg-start text-align-md-center text-align-center position-relative">  
                                                      <img class="w-lg-80px w-md-80px w-50px" src="{{GETFOLDERPATH()}}/e-commerce.png" alt="e-commerce">
                                                </div>
                                                   <div class="col-12 case-inner pd-3 pt-3">
                                                   <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-30 fs-sm-18 fs-16 lh-normal mt-2">E-commerce </span></div>
                                                      <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 py-3">We know that mobile apps need to be user-friendly and engaging to attract users and boost sales. So, we develop visually appealing online stores to boost your online sales. </div>
                                                   
                                                    <div class="col-12 pt-3 pb-3 text-lg-start text-center">
                                                      <a href="tel:+91-9694097245" class="btn btn-theme1 text-white fs-md-11 fs-10 fw-bold py-2 px-4">
                                                         <span class="d-block"><span>Contect To Experts</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                   </a>
                                                </div>
                                              </div>   
                                             </div>   
                                             </div>
                                              <div class="col-lg-6 text-center">
                                               <div class="row justify-content-md-center justify-content-md-center justify-content-center mt-lg-3 mt-md-4 mt-4 leftside d-lg-block d-md-none d-none">
                                                <img class="w-lg-60 w-md-50 w-80 position-relative " src="{{GETFOLDERPATH()}}/e-commerce.webp" alt="e-commerce">
                                          </div>
                                       </div>   
                                    </div>
                                 </div>
                                </div>
                             </div>
                           </div>

                        <div class="col-lg-12">
                           <div id="demo4" class="tab-content">
                                 <div class="row d-flex align-items-center justify-content-center mb-3">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                           <div class="row d-flex align-items-center justify-content-center ps-lg-4 ps-md-4 border border-1 shadow boxs">
                                                <div class="col-lg-6 p-md-0 mt-lg-3 mt-md-3 mt-3  mb-md-3 mb-3">
                                                   <div class="ol-12 case-outer">
                                                      <div class="col-12 text-align-lg-start text-align-md-center text-align-center position-relative">  
                                                            <img class="w-lg-80px w-md-80px w-50px" src="{{GETFOLDERPATH()}}/on-demand-delivery.webp" alt="on-demand-delivery">
                                                      </div>
                                                         <div class="col-12 case-inner pd-3 pt-3">
                                                         <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-30 fs-sm-18 fs-16 lh-normal mt-2">On-demand Delivery </span></div>
                                                            <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 py-3">Our professionals create robust on-demand delivery applications to meet emerging demands and facilitate users to order products, track their real-time delivery status, and get them to their doorsteps. </div>
                                                         
                                                         <div class="col-12 pt-3 pb-3 text-lg-start text-center">
                                                            <a href="tel:+91-9694097245" class="btn btn-theme1 text-white fs-md-11 fs-10 fw-bold py-2 px-4">
                                                               <span class="d-block"><span>Contect To Experts</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                         </a>
                                                      </div>
                                                   </div>   
                                                   </div>   
                                                   </div>
                                                   <div class="col-lg-6 text-center">
                                                   <div class="row justify-content-md-center justify-content-md-center justify-content-center mt-lg-3 mt-md-4 mt-4 leftside d-lg-block d-md-none d-none">
                                                      <img class="w-lg-60 w-md-50 w-80 position-relative " src="{{GETFOLDERPATH()}}/demandondelivery.webp" alt="demandondelivery">
                                                </div>
                                             </div>   
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
							
							 <div class="col-lg-12">
								<div id="demo5" class="tab-content">
                             <div class="row d-flex align-items-center justify-content-center mb-3">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                           <div class="row d-flex align-items-center justify-content-center ps-lg-4 ps-md-4 border border-1 shadow boxs">
                                                <div class="col-lg-6 p-md-0 mt-lg-3 mt-md-3 mt-3  mb-md-3 mb-3">
                                                   <div class="ol-12 case-outer">
                                                      <div class="col-12 text-align-lg-start text-align-md-center text-align-center position-relative">  
                                                            <img class="w-lg-80px w-md-80px w-50px" src="{{GETFOLDERPATH()}}/real-estate.webp" alt="real-estate">
                                                      </div>
                                                         <div class="col-12 case-inner pd-3 pt-3">
                                                         <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-30 fs-sm-18 fs-16 lh-normal mt-2">Real Estate </span></div>
                                                            <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 py-3">Our team of expert developers delivers custom real estate app development solutions to let users view property listings,
                                                         easily search for properties, and schedule viewing and on-site visits. </div>
                                                         
                                                         <div class="col-12 pt-3 pb-3 text-lg-start text-center">
                                                            <a href="tel:+91-9694097245" class="btn btn-theme1 text-white fs-md-11 fs-10 fw-bold py-2 px-4">
                                                               <span class="d-block"><span>Contect To Experts</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                         </a>
                                                      </div>
                                                   </div>   
                                                   </div>   
                                                   </div>
                                                   <div class="col-lg-6 text-center">
                                                   <div class="row justify-content-md-center justify-content-md-center justify-content-center mt-lg-3 mt-md-4 mt-4 leftside d-lg-block d-md-none d-none">
                                                      <img class="w-lg-60 w-md-50 w-80 position-relative " src="{{GETFOLDERPATH()}}/realEstateApp.webp" alt="realEstateApp">
                                                </div>
                                             </div>   
                                          </div>
                                       </div>
                                    </div>        
                             </div>
						     	</div>
							
							 <div class="col-lg-12">
								<div id="demo6" class="tab-content">
                                <div class="row d-flex align-items-center justify-content-center mb-3">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                           <div class="row d-flex align-items-center justify-content-center ps-lg-4 ps-md-4 border border-1 shadow boxs">
                                                <div class="col-lg-6 p-md-0 mt-lg-3 mt-md-3 mt-3  mb-md-3 mb-3">
                                                   <div class="ol-12 case-outer">
                                                      <div class="col-12 text-align-lg-start text-align-md-center text-align-center position-relative">  
                                                            <img class="w-lg-80px w-md-80px w-50px" src="{{GETFOLDERPATH()}}/fashion.webp" alt="fashion">
                                                      </div>
                                                         <div class="col-12 case-inner pd-3 pt-3">
                                                         <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-30 fs-sm-18 fs-16 lh-normal mt-2">Fashion</span></div>
                                                            <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 py-3">To meet your online fashion business requirements, our skilled developers build mobile apps that may allow users to
                                                    check the latest fashion trends, browse unique collections, and make purchases online.  </div>
                                                         
                                                         <div class="col-12 pt-3 pb-3 text-lg-start text-center">
                                                            <a href="tel:+91-9694097245" class="btn btn-theme1 text-white fs-md-11 fs-10 fw-bold py-2 px-4">
                                                               <span class="d-block"><span>Contect To Experts</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                         </a>
                                                      </div>
                                                   </div>   
                                                   </div>   
                                                   </div>
                                                   <div class="col-lg-6 text-center">
                                                   <div class="row justify-content-md-center justify-content-md-center justify-content-center mt-lg-3 mt-md-4 mt-4 leftside d-lg-block d-md-none d-none">
                                                      <img class="w-lg-60 w-md-50 w-80 position-relative " src="{{GETFOLDERPATH()}}/fashionApp.webp" alt="fashionApp">
                                                </div>
                                             </div>   
                                          </div>
                                       </div>
                                    </div>
                                </div>
                              </div>

                     <div class="col-lg-12">
								<div id="demo7" class="tab-content ">
                               <div class="row d-flex align-items-center justify-content-center mb-3">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                           <div class="row d-flex align-items-center justify-content-center ps-lg-4 ps-md-4 border border-1 shadow boxs">
                                                <div class="col-lg-6 p-md-0 mt-lg-3 mt-md-3 mt-3  mb-md-3 mb-3">
                                                   <div class="ol-12 case-outer">
                                                      <div class="col-12 text-align-lg-start text-align-md-center text-align-center position-relative">  
                                                            <img class="w-lg-80px w-md-80px w-50px" src="{{GETFOLDERPATH()}}/healthcare.webp" alt="healthcare">
                                                      </div>
                                                         <div class="col-12 case-inner pd-3 pt-3">
                                                         <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-30 fs-sm-18 fs-16 lh-normal mt-2">Healthcare</span></div>
                                                            <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 py-3">The healthcare mobile apps we develop let the users/patients book their doctors' appointments,
                                                       schedule meetings online, get prescriptions, check medical records, and access telemedicine services.  </div>
                                                         
                                                         <div class="col-12 pt-3 pb-3 text-lg-start text-center">
                                                            <a href="tel:+91-9694097245" class="btn btn-theme1 text-white fs-md-11 fs-10 fw-bold py-2 px-4">
                                                               <span class="d-block"><span>Contect To Experts</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                         </a>
                                                      </div>
                                                   </div>   
                                                   </div>   
                                                   </div>
                                                   <div class="col-lg-6 text-center">
                                                   <div class="row justify-content-md-center justify-content-md-center justify-content-center mt-lg-3 mt-md-4 mt-4 leftside d-lg-block d-md-none d-none">
                                                      <img class="w-lg-60 w-md-50 w-80 position-relative " src="{{GETFOLDERPATH()}}/healthcareapp.webp" alt="healthcareapp">
                                                </div>
                                             </div>   
                                          </div>
                                       </div>
                                    </div>
                               </div>
							      </div>

                     <div class="col-lg-12">
								<div id="demo8" class="tab-content ">
                           <div class="row d-flex align-items-center justify-content-center mb-3">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                           <div class="row d-flex align-items-center justify-content-center ps-lg-4 ps-md-4 border border-1 shadow boxs">
                                                <div class="col-lg-6 p-md-0 mt-lg-3 mt-md-3 mt-3  mb-md-3 mb-3">
                                                   <div class="ol-12 case-outer">
                                                      <div class="col-12 text-align-lg-start text-align-md-center text-align-center position-relative">  
                                                            <img class="w-lg-80px w-md-80px w-50px" src="{{GETFOLDERPATH()}}/social-networking.webp" alt="social-networking">
                                                      </div>
                                                         <div class="col-12 case-inner pd-3 pt-3">
                                                         <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-30 fs-sm-18 fs-16 lh-normal mt-2">Social Networking </span></div>
                                                            <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 py-3">Today, when social networking apps are expanding worldwide, we develop apps that may let users 
                                                               connect and communicate easily with their friends and family, publish their social posts, etc.  </div>
                                                         
                                                         <div class="col-12 pt-3 pb-3 text-lg-start text-center">
                                                            <a href="tel:+91-9694097245" class="btn btn-theme1 text-white fs-md-11 fs-10 fw-bold py-2 px-4">
                                                               <span class="d-block"><span>Contect To Experts</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                         </a>
                                                      </div>
                                                   </div>   
                                                   </div>   
                                                   </div>
                                                   <div class="col-lg-6 text-center">
                                                   <div class="row justify-content-md-center justify-content-md-center justify-content-center mt-lg-3 mt-md-4 mt-4 leftside d-lg-block d-md-none d-none">
                                                      <img class="w-lg-60 w-md-50 w-80 position-relative " src="{{GETFOLDERPATH()}}/socialNetworkingApp.webp" alt="socialNetworkingApp">
                                                </div>
                                             </div>   
                                          </div>
                                       </div>
                                    </div>
                               </div>
							      </div>

                     <div class="col-lg-12">
								<div id="demo9" class="tab-content">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                           <div class="row d-flex align-items-center justify-content-center ps-lg-4 ps-md-4 border border-1 shadow boxs">
                                                <div class="col-lg-6 p-md-0 mt-lg-3 mt-md-3 mt-3  mb-md-3 mb-3">
                                                   <div class="ol-12 case-outer">
                                                      <div class="col-12 text-align-lg-start text-align-md-center text-align-center position-relative">  
                                                            <img class="w-lg-80px w-md-80px w-50px" src="{{GETFOLDERPATH()}}/tourism.webp" alt="Tourism">
                                                      </div>
                                                         <div class="col-12 case-inner pd-3 pt-3">
                                                         <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-30 fs-sm-18 fs-16 lh-normal mt-2">Tourism </span></div>
                                                            <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 py-3">We provide tourism mobile apps to our clients looking for mobility solutions with content for travel destinations, options for flight and hotel booking filtering per needs, pay online, and more.</div>
                                                         
                                                         <div class="col-12 pt-3 pb-3 text-lg-start text-center">
                                                            <a href="tel:+91-9694097245" class="btn btn-theme1 text-white fs-md-11 fs-10 fw-bold py-2 px-4">
                                                               <span class="d-block"><span>Contect To Experts</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                         </a>
                                                      </div>
                                                   </div>   
                                                   </div>   
                                                   </div>
                                                   <div class="col-lg-6 text-center">
                                                   <div class="row justify-content-md-center justify-content-md-center justify-content-center mt-lg-3 mt-md-4 mt-4 leftside d-lg-block d-md-none d-none">
                                                      <img class="w-lg-60 w-md-50 w-80 position-relative " src="{{GETFOLDERPATH()}}/travelapp.webp" alt="entertainmentApp">
                                                </div>
                                             </div>   
                                          </div>
                                       </div>
                                    </div>
							           </div>

                           <div class="col-lg-12">
                              <div id="demo10" class="tab-content">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                       <div class="row d-flex align-items-center justify-content-center ps-lg-4 ps-md-4 border border-1 shadow boxs">
                                    <div class="col-lg-6 p-md-0 mt-lg-3 mt-md-3 mt-3  mb-md-3 mb-3">
                                       <div class="ol-12 case-outer">
                                          <div class="col-12 text-align-lg-start text-align-md-center text-align-center position-relative">  
                                                <img class="w-lg-80px w-md-80px w-50px" src="{{GETFOLDERPATH()}}/media-and-entertainment.webp" alt="media-and-entertainment">
                                          </div>
                                             <div class="col-12 case-inner pd-3 pt-3">
                                             <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-30 fs-sm-18 fs-16 lh-normal mt-2">Media and Entertainment </span></div>
                                                <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 py-3">Our team of professional app developers builds mobile apps that may permit users to watch TV shows, web series, the latest movies, audio tracks, video tracks, and a lot more with just a few clicks. </div>
                                             
                                             <div class="col-12 pt-3 pb-3 text-lg-start text-center">
                                                <a href="tel:+91-9694097245" class="btn btn-theme1 text-white fs-md-11 fs-10 fw-bold py-2 px-4">
                                                   <span class="d-block"><span>Contect To Experts</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                             </a>
                                          </div>
                                       </div>   
                                       </div>   
                                       </div>
                                       <div class="col-lg-6 text-center">
                                       <div class="row justify-content-md-center justify-content-md-center justify-content-center mt-lg-3 mt-md-4 mt-4 leftside d-lg-block d-md-none d-none">
                                          <img class="w-lg-60 w-md-50 w-80 position-relative " src="{{GETFOLDERPATH()}}/entertainmentApp.webp" alt="travelapp">
                                    </div>
                                 </div>   
                              </div>
                           </div>
                         </div>
							</div>

                     <div class="col-lg-12">
								<div id="demo11" class="tab-content">
                             <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                       <div class="row d-flex align-items-center justify-content-center ps-lg-4 ps-md-4 border border-1 shadow boxs">
                                    <div class="col-lg-6 p-md-0 mt-lg-3 mt-md-3 mt-3  mb-md-3 mb-3">
                                       <div class="ol-12 case-outer">
                                          <div class="col-12 text-align-lg-start text-align-md-center text-align-center position-relative">  
                                                <img class="w-lg-80px w-md-80px w-50px" src="{{GETFOLDERPATH()}}/ed-tech.webp" alt="ed-tech">
                                          </div>
                                             <div class="col-12 case-inner pd-3 pt-3">
                                             <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-30 fs-sm-18 fs-16 lh-normal mt-2">Ed-Tech </span></div>
                                                <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 py-3">Educational mobile apps we develop target attaining user needs, like access to education content, guides, videos,
                                                    online courses, progress tracking, etc., and provide a similar experience, like top ed-tech apps. </div>
                                             
                                             <div class="col-12 pt-3 pb-3 text-lg-start text-center">
                                                <a href="tel:+91-9694097245" class="btn btn-theme1 text-white fs-md-11 fs-10 fw-bold py-2 px-4">
                                                   <span class="d-block"><span>Contect To Experts</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                             </a>
                                          </div>
                                       </div>   
                                       </div>   
                                       </div>
                                       <div class="col-lg-6 text-center">
                                       <div class="row justify-content-md-center justify-content-md-center justify-content-center mt-lg-3 mt-md-4 mt-4 leftside d-lg-block d-md-none d-none">
                                          <img class="w-lg-60 w-md-50 w-80 position-relative " src="{{GETFOLDERPATH()}}/educationtechnology.webp" alt="educationtechnology">
                                    </div>
                                 </div>   
                              </div>
                           </div>
                          </div>
                     </div>

                              <div class="col-lg-12">
                                 <div id="demo12" class="tab-content">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                             <div class="row d-flex align-items-center justify-content-center ps-lg-4 ps-md-4 border border-1 shadow boxs">
                                          <div class="col-lg-6 p-md-0 mt-lg-3 mt-md-3 mt-3  mb-md-3 mb-3">
                                             <div class="ol-12 case-outer">
                                                <div class="col-12 text-align-lg-start text-align-md-center text-align-center position-relative">  
                                                      <img class="w-lg-80px w-md-80px w-50px" src="{{GETFOLDERPATH()}}/blogchain.webp" alt="ed-tech">
                                                </div>
                                                   <div class="col-12 case-inner pd-3 pt-3">
                                                   <div class="col-12 fs-md-12 fs-12 headings"><span class="col-12 text-capitalize fw-900 fs-md-30 fs-sm-18 fs-16 lh-normal mt-2">Blockchain/NFTs </span></div>
                                                      <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 py-3">Our engaging and useful Blockchain app development services are popular worldwide that let users in digital assets management, track portfolio, and buy and sell NFTs.   </div>
                                                   
                                                   <div class="col-12 pt-3 pb-3 text-lg-start text-center">
                                                      <a href="tel:+91-9694097245" class="btn btn-theme1 text-white fs-md-11 fs-10 fw-bold py-2 px-4">
                                                         <span class="d-block"><span>Contect To Experts</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                                   </a>
                                                </div>
                                             </div>   
                                             </div>   
                                             </div>
                                             <div class="col-lg-6 text-center">
                                             <div class="row justify-content-md-center justify-content-md-center justify-content-center mt-lg-3 mt-md-4 mt-4 leftside d-lg-block d-md-none d-none">
                                                <img class="w-lg-60 w-md-50 w-80 position-relative " src="{{GETFOLDERPATH()}}/block-chain.webp" alt="block-chain">
                                          </div>
                                       </div>   
                                    </div>
                                 </div>

                                      </div>
                                   </div>
                                </div>
                             </div>
                           </div>


               
     <!-- Portfolio Section -->
     <div class="container-fluid overflow-hidden bg-white new-portfolio position-relative">
         <div class="container py-md-5 py-4 position-relative ">
             <div class="row">
                <div class="row mx-0 mb-lg-4 mb-md-4 mb-3">
                    <h2 class="col-12 heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Our <b>Portfolio</b> </span></h2>
                </div>
            </div>

             <div class="row align-items-center justify-content-center owl-portfolio-slider owl-carousel mx-0">
                 <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox">
                       <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                       data-src="{{asset('/public')}}/assets/img/portfolio-section/coaching-select.webp" alt="coaching-select">
                          <div class="portfolioBoxContent">
                            <h4>Coaching Select</h4>
                            <p>Education Website</p>
                        </div>
                    </div>
                </div>
				<div class="col-lg-12 col-md-12">
                    <div class="portfolioBox ">
                     <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                       data-src="{{asset('/public')}}/assets/img/portfolio-section/sariskafuncity.webp" alt="sariskafuncity">
                         <div class="portfolioBoxContent">
                            <h4>Sariska Fun City</h4>
                            <p>Water Park Website</p>
                        </div>
                    </div>
                </div>
				<div class="col-lg-12 col-md-12 ">
                    <div class="portfolioBox ">
                      <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                       data-src="{{asset('/public')}}/assets/img/portfolio-section/emerals.webp" alt="emerals">
                             <div class="portfolioBoxContent">
                            <h4>Emerals</h4>
                            <p>Clothes Shopping Website</p>
                        </div>
                    </div>
                </div>
				<div class="col-lg-12 col-md-12 ">
                    <div class="portfolioBox">
                      <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1" 
                            data-src="{{asset('/public')}}/assets/img/portfolio-section/propira.webp" alt="propira">
                                <div class="portfolioBoxContent">
                                    <h4>Propira</h4>
                                    <p>Real Estate Website</p>
                                </div>
                         </div>
                 </div>
			    </div>
        </div>
    </div>

    <!-- E-commerce Web Development Process section start-->

          <div class="container-fluid overflow-hidden e-commrece-process position-relative py-lg-5 py-md-5 py-3">
               <div class="container">
                  <div class="row mx-0 pb-4 pt-lg-0 pt-4">
                     <h2 class="d-none invisible">E-commerce Web Development Process</h2>
                     <div class="col-12 heading fs-md-14 fs-12 text-center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-18">E-commerce Web <b> Development Process </b></span></div>
                  </div>
                  <div class="row mt-md-4 pe-lg-5 pe-md-0 justify-content-md-center">
                    <div class="w-lg-20 w-md-33 w-100 text-center rounded-5 ">
                        <div class="position-relative d-flex align-items-center justify-content-center fs-md-20 fs-15 text-uppercase fw-900 color-text1 border-2 border-start border-top border-end mb-lg-4 mb-md-4 mb-2">  
                           <span class="position-relative top-n15px bg-white rounded rounded-5 px-3 fs-md-18">Phase 1 </span> 
                        </div>
                        <div class="icon-wrapper position-relative rounded-circle d-flex align-items-center justify-content-center fs-lg-20 fs-md-20 fs-15 text-white
                          text-uppercase fw-900 bg-1">  Planing 
                        </div>
                        <div class="icon-wrapper2 text-muted fw-600 text-capitalize pt-lg-4 pt-md-4 pt-2"> Client Meeting Client Requirements
                        Analysis
                        Collect Data</div> 
                    </div>

                    <div class="w-lg-20 w-md-33 w-100 text-center rounded-5 ">
                        <div class="position-relative d-flex align-items-center justify-content-center fs-md-20 fs-15 text-uppercase fw-900 color-text2 border-2 border-start border-top border-end mb-lg-4 mb-md-4 mb-2">  
                           <span class="position-relative top-n15px bg-white rounded rounded-5 px-3 fs-md-18">Phase 2 </span> 
                        </div>
                        <div class="icon-wrapper position-relative rounded-circle d-flex align-items-center justify-content-center fs-lg-20 fs-md-20 fs-15 text-white
                          text-uppercase fw-900 bg-2"> Design 
                        </div>
                        <div class="icon-wrapper2 text-muted fw-600 text-capitalize pt-md-4 pt-2">Wireframe Layout Proto Type Design Design Signoff</div> 
                    </div>

                    <div class="w-lg-20 w-md-33 w-100 text-center rounded-5 m pt-lg-0 pt-md-0 pt-4">
                       <div class="position-relative d-flex align-items-center justify-content-center fs-md-20 fs-15 text-uppercase fw-900 color-text3 border-2 border-start border-top border-end mb-lg-4 mb-md-4 mb-2">  
                           <span class="position-relative top-n15px bg-white rounded rounded-5 px-3 fs-md-18">Phase 3 </span> 
                        </div>
                        <div class="icon-wrapper position-relative rounded-circle d-flex align-items-center justify-content-center fs-lg-20 fs-md-20 fs-15 text-white
                          text-uppercase fw-900 bg-3"> Development 
                        </div>
                        <div class="icon-wrapper2 text-muted fw-600 text-capitalize pt-md-4 pt-2"> Coding Layout Main Sections Client Feedback</div> 
                    </div>

                    <div class="w-lg-40 w-md-100 w-100 text-center rounded-5 pt-lg-0 pt-md-4 pt-4 row ">
                      <div class="position-relative d-flex align-items-center justify-content-center fs-md-20 fs-15 text-uppercase fw-900 color-text4 border-2 border-start border-top border-end mb-lg-4 mb-md-4 mb-2">  
                           <span class="position-relative top-n15px bg-white rounded rounded-5 px-3 fs-md-18">Phase 4 </span> 
                        </div>
                      <div class="w-lg-50 w-md-50 w-100 text-center rounded-5 pt-lg-0 pt-md-4 pt-4">
                      
                        <div class="icon-wrapper position-relative rounded-circle d-flex align-items-center justify-content-center fs-lg-20 fs-md-20 fs-15 text-white
                          text-uppercase fw-900 bg-4"> Launch 
                        </div>
                        <div class="icon-wrapper2 text-muted fw-600 text-capitalize pt-md-4 pt-2"> Design quality and testing approval</div> 
                    </div>

                    <div class="w-lg-50 w-md-50 w-100 text-center rounded-5 pt-lg-0 pt-md-4 pt-4 color-text5">
                      
                      <div class="icon-wrapper bg-5 position-relative rounded-circle d-flex align-items-center justify-content-center fs-lg-20 fs-md-20 fs-15 text-white
                        text-uppercase fw-900 bg-4"> MAINTENANCE 
                      </div>
                      <div class="icon-wrapper2 text-muted fw-600 text-capitalize pt-md-4 pt-2"> Maintenance And Technical Support</div> 
                  </div>
                 </div>
               </div>
              </div>
            </div>
    
   <!-- want to join section -->
   <div class="container-fluid want-to-join-section eCommerce-strategy-section py-5 zi-2 position-relative">
      <div class="container">
         <div class="row mx-0 align-items-center gy-md-0 gy-4">
            <div class="col-lg-12 col-12 text-center">
              <div class="col-12 heading2 fs-lg-35 fs-md-27 fs-25 left text-dark"> <span> Discuss Your Project With Our Team </span></div>
              <div class="col-12 fw-600 fs-md-19 fs-sm-15 fs-15 text-dark text-center py-lg-3 py-md-1">If You Need A Website, Mobile Application...Let's Meet</div>
                <div class="col-lg-12 col-12 text-center py-2">
                <a href="#0" class="btn btn-theme3 fs-md-14 fs-13 fw-bold py-1 px-md-4 px-3">
                  <span class="d-block"><span>Request a Free Demo</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
               </a>
            </div>
          </div>
        </div>
     </div>
   </div>
   
   
                           
   <!-- ecommerce services section -->
   <div class="container-fluid ecommerce_services overflow-hidden pb-md-100px padding-100px">
      <div class="container py-5 position-relative">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Reasons Why We are the Best Ecommerce Website Design Company in India</h2>
            <div class="col-12 text-white text-center" style="letter-spacing: 6px;">WHY CHOOSE US</div>
            <div class="col-12 heading fs-xl-32 fs-lg-28 fs-md-24 fs-20 center text-white"> <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Reasons Why We are the Best Ecommerce <b class="d-block">Website Design Company in India</b></span></div>
         </div>

         <div class="row">
            <div class="col-12">
               <div class="row align-items-center">
                  <div class="col-lg-7 col-12">
                     <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-12 col-12 position-relative" >
                            <div class="position-absolute left-md-60 bottom-0 zi-9 leftside">
                               <!-- <img width="187" height="173" src="{{GETFOLDERPATH()}}/cup.png" alt="cup" > -->
                             </div>
                           <img class="w-100 position-relative tz " style="--tz:90px;" src="{{GETFOLDERPATH()}}/why-choose-Us.webp" alt="why-choose-Us">
                       </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-12 p">
                     <div class="row">
                        <div class="col-12 fw-600 fs-lg-16 fs-md-16 fs-sm-16 fs-16 text-white text-lg-start text-center mt-0">The journey from nowhere to the top e-commerce website development company in Coimbatore has not been easy.</div>
                        <div class="col-12 fw-600 fs-lg-16 fs-md-16 fs-sm-16 fs-16 text-white text-lg-start text-center mt-3">We had to take challenges and overcome them. However, one thing that helped us during the process is the exceptional rangeof features that come with the online stores we develop.</div>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

        <div class="container pb-md-4 position-relative choose">  
            <div class="row align-items-center d-flex justify-content-center">
              <div class="col-lg-11 col-sm-12 col-md-11 mb-4 rounded-4">          
                <div class="row fantasy-cricket-sldier owl-carousel">
                  <div class="col-12 col-sm-12 col-md-12 mb-4 rounded-4">
                     <div class="service-box bg-white h-100 rounded shadowp-lg-4 p-md-4 p-4 rounded-4">
                        <span class="service_ico d-grid w-70px h-80px justify-content-start align-items-start rounded"><img src="{{GETFOLDERPATH()}}/fantasy-sports.webp" alt="fantasy-sports"></span>
                        <h3 class="d-none invisible">fantasy sports</h3>
                        <div class="col-12 fw-900 text-balck fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Fantasy Sports</div>
                        <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">Sites which are built to publish blogs having interactive Ui, we have the right skills and team to build the same.</div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 mb-4 rounded-4">
                     <div class="service-box bg-white h-100 rounded shadowp-lg-4 p-md-4 p-4 rounded-4">
                        <span class="service_ico d-grid w-70px h-80px justify-content-start align-items-start rounded"><img src="{{GETFOLDERPATH()}}/food-ordering.webp" alt="food-ordering"></span>
                        <h3 class="d-none invisible">food ordering</h3>
                        <div class="col-12 fw-900 text-balck fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Food Ordering</div>
                        <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">Sites which are built to publish blogs having interactive Ui, we have the right skills and team to build the same.</div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 mb-4 rounded-4">
                     <div class="service-box bg-white h-100 rounded shadowp-lg-4 p-md-4 p-4 rounded-4">
                        <span class="service_ico d-grid w-70px h-80px justify-content-start align-items-start rounded"><img src="{{GETFOLDERPATH()}}/taxi-booking.webp" alt="taxi-booking"></span>
                        <h3 class="d-none invisible">taxi-booking</h3>
                        <div class="col-12 fw-900 text-balck fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Tax -Booking</div>
                        <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">Sites which are built to publish blogs having interactive Ui, we have the right skills and team to build the same.</div>
                     </div>
                  </div>

                  <div class="col-12 col-sm-12 col-md-12 mb-12 rounded-4">
                        <div class="service-box bg-white h-100 rounded shadowp-lg-4 p-md-4 p-4 rounded-4">
                        <span class="service_ico d-grid w-70px h-80px justify-content-start align-items-start rounded"><img src="{{GETFOLDERPATH()}}/Grocery2.webp" alt="Grocery2"></span>
                        <h3 class="d-none invisible">Grocery-delivery</h3>
                        <div class="col-12 fw-900 text-balck fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Grocery Delivery</div>
                        <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">Sites which are built to publish blogs having interactive Ui, we have the right skills and team to build the same.</div>
                     </div>
                  </div>
               </div>
             </div>
           </div>
          </div>
               
   

  {{--   
   <!-- ecommerce services section -->
   <div class="container-fluid ecommerce_services2 overflow-hidden">
      <div class="container py-5 position-relative zi-9">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Benefits for Developing Ecommerce Websites</h2>
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Benefits for Developing <b> Ecommerce Websites </b></span></div>
            <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 text-center mt-4">To grab the attention of global and local audiences, an ecommerce website is the only solution for this digitised era. Removing geographical barriers and launching it to the global market is the main advantage for building an ecommerce website. Some of the other advantages are below, get their insight.</div>
         </div>
         <div class="row">
            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
               <div class="service-box text-center w-100 rounded shadow-sm bg-white">
                  <span class="service_ico d-grid mx-auto mb-3 w-100px h-100px justify-content-center align-items-center shadow rounded-pill"><img src="{{GETFOLDERPATH()}}/operational1.webp" alt="Ease in Operating"></span>
                  <h3 class="d-none invisible">Ease in Operating</h3>
                  <div class="col-12 fw-900 text-theme1 fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Ease in Operating</div>
                  <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">Model of ecommerce website design for seizing market opportunities and comparatively lesser investment including for expanding your business. Therefore you can grow and scale your business without any complexity.</div>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
               <div class="service-box text-center w-100 rounded shadow-sm bg-white">
                  <span class="service_ico d-grid mx-auto mb-3 w-100px h-100px justify-content-center align-items-center shadow rounded-pill"><img src="{{GETFOLDERPATH()}}/convenience3.webp" alt="Flexible and Convenient Approach"></span>
                  <h3 class="d-none invisible">Flexible and Convenient Approach</h3>
                  <div class="col-12 fw-900 text-theme1 fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Flexible and Convenient Approach</div>
                  <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">We build agile website designs that are convenient to customise as per requirement of your business.We use out of box tools and technologies to deliver best ecommerce website design.</div>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
               <div class="service-box text-center w-100 rounded shadow-sm bg-white">
                  <span class="service_ico d-grid mx-auto mb-3 w-100px h-100px justify-content-center align-items-center shadow rounded-pill"><img src="{{GETFOLDERPATH()}}/showcase2.webp" alt="Ease in Exhibition"></span>
                  <h3 class="d-none invisible">Ease in Exhibition</h3>
                  <div class="col-12 fw-900 text-theme1 fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Ease in Exhibition</div>
                  <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">It removes geographical barriers and enables your product to showcase at global level. It increases the reach and visibility of the target audience resulting in maximising expansion of your business with minimal cost.</div>
               </div>
            </div>
         </div>
      </div>
   </div>
  


   <!-- Why Choose Us Section -->
   <div class="container-fluid whyChooseUsSection">
      <div class="container py-md-5 py-4 position-relative zi-2">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Why Choose Us?</h2>
            <div class="col-12 heading fs-md-14 fs-12 text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Why Choose Us? <b> </b></span></div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="row justify-content-center gy-md-5 gy-3 gx-4 items">
                  <div class="col-md-5 item">
                     <div class="row justify-content-md-start text-md-start justify-content-center text-center inners">
                        <div class="col-sm-auto icons">
                           <img class="h-md-70px h-60px" src="{{GETFOLDERPATH()}}/Unique4.webp" alt="Unique Design">
                        </div>
                        <div class="col-sm">
                           <div class="row">
                              <div class="col-12 text-white fw-bolder mb-1 fs-md-17 fs-15 titles">Unique Design</div>
                              <div class="col-12 text-white fs-md-15 fs-14 descriptions">We add fun elements in your application by presenting unique design and innovative solutions with the motive to grow your fantasy sports business. Giving you a competitive edge to your application evolving it with the best interface design.</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5 item">
                     <div class="row justify-content-md-start text-md-start justify-content-center text-center inners">
                        <div class="col-sm-auto icons">
                           <img class="h-md-70px h-60px" src="{{GETFOLDERPATH()}}/delivery3.webp" alt="On-Time Delivery">
                        </div>
                        <div class="col-sm">
                           <div class="row">
                              <div class="col-12 text-white fw-bolder mb-1 fs-md-17 fs-15 titles">On-Time Delivery</div>
                              <div class="col-12 text-white fs-md-15 fs-14 descriptions">We deliver ready to use applications in real time by fulfilling all your requirements. Our expert team has requisite expertise which can result in proffering utmost feasible and power packed applications on time.</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5 item">
                     <div class="row justify-content-md-start text-md-start justify-content-center text-center inners">
                        <div class="col-sm-auto icons">
                           <img class="h-md-70px h-60px" src="{{GETFOLDERPATH()}}/hiddencharges2.webp" alt="No Hidden Charges">
                        </div>
                        <div class="col-sm">
                           <div class="row">
                              <div class="col-12 text-white fw-bolder mb-1 fs-md-17 fs-15 titles">No Hidden Charges</div>
                              <div class="col-12 text-white fs-md-15 fs-14 descriptions">Our motive is to deliver a seamless rich experience without any hurdle that is we do not put any hidden charge on our service. We build applications with trust of our clients and committed to deliver cost feasible solutions.</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5 item">
                     <div class="row justify-content-md-start text-md-start justify-content-center text-center inners">
                        <div class="col-sm-auto icons">
                           <img class="h-md-70px h-60px" src="{{GETFOLDERPATH()}}/Certified1.webp" alt="Certified Experts">
                        </div>
                        <div class="col-sm">
                           <div class="row">
                              <div class="col-12 text-white fw-bolder mb-1 fs-md-17 fs-15 titles">Certified Experts</div>
                              <div class="col-12 text-white fs-md-15 fs-14 descriptions">We possess an expert team who attained required expertise and skills that matches with the requirement of building a seamless and rich-featured application. Delivery robust and state of the art work to our clients.</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   --}}

   <!-- hire-expert Section -->
   <div class="container mb-5 mt-0 py-md-3 overflow-hidden position-relative hire-expert">
      <div class="row ps-xl-5 ps-md-5 ps-0 pe-xl-0 pe-md-5 pe-0 d-flex align-items-center justify-content-center">
        <div class="col-lg-6 col-md-12 py-4 ps-xl-5 ps-md-5">
            <div class="col-12 pt-2 text-left fs-xl-35 fs-lg-35 fs-md-24 fs-30 text-xl-start text-lg-start text-center">
                 <span class="fs-xl-35 fs-lg-35 fs-md-24 fs-30 fw-900">Get Started </span>With <span class="d-block">The Best <span class="fs-xl-35 fs-lg-35 fs-md-24 fs-30 fw-900"> e-commerce</span> </span>  Develpment Company  
             </div>
               <div class="col-12 fw-600 fs-md-16 fs-sm-16 fs-17 text-xl-start text-lg-start text-center py-md-4 py-lg-4 py-4 pe-lg-5 pe-md-5 pe-0">We offer complete eCommerce design & development services. We have 9+ years of experience providing feature-rich eCommerce websites & 
                  apps leveraging the latest technologies.</div>
             <div class="col-12 py-1 text-xl-start text-lg-start text-center">
               <a class="btn fs-20 fw-bold py-1 px-3 expert-btn text-white rounded rounded-50" href="#0"> Connect An Expert </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 pe-xl-0 pe-md-5 pe-0 col-sm-12 col-12 d-lg-block d-md-none">
            <div class="d-flex w-100 justify-content-end pt-lg-2 pt-md-5 pt-0 ps-xl-0 ps-md-5 ps-0">
            <img class="w-lg-50 w-md-50 w-100 zi-9 pt-lg-2 pt-md-5 pt-2" src="{{GETFOLDERPATH()}}/experts.webp" alt="experts">
           </div>
        </div>
     </div>
   </div>
    

   <!-- faq section -->
   <div class="container-fluid overflow-hidden bg-white faq_section position-relative py-md-5 py-4">
      <div class="portfolio-bg-layer"></div>
      <div class="container position-relative zi-2">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Frequently Asked Questions</h2>
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Frequently Asked <b> Questions </b></span></div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="accordion" id="accordionExample">
                  <div class="accordion-item mb-4 position-relative zi-2">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button fs-lg-14 fs-md-13 fs-13" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           What is eCommerce Web Development Services?
                        </button>
                     </h2>
                     <div id="collapseOne" class="position-relative accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body fw-600 fs-lg-15 fs-md-14 text-theme1 mt-lg-2 fs-14">
                           Ecommerce web development is the unique process of developing an online store or website for selling services or/and products. Ecommerce web enables a buyer to explore their services & products and buy them through a shopping cart. Ecommerce web development supports different online payment options.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item mb-4 position-relative zi-2">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button fs-lg-14 fs-md-13 fs-13 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           How much does it Cost to Develop an eCommerce Website?
                        </button>
                     </h2>
                     <div id="collapseTwo" class="position-relative accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body fw-600 fs-lg-15 fs-md-14 text-theme1 mt-lg-2 fs-14">
                           The cost of creating an eCommerce website varies based on the expectations and requirements of the clients. The cost will be low if you need simple solutions with basic functionalities and features. IMG Global Infotech provides scalable eCommerce web development solutions at a budget-friendly price.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item mb-4 position-relative zi-2">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button fs-lg-14 fs-md-13 fs-13 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           What eCommerce Services are provided by IMG Global Infotech?
                        </button>
                     </h2>
                     <div id="collapseThree" class="position-relative accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body fw-600 fs-lg-15 fs-md-14 text-theme1 mt-lg-2 fs-14">
                           Custom eCommerce website design , shopping cart development, plugin, mobile development, eCommerce app development, maintenance and support, eCommerce store optimization, e-commerce marketplace development, responsive website development, and payment gateway integration.
                        </div>
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

    
  <!-- contact with us section -->
  <div class="container-fluid contact-with-us-section position-relative overflow-hidden" id="contact-with-us-section">
      <div class="container position-relative zi-1 py-5">
         <div class="row align-items-center border border-5 rounded p-3 border-white">
            <div class="col-lg-6">
               <div class="row align-items-center">
                  <h2 class="d-none invisible">Get Appointment With Our Experts</h2>
                  <div class="col heading fs-md-14 fs-12 left text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Get Appointment With <br>Our Experts</b></span></div>
               </div>
               <div class="row">
                  <div class="col-lg-10 col-12 text-light px-0 fs-17 fw-600 mt-3">Let's create beautiful and user-friendly mobile applications together!</div>
               </div>
               <div class="row">
                  <div class="col-lg-10 col-12 text-light px-0 fs-17 fw-600 mt-3">We help to develop a successful omnichannel experience and convenient mobile strategy for all your clients and customers.</div>
               </div>
            </div>
            <div class="col-lg-6 pt-lg-0 pt-4 px-lg-2 px-0">

               <form method="post" id="feedInput" name="connectForm" class="row gx-3 gy-md-3 gy-3 homeconnectFormValidation" novalidate>
                  @csrf
                  <input type="hidden" name="type" value="Mobile App Development" required />
                  <input type="hidden" id="ajxURL" value="{{asset('/digitalform_action')}}" />
                  <input type="hidden" id="reUrl" value="{{asset('/thankyou.php')}}" />
                  <div class="col-md-5">
                     <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-0" id="name" placeholder="Enter Full Name" required>
                        <label class="fw-600" for="name">Name</label>
                        <div class="invalid-feedback fs-12">Please Enter Full Name.</div>
                     </div>
                  </div>
                  <div class="col-md-7">
                         <div class="row">
                              <div class="col-5 pe-0">
                                  <select class="form-select rounded-0  form-control " name="phonecode" aria-label="Default select example" style="padding: 0.375rem 0.25rem 0.375rem 0.75rem !important;" required>
                                     <option value="IN +91" selected="selected"> IN +91</option>
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
                                                        <option value="LI +423">LI +423</option>
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
                                                        <option value="ZW +263">ZW +263</option>
                                  </select>
                              </div>
                              <div class="col-7 ps-0">
                                       <div class="form-floating">
                                       
                                          <input type="tel" name="tel" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control rounded-0 fs-md-16 fs-14 border border-left" id="phoneNumber" placeholder="Enter Phone Number" required>
                                          <label class="fw-600 fs-md-16 fs-14" for="phoneNumber">Mobile Number <label class="text-danger">* </label></label>
                                          <div class="invalid-feedback fs-12">Please Enter a Valid Phone Number.</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                  
                              <div class="col-md-5">
                                 <div class="form-floating">
                                    <input type="email" name="email" class="form-control rounded-0" id="emailID" placeholder="Enter Email ID" >
                                    <label class="fw-600" for="emailID">Email ID</label>
                                    <div class="invalid-feedback fs-12">Please Enter a Valid Email ID.</div>
                                 </div>
                              </div>

                                 <div class="col-md-7">
                                    <div class="form-floating">
                                          <select name="requirement" required="" class="form-control rounded-0 pt-2 fw-400">
                                             <option value="">Project Brief *</option>
                                             <option value="Fantasy Cricket App Development">Fantasy Cricket App Development</option>
                                             <option value="Fantasy Sports App Development">Fantasy Sports App Development</option>
                                             <option value="Fantasy Football App Development">Fantasy Football App Development</option>
                                             <option value="Mobile App Development">Mobile App Development</option>
                                             <option value="E-commerce Development" selected="selected">E-commerce Development</option>
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
                              <input type="text" name="type" class="form-control rounded-0" id="type" placeholder="Wirte a Message" required >
                              <label class="fw-600 fs-md-16 fs-14" for="Requierment"> Wirte a Message</label> 
                                 <div class="invalid-feedback fs-12">Please Enter a Valid Type Message.</div> 
                              </div>
                     </div> 


                  <div class="col-auto align-self-center">
                     <button type="submit" id="digitalBTN" class="btn btn-theme2 fs-14 fw-bold hero_read_more_btn py-2 px-4" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                        <span class="d-block"><span>Send Now</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                     </button>
                  </div>
               </form>

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
               <h5 class="modal-title fw-bold" id="exampleModalLabel">
                  <div class="col-lg-12 col-md-12 col-12 mb-lg-0 mb-md-0 pb-md-1 px-4">
                     <div class="row align-items-center">
                        <h2 class="d-none invisible">Get Appointment With Our Experts</h2>
                        <div class="col heading fs-md-14 fs-12 left text-white"><span class="fs-xl-22 fs-lg-23 fs-md-19 fs-17">Get Appointment With <b> Our Experts</b></span></div>
                     </div>
                  </div>
               </h5>
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
                                            <option value="IN +91" value="IN +91"> IN +91</option>
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
                                                        <option value="LI +423">LI +423</option>
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
                                                        <option value="ZW +263">ZW +263</option>
                                        </select>
                                            </div>
                                            <div class="col-8 ps-0">
                                            <div class="form-floating">
                                                <input type="tel" name="tel" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control rounded-0 border border-left" id="phoneNumber" placeholder="Enter Phone Number" required>
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
                                                <option value="Mobile App Development" >Mobile App Development</option>
                                                <option value="E-commerce Development" selected="selected">E-commerce Development</option>
                                                <option value="MLM Software Development">MLM Software Development</option>
                                                <option value="Website Design" >Website Design</option>
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
                                        <input type="text" name="type" class="form-control rounded-0" id="type" placeholder="Wirte a Message" required >
                                        <label class="fw-600 fs-md-16 fs-14" for="Requierment"> Wirte a Message</label> 
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
               <button type="submit" id="digitalBTN" class="btn btn-theme3 fs-md-14 fs-13 fw-bold py-2 px-md-4 px-3 w-100">
                  <span class="d-block"><span>Submit</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
               </button>
            </div>
         </form>
      </div>
   </div>

@endsection
@push('scripts')
<script src="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.js"></script>
<script src="{{asset('/public')}}/assets/js/ecommerce-website-development-1.min.js"></script>
<script src="{{asset('/public')}}/assets/js/fantasy-sports-app-development.min.js"></script>
<script src="{{asset('/public')}}/assets/js/fantasy-cricket-app-development.min.js"></script>
<script>
const nextArrow= '<img src="public/assets/img/mobile-app-development-company/nextfeature.svg" alt="right arrow" width="30">';
const nextIcon= '<img src="public/assets/img/mobile-app-development-company/next.svg" alt="right arrow" width="30">';
$(function () {
  $('.wework-tab').owlCarousel({
        loop:true,
        autoplay: true,
        margin:10,
        dots:false,
        nav: true,
        navText:[
           
            nextIcon,
            nextArrow,        
        ],
      
        responsive: {
            0: {
              items: 2
            },
        
            600: {
              items: 3
            },
        
            1024: {
              items:7
            }
              
          }
    });
});

$(document).ready(function(){
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})
}); 
</script>
@endpush