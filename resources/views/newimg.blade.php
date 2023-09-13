@extends('main')
    @push('meta')
    <!--  Title -->
    <title>IT Consulting Company | IT Consulting Services</title>
      <!-- Required meta tags -->
    <meta name="title" content="IT Consulting Company | IT Consulting Services" />
    <meta name="description" content=" IMG Global is the best IT consulting Company that provides the best IT consulting services to startups, mid-size, medium-size and large-size businesses." />
    <meta name="keywords" content="IT consulting company, IT consulting services, IT consultant, IT consulting firm, Hire IT consultant, IT company" />

    <!-- Twitter Meta -->
    <meta name="twitter:title" content="IT Consulting Company | IT Consulting Services">
    <meta name="twitter:description" content="IMG Global is the best IT consulting Company that provides the best IT consulting services to startups, mid-size, medium-size and large-size businesses.">

    <!-- Facebook Meta -->
    <meta property="og:url" content="{{asset('/')}}">
    <meta property="og:title" content="IT Consulting Company | IT Consulting Services">
    <meta property="og:description" content="IMG Global is the best IT consulting Company that provides the best IT consulting services to startups, mid-size, medium-size and large-size businesses.">

    <meta name="classification" content="web and mobile app development company, software development, eCommerce development services, fantasy sports app development, online exam app" />
    <link rel="canonical" href="{{asset('/')}}" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">



<!--you can put this line anywhere in the site-->
@endpush
@section('content')
{{-- <main class="main-scrollbar"> --}}

    <h1 class="d-none invisible">Web and Mobile App Development Company</h1>
                
    {{-- silder section start --}}
            <div class="container-fluid overflow-hidden px-0 silder-section vh-xl-100 vh-xxl-100 vh-lg-100 vh-md-100 vh-sm-100 vh-70">
                <div class="row h-h-xl-100 h-lg-100 h-md-100 h-100 align-items-center justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10 col-sm-12 col-12 position-relative">
                            <div class="col-12 fs-xxl-52 fs-xl-42 fs-lg-36 fs-md-45 fs-sm-30 fs-23 text-white text-center fw-m lh-1 lh-sm">End-To-End Digital Services To <span class="d-block"> Transform Your Business </span> </div>
                                <div class="col-12 text-light py-2 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-md-center text-center py-3 px-lg-0 px-4 mb-xl-2 mb-lg-2 mb-md-2 md-sm-2 col-12">
                                Being an IT Consulting Company, we deliver robust web and mobile applications for businesses. Our team has experience and expertise to build high-end software applications for diverse market. The resources on board makes us competent to provide technological solution for any business. 
                                                            
                                    </div>
                    
                            <div class="col-12 text-center align-items-center">
                                <a href="{{asset('/portfolio.php')}}" class="btn   btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-xxl-2 py-xl-2 py-lg-2 py-md-1 py-sm-1 py-1 px-lg-5 py-1 px-3 ms-md-2">
                                <span class="d-block"><span class="d-flex ">Explore Our Work <i class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="brand-stripe">
                    <ul class="brand-list ps-0">
                        <li><div class="samsung ms-sprite"></div></li>
                        <li><div class="kohl ms-sprite"></div></li>
                        <li><div class="jio ms-sprite"></div></li>
                        <li><div class="oxo ms-sprite"></div></li>
                        <li><div class="roland ms-sprite"></div></li>
                        <li><div class="aho ms-sprite"></div></li>
                        <li><div class="deloitte ms-sprite"></div></li>
                    </ul>
                </div> -->
             </div>

     {{-- Silder section End --}}

      {{-- About section Start --}}
           <div class="container-fluid">
              <div class="container py-xxl-5 py-xl-4 py-lg-4 py-md-2 py-sm-5 py-py-5 about-section">
                <div class="row justify-content-center">
                  <div class="col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-12">
                   <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-9 col-xl-9 col-xxl-9 pt-xxl-5 pt-xl-5 pt-lg-5 pt-md-5 pt-sm-5 pt-5 pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-3 pb-3">
                        <div class="px-0 px-lg-0 px-xxl-3">
                            <div class="row flex-nowrap flex-lg-wrap px-xxl-4 px-lg-4 px-md-4 swap-card">
                                <div class="col-12 col-md-6 col-lg-6 col-xxl-6 mb-3 abt-card">
                                    <div class="about-cards bg-img-1">
                                        <div class="fs-xxl-24 fs-xl-24 fs-lg-24 fs-md-24 fs-sm-17 fs-28 mb-3 text-white fw-m">Inception</div>
                                        <div class="desc fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-white mb-0">If you are a start-up want to grow digitally our tech minds will be happy to assist you for it.</div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6 col-xxl-6 mb-3 abt-card">
                                    <div class="about-cards bg-img-2">
                                        <div class="fs-xxl-24 fs-xl-24 fs-lg-24 fs-md-24 fs-sm-17 fs-28 mb-3 text-white fw-m">Innovation</div>
                                        <div class="desc fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-white mb-0">Building innovative customize software products as per your requirement is our forte.</div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6 col-xxl-6 mb-3 abt-card">
                                    <div class="about-cards bg-img-3">
                                    <div class="fs-xxl-24 fs-xl-24 fs-lg-24 fs-md-24 fs-sm-17 fs-28 mb-3 text-white fw-m">Experience</div>
                                      <div class="desc fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-white mb-0">Highly experienced technical minds are eager to develop an application that suits your business</div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6 col-xxl-6 mb-3 abt-card">
                                    <div class="about-cards bg-img-4">
                                    <div class="fs-xxl-24 fs-xl-24 fs-lg-24 fs-md-24 fs-sm-17 fs-28 mb-3 text-white fw-m">Expertise</div>
                                    <div class="desc fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-white mb-0">Proficiency in all areas of technical aspects and keeping updated with latest technologies </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xxl-12 mb-3 abt-card pb-2">
                                    <div class="about-cards bg-img-5">
                                       <div class="fs-xxl-24 fs-xl-24 fs-lg-24 fs-md-24 fs-sm-17 fs-28 mb-3 text-white fw-m">Assurance</div>
                                        <div class="desc fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-white mb-0">Get the quality software product that your business deserves which is crafted by industry experts. </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                     </div>

                    <div class="col-12 col-lg-3 col-xl-3 col-xxl-3 mt-0 mt-md-0 mt-xxl-0">
                        <div class="sticky-top" style="top: 110px;">
                            <div class="row justify-content-center counter-box">
                                <div class="col-6 col-lg-6 col-xxl-6 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-2">
                                    <div class="fs-xxl-40 fs-xl-40 fs-lg-40 fs-md-40 fs-sm-30 fs-30 mb-3 fw-m d-block aboutNumberText">11+</div>
                                    <div class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 desc mb-0">Years’ Experience</div>
                                </div>
                                <div class="col-6 col-lg-6 col-xxl-6 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-2">
                                   <div class="fs-xxl-40 fs-xl-40 fs-lg-40 fs-md-40 fs-sm-30 fs-30 mb-3 fw-m d-block aboutNumberText">80+</div>
                                  <div class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 desc mb-0">Countries Served</div>
                                </div>
                                <div class="col-6 col-lg-6 col-xxl-6 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-2">
                                <div class="fs-xxl-40 fs-xl-40 fs-lg-40 fs-md-40 fs-sm-30 fs-30 mb-3 fw-m d-block aboutNumberText"> 1000+ </div>
                                <div class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 desc mb-0">Successful Projects</div>
                                </div>
                                <div class="col-6 col-lg-6 col-xxl-6 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-2">
                                <div class="fs-xxl-40 fs-xl-40 fs-lg-40 fs-md-40 fs-sm-30 fs-30 mb-3 fw-m d-block aboutNumberText">95%</div>
                                <div class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 desc mb-0">Client Retention Rate</div>
                                </div>
                                <div class="col-6 col-lg-6 col-xxl-6 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-2">
                                <div class="fs-xxl-40 fs-xl-40 fs-lg-40 fs-md-40 fs-sm-30 fs-30 mb-3 fw-m d-block aboutNumberText">1000+</div>
                                <div class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 desc mb-0">Clients Worldwide</div>
                                </div>
                                <div class="col-6 col-lg-6 col-xxl-6 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-2">
                                <div class="fs-xxl-40 fs-xl-40 fs-lg-40 fs-md-40 fs-sm-30 fs-30 mb-3 fw-m d-block aboutNumberText">250+</div>
                                <div class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 desc mb-0">Five Star Reviews</div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
               </div>
            </div>
          </div>
       </div>
     

      <div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-2 py-py-5 overflow-hidden services-coman position-relative">
          <div class="container position-relative zi-2">
                <div class="row align-items-center">
                   <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="row pt-xl-0 pt-lg-0 pt-md-0 pt-sm-0 pt-0 text-lg-start text-md-center text-center position-relative pe-xl-3 pe-lg-3 pe-md-3 pe-sm-3 pe-0">
                        <div class="col-12">
                            <div class="row pb-2">
                                <h2 class="d-none invisible">Awards & Recognitions</h2>
                                <div class="col-12 headingv2 left text-black text-lg-start text-md-start text-center"><span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22">Awards & Recognitions</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-black mt-0 mb-lg-1 text-lg-start text-md-start text-center"> Take a glance at our Awards & Recognitions. This is how we made success 
                        Have a glimpse to our achievement box full-fledged with Awards and Recognitions. Carving the success stories with huge experience of 18+ years and building happy clientele globally. </div>
                     </div>
                  </div>


                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="awards-silde owl-carousel">
                            <div class="col-md-12 col-12 my-md-0 my-3 text-lg-start text-md-center text-center pb-md-3 pb-1">
                                <div class=" border border-1 p-1 py-1 mx-1 h-100">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-lg-2 mt-md-0 mt-sm-2 mt-2 text-center">
                                    <img src="{{asset('/public')}}/assets/img/hero-section/clutch.webp" srcset="{{asset('/public')}}/assets/img/hero-section/clutch-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/clutch-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/clutch-1500.webp 1500w" class=" " alt="" width="194" height="219">
                                    </div>
                                </div>
                                <div class="col-12 text-dark fw-m fs-xxl-15 fs-xl-15 fs-lg-15 fs-md-14 fs-sm-14 fs-14 text-center pt-1">Top Web Developers United States 2023</div>
                            </div>
                            <div class="col-md-12 col-12 my-md-0 my-3 text-lg-start text-md-center text-center pb-md-3 pb-1">
                                <div class=" border border-1 p-1 py-1 mx-1 h-100">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-lg-2 mt-md-0 mt-sm-2 mt-2 text-center">
                                    <img src="{{asset('/public')}}/assets/img/hero-section/goodfirms.webp" srcset="{{asset('/public')}}/assets/img/hero-section/goodfirms-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/goodfirms.webp-1000 1000w, {{asset('/public')}}/assets/img/hero-section/goodfirms-1500.webp 1500w" class="" alt="" width="194" height="219">
                                    </div>
                                </div>
                                <div class="col-12 text-dark fw-m fs-xxl-15 fs-xl-15 fs-lg-15 fs-md-14 fs-sm-14 fs-14 text-center pt-1 ">Top App Development Company in USA</div>
                            </div>

                            <div class="col-md-12 col-12 my-md-0 my-3 text-lg-start text-md-center text-center pb-md-3 pb-1">
                                <div class=" border border-1 p-1 py-1 mx-1 h-100">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-lg-2 mt-md-0 mt-sm-2 mt-2 text-center">
                                    <img src="{{asset('/public')}}/assets/img/hero-section/topdevelopers.webp" srcset="{{asset('/public')}}/assets/img/hero-section/topdevelopers-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/topdevelopers-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/topdevelopers-1500.webp 1500w" class="" alt="" width="194" height="219">
                                    </div>
                                </div>
                                <div class="col-12 text-dark fw-m fs-xxl-15 fs-xl-15 fs-lg-15 fs-md-14 fs-sm-14 fs-14 text-center pt-1">Top Software Developers – 2023</div>
                            </div>
                            <div class="col-md-12 col-12 my-md-0 my-3 text-lg-start text-md-center text-center pb-md-3 pb-1">
                                <div class=" border border-1 p-1 py-1 mx-1 h-100">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-lg-2 mt-md-0 mt-sm-2 mt-2 text-center">
                                    <img src="{{asset('/public')}}/assets/img/hero-section/designrush.webp" srcset="{{asset('/public')}}/assets/img/hero-section/designrush-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/designrush-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/designrush-1500.webp 1500w" class="" alt="" width="194" height="219">
                                    </div>
                                </div>
                                <div class="col-12 text-dark fw-m fs-xxl-15 fs-xl-15 fs-lg-15 fs-md-14 fs-sm-14 fs-14 text-center pt-1">Best Web Development DesignRush – 2023</div>
                            </div>
                            <div class="col-md-12 col-12 my-md-0 my-3 text-lg-start text-md-center text-center pb-md-3 pb-1">
                                <div class=" border border-1 p-1 py-1 mx-1 h-100">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-lg-2 mt-md-0 mt-sm-2 mt-2 text-center">
                                    <img src="{{asset('/public')}}/assets/img/hero-section/mid-market.webp" srcset="{{asset('/public')}}/assets/img/hero-section/mid-market-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/mid-market-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/mid-market-1500.webp 1500w" class="" alt="" width="194" height="219">
                                    </div>
                                </div>
                                <div class="col-12 text-dark fw-m fs-xxl-15 fs-xl-15 fs-lg-15 fs-md-14 fs-sm-14 fs-14 text-center pt-1 ">Mid-Market High Performer United States – 2022-2023</div>
                            </div>
                     </div>
                     </div>
                </div>
               </div>
			</div>

              <div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-2 py-py-5 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-5 pb-5 position-relative our-services">
                    <div class="container position-relative zi-2 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-5 pb-5">
                            <div class="row align-items-center justify-content-center pb-xl-5 pb-lg-4 pb-md-3 pb-sm-5 pb-3">
                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
                                  <div class="row align-items-center">
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row pt-3 text-lg-start text-md-center text-center position-relative ">
                                            <div class="col-12">
                                                <div class="row pb-2">
                                                    <div class="col-12 headingv2 left text-white text-lg-start text-md-center text-center">
                                                          <span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22 fw-m">What We Can Do For You?</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-white mt-0 mb-lg-1">The core competencies in wide array of IT consulting services provided to the clients across the globe. Delivering complex software apps development to resource hiring you can rely on us. </div>
                                                
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-2 py-py-5 our-services-inner">
                        <div class="container position-relative bg-white p-xl-5 p-lg-5 p-md-3 p-sm-3 p-2 pb-xl-0 pb-0">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                  <div class="row align-items-center">
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row pt-3 text-lg-start text-md-center text-center position-relative ">
                                            <div class="col-12">
                                                <div class="row pb-2">
                                                    <div class="col-12 headingv2 left text-dark text-lg-start text-md-center text-center">
                                                          <span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22 fw-m">Full Cycle of IT Consulting Services</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark mt-0 mb-lg-1">Our strength lies in the comprehensive suite of services we offer to our clients. From full-stack development to just consultancy- you demand, we deliver. </div>
                                            </div>
                                      </div>
                                   </div>
                                </div>
                            </div>

                                <div class="row py-lg-3 py-md-3 py-2 zi-2 position-relative hire-section  how-appintment">
                                    <div class="row py-lg-3 appintment-box">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 pt-0 pt-lg-0 pt-md-0 mb-lg-4 p-0">  
                                            <ul class="nav nav-tabs mx-0 mt-lg-0 mt-md-0 mt-3" role="tablist">
                                                    <li class="nav-item w-lg-100 w-md-50 w-100"  role="presentation">
                                                    <a class="nav-link active btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-20 fw-m my-1 py-2 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3" data-bs-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">Software Consulting</a>
                                                    </li>
                                                    <li class="nav-item w-lg-100 w-md-50 w-100"  role="presentation">
                                                    <a class="nav-link btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-20 fw-m my-1 py-2 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3" data-bs-toggle="tab" href="#menu122" role="tab" aria-controls="Mobile App" aria-selected="false">Mobile App Development</a>
                                                    </li>
                                                    <li class="nav-item w-lg-100 w-md-50 w-100"  role="presentation">
                                                    <a class="nav-link btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-20 fw-m my-1 py-2 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3" data-bs-toggle="tab" href="#menu23" role="tab" aria-controls="Web" aria-selected="false"> Web Development</a>
                                                    </li>
                                                    <li class="nav-item w-lg-100 w-md-50 w-100"  role="presentation">
                                                    <a class="nav-link btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-20 fw-m my-1 py-2 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3" data-bs-toggle="tab" href="#menu24" role="tab" aria-controls="Blockchain" aria-selected="false">Blockchain development</a>
                                                    </li>
                                                    <li class="nav-item w-lg-100 w-md-50 w-100"  role="presentation">
                                                       <a class="nav-link btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-20 fw-m my-1 py-2 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3" data-bs-toggle="tab" href="#menu25" role="tab" aria-controls="Ecommerce" aria-selected="false">Ecommerce Solutions</a>
                                                    </li>
                                                    <li class="nav-item w-lg-100 w-md-50 w-100"  role="presentation">
                                                       <a class="nav-link btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-20 fw-m my-1 py-2 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3" data-bs-toggle="tab" href="#menu26" role="tab" aria-controls="Hire" aria-selected="false">Hire Developers</a>
                                                    </li>
                                                    <li class="nav-item w-lg-100 w-md-50 w-100"  role="presentation">
                                                       <a class="nav-link btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-20 fw-m my-1 py-2 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3" data-bs-toggle="tab" href="#menu27" role="tab" aria-controls="Trending" aria-selected="false">Trending Solutions</a>
                                                    </li>
                                                
                                              </ul>
                                          </div>

                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 pt-0">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div id="home1" class="container tab-pane active p-0" aria-labelledby="home-tab" role="tabpanel">
                                                <div class="row align-items-center justify-content-center">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                                        <div class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">Software Consulting</div>
                                                        <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-muted mt-lg-2 mt-md-2 tz" style="--tz:30px;">
                                                        End-to-End IT consultants to develop a software application to match your business requirements with a touch of user friendliness. Delivering technology for all business types at a competitive pricing.  </div>
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                                            <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/custom-software-development.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Custom Software Development </span></a></div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Bespoke Software Development</span></a></div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Software Product Development</span></a></div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Pos Software Development</span></a></div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/customer-relationship-management-software.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">CRM Software Development</span></a></div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Fintech Software Development</span></a></div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">SaaS Development</span></a></div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">ERP Software Development</span></a></div>    
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                           <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core Tech:</div>
                                                            <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                    <img class="position-relative" src="{{asset('/public')}}/assets/img/hero-section/java.webp" width="45" height="45" alt="Java" />
                                                                    <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Java</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                    <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/php.webp" width="45" height="45" alt="PHP" />
                                                                    <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">PHP</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                    <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/c.webp" width="45" height="45" alt="C#" />
                                                                    <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">C#</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                    <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/ruby.webp" width="45" height="45" alt="Ruby" />
                                                                    <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Ruby</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                    <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/python.webp" width="45" height="45" alt="Python " />
                                                                    <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Python</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                    <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/java-script.webp" width="45" height="45" alt="Java Script" />
                                                                    <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Java Script</span>
                                                                </a>
                                                            </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>


                                            <div id="menu122" class="container tab-pane fade p-0" aria-labelledby="mobile-tab" role="tabpanel">
                                               <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                                    <div class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">Mobile App Development</div>
                                                    <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-muted mt-lg-2 mt-md-2 tz" style="--tz:30px;">
                                                    Developing robust and fully functional mobile apps to scale your business operations at a faster rate. Specialize in iOS, Android and Hybrid mobile development to make is easily accessible to customers.  </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                                        <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/android-application-development.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Android App Development </span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hybrid / Cross Platform Development</span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/ios-app-development.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">iOS App Development</span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">PWA Development</span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/flutter-app-development')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l"> Flutter App Development </span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Wearable App Development</span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/react-native-app-development.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">React Native App Development</span></a></div>
                                                        <!-- <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="web-app-development.php" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 fw-l">Web App Development</span></a></div>     -->
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core Tech:</div>
                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/flutter.webp" width="45" height="45" alt="Flutter" />
                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Flutter</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/swift.webp" width="45" height="45" alt="Swift" />
                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Swift</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/reactnative.webp" width="45" height="45" alt="React Native" />
                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">React Native</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/kotlin.webp" width="45" height="45" alt="Kotlin" />
                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Kotlin</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/android.webp" width="45" height="45" alt="Android" />
                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Android</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/ios.webp" width="45" height="45" alt="ios" />
                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">IOS</span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                        <div class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-xl-start justify-content-center">
                                                            <a href="{{asset('/mobile-app-development.php')}}" class="btn  btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-lg-2 py-2 my-3 px-lg-5 py-2 px-3 ms-md-2">
                                                                <span class="d-flex align-items-center"><span>Explore Mobile App Development Services</span><i class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="menu23" class="container tab-pane fade p-0" aria-labelledby="web-tab" role="tabpanel">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                                    <div class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">Web Development</div>
                                                    <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-muted mt-lg-2 mt-md-2 tz" style="--tz:30px;">
                                                    From website to web applications to SaaS based apps the idea is enough for our team to develop a system beyond expectations with timeline projections. You just rely on our core team.  </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                                        <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/website-design.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Website Design</span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-full-stack-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Full Stack Development</span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/responsive-web-designing.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Responsive Website Design</span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-python-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Python Development</span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-php-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">PHP Development</span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Laravel Development</span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/wordpress-website-development.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Wordpress Development</span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/api-development.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">API Development</span></a></div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/cms-development.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">CMS Website Development</span></a></div>      
                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/website-redesigning.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Website Redesign</span></a></div>    
                                                           
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core Tech:</div>
                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/html.webp" width="45" height="45" alt="Html" />
                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Html</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/css.webp" width="45" height="45" alt="Css" />
                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Css</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/angularjs.webp" width="45" height="45" alt="Angular Js" />
                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Angular Js</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/nodejs.webp" width="45" height="45" alt="Node Js" />
                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Node Js</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/laraval.webp" width="45" height="45" alt="Laraval" />
                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Laraval</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/python.webp" width="45" height="45" alt="Python" />
                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Python</span>
                                                            </a>
                                                        </div>
                                                        </div>
                                                        <div class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-xl-start justify-content-center">
                                                            <a href="{{asset('/web-development.php')}}" class="btn  btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-lg-2 py-2 my-3 px-lg-5 py-2 px-3 ms-md-2">
                                                                <span class="d-flex align-items-center"><span>Explore Web Development Services</span><i class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="menu24" class="container tab-pane fade p-0" aria-labelledby="blockchain-tab" role="tabpanel">
                                               <div class="row align-items-center justify-content-center">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                                                    <div class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">Blockchain Development</div>
                                                                    <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-muted mt-lg-2 mt-md-2 tz" style="--tz:30px;">
                                                                    Designing, developing and deploying high-end blockchain development applications developed by experienced developers. Get the smart blockchain solutions to run your business smoothly </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                                                        <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Blockchain Development</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Smart Contract Development</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">NFT Development</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">NFT Marketplace Development</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Cryptocurrency Exchange Development</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Metaverse Development</span></a></div>
                                                                        
                                                                    </div>
                                                                    </div>
                                                                    <div class="row">
                                                                     <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core Tech:</div>
                                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/solidity.webp" width="45" height="45" alt="solidity" />
                                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Solidity</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/vyper.webp" width="45" height="45" alt="vyper" />
                                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Vyper</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/golang.webp" width="45" height="45" alt="golang" />
                                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Golang</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/simplicity.webp" width="45" height="45" alt="simplicity" />
                                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Simplicity</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/rholang.webp" width="45" height="45" alt="rholang" />
                                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Rholang</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                            <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                                <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/rust.webp" width="45" height="45" alt="rust" />
                                                                                <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Rust</span>
                                                                            </a>
                                                                        </div>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                      </div>

                                               <div id="menu25" class="container tab-pane fade p-0" aria-labelledby="ecommerce-tab" role="tabpanel">
                                               <div class="row align-items-center justify-content-center">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                                        <div class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">Ecommerce Solutions</div>
                                                        <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-muted mt-lg-2 mt-md-2 tz" style="--tz:30px;">
                                                        From Shopify to WooCommerce whatever ecommerce-based portal is your need our e-comm developers will fulfill the requirements without much technical requirements.   </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                                                <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                                                <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/ecommerce-website-development')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Ecommerce Development</span></a></div>
                                                                <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/ecommerce-website-development')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Ecommerce Website Development</span></a></div>
                                                                <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Magento Development</span></a></div>
                                                                <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Shopify Development</span></a></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core Tech:</div>
                                                            <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                    <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/magento.webp" width="45" height="45" alt="magento" />
                                                                    <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Magento</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                    <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/shopify.webp" width="45" height="45" alt="Shopify" />
                                                                    <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Shopify</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                    <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/bigcommerce.webp" width="45" height="45" alt="BigCommerce" />
                                                                    <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">BigCommerce</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                    <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/uber-cart.webp" width="45" height="45" alt="Ubercart" />
                                                                    <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Ubercart</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                    <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/woo-commerce.webp" width="45" height="45" alt="Woocommerce" />
                                                                    <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Woocommerce</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                    <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/wordpress.webp" width="45" height="45" alt="Wordpress" />
                                                                    <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Wordpress</span>
                                                                </a>
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-xl-start justify-content-center">
                                                                <a href="{{asset('/ecommerce-solutions.php')}}" class="btn  btn-button1 text-capitalize text-white ffs-xl-18 fs-lg-18 fs-md-19 fs-15
                                                                 py-lg-2 py-2 my-3 px-lg-5 py-2 px-3 ms-md-2">
                                                                    <span class="d-flex align-items-center"><span>Explore Ecommerce Solutions</span><i class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="menu26" class="container tab-pane fade p-0" aria-labelledby="hire-tab" role="tabpanel">
                                                <div class="row align-items-center justify-content-center">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                                                <div class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">Hire Developers</div>
                                                                <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-muted mt-lg-2 mt-md-2 tz" style="--tz:30px;">
                                                                Resource hiring is the model which is designed for the clients to fulfill their technical resource requirements. Hire IT consultant from any technology background we will get the resource available for you.</div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                                                        <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-mobile-app-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire Mobile App Developers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-android-app-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire Android App Developers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-ios-app-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire iOS App Developers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-react-native-app-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire React Native App Developers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-flutter-app-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire Flutter App Developers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-web-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire Website Developers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-php-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire PHP Developers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-python-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire Python Developers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-web-desginers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire Website Designers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-full-stack-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire Full Stack Developers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-mean-stack-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire MEAN Stack Developers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-mern-stack-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire MERN Stack Developers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire Laravel Developers</span></a></div>
                                                                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/hire-ui-ux-developers.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Hire UI / UX Developers</span></a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core Tech:</div>
                                                                    <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                        <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                            <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/fullstack.webp" width="45" height="45" alt="fullstack" />
                                                                            <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Fullstack</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                        <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                            <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/android.webp" width="45" height="45" alt="android" />
                                                                            <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Android</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                        <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                            <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/ios.webp" width="45" height="45" alt="ios" />
                                                                            <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">IOS</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                        <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                            <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/meanstack.webp" width="45" height="45" alt="Mean Stack" />
                                                                            <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Mean Stack</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                        <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                            <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/mernstack.webp" width="45" height="45" alt="Mern Stack" />
                                                                            <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Mern Stack</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                        <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                            <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/php.webp" width="45" height="45" alt="PHP" />
                                                                            <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">PHP</span>
                                                                        </a>
                                                                    </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                </div>

                                                <div id="menu27" class="container tab-pane fade p-0" aria-labelledby="trending-tab" role="tabpanel">
                                                    <div class="row align-items-center justify-content-center">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                                            <div class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">Trending Solutions</div>
                                                            <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-muted mt-lg-2 mt-md-2 tz" style="--tz:30px;">
                                                            Assisting business with creative technical solutions that follows the trend to give your business a boost. Talk to our expert to build a solution to keep yourself updated with the trend.  </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                                                    <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                                                    <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/food-delivery-app-development.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Food Delivery App Development</span></a></div>
                                                                    <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/grocery-app-development.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Grocery Delivery</span></a></div>
                                                                    <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/taxi-app-development-company.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Taxi App</span></a></div>
                                                                    <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Dating App</span></a></div>
                                                                    <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/fantasy-sports-app-development.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Fantasy sports App</span></a></div>
                                                                    <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/elearning-app-development.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Elearning App</span></div>
                                                                    <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/web-portal-development.php')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Web portal Development</span></a></div>
                                                                    <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Ewallet App</span></a></div>
                                                                    <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Video Streaming App</span></a></div>
                                                                    <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Messaging App</span></a></div>
                                                                    <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="{{asset('/')}}" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-10 fs-md-10 fs-14"></i> <span class="fs-xxl-17 fs-xl-17 fs-lg-17 fs-md-17 fs-sm-15 fs-15 fw-l">Social Media App</span></a></div>
                                                                

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core Tech:</div>
                                                                <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                    <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                        <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/nodejs.webp" width="45" height="45" alt="nodejs" />
                                                                        <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Node.Js</span>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                    <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                        <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/angularjs.webp" width="45" height="45" alt="angularjs" />
                                                                        <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Angularjs</span>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                    <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                        <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/react.png" width="45" height="45" alt="react" />
                                                                        <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">React Js</span>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                    <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                        <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/java.webp" width="45" height="45" alt="Java" />
                                                                        <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Java </span>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                    <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                        <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/php.webp" width="45" height="45" alt="Php" />
                                                                        <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Php </span>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                                                    <a href="javascript:;" class="text-decoration-none text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                                        <img class=" position-relative" src="{{asset('/public')}}/assets/img/hero-section/flutter.webp" width="45" height="45" alt="flutter" />
                                                                        <span class="d-block text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mt-2 text-darkk">Flutter </span>
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

                  
                <div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-2 py-py-5 overflow-hidden position-relative comments ">
                    <div class="container position-relative zi-2">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-10 col-sm-12 col-12">
                                  <div class="row align-items-center">
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row pt-3 text-lg-start text-md-center text-center position-relative ">
                                            <div class="col-12">
                                                <div class="row pb-2">
                                                    <h2 class="d-none invisible">Build. Launch. Grow.</h2>
                                                    <div class="col-12 headingv2 left text-black text-lg-start text-md-center text-center"><span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22 fw-m">Build. Launch. Grow.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-muted mt-0 mb-lg-1">IMG Global crafts award-winning digital experiences driven by strategy, design and technology. </div>
                                                <div class="col-12 pb-xl-3 pb-lg-3 pb-md-2 pb-sm-2 pb-3">
                                                        <a href="#casestudy-scroll" class="fw-m text-decoration-none text-capitalize text-dark fs-xl-32 fs-lg-32 fs-md-23 fs-22 ms-md-2">
                                                        <span class="d-block fw-m "><span class="d-flex justify-content-xl-start justify-content-center">See Our Work 
                                                             <img src="{{asset('/public')}}/assets/img/hero-section/arrowDown--black.svg" width="19" height="48" class=" pt-0 ms-2 arrow" alt=""></span></span>
                                                    </a>
                                                </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                      </div>
                    </div>

     
                    <div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 py-2 case-study-section overflow-hidden position-relative" id="casestudy-scroll">
                       <div class="container position-relative zi-2 py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-5 py-0" id="casestudy">
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
                                                   <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg" width="16" height="27"  class=" pt-0 ms-2 arrow" alt=""></span></span>
                                               </a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                                        <div class="row h-100  order-1">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center  order-1">
                                               <img src="{{asset('/public')}}/assets/img/hero-section/frame12.webp" width="509" height="509" class="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         
                          </div>
                     </div>


                     <div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 py-2 case-study-section overflow-hidden position-relative" id="casestudy-scroll">
                       <div class="container position-relative zi-2 py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-5 py-0" id="casestudy1">
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
                                                   <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg" width="16" height="27" class=" pt-0 ms-2 arrow" alt=""></span></span>
                                               </a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                                        <div class="row h-100  order-1">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center mob_img  order-1">
                                               <img src="{{asset('/public')}}/assets/img/hero-section/hozzo.webp" height="509" width="509" class="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         </div>
                     </div>


                     <div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 py-2 case-study-section overflow-hidden position-relative" id="casestudy-scroll">
                       <div class="container position-relative zi-2 py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-5 py-0" id="casestudy2">
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
                                                   <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg" width="16" height="27" class=" pt-0 ms-2 arrow" alt=""></span></span>
                                               </a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                                        <div class="row h-100  order-1">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center  mob_img order-1">
                                               <img src="{{asset('/public')}}/assets/img/hero-section/fab11.webp" height="509" width="509" class="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         
                          </div>
                     </div>



                     <div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 py-2 case-study-section overflow-hidden position-relative" id="casestudy-scroll">
                       <div class="container position-relative zi-2 py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-5 py-0" id="casestudy4">
                          <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-5 ps-sm-5 ps-5">
                                <div class="row text-lg-start text-md-center text-center position-relative pe-xxl-3 pe-xl-3 pe-lg-3 pe-md-3 pe-sm-1 pe-1 pt-xxl-3 pt-xl-3 pt-lg-3 pt-md-3 pt-sm-1 pt-4">
                                    <div class="col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-0 ps-sm-0 ps-0">
                                        <div class="row">
                                            <div class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-white text-lg-start text-md-start text-start">Fabindia</div>
                                            <div class="col-12 headingv2 left text-black"><span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22  text-white">Shop for Handwoven Garments & home fusnishings</span>
                                            </div>
                                            <div class="divider ms-xl-3"></div>
                                        </div>
                                           <div class="col-12 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-2 pb-1">
                                                <a href="javascript:;" class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2">
                                                   <span class="d-block fw-m"><span class="d-flex">View case study
                                                   <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg" width="16" height="27" class=" pt-0 ms-2 arrow" alt=""></span></span>
                                               </a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                                        <div class="row h-100  order-1">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center mob_img  order-1">
                                               <img src="{{asset('/public')}}/assets/img/hero-section/fabindia.webp" height="509" width="509" class="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         </div>
                     </div>



                        <div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-5 py-2 overflow-hidden position-relative">
                            <div class="container position-relative zi-2 py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-0 py-0">
                              <div class="row align-items-center justify-content-center">
                                <div class="col-lg-12">
                                   <div class="col-12 text-dark py-2 fs-xl-32 fs-lg-27 fs-md-23 fs-20 text-md-center text-center py-xxl-3 py-xl-3 py-lg-3 py-md-0 py-sm-3 py-0 px-lg-0 px-4 fw-m">
                                    let's take this growing relatioship to the next lavel
                                            </div>
                            
                                    <div class="col-12 text-center align-items-center pb-xxl-1 pb-xl-1 pb-lg-1 pb-md-0 pb-sm-0 pb-0">
                                        <a href="{{asset('/portfolio.php')}}" class="btn  btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-xl-2 py-lg-2 py-2 my-3 px-lg-5 py-2 px-2 ms-md-2">
                                        <span class="d-flex align-items-center"><span>View all Work  </span><i class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
                                    </a>
                                </div>
                             </div>
                           </div>
                          </div>
                         </div>


                        {{-- about us new section --}}
                            <div class="container-fluid overflow-hidden aboutNewSection">
                                <div class="container py-4">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-xxl-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                            <div class="row">
                                                <div class="col-12 headingv2 fs-md-14 fs-12 text-lg-start text-md-center text-center p-0"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">
                                                    <span class="fs-xl-32 fs-lg-27 fs-md-23 fs-20">Outsourcing Software Development To IMG Global Infotech </span></div>
                                                <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark my-3 px-0 text-lg-start text-md-center text-center">We are renowned IT consulting company who has managed to built trust in the industry by delivering unique and user-friendly software applications. Our expertise is in providing wide range of services such as Mobile app design & development, customize software development, online marketing, quality assurance testing, hire resource for small to big enterprises across the globe. </div>
                                                <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark my-3 px-0 text-lg-start text-md-center text-center">We are a recognized IT consulting firm holding ISO m1:2008 certification for providing Web and Mobile app development with latest technologies. We aim to deliver the best technology solutions for business regardless they are small or established enterprises. The client we served so far are happy with our service offerings in digital marketing to development that help them to operate their business with ease. 
                                                </div>
                                                {{-- <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark my-3 px-0 text-center text-md-start">Powered by an expert team committed towards their work and possessing required skills and capabilities to shine the client's business through processing digital innovation and intuitive mobile solutions based on their requirements.</div> --}}
                                                  {{--   <div class="col-12 px-0">
                                                    <div class="row countBoxOuter mx-0 g-3 text-center me-lg-n4">
                                                        <div class="col-sm-3 col-6">
                                                            <div class="countBox" style="--d: 0s">
                                                                <div class="aboutNumberText">1200+</div>
                                                                <div class="fs-xxl-16 fs-xl-15 fs-lg-14 fs-sm-13 fs-12 lh-normal text-dark fw-m">Successful <br>Projects</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <div class="countBox" style="--d: 1s">
                                                                <div class="aboutNumberText">98%</div>
                                                                <div class="fs-xxl-16 fs-xl-15 fs-lg-14 fs-sm-13 fs-12 lh-normal text-dark fw-m">Success <br>Ratio</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <div class="countBox" style="--d: 2s">
                                                                <div class="aboutNumberText">100+</div>
                                                                <div class="fs-xxl-16 fs-xl-15 fs-lg-14 fs-sm-13 fs-12 lh-normal text-dark fw-m">Team <br>Members</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <div class="countBox" style="--d: 3s">
                                                                <div class="aboutNumberText">8+</div>
                                                                <div class="fs-xxl-16 fs-xl-15 fs-lg-14 fs-sm-13 fs-12 lh-normal text-dark fw-m">Years in <br>Industry</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xxl-6 order-1 order-lg-2 text-center">
                                            <img width="546" height="463" src="{{asset('/public')}}/assets/img/about-us-new/get-more-insight-about-us.webp" srcset="{{asset('/public')}}/assets/img/about-us-new/m-aboutNew2.webp 700w, {{asset('/public')}}/assets/img/about-us-new/t-aboutNew2.webp 1000w, {{asset('/public')}}/assets/img/about-us-new/xl-aboutNew2.webp 1lw" class="img-fluid"  alt="About-us">
                                           {{--  <div class="row countBoxOuter mx-0 g-3 text-center row-cols-2 d-none d-sm-flex">
                                              <div class="col-sm-3 col-6">
                                                    <div class="countBox" style="--d: 0s">
                                                        <div class="aboutNumberText">1200+</div>
                                                        <div class="fs-xxl-18 fs-xl-17 fs-lg-16 fs-15 lh-normal text-dark fw-m">Successful <br>Projects</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="countBox" style="--d: 1s">
                                                        <div class="aboutNumberText">98%</div>
                                                        <div class="fs-xxl-18 fs-xl-17 fs-lg-16 fs-15lh-norma text-dark fw-m">Success <br>Ratio</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="countBox" style="--d: 1s">
                                                        <div class="aboutNumberText">100+</div>
                                                        <div class="fs-xxl-18 fs-xl-17 fs-lg-16 fs-15 lh-normal text-dark fw-m">Team <br>Members</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="countBox" style="--d: 0s">
                                                        <div class="aboutNumberText">8+</div>
                                                        <div class="fs-xxl-18 fs-xl-17 fs-lg-16 fs-15 lh-normal text-dark fw-m">Years in <br>Industry</div>
                                                    </div>
                                                </div>
                                            </div>  --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                       {{-- about us section end --}}

                      {{-- cta section --}}
                        <div class="container-fluid py-xxl-4 py-xl-4 py-lg-4 py-md-2 py-4 ctaSection">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 ctaCardSection">
                                        <div class="row">
                                            <div class="col-xl-9 col-12 mx-auto">
                                                <div class="row">
                                                    <h3 class="col-12 d-none invisible">Let’s turn your business idea into reality</h3>
                                                    <div class="col-12 fs-xl-32 fs-lg-32 fs-md-23 fs-22 fw-m text-white mb-4 text-center">
                                                       Let’s turn your business idea into reality
                                                    </div>
                                                    <div class="col-12 text-center fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 fw-l text-white mb-5">
                                                    Do you want to experience the best-in-class quality mobile apps? Send us your inquiry and one 
                                                    of our executives will catch you up in no time by Call, Email or Skype.
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <a href="{{asset('/request-a-quote.php')}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn  btn-button1 fs-xl-18 fs-lg-18 fs-md-19 fs-15 text-white  py-xxl-2 py-1 px-4">
                                                            <span class="d-flex align-items-center"><span>Book A Discovery Call</span> <i class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
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


   
    <div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-5 py-py-5 overflow-hidden position-relative industries-sec">
          <div class="container position-relative zi-2">
                <div class="row align-items-center">
                   <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="row pb-3 text-lg-center text-md-center text-center position-relative pe-xl-3 pe-lg-3 pe-md-0 pe-sm-0 pe-0">
                        <div class="col-12">
                            <div class="row pb-2">
                                <h2 class="d-none invisible">Industries We Serve</h2>
                                <div class="col-12 headingv2 center text-black"><span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22">Industries We Serve</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark py-xl-2 py-md-2 py-4 px-0 text-lg-center text-md-center text-center mx-auto"> We have experienced and skilled developers who have delivered successful mobile
                             apps for various industry verticals. Our professionals gather the client's needs and then plan for 
                            the right solutions, execute them, and make the client taste the success in their respective industries.</div>
                     </div>


                     <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                                <a class="lazyloaded" href="{{asset('/')}}">
                                    <figure class="lazyloaded">
                                        <img width="275" height="220" class="ls-is-cached lazyloaded"  alt="real estate" src="{{asset('/public')}}/assets/img/hero-section/realstate.webp"  srcset="{{asset('/public')}}/assets/img/hero-section/realstate-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/realstate-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/realstate-1500.webp 1500w"/>
                                    </figure>
                                    <figcaption class="lazyloaded"> Real Estate</figcaption>
                                </a>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 col">
                                <a class="lazyloaded" href="{{asset('/')}}">
                                    <figure class="lazyloaded">
                                        <img width="370" height="220" class="ls-is-cached lazyloaded"  alt="eduaction" src="{{asset('/public')}}/assets/img/hero-section/education.webp"  srcset="{{asset('/public')}}/assets/img/hero-section/education-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/education-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/education-1500.webp 1500w"/>
                                    </figure>
                                    <figcaption class="lazyloaded"> Education </figcaption>
                                </a>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12 col">
                                <a class="lazyloaded" href="{{asset('/')}}">
                                    <figure class="lazyloaded">
                                        <img width="200" height="220" class="ls-is-cached lazyloaded"   alt="Restaurant" src="{{asset('/public')}}/assets/img/hero-section/resturent.webp"  srcset="{{asset('/public')}}/assets/img/hero-section/restorent-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/restorent-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/restorent-1500.webp 1500w" />
                                    </figure>
                                    <figcaption class="lazyloaded">  Restaurant </figcaption>
                                </a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                                <a class="lazyloaded" href="{{asset('/')}}">
                                    <figure class="lazyloaded">
                                        <img width="275" height="220" class="ls-is-cached lazyloaded"  alt="Banking finance" src="{{asset('/public')}}/assets/img/hero-section/banking-finance.webp"  srcset="{{asset('/public')}}/assets/img/hero-section/banking-finance-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/banking-finance-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/banking-finance-1500.webp 1500w" />
                                    </figure>
                                    <figcaption class="lazyloaded">  Banking Finance </figcaption>
                                </a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                                <a class="lazyloaded" href="{{asset('/')}}">
                                    <figure class="lazyloaded">
                                        <img width="275" height="220" class="ls-is-cached lazyloaded"  alt="Logistic and Transport" src="{{asset('/public')}}/assets/img/hero-section/logistictransport.webp"/>
                                    </figure>
                                    <figcaption class="lazyloaded"> Logistic and Transport </figcaption>
                                </a>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12 col">
                                <a class="lazyloaded" href="{{asset('/')}}">
                                    <figure class="lazyloaded">
                                        <img width="560" height="220" class="ls-is-cached lazyloaded"   alt="Media and Entertainment" src="{{asset('/public')}}/assets/img/hero-section/mediaentertainment.webp"  srcset="{{asset('/public')}}/assets/img/hero-section/mediaentertainment-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/mediaentertainment-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/mediaentertainment-1500.webp 1500w" />
                                    </figure>
                                    <figcaption class="lazyloaded">  Media and Entertainment </figcaption>
                                </a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                                <a class="lazyloaded" href="{{asset('/healthcare-app-development.php')}}">
                                    <figure class="lazyloaded">
                                        <img width="275" height="220" class="ls-is-cached lazyloaded"  alt="Healthcare" src="{{asset('/public')}}/assets/img/hero-section/healthcare.webp"/>
                                    </figure>
                                    <figcaption class="lazyloaded px-2">  Healthcare  </figcaption>
                                </a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                                <a class="lazyloaded" href="{{asset('/')}}">
                                    <figure class="lazyloaded">
                                        <img width="275" height="220" class="ls-is-cached lazyloaded"  alt="Tours and Travels" src="{{asset('/public')}}/assets/img/hero-section/tourtravels.webp"/>
                                    </figure>
                                    <figcaption class="lazyloaded">  Tours and Travels </figcaption>
                                </a>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12 col">
                                <a class="lazyloaded" href="{{asset('/')}}">
                                    <figure class="lazyloaded">
                                        <img width="200" height="220" class="ls-is-cached lazyloaded"  alt="Oil and Gas" src="{{asset('/public')}}/assets/img/hero-section/oilgas.webp"  srcset="{{asset('/public')}}/assets/img/hero-section/oilgas-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/oilgas-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/oilgas-1500.webp 1500w" />
                                    </figure>
                                    <figcaption class="lazyloaded">  Oil and Gas  </figcaption>
                                </a>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 col">
                                <a class="lazyloaded" href="{{asset('/ecommerce-solutions.php')}}">
                                    <figure class="lazyloaded">
                                        <img width="400" height="220" class="ls-is-cached lazyloaded"   alt="Ecommerce" src="{{asset('/public')}}/assets/img/hero-section/ecommerce.webp"  srcset="{{asset('/public')}}/assets/img/hero-section/ecommerce-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/ecommerce-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/ecommerce-1500.webp 1500w" />
                                    </figure>
                                    <figcaption class="lazyloaded">  Ecommerce </figcaption>
                                </a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 col">
                                <a class="lazyloaded" href="{{asset('/food-delivery-app-development.php')}}">
                                    <figure class="lazyloaded">
                                        <img width="275" height="220" class="ls-is-cached lazyloaded"  alt="Food" src="{{asset('/public')}}/assets/img/hero-section/food.webp"/>
                                    </figure>
                                    <figcaption class="lazyloaded"> Food  </figcaption>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

           {{-- testimonial new section --}}
                <div class="container-fluid overflow-hidden newTesimonialSection position-relative">
                    <div class="container newTesimonialSectionInner h-100 position-relative zi-1 py-4 py-lg-5 py-xl-0">
                        <div class="row h-100 justify-content-center">
                            <div class="col-lg-10 col-xl-4">
                                <div class="row align-items-center h-100">
                                    <div class="col-12">
                                        <div class="row">
                                            <h3 class="d-none invisible">We’d Love To Hear From You</h3>
                                            <div class="col-12 px-0 heading2 fs-md-14 fs-12 left text-dark text-center text-xl-start"><span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22"> <b>We’d Love To Hear From You?</b></span></div>
                                            <div class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark px-0 py-3 text-center text-xl-start">We have experienced and skilled developers who have delivered successful Get Custom Solutions, Recommendations, Resumes, or, Estimates. Confidentiality & Same Day Response Guaranteed!                          </div>
                                            <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mb-1  px-0 text-black text-lg-start text-md-start text-center">100+ Awards In Last 11 Years 
                                            </div>	   
                                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mb-21 px-0  px-0 text-black text-lg-start text-md-start text-center"> 100% Client Satisfaction 
                                             </div>	   
                                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mb-1 px-0  px-0 text-black text-lg-start text-md-start text-center"> 1000+ Apps Delivered 
                                              </div>	   
                                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 mb-1 px-0  px-0 text-black text-lg-start text-md-start text-center"> 150+ Startups We Worked With
                                                </div>	    -->
                                      
                                           
                                            <div class="col-xl-auto text-center text-xl-start px-0 d-none d-xl-block">
                                                <a href="{{asset('/request-a-quote.php')}}" class="btn  btn-button1 text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15  my-3 px-lg-4 py-2 px-3">
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
                                                        <div class="testimonialUserImg  overflow-hidden">
                                                            <img width="300" height="300" src="{{asset('/public')}}/assets/img/new-testimonial/testimonial-2.webp" srcset="{{asset('/public')}}/assets/img/new-testimonial/testimonial-2-500.webp 500w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-2.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-2.webp 1500w" class="img-fluid"  alt="Alisha Sharma">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row bg-white mx-0">
                                                            <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-m">Miss. Alisha Sharma</div>
                                                            <div class="col-12 userDes fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark">Co-Founder, YSR Infotech</div>
                                                            <div class="col-12 userLocation fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark fw-l d-flex align-items-center">
                                                                <img width="11" height="16" src="{{asset('/public')}}/assets/img/new-testimonial/location.webp" class="loc-icon me-1"  alt="location-icon">
                                                                <span>New Delhi, India</span>
                                                            </div>
                                                            <div class="col-12 userMessage fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark mt-3">The client was very satisfied with the final product. IMG Global Infotech Pvt. Ltd provided a quick turnaround and high-quality services. They were able to strategize their deliverables well. The team utilized Scrum for project management and various apps for communication.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 testimonialCard">
                                                <div class="row align-items-center">
                                                    <div class="col-auto testimonialUserImgCol">
                                                        <div class="testimonialUserImg  overflow-hidden">
                                                        <img width="300" height="300" src="{{asset('/public')}}/assets/img/new-testimonial/testimonial-3.webp" srcset="{{asset('/public')}}/assets/img/new-testimonial/testimonial-3-500.webp 500w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-3.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-3.webp 1500w"  class="img-fluid"  alt="Arun Garg">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row bg-white mx-0">
                                                            <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-m">Mr. Arun Garg</div>
                                                            <div class="col-12 userDes fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark">Founder, CoachingSelect.com</div>
                                                            <div class="col-12 userLocation fs-xl-17 fs-lg-15 fs-13 text-dark fw-l d-flex align-items-center">
                                                                <img width="11" height="16" src="{{asset('/public')}}/assets/img/new-testimonial/location.webp" class="loc-icon me-1"  alt="location-icon">
                                                                <span>India</span>
                                                            </div>
                                                            <div class="col-12 userMessage fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark mt-3">IMG Global Infotech Pvt. Ltd helped the client improve their digital presence through the web portal. They finished the project within six months, which exceeded the client's expectations. In addition, they were customer-focused and accommodating to the client's queries.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 testimonialCard">
                                                <div class="row align-items-center">
                                                    <div class="col-auto testimonialUserImgCol">
                                                        <div class="testimonialUserImg  overflow-hidden">
                                                        <img width="300" height="300" src="{{asset('/public')}}/assets/img/new-testimonial/testimonial-1.webp" srcset="{{asset('/public')}}/assets/img/new-testimonial/testimonial-1-500.webp 500w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-1.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-1.webp 1500w" class="img-fluid"  alt="Sandeep Yadav">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row bg-white mx-0">
                                                            <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-m">Mr. Sandeep Yadav</div>
                                                            <div class="col-12 userDes fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark">Owner, Coherent Lab LLP</div>
                                                            <div class="col-12 userLocation fs-xl-17 fs-lg-15 fs-13 text-dark fw-l d-flex align-items-center">
                                                                <img width="11" height="16" src="{{asset('/public')}}/assets/img/new-testimonial/location.webp" class="loc-icon me-1"  alt="location-icon">
                                                                <span>India</span>
                                                            </div>
                                                            <div class="col-12 userMessage fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark mt-3">IMG Global Infotech Pvt. Ltd impressed the client with the final results. The client also lauded their quality work, proper communication via scrum meetings, efficient project management, and on-time delivery. Due to the success of the collaboration, the client hired them again for other projects..</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 testimonialCard">
                                                <div class="row align-items-center">
                                                    <div class="col-auto testimonialUserImgCol">
                                                        <div class="testimonialUserImg  overflow-hidden">
                                                        <img width="300" height="300" src="{{asset('/public')}}/assets/img/new-testimonial/testimonial-4.webp" srcset="{{asset('/public')}}/assets/img/new-testimonial/testimonial-4-500.webp 500w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-4.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-4.webp 1500w"  class="img-fluid"  alt="Anikendra Das Choudhury">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row bg-white mx-0">
                                                            <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-m">Mr. Anikendra Das Choudhury</div>
                                                            <div class="col-12 userDes fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark">CEO, MyFab11</div>
                                                            <div class="col-12 userLocation fs-xl-17 fs-lg-15 fs-13 text-dark fw-l d-flex align-items-center">
                                                                <img width="11" height="16" src="{{asset('/public')}}/assets/img/new-testimonial/location.webp" class="loc-icon me-1"  alt="location-icon">
                                                                <span>Kolkata, India</span>
                                                            </div>
                                                            <div class="col-12 userMessage fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark mt-3">Thanks to IMG Global Infotech's efforts, the project was completed successfully, satisfying the client's expectations. Although work was done remotely, their project management was seamless and efficient.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 testimonialCard">
                                                <div class="row align-items-center">
                                                    <div class="col-auto testimonialUserImgCol">
                                                        <div class="testimonialUserImg  overflow-hidden">
                                                        <img width="300" height="300" src="{{asset('/public')}}/assets/img/new-testimonial/t-avatar-1.webp"  srcset="{{asset('/public')}}/assets/img/new-testimonial/t-avatar-1-500.webp 500w, {{asset('/public')}}/assets/img/new-testimonial/t-avatar-1.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/t-avatar-1.webp 1500w" class="img-fluid"  alt="Bharat Sharma">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row bg-white mx-0">
                                                            <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-m">Mr. Bharat Sharma</div>
                                                            <div class="col-12 userDes fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark">Administrative Head, Injection Service At Home</div>
                                                            <div class="col-12 userLocation fs-xl-17 fs-lg-15 fs-13 text-dark fw-l d-flex align-items-center">
                                                                <img width="11" height="16" src="{{asset('/public')}}/assets/img/new-testimonial/location.webp" class="loc-icon me-1"  alt="location-icon">
                                                                <span>India</span>
                                                            </div>
                                                            <div class="col-12 userMessage fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-dark mt-3">Impressing their partner, IMG Global Infotech Pvt. Ltd brought many customers for the client. Their professionalism and active response were all remarkable, as demonstrated in their project updates every 2-3 days.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-auto text-center text-xl-start px-0 d-xl-none mt-2">
                                        <a href="{{asset('/request-a-quote.php')}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn  btn-button1 text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15  my-3 px-lg-4 py-2 px-3">
                                            <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    <!-- latest blog section -->
    <div class="container-fluid blog-section position-relative overflow-hidden">
        <div class="container position-relative zi-1 py-md-5 py-2">
            <div class="row">
                <div class="col-12 ">
                    <div class="row align-items-center justify-content-center">
                       <div class="col-xl-8 col-lg-8 col-md-8 headingv2 fs-md-14 fs-12 text-center mb-sm-0 mb-3">
                            <span class="fs-xl-26 fs-lg-24 fs-md-21 fs-20"> 
                             <span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22 text-theme3 d-block">Our Sneak Peak into the Tech-World!</span>
                                 Get Exciting Updates About Latest Technologies, Development Tips, & Trending Solutions Via Our Blogs </span></div>
                      </div>
                   </div>

                <div class="col-12 h-100">
                    <div class="row align-items-start">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 h-100 px-0 pt-2">
                                    <div class="row align-items-start mt-md-3 mt-2">
                                            <div class="col-12">
                                                <div class="row blog_slider-main owl-carousel">

                                                <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/multi-sports-fantasy-app-development-guide">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageA-Comprehensive-Guide-to-Developing-Multi-Sport-Fantasy-Apps.webp" class="img-fluid" alt="A Comprehensive Guide To Developing Multi-Sport Fantasy Apps" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/multi-sports-fantasy-app-development-guide" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">A Comprehensive Guide To Developing Multi-Sport Fantasy Apps</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                                 Developing a multi-sport fantasy app is a complex process, but it can be rewarding. In this guide, we will discuss the key steps in developing a successful multi-sport fantasy app, as the fantasy app development company suggested.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/multi-sports-fantasy-app-development-guide" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Sep 04, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>

                                                <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-fantasy-cricket-app-development">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageThe-Ultimate-Guide-to-Fantasy-Cricket-App-Development.webp" class="img-fluid" alt="The Ultimate Guide To Fantasy Cricket App Development" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-fantasy-cricket-app-development" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">The Ultimate Guide To Fantasy Cricket App Development</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                                  How to develop a fantasy cricket app? This guide can be your savior. So, let’s dive into the step-by-step process of fantasy cricket app development without further delay.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-fantasy-cricket-app-development" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Aug 25, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>


                                                    <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <a href="https://www.imgglobalinfotech.com/blog/how-to-create-a-fantasy-sports-website">
                                                                 <img src="{{asset('/public')}}/assets/img/blog-section/blogimageHow-to-Create-a-Fantasy-Sports-Website-6-Easy-Steps.jpg" class="img-fluid" alt="How To Create A Fantasy Sports Website - 6 Easy Steps" width="302" height="170">
                                                                </a>
                                                            </div>
                                                            <a href="https://www.imgglobalinfotech.com/blog/how-to-create-a-fantasy-sports-website" class="text-decoration-none">
                                                             <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark  fw-m pt-3 lineclamp2">How To Create A Fantasy Sports Website - 6 Easy Steps</div>
                                                            </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                                 In this blog, the professionals of a fantasy cricket website development company in India will unveil the secrets to creating a fantasy sports website.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-create-a-fantasy-sports-website" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img width="24" height="25" src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Aug 18, 2023</span>
                                                            </div>
                                                        
                                                        </div>
                                                     </div>
                                                     <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageList-Of-Top-10-Best-Fantasy-Cricket-Apps-in-India-2023.jpg" class="img-fluid" alt="List Of Top 10 Best Fantasy Cricket Apps In India 2023" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">List Of Top 10 Best Fantasy Cricket Apps In India 2023</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                              The top fantasy cricket app list includes Dream11, MyTeam11, ESPN, MyCircle11, and MPL. Each fantasy app has unique features, user experience, and contest offerings.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img width="24" height="25" src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Aug 10, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>
                                                     <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-companies-in-India">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageTop-Fantasy-Sports-App-Development-Companies-in-India.jpg" class="img-fluid" alt="Top Fantasy Sports App Development Companies In India [2023]" width="302" height="170">
                                                            </a>
                                    
                                                            </div>
                                                            <a href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-companies-in-India" class="text-decoration-none">
                                                             <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">Top Fantasy Sports App Development Companies In India [2023]</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                                This comprehensive guide highlights the list of the top fantasy sports app development companies in India, providing cutting-edge solutions for immersive sports gaming experiences.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-companies-in-India" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img width="24" height="25" src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Jul 13, 2023</span>
                                                            </div>
                                                        </div>
                                                     </div>

                                                     <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-fantasy-cricket-app-for-asia-cup">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageHow-To-Develop-Fantasy-Cricket-App-for-Asia-Cup-2023-A-Complete-Guide.jpg" class="img-fluid" alt="How To Develop Fantasy Cricket App For Asia Cup 2023 - [A Complete Guide]" width="302" height="170">
                                                            </a>
                                    
                                                            </div>
                                                            <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-fantasy-cricket-app-for-asia-cup" class="text-decoration-none">
                                                             <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">How To Develop Fantasy Cricket App For Asia Cup 2023 - [A Complete Guide]</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                                 Fantasy app development for cricket requires a significant investment of time and resources. It is essential to have a comprehensive understanding of the entire development process to achieve the desired outcome. Check this blog to know how to develop a fantasy cricket app for Asia cup 2023
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-fantasy-cricket-app-for-asia-cup" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Jul 06, 2023</span>
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

                            <div class="col-12 text-center align-items-center pb-xl-5 pb-lg-5 pb-md-0 pb-sm-0 pb-sm-0">
                                <a href="{{asset('/blog')}}" class="btn  btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-lg-1 py-0 my-3 px-lg-5 py-2 px-3 ms-md-2">
                                <span class="d-flex align-items-center"><span>View all Blog  </span><i class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
                            </a>
                          </div>
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

<script src="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.js"></script>
<!-- <script src="{{asset('/public')}}/assets/js/newindex.min.js"></script> -->
<script src="{{asset('/public')}}/assets/js/contact-us.min.js"></script>
<!-- <script src="{{asset('/public')}}/assets/js/index.min.js"></script> -->

<script src="{{asset('/public')}}/assets/js/fantasy-cricket-app-development.min.js"></script>

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





var el = document.getElementById('phone');
var input = document.querySelector("#phone");
if (el != null) {
    window.intlTelInput(input, {
        initialCountry: "in",
        separateDialCode: true,
        preferredCountries: ['in', 'us'],
        // utilsScript: "assets/vendor/intl-tel-input/js/utils.js",
    });
}



$('.awards-silde').owlCarousel({
    loop: true,
    items: 3,
    margin: 0,
    stagePadding:0,
    padding:0,
    // animateOut: 'fadeOut',
    nav: false,
    dots: false,
    autoplay: true,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 9000,
    autoplayHoverPause: true,
    smartSpeed: 250,
    autoHeight:true,
    responsiveClass: true,
    responsive: {
        0: {
            nav: false,
            dots: false,
            items: 2,
        },
        600: {
            nav: false,
            dots: false,
            items: 2,
        },
        1000: {
            nav: false,
            dots: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


$('.casestudy').owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    stagePadding:0,
    padding:0,
    // animateOut: 'fadeOut',
    nav: false,
    dots: false,
    autoplay: true,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 9000,
    autoplayHoverPause: true,
    smartSpeed: 250,
    autoHeight:true,
    responsiveClass: true,
    responsive: {
        0: {
            nav: false,
            dots: false,
        },
        600: {
            nav: false,
            dots: false,
        },
        1000: {
            nav: false,
            dots: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


$('.blog_slider-main').owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    autoplay: false,
    left: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    stagePadding: 0,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            dots: false,
            nav: false,
        },
        500: {
            items: 1,
            dots: false,
            nav: false,
        },
        600: {
            dots: false,
            nav: false,
        },
        992: {
            dots: false,
            nav: false,
            items: 2,
        },
        1000: {
            dots: false,
            nav: false,
            items: 3,
        },
        1299: {
            dots: false,
            nav: false,
            items: 3,
        },
        1499: {
            items: 3,
            dots: false,
            nav: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


// if (window.innerWidth > 991) {

// };


</script>
 


@endpush