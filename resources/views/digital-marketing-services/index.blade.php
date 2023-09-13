@extends('main')
@push('meta')
   <!--  Title -->
   <title>Social Media Marketing Company India, SMO & SMM Services - IMG Global Infotech</title>

   <!-- Required meta tags -->
   <meta name="title" content="Social Media Marketing Company India, SMO & SMM Services - IMG Global Infotech" />
   <meta name="description" content="We are a trusted Social Media Marketing Company in India offers top-class SMO & SMM Services for your business. Improve your online sales on social media." />
   <meta name="keywords" content="digital marketing agency, digital marketing company, online marketing company, digital marketing services company" />

   <!-- Twitter Meta -->
   <meta name="twitter:title" content="Social Media Marketing Company India, SMO & SMM Services - IMG Global Infotech">
   <meta name="twitter:description" content=" We are a trusted Social Media Marketing Company in India offers top-class SMO & SMM Services for your business. Improve your online sales on social media.">
   <meta name="twitter:image" content="{{GETFOLDERPATH()}}/1.webp">

   <!-- Facebook Meta -->
   <meta property="og:url" content="{{asset('/')}}digital-marketing-services.php">
   <meta property="og:title" content="Social Media Marketing Company India, SMO & SMM Services - IMG Global Infotech">
   <meta property="og:description" content="We are a trusted Social Media Marketing Company in India offers top-class SMO & SMM Services for your business. Improve your online sales on social media.">
   <meta property="og:image" content="{{GETFOLDERPATH()}}/1.webp">
   <meta property="og:image:secure_url" content="{{GETFOLDERPATH()}}/1.webp">



   <meta name="classification" content="digital marketing agency, digital marketing company, online marketing company, digital marketing services company" />
   <link rel="canonical" href="{{asset('/')}}digital-marketing-services.php" />
   <meta name="robots" content="index, follow" />
@endpush
@push('styles')
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/digital-marketing-services.min.css">

@endpush
@section('content')


   {{-- Hero Section --}}
   @section('hero_hiddenHeading')
   Digital Marketing Services
   @endsection('hero_hiddenHeading')
   @section('hero_heading')
   <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Digital <b>Marketing Services</b></span>
   @endsection('hero_heading')
   @section('hero_tagline')
   Award-winning Digital Marketing solutions with skilled specialists who can break down the toughest online marketing challenges at cost-effective packages. We hold a proven record of increased sales, leads, and revenue from different businesses. We provide 360-degree Digital marketing solutions that make you stand ahead of your competitors.
   @endsection('hero_tagline')
   @section('hero_btn')
   <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 text-white fs-xxl-13 fs-11 fw-bold py-xxl-2 py-1 px-lg-4 px-3 mb-xl-0 mb-3">
      <span class="d-block"><span>Get Free Consultation</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
   </a>
   @endsection('hero_btn')
   @section('hero_img')
   <img src="{{GETFOLDERPATH()}}/digital-marketing-services-1.webp" class="lazy-image w-100" data-src="{{GETFOLDERPATH()}}/Digital-Marketing-Services.webp"alt="Digital-Marketing-Services" width="100" height="auto">
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
                     <li class="breadcrumb-item active fw-600 fs-lg-16 fs-md-15 fs-14 text-dark" aria-current="page">Digital Marketing Services</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>

   <!-- digital marketing gurantted section -->
   <div class="container-fluid overflow-hidden transform_vision position-relative py-5">
      <div class="container py-lg-4 position-relative zi-2">
         <div class="row">
            <div class="col-12">
               <div class="row align-items-center">
                  <div class="col-lg-5 col-md-12 pe-lg-5 transform-vision-left-part">
                     <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-5 col-7 position-relative tilt_image_pos">
                           <img src="{{GETFOLDERPATH()}}/digital-marketing-services-2.webp" class="lazy-image w-100" data-src="{{GETFOLDERPATH()}}/Digital-Marketing-Company-that-Offers-Guaranteed-Results.webp"alt="Digital Marketing Company that Offers Guaranteed Results" width="100" height="auto">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-12 mt-lg-0 mt-md-5 mt-5">
                     <div class="row">
                        <div class="col-12">
                           <div class="row mx-0 pb-4">
                              <h2 class="d-none invisible">Digital Marketing Company that Offers Guaranteed Results</h2>
                              <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Digital Marketing Company that Offers <b>Guaranteed Results</b></span></div>
                           </div>
                        </div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-15 fs-15 text-muted mt-md-3 mt-0 justify">Owning a website is not enough in today’s competitive environment. You need your users to reach you. In a space that is increasingly crowded by every industry’s competitors, peers and startups, marking your online presence requires technical knowledge of online marketing. Putting your trust in India’s leading digital marketing agency, IMG Global Infotech will drive traffic, leads and sales.</div>
                        <div class="col-12 fw-600 fs-lg-17 fs-md-15 fs-15 text-muted mt-md-3 mt-0 justify">We offer 360-degree digital marketing solutions which are build based on your industry, USPs, client portfolio and more. Get the best SEO services, PPC campaigns, Social media marketing, App store optimization and more from experts with a laser focus on client growth.</div>
                        <div class="col-12 pt-4">
                           <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 fs-md-14 fs-13 fw-bold hero_read_more_btn py-2 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                              <span class="d-block"><span>Work With Us</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Why Choose Portal section 
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
                        <h2 class="d-none invisible">What is the purpose of a Digital Marketing Campaign?</h2>
                        <div class="col-12 heading fs-md-14 fs-12 left text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> What Is The Purpose Of A <b>Digital Marketing Campaign?</b></span></div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Reaching a wider user base is possible with a well-planned digital marketing strategy</div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Identifying and connecting with target users who are more likely to use your products & services</div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Using multiple services like SEO, PPC and SMO simultaneously to create a more powerful impact</div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Increasing brand awareness, recall and loyalty with latest online tools and techniques</div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Improving the sales funnel by constantly monitoring user behavior and engagement</div>
                     </div>
                  </div>
                  <div class="col-12 mt-md-4 mt-3">
                     <div class="row align-items-center">
                        <div class="col-auto">
                           <i class="imgs img-star rounded-pill text-white fs-md-20 fs-16 bg-theme1 d-flex w-md-60px w-50px h-md-60px h-50px justify-content-center align-items-center position-relative zi-2"></i>
                        </div>
                        <div class="col fw-bold fs-xxl-18 fs-xl-18 fs-lg-16 fs-md-15 fs-15 text-theme1 bg-white ms-n5 py-md-2 py-1 zi-0 rounded ps-5 position-relative border-top border-theme1 border-4 border-bottom border-theme1 border-3">Continuously enhancing processes to meet the marketing goals of a digital marketing campaign</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->

   <!-- web-design-sales-drive -->
   <div class="container-fluid overflow-hidden web-design-sales-drive position-relative py-5" style="--bg:url({{GETFOLDERPATH()}}/bg1.webp);">
      <div class="container py-lg-4 zi-2 position-relative">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Services Offered by Our Digital Marketing Agency</h2>
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Services Offered By Our <b>Digital Marketing Agency</b></span></div>
            <div class="col-12 fw-600 fs-lg-16 fs-md-15 fs-14 text-dark mt-2 mb-3 tz text-center">At IMG Global Infotech, we work with the single aim – deliver the results demanded by our clients. Our organization focuses on dedication, collaboration and performance for every digital marketing campaign – from a stand-alone service or multiple services. OUR PREVIOUS WORK SHOWS WE CAN DELIVER! The extensive range of services at our internet marketing company is customized to the individual needs of your organization. We are here to ensure higher engagement which includes traffic, leads, and downloads.</div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-12 d-flex align-items-stretch">
               <div class="to-access-item active">
                  <div class="to-access-thumb">
                     <span class="anime"></span>
                     <div class="thumb"> <img src="{{GETFOLDERPATH()}}/Search-Engine-Optimization.webp" alt="Search Engine Optimization">
                     </div>
                  </div>
                  <div class="row">
                     <h3 class="d-none invisible">Search Engine Optimization</h3>
                     <div class="col-12 fw-900 text-white mb-1 fs-lg-19 fs-md-17 fs-16 text-capitalize lh-normal tz text-center" style="--tz:30px;">Search Engine Optimization</div>
                     <div class="col-12 fw-600 fs-lg-16 fs-md-15 fs-15 text-white mt-2 mb-3 tz text-center" style="--tz:30px;">Use the powerful search engine optimization techniques to increase the number of people visiting your site. At IMG Global Infotech, effective SEO strategies are employed to first improve search engine ranking and then ensure you maintain your position! It is one of the most cost-effective ways to increase your user base!</div>
                     <div class="col-12 pt-3">
                        <a href="{{asset('/seo-services.php')}}" class="btn btn-theme3 fs-12 fw-bold hero_read_more_btn py-2 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
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
                     <div class="thumb"> <img src="{{GETFOLDERPATH()}}/Social-Media-Optimization.webp" alt="Social Media Optimization">
                     </div>
                  </div>
                  <div class="row">
                     <h3 class="d-none invisible">Social Media Optimization</h3>
                     <div class="col-12 fw-900 text-white mb-1 fs-lg-19 fs-md-17 fs-16 text-capitalize lh-normal tz text-center" style="--tz:30px;">Social Media Optimization</div>
                     <div class="col-12 fw-600 fs-lg-16 fs-md-15  fs-sm-15 fs-14 text-white mt-2 mb-3 tz text-center" style="--tz:30px;">
                        It is not only Facebook! There are multiple channels and platforms that you can use for your social media optimization. What IMG Global Tech’s social media services does is - understand your campaign goals, followed by identifying the platforms to use and then creating strategies. A powerful strategy can increase engagement in the shortest time possible.
                        <div class="col-12 pt-3">
                           <a href="{{asset('/social-media-marketing-services.php')}}" class="btn btn-theme3 fs-12 fw-bold hero_read_more_btn py-2 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
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
                     <div class="thumb"> <img src="{{GETFOLDERPATH()}}/PPC-And-Google-Adworks-Service.webp" alt="PPC and Google Adwords Service">
                     </div>
                  </div>
                  <div class="row">
                     <h3 class="d-none invisible">PPC and Google Adwords Service</h3>
                     <div class="col-12 fw-900 text-white mb-1 fs-lg-19 fs-md-17 fs-16 text-capitalize lh-normal tz text-center" style="--tz:30px;">PPC and Google Adwords Service</div>
                     <div class="col-12 fw-600 fs-lg-16 fs-md-15  fs-sm-15 fs-14 text-white mt-2 mb-3 tz text-center" style="--tz:30px;">Pay per click and Google AdWords are online advertising tools. Using targeted keywords, PPC services and AdWords help you reach a specific audience who are more likely to give you business. The IMG Global Infotech PPC team works in individually or in tandem with SEO to drive both sales and results.</div>
                     <div class="col-12 pt-3">
                        <a href="{{asset('/pay-per-click-services.php')}}" class="btn btn-theme3 fs-12 fw-bold hero_read_more_btn py-2 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
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
                     <div class="thumb"> <img src="{{GETFOLDERPATH()}}/App-Store-Optimization.webp" alt="App Store Optimization">
                     </div>
                  </div>
                  <div class="row">
                     <h3 class="d-none invisible">App Store Optimization</h3>
                     <div class="col-12 fw-900 text-white mb-1 fs-lg-19 fs-md-17 fs-16 text-capitalize lh-normal tz text-center" style="--tz:30px;">App Store Optimization</div>
                     <div class="col-12 fw-600 fs-lg-16 fs-md-15  fs-sm-15 fs-14 text-white mt-2 mb-3 tz text-center" style="--tz:30px;">An app is a necessity for some businesses. Getting users to download it is a must for all! We know you want top ranking for your app. But we also know the technical input and creativity required to get you that ranking. IMG Global Infotech is the leading online marketing company to help you reach increase app download and engagement.</div>
                     <div class="col-12 pt-3">
                        <a href="{{asset('/app-store-optimization-services.php')}}" class="btn btn-theme3 fs-12 fw-bold hero_read_more_btn py-2 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                           <span class="d-block"><span>Read More</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Client Testimonials section -->
   <div class="container-fluid overflow-hidden client-testimonials position-relative">
      <div class="container position-relative zi-2 py-5">
         <div class="row mx-0 pb-5">
            <h3 class="d-none invisible">Words From Our Clients</h3>
            <div class="col-12 heading fs-md-14 fs-12 center text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Words From <b> Our Clients </b></span>
            </div>
         </div>
         <div class="hero-body mt-md-4">
            <div class="customers-testimonials owl-carousel">
               <div class="box">
                  <div class="level-item">
                     <div>
                        <div class="slider_icon">
                           <img class=" avatar shadow" src="{{GETFOLDERPATH()}}/painguru.webp" alt="PainGuru">
                        </div>
                        <div class="content">
                           <strong class="fw-bold fs-md-17 fs-16 mt-3 mb-1 text-theme2 text-center d-block"> PainGuru </strong>
                           <div class="fw-600 fs-lg-16 fs-md-16 fs-sm-15 fs-14 ellipsis-5 text-white mt-0 mb-3 text-center">After searching a lot, we found them via my relative and it is really a good thing for me. they are really professional and co operative. My account manager Mr. Lokesh is keen to help me in every possible manner. I strongly recommend to other people for the same era of services.
                           </div>
                           <strong class="fw-bold fs-md-20 fs-16 text-theme1 text-center d-block">- Dr. Sanjay Sharma -</strong>
                           <span class="fw-600 fs-md-14 fs-12 text-theme3 text-center d-block">Interventional Pain Physician (Algologist)</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="box">
                  <div class="level-item">
                     <div>
                        <div class="slider_icon">
                           <img class=" avatar shadow" src="{{GETFOLDERPATH()}}/Modulus-Academy.webp" alt="Modulus-Academy">
                        </div>
                        <div class="content">
                           <strong class="fw-bold fs-md-17 fs-16 mt-3 mb-1 text-theme2 text-center d-block"> Modulus Academy </strong>
                           <div class="fw-600 fs-lg-16 fs-md-16 fs-sm-15 fs-14 ellipsis-5 text-white mt-0 mb-3 text-center">My website is now on the top page of Google and being and all the credit goes to IMG Global Infotech only. They did the work with full dedication and their teamwork is really inspiring.
                           </div>
                           <strong class="fw-bold fs-md-20 fs-16 text-theme1 text-center d-block">- Mr. Dhara Singh -</strong>
                           <span class="fw-600 fs-md-14 fs-12 text-theme3 text-center d-block">HOD of Mathematics</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="box">
                  <div class="level-item">
                     <div>
                        <div class="slider_icon">
                           <img class=" avatar shadow" src="{{GETFOLDERPATH()}}/baba-thakurda-das.webp" alt="baba-thakurda-das">
                        </div>
                        <div class="content">
                           <strong class="fw-bold fs-md-17 fs-16 mt-3 mb-1 text-theme2 text-center d-block"> Baba Thakur Das </strong>
                           <div class="fw-600 fs-lg-16 fs-md-16 fs-sm-15 fs-14 ellipsis-5 text-white mt-0 mb-3 text-center">If you are willing to find the best digital marketing agency to get your SEO done with pure perfection, you can definitely give a try to IMG Global Infotech. IMG Global Infotech is the leading digital marketing agency with amazing team performance. These guys are professionals of SEO and have reasonable packages for the clients.
                           </div>
                           <strong class="fw-bold fs-md-20 fs-16 text-theme1 text-center d-block">- Mr. Ashish Taneja -</strong>
                           <span class="fw-600 fs-md-14 fs-12 text-theme3 text-center d-block">Owner</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="box">
                  <div class="level-item">
                     <div>
                        <div class="slider_icon">
                           <img class=" avatar shadow" src="{{GETFOLDERPATH()}}/samarpan-arts-Handicrafts.webp" alt="Baba-Thakur-Das">
                        </div>
                        <div class="content">
                           <strong class="fw-bold fs-md-17 fs-16 mt-3 mb-1 text-theme2 text-center d-block"> Samarpan Arts & Handicrafts </strong>
                           <div class="fw-600 fs-lg-16 fs-md-16 fs-sm-15 fs-14 ellipsis-5 text-white mt-0 mb-3 text-center">There is no other company in the market who can work on your projects and listen to all your requirements with utmost sincerity and passion other than IMG global Infotech. The company standard to my digital marketing needs and help my business to make an online presence.
                           </div>
                           <strong class="fw-bold fs-md-20 fs-16 text-theme1 text-center d-block">- Mr. Arpit Jain -</strong>
                           <span class="fw-600 fs-md-14 fs-12 text-theme3 text-center d-block">Founder</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- ecommerce solutions section -->
   <div class="container-fluid overflow-hidden ecommerce_solutions position-relative py-5">
      <div class="container py-lg-4 position-relative zi-2">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Why Should Your Trust Only IMG Global Infotech For Achieving Digital Results?</h2>
            <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Why Should Your Trust Only IMG Global Infotech For <b>Achieving Digital Results? </b></span></div>
            <div class="col-12 fw-600 fs-md-16 fs-15 text-muted mt-3 px-0">You need digital marketing services from a reputed company to survive the cut-throat competition. But, more importantly, you need a partner like IMG Global Infotech who knows the ins and outs of the digital world. It is constantly changing and forever growing.</div>
            <div class="col-12 fw-600 fs-md-16 fs-15 text-muted mt-3 px-0">With us as the frontrunners of your campaign, you can expect us to bring you a robust presence.</div>
         </div>
         <div class="row">
            <div class="col-12 mb-lg-4 md-mb-3 mb-3">
               <div class="ecommerce_solutions_box">
                  <div class="row shadow mx-0 border rounded-end">
                     <div class="col-auto ps-0">
                        <span><i class="imgs img-check rounded-start text-white fs-lg-22 fs-md-19 fs-17 bg-theme1 d-flex w-50px h-100 justify-content-center align-items-center position-relative zi-2"></i></span>
                     </div>
                     <div class="col fw-bold fs-lg-18 fs-md-16 fs-15 text-dark d-flex align-items-center bg-white ms-n5 py-2 zi-0 ps-5 position-relative">
                        Delivering growth through well-thought-out campaigns
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
                     <div class="col fw-bold fs-lg-18 fs-md-16 fs-15 text-dark d-flex align-items-center bg-white ms-n5 py-2 zi-0 ps-5 position-relative">
                        Keeping updated with Google and other search marketing metrics
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
                     <div class="col fw-bold fs-lg-18 fs-md-16 fs-15 text-dark d-flex align-items-center bg-white ms-n5 py-2 zi-0 ps-5 position-relative">
                        Understanding your competitors and industry before creating strategies
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
                     <div class="col fw-bold fs-lg-18 fs-md-16 fs-15 text-dark d-flex align-items-center bg-white ms-n5 py-2 zi-0 ps-5 position-relative">
                        Continuously measure all campaigns to ensure we deliver results
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
                     <div class="col fw-bold fs-lg-18 fs-md-16 fs-15 text-dark d-flex align-items-center bg-white ms-n5 py-2 zi-0 ps-5 position-relative">
                        Ensuring ethical and best practices are followed for each campaign
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
                     <div class="col fw-bold fs-lg-18 fs-md-16 fs-15 text-dark d-flex align-items-center bg-white ms-n5 py-2 zi-0 ps-5 position-relative">
                        Using latest tools and techniques to make each campaign a success
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 fw-600 fs-md-16 fs-15 text-muted mt-3">Contact our digital marketing company to kick-off a robust campaign!</div>
            <div class="col-12 pt-3">
               <a href="{{asset('/request-a-quote.php')}}" class="btn btn-theme3 fs-14 fw-bold hero_read_more_btn py-2 px-4" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                  <span class="d-block"><span>Become a Client</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
               </a>
            </div>
         </div>
      </div>
   </div>
   <h2 class="d-none invisible">Words from Our Clients</h2>
   <h3 class="d-none invisible">Our Recent Results</h3>
   <h3 class="d-none invisible">PainGuru</h3>
   <h3 class="d-none invisible">Modulus Academy</h3>
   <h3 class="d-none invisible">Baba Thakur Das</h3>
   <h3 class="d-none invisible">Samarpan Arts & Handicrafts</h3>

    <!-- latest blog section -->
    <div class="container-fluid insights position-relative overflow-hidden">
        <div class="container position-relative zi-1 py-md-5 py-4">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center">
                        <h4 class="d-none invisible">Latest Blogs</h4>
                        <h2 class="col heading fs-md-14 fs-12 left mb-sm-0 mb-3"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Latest <b> Blogs</b></span></h2>
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
                                                   <a href="https://www.imgglobalinfotech.com/blog/time-and-cost-to-develop-fantasy-cricket-app-like-myteam11-and-howzat" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/time-and-Cost-to-Develop-Fantasy-Mobile-App-like-Myteam11-and-Howzatt.webp" class="img-fluid" alt="time-and-Cost-to-Develop-Fantasy-Mobile-App-like-Myteam11-and-Howzatt" width="302" height="auto" >
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
                                                         <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image" 
                                                         data-src="{{asset('/public')}}/assets/img/blog-section/fantasy-Cricket-App-Development-like-Mycircle11-and-Myfab11.webp" class="img-fluid" alt="fantasy-Cricket-App-Development-like-Mycircle11-and-Myfab11" width="302" height="auto" >
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
                                                      <div class="row mx-1 py-3 bg-white">
                                                         <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image" data-src="https://www.imgglobalinfotech.com/imgadmin2/images/blog/blog_thumb/blogimageReadymade-Fantasy-Cricket-App-Development-Cost-A-Complete-Guide.webp" alt="Fantasy-Cricket-App-Development-Cost-A-Complete-Guide"width="302" height="auto" >
                                                         </div>
                                                         <div class="col-12 fs-14 text-muted fw-bold py-2">
                                                            <span class="text-theme3 me-2">Apr 03, 2023</span> 
                                                            <span> By Lokesh Saini</span>
                                                         </div>
                                                         <div class="col-12 fs-14 fw-600 lanth-text">Readymade Fantasy Cricket App Development Cost- [A Complete Guide]</div>
                                                      </div>
                                                   </a>
                                                   <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-app-development-for-ipl-2023" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                      <div class="row mx-1 py-3 bg-white">
                                                         <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image" data-src="https://www.imgglobalinfotech.com/imgadmin2/images/blog/blog_thumb/blogimageFantasy-Cricket-App-Development-for-IPL-2023.webp" alt="Fantasy-Cricket-App-Development-for-IPL-2023"width="302" height="auto" >
                                                         </div>
                                                         <div class="col-12 fs-14 text-muted fw-bold py-2">
                                                            <span class="text-theme3 me-2">Feb 21, 2023</span> 
                                                            <span> By Lokesh Saini</span>
                                                         </div>
                                                         <div class="col-12 fs-14 fw-600 lanth-text">Fantasy Cricket App Development for IPL 2023</div>
                                                      </div>
                                                   </a>
                                                   <a href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-for-wpl-2023" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                      <div class="row mx-1 py-3 bg-white">
                                                         <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image" data-src="https://www.imgglobalinfotech.com/imgadmin2/images/blog/blog_thumb/blogimageFantasy-Sports-App-Development-for-Womens-Premier-League-2023.webp" alt="Fantasy-Sports-App-Development-for-Womens-Premier-League-2023"width="302" height="auto" >
                                                         </div>
                                                         <div class="col-12 fs-14 text-muted fw-bold py-2">
                                                            <span class="text-theme3 me-2">Feb 13, 2023</span> 
                                                            <span> By Lokesh Saini</span>
                                                         </div>
                                                         <div class="col-12 fs-14 fw-600 lanth-text">Fantasy Sports App Development for Women's Premier League 2023</div>
                                                      </div>
                                                   </a>
                                                   <a href="https://www.imgglobalinfotech.com/blog/top-10-restaurant-app-development-companies-in-india-2023" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                      <div class="row mx-1 py-3 bg-white">
                                                         <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image" data-src="https://www.imgglobalinfotech.com/imgadmin2/images/blog/blog_thumb/blogimageTop-10-Restaurant-App-Development-Companies-in-India-2023-Cost-and-Key-Features.webp" alt="Top-10-Restaurant-App-Development-Companies-in-India-2023-Cost-and-Key-Features"width="302" height="auto" >
                                                         </div>
                                                         <div class="col-12 fs-14 text-muted fw-bold py-2">
                                                            <span class="text-theme3 me-2">Jan 27, 2023</span> 
                                                            <span> By Lokesh Saini</span>
                                                         </div>
                                                         <div class="col-12 fs-14 fw-600 lanth-text">Top 10 Restaurant App Development Companies in India 2023 - Cost and K..</div>
                                                      </div>
                                                   </a>
                                                   <a href="https://www.imgglobalinfotech.com/blog/how-much-money-can-you-earn-through-mobile-apps-in-2023" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                      <div class="row mx-1 py-3 bg-white">
                                                         <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image" data-src="https://www.imgglobalinfotech.com/imgadmin2/images/blog/blog_thumb/blogimageHow-Much-Money-Can-You-Earn-Through-Mobile-Apps-in-2023.webp" alt="How-Much-Money-Can-You-Earn-Through-Mobile-Apps-in-2023"width="302" height="auto" >
                                                         </div>
                                                         <div class="col-12 fs-14 text-muted fw-bold py-2">
                                                            <span class="text-theme3 me-2">Jan 23, 2023</span> 
                                                            <span> By Lokesh Saini</span>
                                                         </div>
                                                         <div class="col-12 fs-14 fw-600 lanth-text">How Much Money Can You Earn Through Mobile Apps in 2023?</div>
                                                      </div>
                                                   </a>
                                                   <a href="https://www.imgglobalinfotech.com/blog/top-10-medicine-delivery-app-development-companies-in-india-2023" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                      <div class="row mx-1 py-3 bg-white">
                                                         <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image" data-src="https://www.imgglobalinfotech.com/imgadmin2/images/blog/blog_thumb/blogimageList-of-Top-10-Medicine-Delivery-App-Development-Companies-in-India-2023.webp" alt="List-of-Top-10-Medicine-Delivery-App-Development-Companies-in-India-2023"width="302" height="auto" >
                                                         </div>
                                                         <div class="col-12 fs-14 text-muted fw-bold py-2">
                                                            <span class="text-theme3 me-2">Jan 16, 2023</span> 
                                                            <span> By Lokesh Saini</span>
                                                         </div>
                                                         <div class="col-12 fs-14 fw-600 lanth-text">List of Top 10 Medicine Delivery App Development Companies in India 20..</div>
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
            </div>
        </div>
    </div>
    
   <h2 class="d-none invisible">Looking to drive more traffic and sales?</h2>
   

  <!-- contact with us section -->
  <div class="container-fluid contact-with-us-section position-relative overflow-hidden" id="contact-with-us-section">
      <div class="container position-relative zi-1 py-5">
         <div class="row align-items-center border border-5 rounded p-3 border-white">
            <div class="col-lg-6">
               <div class="row align-items-center">
                  <div class="col heading fs-md-14 fs-12 left text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Looking To Drive More  <br>Traffic And Sales?</b></span></div>
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
                                  <select class="form-select rounded-0 form-control h-100" name="phonecode" aria-label="Default select example" style="padding: 0.375rem 0.25rem 0.375rem 0.75rem !important;" required>
                                        <option value="IN +91" selected="selected"> IN +91</option>
                                              </select>
                                                    </div>
                                                    <div class="col-7 ps-0">
                                                        <div class="form-floating">
                                                        
                                                            <input type="tel" name="tel" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control rounded-0 fs-md-16 fs-14 border-start" id="phoneNumber" placeholder="Enter Phone Number" required>
                                                            <label class="fw-600 fs-md-16 fs-14" for="phoneNumber">Mobile Number <label class="text-danger">* </label></label>
                                                            <div class="invalid-feedback fs-12">Please Enter a Valid Phone Number.</div>
                                                        </div>
                                                    </div>
                                               </div>
                                            </div>
                  
                                             <div class="col-md-5">
                                                <div class="form-floating">
                                                   <input type="email" name="email" class="form-control rounded-0" id="emailID" placeholder="Enter Email ID" >
                                                   <label class="fw-600" for="emailID">Email ID (Optional)</label>
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
                                                         <option value="Mobile App Development" selected="selected">Mobile App Development</option>
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
                                       <!-- <input type="text" name="requirement" class="form-control rounded-0 fs-md-16 fs-14" id="Requierment" placeholder="Enter Requierment Name" required> -->
                                       <!-- <label class="fw-600 fs-md-16 fs-14" for="Requierment"></label> -->
                                       <!-- <div class="invalid-feedback fs-12">Please Enter a Valid Requierment.</div> -->
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
   

@endsection
@push('scripts')
<script src="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.js"></script>
<script src="{{asset('/public')}}/assets/js/digital-marketing-services.min.js"></script>
<script src="{{asset('/public')}}/assets/js/fantasy-sports-app-development.min.js"></script>
<script src="{{asset('/public')}}/assets/js/fantasy-cricket-app-development.min.js"></script>
<script>
   $(document).ready(function(){
    setTimeout(function(){
        $('.contactModal').modal('show');
    }, 5000);
    });
</script> 

@endpush
