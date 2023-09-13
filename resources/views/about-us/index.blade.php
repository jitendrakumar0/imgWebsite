@extends('main')
@push('meta')
    <!--  Title -->
    <title> About IMG | Web & Mobile App Development Company | Offshore IT Services</title>

    <!-- Required meta tags -->
    <meta name="title" content="About IMG | Web & Mobile App Development Company | Offshore IT Services" />
    <meta name="description" content="IMG Global Infotech is an ISO certified Web & Mobile App Development Company that delivered over 1200+ projects successfully completed in India, UK, USA and other countries." />
    <meta name="keywords" content="Web Development Company, E-Commerce Website, Android App Development, Mobile App, Best Website Design, Web Design Services, Web Development Services in Jaipur, Web Design and Development in India, Ecommerce Web Design Jaipur, Online Shopping Portal Development, Professional Website Design, Website Design Services, Web Development Company in India, Internet Marketing, Online Marketing Agency, Digital Marketing Services, About us IMG Global Infotech, IT Software Company, Best IT Company in Jaipur" />

    <!-- Twitter Meta -->
    <meta name="twitter:title" content="About IMG | Web & Mobile App Development Company | Offshore IT Services">
    <meta name="twitter:description" content="IMG Global Infotech is an ISO certified Web & Mobile App Development Company that delivered over 1200+ projects successfully completed in India, UK, USA and other countries.">
    <meta name="twitter:image" content="{{GETFOLDERPATH()}}/about-us.webp">

    <!-- Facebook Meta -->
    <meta property="og:url" content="{{asset('/')}}about-us.php">
    <meta property="og:title" content="About IMG | Web & Mobile App Development Company | Offshore IT Services">
    <meta property="og:description" content="IMG Global Infotech is an ISO certified Web & Mobile App Development Company that delivered over 1200+ projects successfully completed in India, UK, USA and other countries.">
    <meta property="og:image" content="{{GETFOLDERPATH()}}/about-us.webp">
    <meta property="og:image:secure_url" content="{{GETFOLDERPATH()}}/about-us.webp">


    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/public')}}/assets/img/logos/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/public')}}/assets/img/logos/favicon-16x16.png">
    
    <meta name="classification" content="Web Development Company, E-Commerce Website, Android App Development, Mobile App, Best Website Design, Web Design Services, Web Development Services in Jaipur, Web Design and Development in India, Ecommerce Web Design Jaipur, Online Shopping Portal Development, Professional Website Design, Website Design Services, Web Development Company in India, Internet Marketing, Online Marketing Agency, Digital Marketing Services, About us IMG Global Infotech, IT Software Company, Best IT Company in Jaipur" />
    <link rel="canonical" href="{{asset('/')}}about-us.php" />
    <meta name="robots" content="index, follow" />
@endpush
@push('styles')
    <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/about-us.min.css">
@endpush
@section('content')

<h1 class="d-none invisible">About Us</h1>
<div class="container-fluid overflow-hidden top_banner position-relative">
    <div class="container py-5 position-relative zi-2">
        <div class="row pt-4">
            <div class="col-12">
                <div class="row pt-4 align-items-center">
                   <div class="col-lg-5 py-lg-5 pt-md-5 pb-md-4 py-4 order-lg-0 order-md-1">
                    <div class="row pt-3 text-lg-start text-md-center text-center position-relative pe-3">
                        <div class="col-12">
                            <div class="row mx-0 pb-2">
                                <h2 class="d-none invisible">Empowering Businesses through Innovative Web & Mobile App Solutions</h2>
                                <div class="col-12 heading fs-md-14 fs-12 left text-white"><span class="fs-xl-29 fs-lg-28 fs-md-24 fs-20">Empowering Businesses through <b>Innovative Web & Mobile App Solutions</b></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 fw-600 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-white mt-3 mb-lg-3">Empowering Businesses through Innovative <b>Web & Mobile App Solutions </b>
                                    </div>
                        <div class="col-12 pt-3">
                        <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 text-white fs-xxl-13 fs-11 fw-bold py-xxl-2 py-1 px-lg-4 px-3 mb-xl-0 mb-3">
                                <span class="d-block"><span>Get Free Consultation</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 top_banner-left-part">
                    <div class="row justify-content-lg-end justify-content-md-center justify-content-center">
                            <div class="col-lg-12 col-md-12 position-relative align-self-end mt-lg-0 mt-md-4 mt-0">
                                <div class="row">
                                    <div class="col-12 ps-0">
                                    <div class="row">
                                        <div class="col-md-6 col-6 my-md-0 my-3 text-lg-start text-md-center text-center pb-md-3 pb-1">
                                            <div class="row border border-1 p-1 py-3 overviews mx-1 h-100">
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-12 mt-2">
                                                <img src="{{GETFOLDERPATH()}}/Successful-Projects.webp" class="h-md-60px h-45px" alt="Successful Projects">
                                                </div>
                                                <div class="col-xl-9 col-lg-9 col-md-9 col-12 fs-xxl-34 fs-xl-34 fs-lg-30 fs-md-26 fs-24 text-white fw-900">1200 <span class="ms-n1 fw-600 text-theme2">+</span>
                                                <div class="col-12 text-white fw-600 fs-xxl-17 fs-xl-17 fs-lg-13 fs-md-14 fs-14">Successful Projects</div>
                                                <h3 class="d-none invisible">Successful Projects</h3>
                                                 </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-6 my-md-0 my-3 text-lg-start text-md-center text-center pb-md-3 pb-1">
                                            <div class="row border border-1 p-1 py-3 overviews mx-1 h-100">
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-12 mt-2">
                                                <img src="{{GETFOLDERPATH()}}/success-ratio.webp" class="h-md-60px h-45px" alt="Success Ratio">
                                                </div>
                                                <div class="col-xl-9 col-lg-9 col-md-9 col-12 fs-xxl-34 fs-xl-34 fs-lg-30 fs-md-26 fs-24 text-white fw-900">98 <span class="ms-n1 fw-600 text-theme2">%</span>
                                                <div class="col-12 text-white fw-600 fs-xxl-17 fs-xl-17 fs-lg-13 fs-md-14 fs-14">Success Ratio</div>
                                                <h3 class="d-none invisible">Success Ratio</h3>
                                                 </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-6 my-md-0 my-3 text-lg-start text-md-center text-center">
                                            <div class="row border border-1 p-1 py-3 overviews mx-1 h-100">
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-12 mt-2">
                                                <img src="{{GETFOLDERPATH()}}/team-members.webp" class="h-md-60px h-45px" alt="Team Members">
                                                </div>
                                                <div class="col-xl-9 col-lg-9 col-md-9 col-12 fs-xxl-34 fs-xl-34 fs-lg-30 fs-md-26 fs-24 text-white fw-900">100 <span class="ms-n1 fw-600 text-theme2">+</span>
                                                <div class="col-12 text-white fw-600 fs-xxl-17 fs-xl-17 fs-lg-13 fs-md-14 fs-14">Team Members</div>
                                                <h3 class="d-none invisible">Team Members</h3>
                                                 </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-6 my-md-0 my-3 text-lg-start text-md-center text-center">
                                            <div class="row border border-1 p-1 py-3 overviews mx-1 h-100">
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-12 mt-2">
                                                <img src="{{GETFOLDERPATH()}}/Years-in-Industry.webp" class="h-md-60px h-45px" alt="Years in Industry">
                                                </div>
                                                <div class="col-xl-9 col-lg-9 col-md-9 col-12 fs-xxl-34 fs-xl-34 fs-lg-30 fs-md-26 fs-24 text-white fw-900">8  <span class="ms-n1 fw-600 text-theme2">+</span>
                                                <div class="col-12 text-white fw-600 fs-xxl-17 fs-xl-17 fs-lg-13 fs-md-14 fs-14">Years in Industry</div>
                                                <h3 class="d-none invisible">Years in Industry</h3>
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
        </div>
    </div>


    <!-- Bredcrumb section -->
    <div class="container-fluid overflow-hidden px-0 bredcrumb_main py-lg-3 py-md-2 py-2 d-md-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a class="fw-600 fs-lg-16 fs-md-15 fs-14 text-theme2 text-decoration-none" href="{{asset('/')}}">Home</a></li>
                        <li class="breadcrumb-item active fw-600 fs-lg-16 fs-md-15 fs-14 text-dark" aria-current="page">About Us</li>
                    </ol>
                </nav>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Welcome img section -->
    <div class="container-fluid overflow-hidden bg-white welcome-img position-relative">
        <div class="container py-5 position-relative zi-2">
            <div class="row">
                 <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 pe-lg-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-5 col-12">
                            <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/get-more-insight-about-us.webp" alt="Get More Insight About Us">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 mt-lg-0 mt-md-5 mt-5">
                        <div class="row">
                            <div class="col-12">
                            <div class="row mx-0 pb-4">
                                <h2 class="d-none invisible">Get More Insight About Us</h2>
                                <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Get More <b> Insight About Us </b></span>
                                </div>
                            </div>
                            </div>
                            <div class="col-12 fw-600 fs-lg-17 fs-md-15 fs-15 text-muted mt-1 justify">IMG is one of the trusted and Promising IT service providers delivering web development, mobile app development and custom software development services to start-up, mid level organizations and various big enterprises aiming to proffer digital success with robust applications. We have a proven track record in having 1200+ satisfied business clients and individuals from different verticals. We are committed to establish a long lasting and happy relationship with our clients.</div>
                            <div class="col-12 pt-4">
                            <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 fs-md-14 fs-13 fw-bold hero_read_more_btn py-2 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                                <span class="d-block"><span>Talk To IMG Team</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    
     <!-- Core Value section -->
     <div class="container-fluid core-value process-section position-relative overflow-hidden">
        <div class="container position-relative zi-1 py-md-5 pb-3 pt-3">
            <div class="row">
                 <div class="col-12">
                    <div class="row mx-0 pb-5">
                        <h3 class="d-none invisible">Our Value</h3>
                        <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20 text-white"> <span class="fs-md-32 fs-20">Our <b> Value </b></span></div>
                    </div>
                 </div>
             </div>
            <div class="row mx-0">
                <div class="col-md-4 mb-md-0 mb-4">
                    <div class="process-item h-100 ">
                        <div class="process-head">
                           <img class="w-lg-22 w-md-35 w-22" src="{{GETFOLDERPATH()}}/ensure-impact-fulInnovations.webp" alt="Ensure impactful innovations">
                            <span class="count-no fw-900 text-theme3 fs-lg-50 fs-md-45 fs-45">01</span>
                        </div>
                        <div class="process-content">
                        <h4 class="d-none invisible"> Ensure impactful innovations</h4>
                            <div class="col-12 fw-900 text-theme1 fs-lg-21 fs-md-17 fs-16 text-capitalize lh-normal mb-2">
                            Ensure impactful innovations
                            </div>
                            <div class="col-12 fw-600 fs-lg-16 fs-md-15 fs-15 text-muted mt-2">An unwavering commitment to drive maximum customer satisfaction, infused with integrity and passion.</p>
                        </div>
                        <div class="col-12 pt-4">
                        <a href="{{asset('/contact-us.php')}}" class="btn btn-theme1 fs-md-12 fs-13 fw-bold hero_read_more_btn py-1 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                            <span class="d-block"><span>Talk To IMG Team</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-md-4 mb-md-0 mb-4">
                    <div class="process-item h-100 ">
                        <div class="process-head">
                          <img class="w-lg-22 w-md-35 w-22" src="{{GETFOLDERPATH()}}/focus-on-self-development.webp" alt="Focus On Self Development">
                            <span class="count-no fw-900 text-theme3 fs-lg-50 fs-md-45 fs-45">02</span>
                        </div>
                        <div class="process-content">
                        <h4 class="d-none invisible">  Focus on self-development</h4>
                            <div class="col-12 fw-900 text-theme1 fs-lg-21 fs-md-17 fs-16 text-capitalize lh-normal mb-2">
                            Focus on self-development
                            </div>
                            <div class="col-12 fw-600 fs-lg-16 fs-md-15 fs-15 text-muted mt-2">Training and mentorship programs, interactive sessions and community meetups to drive personal growth.</p>
                        </div>
                        <div class="col-12 pt-4">
                        <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 fs-md-13 fs-13 fw-bold hero_read_more_btn py-1 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                            <span class="d-block"><span>Talk To IMG Team</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-md-4 h-100 mb-md-0 mb-4">
                    <div class="process-item">
                        <div class="process-head">
                        <img class="w-lg-22 w-md-35 w-22" src="{{GETFOLDERPATH()}}/integrate-work-life-Balance.webp" alt="Integrate Work Life Balance">
                            <span class="count-no fw-900 text-theme3 fs-lg-50 fs-md-45 fs-45">03</span>
                        </div>
                        <div class="process-content">
                        <h4 class="d-none invisible"> Integrate work-life balance</h4>
                            <div class="col-12 fw-900 text-theme1 fs-lg-21 fs-md-17 fs-16 text-capitalize lh-normal mb-2">
                            Integrate work-life balance
                            </div>
                            <div class="col-12 fw-600 fs-lg-16 fs-md-15 fs-15 text-muted mt-2">Latest infrastructure and flexible working hours along with many other privileges that inculcate healthy lifestyle choices.</p>
                        </div>
                        <div class="col-12 pt-4">
                        <a href="{{asset('/contact-us.php')}}" class="btn btn-theme1 fs-md-13 fs-13 fw-bold hero_read_more_btn py-1 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                            <span class="d-block"><span>Talk To IMG Team</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                        </a>
                        </div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

     <!-- make vision section -->
        <div class="container-fluid overflow-hidden bg-white make_vision position-relative" style="--bg:white;">
            <div class="container py-5 position-relative p-0">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 order-lg-0 order-md-1 order-1 mt-lg-0 mt-md-5 mt-5">
                        <div class="col-lg-12 col-12 mb-3 vmo">     
                                <div class="border-1 border">
                                    <div class="row align-items-center p-3">
                                    <div class="col-md-lg-3 col-md-3 col-12 d-flex justify-content-center align-items-center">
                                            <img src="{{GETFOLDERPATH()}}/our-mission.webp" class="w-md-70 w-30" alt="Our Mission"></div>
                                            <div class="col-md-lg-9 col-md-9 col-12">
                                            <h4 class="d-none invisible"> Our Mission </h4>
                                                <div class="col-12 fw-900 text-theme1 fs-lg-22 fs-md-17 fs-20 text-md-start text-center">Our Mission </div>
                                                <div class="fw-600 fs-lg-15 fs-md-15 fs-15 mb-0 text-md-start text-center">Our mission at IMG Global Infotech is to work towards the success of our 
                                                    clients in the most passionate and innovative way. We believe in incorporating dedication.</div>
                                            </div>
                                    </div>
                                </div>
                              </div>

                              <div class="col-lg-12 col-12 mb-3 vmo">     
                                  <div class="border-1 border">
                                    <div class="row align-items-center p-3">
                                    <div class="col-md-lg-3 col-md-3 col-12 d-flex justify-content-center align-items-center">
                                            <img src="{{GETFOLDERPATH()}}/our-vision.webp" class="w-md-70 w-30" alt="Our Vission"></div>

                                            <div class="col-md-lg-9 col-md-9 col-12">
                                            <h4 class="d-none invisible"> Our Vision </h4>
                                                <div class="col-12 fw-900 text-theme1 fs-lg-22 fs-md-17 fs-20 text-md-start text-center">Our Vision  </div>
                                                <div class="fw-600 fs-lg-15 fs-md-15 fs-15 mb-0 text-md-start text-center">Our Vision at IMG Global Infotech is to grow both vertically and horizontally to ascertain ourselves on top as a preferred IT solution provider in India. 
                                                     outstanding software .</div>
                                            </div>
                                    </div>
                                </div>
                              </div>


                              <div class="col-lg-12 col-12 mb-3 vmo">     
                                <div class="border-1 border">
                                    <div class="row align-items-center p-3">
                                      <div class="col-md-lg-3 col-md-3 col-12 d-flex justify-content-center align-items-center">
                                            <img src="{{GETFOLDERPATH()}}/our-value.webp" class="w-md-70 w-30" alt="Our Value"></div>
                                            <div class="col-md-lg-9 col-md-9 col-12">
                                            <h4 class="d-none invisible"> Our Values </h4>
                                                <div class="col-12 fw-900 text-theme1 fs-lg-22 fs-md-17 fs-20 text-md-start text-center">Our Values  </div>
                                                <div class="fw-600 fs-lg-15 fs-md-15 fs-15 mb-0 text-md-start text-center">Customer satisfaction is our #1 Priority. IMG Global Infotech was founded on the principle of offering reliable and efficient solution to customers and satisfying their needs. The irresistible force behind everything we do in our business is our strong ethics and beliefs.</div>
                                            </div>
                                    </div>
                                </div>
                              </div>
                            </div>


                        
                              <div class="col-lg-5 col-md-12 position-relative mt-4 mt-lg-0">
                                <div class="row h-100 align-items-center flex-column justify-content-center">
                                    <div class="col-12">
                                        <div class="row">
                                            <a href="https://www.designrush.com/agency/profile/img-global-infotech-private-limited" target="_blank" class="col-auto mx-auto mb-3 bg-light rounded px-3 py-2 designrushImg">
                                                <img src="{{GETFOLDERPATH()}}/top-mobile-app-development-company.webp" class="w-100" alt="Top Mobile App Development Company">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-11 mx-auto mt-4 text-center">
                                        <a href="https://www.designrush.com/agency/profile/img-global-infotech-private-limited" target="_blank" class="fs-lg-18 fs-md-17 fs-16 text-dark text-center fw-bold text-decoration-none">Review IMG GLOBAL INFOTECH PRIVATE LIMITED on DesignRush</a>
                                        
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>


           <!-- Top Android & Iphone App Developers India Accredited By section -->
           <div class="container-fluid overflow-hidden top-develpers-section py-4 position-relative">
                  <div class="container position-relative pt-md-3 pb-md-2">
                     <div class="row">
                           <div class="row mx-0 mb-lg-4 mb-md-4 mb-3">
                           <h3 class="d-none invisible">Awards and Recognition</h3>
                              <div class="col-12 heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Awards and<b> Recognition</b> </span></div>
                           </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center">
                          <div class="col-lg-11 col-md-11 col-12">
                              <div class="row">     
                                 <div class="col-lg-3 col-md-6 col-sm-6 col-6 p-3 review">
                                    <div class="box">
                                       <div class="col-12 text-center mb-4">
                                          <img class="w-22 position-relative" src="{{GETFOLDERPATH()}}/google.webp" alt="Google">
                                       </div>
                                       <div class="col-12 text-center">
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star-half text-theme3"></i>
                                             <span>4.6/5</span>
                                          </div>
                                         
                                    </div>
                                 </div>
 
                                 <div class="col-lg-3 col-md-6 col-sm-6 col-6 p-3 review">
                                    <div class="box">
                                       <div class="col-12 text-center mb-4">
                                          <img class="w-40 position-relative" src="{{GETFOLDERPATH()}}/clutch.webp" alt="Clutch">
                                       </div>
                                       <div class="col-12 text-center">
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star-half text-theme3"></i>
                                             <span>4.8/5</span>
                                          </div>
                                          
                                    </div>
                                 </div>


                                 <div class="col-lg-3 col-md-6 col-sm-6 col-6 p-3  review">
                                    <div class="box ">
                                       <div class="col-12 text-center mb-4">
                                          <img class="w-80 position-relative" src="{{GETFOLDERPATH()}}/extract.webp" alt="Extract">
                                       </div>
                                       <div class="col-12 text-center">
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star-half text-theme3"></i>
                                             <span>4.9/5</span>
                                          </div>
                                         
                                    </div>
                                 </div>

                                 <div class="col-lg-3 col-md-6 col-sm-6 col-6 p-3 review">
                                    <div class="box">
                                       <div class="col-12 text-center mb-4">
                                          <img class="w-80 position-relative" src="{{GETFOLDERPATH()}}/glassdoor.webp" alt="Glassdoor">
                                       </div>
                                       <div class="col-12 text-center">
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star text-theme3"></i>
                                             <i class="imgs img-star-half text-theme3"></i>
                                             <span>4.4/5</span>
                                          </div>
                                         
                                    </div>
                                 </div>
                              </div>
                           </div>
                          </div>
                         </div>
                       </div>         

     

        <!-- Our Process Work -->
        <div class="container-fluid overflow-hidden our-clientss position-relative">
            <div class="container position-relative py-lg-5 py-md-5 py-3 zi-2">
                <div class="row mx-0 pb-4">
                        <h3 class="d-none invisible">Our Process</h3>
                    <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Our <b> Process </b></span>
                    </div>
                </div>
                <div class="row mx-0 pb-4">
                    <div class="w-lg-20 w-md-33 w-100 mb-3 steps-process">     
                        <div class="border-1 border bg-white rounded-star rounded-3 brb">
                            <div class="row align-items-center p-3">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                        <img src="{{GETFOLDERPATH()}}/research.webp" class="w-30 mb-3" alt="Research">
                                    </div>
                                <div class="col-12">
                                    <div class="col-12 fw-900 text-white fs-lg-22 fs-md-17 fs-18 text-center">Research </div>
                                    <div class="fw-600 fs-lg-15 fs-md-15 fs-15 mb-0 text-center">We start by conducting thorough research to understand your target audience, market trends, and competition.  
                                outstanding software .</div>
                                </div>
                                </div>
                        </div>
                    </div>

                    <div class="w-lg-20 w-md-33 w-100 mb-3 steps-process"> 
                        <div class="border-1 border bg-white rounded-star rounded-3 brb">
                            <div class="row align-items-center p-3">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                        <img src="{{GETFOLDERPATH()}}/plan.webp" class="w-30 mb-3" alt="Plan">
                                    </div>
                                <div class="col-12">
                                    <div class="col-12 fw-900 text-white fs-lg-22 fs-md-17 fs-18 text-center">Plan </div>
                                    <div class="fw-600 fs-lg-15 fs-md-15 fs-15 mb-0 text-center">Based on the research findings, we work closely with you to define the app's goals, features, and functionalities. 
                                outstanding software .</div>
                                </div>
                                </div>
                        </div>
                    </div>

                    <div class="w-lg-20 w-md-33 w-100 mb-3 steps-process"> 
                        <div class="border-1 border bg-white rounded-star rounded-3 brb">
                            <div class="row align-items-center p-3">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                        <img src="{{GETFOLDERPATH()}}/implements.webp" class="w-30 mb-3" alt="Implement">
                                    </div>
                                <div class="col-12">
                                    <div class="col-12 fw-900 text-white fs-lg-22 fs-md-17 fs-18 text-center">Implement </div>
                                    <div class="fw-600 fs-lg-15 fs-md-15 fs-15 mb-0 text-center">Our skilled development team begins the implementation phase, where we build the app's architecture, database, and backend infrastructure. 
                                </div>
                                </div>
                                </div>
                        </div>
                    </div>

                    <div class="w-lg-20 w-md-33 w-100 mb-3 steps-process"> 
                        <div class="border-1 border bg-white rounded-star rounded-3 brb">
                            <div class="row align-items-center p-3">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                        <img src="{{GETFOLDERPATH()}}/testing.webp" class="w-30 mb-3" alt="Testing">
                                    </div>
                                <div class="col-12">
                                    <div class="col-12 fw-900 text-white fs-lg-22 fs-md-17 fs-18 text-center">Testing </div>
                                    <div class="fw-600 fs-lg-15 fs-md-15 fs-15 mb-0 text-center">Quality assurance is a critical step in our process. We conduct various tests, including functional testing, usability testing, performance testing.</div>
                                </div>
                                </div>
                        </div>
                    </div>

                    <div class="w-lg-20 w-md-33 w-100 mb-3 steps-process"> 
                        <div class="border-1 border bg-white rounded-star rounded-3 brb">
                            <div class="row align-items-center p-3">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                        <img src="{{GETFOLDERPATH()}}/optimize.webp" class="w-30 mb-3" alt="Optimize">
                                    </div>
                                <div class="col-12">
                                    <div class="col-12 fw-900 text-white fs-lg-22 fs-md-17 fs-18 text-center">Optimize </div>
                                    <div class="fw-600 fs-lg-15 fs-md-15 fs-15 mb-0 text-center">We continually optimize the app to enhance its performance, speed, and user experience.
                                outstanding software .</div>
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
                                                     <a href="https://www.imgglobalinfotech.com/blog/doctor-on-demand-mobile-application-development-cost-and-features" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/Doctor-On-Demand-Mobile-Application-Development-Overall-Cost-and-Features.avif" class="img-fluid" alt="Doctor On-Demand Mobile Application Development- Overall Cost And Features" width="302" height="170" >
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
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/10-Best-Real-Estate-Application-For-Buyers-Sellers-in-2023.avif" class="img-fluid" alt="10 Best Real Estate Application For Buyers & Sellers In 2023" width="302" height="170" >
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
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/On-Demand-Fuel-Delivery-Mobile-App-Development-in-2023.avif" class="img-fluid" alt="On-Demand Fuel Delivery Mobile App Development In 2023" width="302" height="170" >
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
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/Top-15-Celebrity-Look-Alike-Apps-2023.avif" class="img-fluid" alt="Top 15 Celebrity Look-Alike Apps 2023: Features, App Ideas, & Development" width="302" height="170" >
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
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/The-Ultimate-Guide-to-Food-Delivery-App-Development-Right-Tech-Stack-and-Features.avif" class="img-fluid" alt="The Ultimate Guide To Food Delivery App Development" width="302" height="170" >
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
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image h-auto" 
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
                                                                 <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image h-auto"  
                                                                 data-src="{{asset('/public')}}/assets/img/blog-section/time-and-Cost-to-Develop-Fantasy-Mobile-App-like-Myteam11-and-Howzatt.avif" class="img-fluid" alt="time-and-Cost-to-Develop-Fantasy-Mobile-App-like-Myteam11-and-Howzatt" width="298" height="170" >
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
                                                          <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image h-auto"  
                                                          data-src="{{asset('/public')}}/assets/img/blog-section/fantasy-Cricket-App-Development-like-Mycircle11-and-Myfab11.avif" class="img-fluid" alt="fantasy-Cricket-App-Development-like-Mycircle11-and-Myfab11" width="298" height="170" >
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
                                                             <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image h-auto"  
                                                             data-src="{{asset('/public')}}/assets/img/blog-section/readymade-Fantasy-Cricket-App-Development-Cost-A-Complete-Guide.avif" class="img-fluid" alt="readymade-Fantasy-Cricket-App-Development-Cost-A-Complete-Guide" width="298" height="170" >
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
                                                             <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image h-auto"  
                                                             data-src="{{asset('/public')}}/assets/img/blog-section/Fantasy-Cricket-App-Development-for-IPL-2023.avif" class="img-fluid" alt="Fantasy-Cricket-App-Development-for-IPL-2023" width="298" height="170" >
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
<script src="{{asset('/public')}}/assets/js/about-us.min.js"></script>
@endpush