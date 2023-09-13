@extends('main')
@push('meta')
<!--  Title -->
<title>Portfolio - Web & Mobile App Development, Website Design, SEO, SMO</title>

<!-- Required meta tags -->
<meta name="title" content="Portfolio - Web & Mobile App Development, Website Design, SEO, SMO" />
<meta name="description" content="Portfolio - Browse our client's projects including work samples. Contact us now for best Web & Mobile App Development, Website Design, SEO, SMO services." />
<meta name="keywords" content="Design and Development Company Jaipur, Website Design Services, Software Development Company, Web Application Development, MLM Software" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Portfolio - Web & Mobile App Development, Website Design, SEO, SMO">
<meta name="twitter:description" content="Portfolio - Browse our client's projects including work samples. Contact us now for best Web & Mobile App Development, Website Design, SEO, SMO services.">


<!-- Facebook Meta -->
<meta property="og:url" content="{{asset('/')}}portfolio.php">
<meta property="og:title" content="Portfolio - Web & Mobile App Development, Website Design, SEO, SMO">
<meta property="og:description" content="Portfolio - Browse our client's projects including work samples. Contact us now for best Web & Mobile App Development, Website Design, SEO, SMO services.">





<meta name="classification" content="Design and Development Company Jaipur, Website Design Services, Software Development Company, Web Application Development, MLM Software" />
<link rel="canonical" href="{{asset('/')}}portfolio.php" />
<meta name="robots" content="noindex, nofollow" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/portfolio-1.min.css">
@endpush
@section('content')


   <!-- bredcrumb section -->
   <div class="container-fluid overflow-hidden px-0 bredcrumb_main py-lg-3 py-md-2 py-2 d-md-block d-none">
      <div class="container pt-5 mt-5">
         <div class="row">
            <div class="col-md-12">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                     <li class="breadcrumb-item"><a class="fw-600 fs-lg-16 fs-md-15 fs-14 text-theme2 text-decoration-none" href="{{asset('/')}}">Home</a></li>
                     <li class="breadcrumb-item active fw-600 fs-lg-16 fs-md-15 fs-14 text-dark" aria-current="page">Portfolio</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>

    <!-- SEO headding -->
 <h1 class="d-none"> Portfolio</h1>

   <!-- Portfolio section -->
   <div class="container-fluid position-relative overflow-hidden portfolio_main_img portfolio-silde pt-lg-0 pt-lg-0 pt-5">
      <div class="container py-lg-4 py-md-4 py-5 position-relative zi-9">
          <!-- <div class="row mx-0 pb-lg-5 pb-md-3 pb-5 pt-lg-5 pt-md-2 pt-5">
              <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-25 fs-lg-25 fs-md-24 fs-20">Our<b> Featured Project </b></span></div>
          </div> -->
                 <!-- Our Portfolio Featured Project -->
             
                 <div class="row mx-0 portfolio-sldier owl-carousel">
                     <div class="col-12 col-sm-12 col-md-12 mb-4 rounded-4 protfolio-views pt-lg-5 pt-md-3 pt-2 pb-lg-2 pb-md-2 pb-2 ps-xl-5 ps-lg-5 ps-1 pe-xl-5 pe-lg-5 pe-1 pb-xl-0 pe-pb-5 pb-1">
                        <div class="row mx-0 position-relative pb-lg-0 pb-md-0 pb-3">
                              <div class="col-12">
                                    <img class="w-lg-20 w-md-20 w-50 position-relative" style="--tz:90px;" src="{{GETFOLDERPATH()}}/logo_1.png" alt="logo">  
                              </div>
                                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-12 mb-lg-4 mb-md-1 mb-1">
                                          <div class="col-12 fw-900 fs-lg-60 fs-md-25 fs-18 lh-normal text-white mt-lg-3 mt-md-0 mt-0">Zoniraz Jewel House Pvt Ltd</div>
                                    </div>
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-12 mb-lg-4 mb-md-0 mb-0 position-relative">
                                          <div class="col-12 px-0 fw-600 fs-lg-16 fs-md-14 fs-15 text-muted mt-lg-3 mt-md-0 mt-0 ">
                                             Zoniraz Jewel house Pvt LTD. is one of the leading Jewellery manufacturer, wholesaler,
                                             retailer and exporter in the international Jewels market. From the last 50 Years we are serving for our loyal customers.</p>
                                          </div>
                                          <div class="col-12 py-lg-1 py-md-1 py-0 text-left">
                                             <a class="btn fs-lg-20 fs-md-13 fs-13 fw-bold py-1 px-3 expert-btn text-black rounded rounded-50" href="#0">Digitize Now</a>
                                          </div>
                                    </div>
                                          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 position-relative">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-17 text-white fw-900 mt-lg-3 mt-md-3 mt-3">Use Technologies  </div>
                                                <div class="row py-2 position-relative">
                                                   <div class="col-12 mx-0 text-white">
                                                         <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-12 fs-14">WEBSITE</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-12 fs-14">lARAVEL</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-12 fs-14">PHP</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-12 fs-14">HTML</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-12 fs-14">CSS3</a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>

                                             <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-5 col-12 position-relative ">
                                                <div class="col-12 fs-lg-15 fs-md-11 fs-15 fw-600 text-center bottom-md-n130 text-black quites py-3 pe-lg-4 pe-md-2 pe-2 ps-lg-4 ps-md-2 ps-2">
                                                   "Zoniraz Jewel house Pvt LTD. is one of the leading Jewellery manufacturer, wholesaler,
                                                      retailer and exporter in the international Jewels market. From the 
                                                   last 50 Years we are serving for our loyal customers and delivering them not"
                                                   <span class="d-block fw-bold fs-lg-16 fs-md-12 fs-16 text-theme1"> Client Feedback </span>
                                                   </div>
                                     </div>
                                  </div>
                             </div>


                            

                            
                                    </div>

                       <!-- Our Portfolio -->
                     <div class="row mx-0 pt-lg-2 pt-md-5 pt-4">
                        <div class="row mx-0 pt-md-2 mx-0">
                            <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-25 fs-lg-25 fs-md-25 fs-20">Our <b> Portfolio </b></span></div>
                        </div>
                    </div>

                     <div class="row justify-content-center align-items-center">
                        <div class="row case-study p-lg-0 p-md-0 p-0">
                           <div class="col-lg-12 col-md-12 col-12">
                              <div class="row mx-0 services">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs s-sidebar align-items-center pt-3">
                                       <li class="nav-item pe-2 ">
                                             <a class="nav-link s-item text-decoration-none bg-white fw-bold active" data-bs-toggle="tab" href="#home">
                                             <div class="text-center">
                                                
                                                <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-muted ">All</div>
                                             </div>
                                             </a>
                                       </li>

                                       <li class="nav-item pe-2 ">
                                             <a class="nav-link s-item text-decoration-none bg-white fs-12 fw-bold " data-bs-toggle="tab" href="#home1">
                                             <div class="text-center">
                                                
                                                <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-muted ">Fantasy App</div>
                                             </div>
                                             </a>
                                       </li>

                                       <li class="nav-item pe-2">
                                             <a class="nav-link s-item text-decoration-none bg-white  fs-12 fw-bold rounded " data-bs-toggle="tab" href="#home2">
                                             <div class="text-center">
                                             
                                                <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-muted ">Website</div>
                                             </div>
                                             </a>
                                       </li>

                                       <li class="nav-item pe-2 ">
                                             <a class="nav-link s-item text-decoration-none bg-white  fs-12 fw-bold rounded " data-bs-toggle="tab" href="#home3">
                                                <div class="text-center">
                                                
                                                <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-muted ">Real State</div>
                                             </div>
                                             </a>
                                       </li>

                                       <li class="nav-item pe-2">
                                             <a class="nav-link s-item text-decoration-none bg-white  fs-12 fw-bold rounded " data-bs-toggle="tab" href="#home4">
                                                <div class="text-center">
                                                
                                                <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-muted ">Developments </div>
                                             </div>
                                             </a>
                                       </li>

                                       <li class="nav-item pe-2">
                                             <a class="nav-link s-item text-decoration-none bg-white  fs-12 fw-bold rounded " data-bs-toggle="tab" href="#home5">
                                             <div class="text-center">
                                                <div class="col-12 text-uppercase fw-900 fs-lg-15 fs-md-15 fs-15 mb-0 text-muted ">Digital Marketing</div>
                                             </div>
                                             </a>
                                       </li>
                                 </ul>

					  <!-- Tab panes -->
					  <div class="container tab-content mt-5 main-case pb-1 bg-white p-0">
							<!-- Servcies 1 -->
							  <div id="home" class="show active tab-pane fade in p-0">
								 <div class="row">
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-12 mb-1">
                              <div class="poerfolio-sec overflow-hidden">
                                 <img class="w-100 position-relative tz " style="--tz:90px;" src="{{GETFOLDERPATH()}}/sariska-funcity.webp" alt="sariska-funcity">
                                 </div>
                                    <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                       <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                          <a href="#0" class="text-decoration-none text-white">Sariska Fun City</a></div>
                                          <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                               <div class="col-12 mx-0 text-white">
                                                   <ul class="list-unstyled list-inline">
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                   </ul>
                                                </div>
                                      </div>
                                    <a href="https://www.sariskafuncity.com/" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                 </div>
                              </div>

                               <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-12 mb-lg-4 mb-md-4 mb-4 mt-lg-2 mt-md-0 mt-2">
                                    <div class="poerfolio-sec overflow-hidden mt-lg-5 mt-md-0 mt-0 ">
                                       <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/dentist-online.webp" alt="dentist-online">
                                       </div>
                                          <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                <a href="#0" class="text-decoration-none text-white">Dentist Online</a></div>
                                             <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                <div class="col-12 mx-0 text-white">
                                                      <ul class="list-unstyled list-inline">
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                      </ul>
                                                   </div>
                                       </div>
                                    <a href="javascript:;" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                 </div>
                                    </div>
                                </div>

                              <div class="row ">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-12 mb-lg-4 mb-md-4 mb-4">
                                          <div class="poerfolio-sec overflow-hidden ">
                                             <img class="w-100 position-relative tz rounded rounded-5" style="--tz:90px;" src="{{GETFOLDERPATH()}}/dentist-online.webp" alt="real-estate">
                                             </div>
                                           <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                <a href="#0" class="text-decoration-none text-white">Dentist Online</a></div>
                                                <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                   <div class="col-12 mx-0 text-white">
                                                         <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                         </ul>
                                                      </div>
                                                 </div>
                                               <a href="javascript:;" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div>
                                           </div>


                                 <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-12 mb-lg-4 mb-md-4 mb-4 mt-lg-4 mt-md-0 mt-0">
                                    <div class="poerfolio-sec overflow-hidden mt-2">
                                       <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/coaching-select.webp" alt="coaching-select">
                                       </div>
                                       <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                                   <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                      <a href="#0" class="text-decoration-none text-white">Coaching Select</a></div>
                                                      <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                         <div class="col-12 mx-0 text-white">
                                                               <ul class="list-unstyled list-inline">
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                               </ul>
                                                            </div>
                                                </div>
                                                <a href="https://www.coachingselect.com/" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div> 
                                          </div>
                                    </div>


                                    <div class="row ">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-12 mb-lg-4 mb-md-4 mb-4">
                                          <div class="poerfolio-sec overflow-hidden ">
                                             <img class="w-100 position-relative tz rounded rounded-5" style="--tz:90px;" src="{{GETFOLDERPATH()}}/emerals.webp" alt="real-estate">
                                             </div>
                                           <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                <a href="#0" class="text-decoration-none text-white">Emerals</a></div>
                                                <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                   <div class="col-12 mx-0 text-white">
                                                         <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                         </ul>
                                                      </div>
                                                 </div>
                                               <a href="javascript:;" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div>
                                           </div>


                                 <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-12 mb-lg-4 mb-md-4 mb-4 mt-lg-4 mt-md-0 mt-0">
                                    <div class="poerfolio-sec overflow-hidden mt-2">
                                       <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/propira.webp" alt="coaching-select">
                                       </div>
                                       <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                                   <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                      <a href="#0" class="text-decoration-none text-white">Propira</a></div>
                                                      <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                         <div class="col-12 mx-0 text-white">
                                                               <ul class="list-unstyled list-inline">
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                               </ul>
                                                            </div>
                                                </div>
                                                <a href="https://www.coachingselect.com/" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div> 
                                          </div>
                                    </div>
                                </div>

                                       <div id="home1" class="container show tab-pane fade in p-0">
                                       <div class="row">
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-12 mb-1">
                              <div class="poerfolio-sec overflow-hidden">
                                 <img class="w-100 position-relative tz " style="--tz:90px;" src="{{GETFOLDERPATH()}}/sariska-funcity.webp" alt="sariska-funcity">
                                 </div>
                                    <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                       <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                          <a href="#0" class="text-decoration-none text-white">Sariska Fun City</a></div>
                                          <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                               <div class="col-12 mx-0 text-white">
                                                   <ul class="list-unstyled list-inline">
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                   </ul>
                                                </div>
                                      </div>
                                    <a href="https://www.sariskafuncity.com/" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                 </div>
                              </div>

                               <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-12 mb-lg-4 mb-md-4 mb-4 mt-lg-2 mt-md-0 mt-2">
                                    <div class="poerfolio-sec overflow-hidden mt-lg-5 mt-md-0 mt-0 ">
                                       <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/dentist-online.webp" alt="dentist-online">
                                       </div>
                                          <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                <a href="#0" class="text-decoration-none text-white">Dentist Online</a></div>
                                             <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                <div class="col-12 mx-0 text-white">
                                                      <ul class="list-unstyled list-inline">
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                      </ul>
                                                   </div>
                                       </div>
                                    <a href="javascript:;" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                 </div>
                                    </div>
                                </div>

                              <div class="row ">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-12 mb-lg-4 mb-md-4 mb-4">
                                          <div class="poerfolio-sec overflow-hidden ">
                                             <img class="w-100 position-relative tz rounded rounded-5" style="--tz:90px;" src="{{GETFOLDERPATH()}}/dentist-online.webp" alt="real-estate">
                                             </div>
                                           <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                <a href="#0" class="text-decoration-none text-white">Dentist Online</a></div>
                                                <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                   <div class="col-12 mx-0 text-white">
                                                         <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                         </ul>
                                                      </div>
                                                 </div>
                                               <a href="javascript:;" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div>
                                           </div>


                                 <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-12 mb-lg-4 mb-md-4 mb-4 mt-lg-4 mt-md-0 mt-0">
                                    <div class="poerfolio-sec overflow-hidden mt-2">
                                       <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/coaching-select.webp" alt="coaching-select">
                                       </div>
                                       <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                                   <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                      <a href="#0" class="text-decoration-none text-white">Coaching Select</a></div>
                                                      <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                         <div class="col-12 mx-0 text-white">
                                                               <ul class="list-unstyled list-inline">
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                               </ul>
                                                            </div>
                                                </div>
                                                <a href="https://www.coachingselect.com/" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div> 
                                          </div>
                                    </div>


                                    <div class="row ">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-12 mb-lg-4 mb-md-4 mb-4">
                                          <div class="poerfolio-sec overflow-hidden ">
                                             <img class="w-100 position-relative tz rounded rounded-5" style="--tz:90px;" src="{{GETFOLDERPATH()}}/emerals.webp" alt="real-estate">
                                             </div>
                                           <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                <a href="#0" class="text-decoration-none text-white">Emerals</a></div>
                                                <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                   <div class="col-12 mx-0 text-white">
                                                         <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                         </ul>
                                                      </div>
                                                 </div>
                                               <a href="javascript:;" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div>
                                           </div>


                                 <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-12 mb-lg-4 mb-md-4 mb-4 mt-lg-4 mt-md-0 mt-0">
                                    <div class="poerfolio-sec overflow-hidden mt-2">
                                       <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/propira.webp" alt="coaching-select">
                                       </div>
                                       <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                                   <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                      <a href="#0" class="text-decoration-none text-white">Propira</a></div>
                                                      <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                         <div class="col-12 mx-0 text-white">
                                                               <ul class="list-unstyled list-inline">
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                               </ul>
                                                            </div>
                                                </div>
                                                <a href="https://www.coachingselect.com/" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div> 
                                          </div>
                                    </div> 
                                       </div>

                                             
                                             <div id="home2" class="container show tab-pane fade in p-0">
                                             <div class="row">
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-12 mb-1">
                              <div class="poerfolio-sec overflow-hidden">
                                 <img class="w-100 position-relative tz " style="--tz:90px;" src="{{GETFOLDERPATH()}}/sariska-funcity.webp" alt="sariska-funcity">
                                 </div>
                                    <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                       <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                          <a href="#0" class="text-decoration-none text-white">Sariska Fun City</a></div>
                                          <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                               <div class="col-12 mx-0 text-white">
                                                   <ul class="list-unstyled list-inline">
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                   </ul>
                                                </div>
                                      </div>
                                    <a href="https://www.sariskafuncity.com/" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                 </div>
                              </div>

                               <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-12 mb-lg-4 mb-md-4 mb-4 mt-lg-2 mt-md-0 mt-2">
                                    <div class="poerfolio-sec overflow-hidden mt-lg-5 mt-md-0 mt-0 ">
                                       <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/dentist-online.webp" alt="dentist-online">
                                       </div>
                                          <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                <a href="#0" class="text-decoration-none text-white">Dentist Online</a></div>
                                             <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                <div class="col-12 mx-0 text-white">
                                                      <ul class="list-unstyled list-inline">
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                      </ul>
                                                   </div>
                                       </div>
                                    <a href="javascript:;" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                 </div>
                                    </div>
                                </div>

                              <div class="row ">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-12 mb-lg-4 mb-md-4 mb-4">
                                          <div class="poerfolio-sec overflow-hidden ">
                                             <img class="w-100 position-relative tz rounded rounded-5" style="--tz:90px;" src="{{GETFOLDERPATH()}}/dentist-online.webp" alt="real-estate">
                                             </div>
                                           <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                <a href="#0" class="text-decoration-none text-white">Dentist Online</a></div>
                                                <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                   <div class="col-12 mx-0 text-white">
                                                         <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                         </ul>
                                                      </div>
                                                 </div>
                                               <a href="javascript:;" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div>
                                           </div>


                                 <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-12 mb-lg-4 mb-md-4 mb-4 mt-lg-4 mt-md-0 mt-0">
                                    <div class="poerfolio-sec overflow-hidden mt-2">
                                       <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/coaching-select.webp" alt="coaching-select">
                                       </div>
                                       <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                                   <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                      <a href="#0" class="text-decoration-none text-white">Coaching Select</a></div>
                                                      <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                         <div class="col-12 mx-0 text-white">
                                                               <ul class="list-unstyled list-inline">
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                               </ul>
                                                            </div>
                                                </div>
                                                <a href="https://www.coachingselect.com/" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div> 
                                          </div>
                                    </div>


                                    <div class="row ">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-12 mb-lg-4 mb-md-4 mb-4">
                                          <div class="poerfolio-sec overflow-hidden ">
                                             <img class="w-100 position-relative tz rounded rounded-5" style="--tz:90px;" src="{{GETFOLDERPATH()}}/emerals.webp" alt="real-estate">
                                             </div>
                                           <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                <a href="#0" class="text-decoration-none text-white">Emerals</a></div>
                                                <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                   <div class="col-12 mx-0 text-white">
                                                         <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                         </ul>
                                                      </div>
                                                 </div>
                                               <a href="javascript:;" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div>
                                           </div>


                                 <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-12 mb-lg-4 mb-md-4 mb-4 mt-lg-4 mt-md-0 mt-0">
                                    <div class="poerfolio-sec overflow-hidden mt-2">
                                       <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/propira.webp" alt="coaching-select">
                                       </div>
                                       <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                                   <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                      <a href="#0" class="text-decoration-none text-white">Propira</a></div>
                                                      <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                         <div class="col-12 mx-0 text-white">
                                                               <ul class="list-unstyled list-inline">
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                               </ul>
                                                            </div>
                                                </div>
                                                <a href="https://www.coachingselect.com/" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div> 
                                          </div>
                                    </div>
                                           </div>

                           
                                 <div id="home3" class="container show tab-pane fade in p-0">
                                    <div class="row">
                                    <div class="row">
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-12 mb-1">
                              <div class="poerfolio-sec overflow-hidden">
                                 <img class="w-100 position-relative tz " style="--tz:90px;" src="{{GETFOLDERPATH()}}/sariska-funcity.webp" alt="sariska-funcity">
                                 </div>
                                    <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                       <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                          <a href="#0" class="text-decoration-none text-white">Sariska Fun City</a></div>
                                          <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                               <div class="col-12 mx-0 text-white">
                                                   <ul class="list-unstyled list-inline">
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                      <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                   </ul>
                                                </div>
                                      </div>
                                    <a href="https://www.sariskafuncity.com/" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                 </div>
                              </div>

                               <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-12 mb-lg-4 mb-md-4 mb-4 mt-lg-2 mt-md-0 mt-2">
                                    <div class="poerfolio-sec overflow-hidden mt-lg-5 mt-md-0 mt-0 ">
                                       <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/dentist-online.webp" alt="dentist-online">
                                       </div>
                                          <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                <a href="#0" class="text-decoration-none text-white">Dentist Online</a></div>
                                             <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                <div class="col-12 mx-0 text-white">
                                                      <ul class="list-unstyled list-inline">
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                         <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                      </ul>
                                                   </div>
                                       </div>
                                    <a href="javascript:;" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                 </div>
                                    </div>
                                </div>

                              <div class="row ">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-12 mb-lg-4 mb-md-4 mb-4">
                                          <div class="poerfolio-sec overflow-hidden ">
                                             <img class="w-100 position-relative tz rounded rounded-5" style="--tz:90px;" src="{{GETFOLDERPATH()}}/dentist-online.webp" alt="real-estate">
                                             </div>
                                           <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                <a href="#0" class="text-decoration-none text-white">Dentist Online</a></div>
                                                <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                   <div class="col-12 mx-0 text-white">
                                                         <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                         </ul>
                                                      </div>
                                                 </div>
                                               <a href="javascript:;" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div>
                                           </div>


                                 <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-12 mb-lg-4 mb-md-4 mb-4 mt-lg-4 mt-md-0 mt-0">
                                    <div class="poerfolio-sec overflow-hidden mt-2">
                                       <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/coaching-select.webp" alt="coaching-select">
                                       </div>
                                       <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                                   <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                      <a href="#0" class="text-decoration-none text-white">Coaching Select</a></div>
                                                      <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                         <div class="col-12 mx-0 text-white">
                                                               <ul class="list-unstyled list-inline">
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                               </ul>
                                                            </div>
                                                </div>
                                                <a href="https://www.coachingselect.com/" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div> 
                                          </div>
                                    </div>


                                    <div class="row ">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-12 mb-lg-4 mb-md-4 mb-4">
                                          <div class="poerfolio-sec overflow-hidden ">
                                             <img class="w-100 position-relative tz rounded rounded-5" style="--tz:90px;" src="{{GETFOLDERPATH()}}/emerals.webp" alt="real-estate">
                                             </div>
                                           <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                             <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                <a href="#0" class="text-decoration-none text-white">Emerals</a></div>
                                                <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                   <div class="col-12 mx-0 text-white">
                                                         <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                            <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                         </ul>
                                                      </div>
                                                 </div>
                                               <a href="javascript:;" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
                                             </div>
                                           </div>


                                 <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-12 mb-lg-4 mb-md-4 mb-4 mt-lg-4 mt-md-0 mt-0">
                                    <div class="poerfolio-sec overflow-hidden mt-2">
                                       <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/propira.webp" alt="coaching-select">
                                       </div>
                                       <div class="row portfolio_hover py-2 position-relative mx-0 ps-4">
                                                   <div class="col-12 fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal p-0">
                                                      <a href="#0" class="text-decoration-none text-white">Propira</a></div>
                                                      <div class="col-12 justify-content-start d-flex mt-1 mx-0 text-white p-0">
                                                         <div class="col-12 mx-0 text-white">
                                                               <ul class="list-unstyled list-inline">
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">WEBSITE</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">lARAVEL</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">PHP</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">HTML</a></li>
                                                                  <li class="list-inline-item"> <a href="#0" class="text-white text-decoration-none border-end border1 pe-2 fs-lg-14 fs-md-14 fs-14">CSS3</a></li>
                                                               </ul>
                                                            </div>
                                                </div>
                                                <a href="https://www.coachingselect.com/" class="btn-custom d-flex align-items-end justify-content-end"><span class="imgl img-chevron-right"></span></a>
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
<script src="{{asset('/public')}}/assets/js/portfolio-1.min.js"></script>
@endpush