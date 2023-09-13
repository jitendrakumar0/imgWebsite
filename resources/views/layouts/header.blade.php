@include('layouts.preloader')
<nav class="navbar navbar-expand-lg navbar-light bg-light d-block">
    <div class="container topbar d-lg-block d-none">
        <ul class="row justify-content-end mx-0 w-100 list-unstyled">
            <li class="col-auto px-xxl-1 px-0"><a class="text-decoration-none fs-xxl-16 fs-xl-16 fs-lg-16 fs-md-16 fs-sm-16 fs-16 fw-light d-flex rounded align-items-center wave-1 px-2 py-2 topbar-email" href="mailto:info@imgglobalinfotech.com"><i class="imgs me-1 fs-xxl-16 fs-xl-16 fs-lg-16 fs-md-16 fs-sm-16 fs-16 img-envelope"></i> <span>info@imgglobalinfotech.com</span></a></li>
            <li class="col-auto px-xxl-1 px-0"><a class="text-decoration-none fs-xxl-16 fs-xl-16 fs-lg-16 fs-md-16 fs-sm-16 fs-16 fw-light d-flex rounded align-items-center wave-1 px-2 py-2 topbar-skype" href="skype:kunwar.neeraj.rajput?call"><i class="imgb me-1 fs-xxl-16 fs-xl-16 fs-lg-16 fs-md-16 fs-sm-16 fs-16 img-skype"></i> <span>live:kunwar.neeraj.rajput</span></a></li>
            {{-- <li class="col-auto px-xxl-1 px-0 pe-0"><a class="text-decoration-none fs-xxl-14 fs-11 fw-light d-flex rounded align-items-center wave-1 px-2 py-2 topbar-phone" href="tel:+919876543210"><i class="imgs me-1 fs-xxl-16 fs-14 img-phone"></i> <span>+91 9876543210</span></a></li> --}}
        </ul>
    </div>
    <div class="container bottombar">
        <a class="navbar-brand animate order-1" href="{{asset('/')}}">
            <span class="blog_logo">
            <img src="{{asset('/public')}}/assets/img/logos/xl-logo.webp" srcset="{{asset('/public')}}/assets/img/logos/m-logo.webp 700w, {{asset('/public')}}/assets/img/logos/logo.webp 1000w, {{asset('/public')}}/assets/img/logos/xl-logo.webp 1200w" width="199" height="55" alt="IMG Global Infotech Logo">
            </span> 
            <span style="display:none" class="blog_logo1">
            <img src="{{asset('/public')}}/assets/img/logos/xl-logo.webp" srcset="{{asset('/public')}}/assets/img/logos/m-logo.webp 700w, {{asset('/public')}}/assets/img/logos/logo.webp 1000w, {{asset('/public')}}/assets/img/logos/xl-logo.webp 1200w" width="199" height="55" alt="IMG Global Infotech Logo">
            </span>
        </a>
        <button class="navbar-toggler border-0 shadow-none order-lg-2 order-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-label="mobile-menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" viewBox="0 0 27.623 18" class="injectable">
                <g transform="translate(-599 -99)">
                    <path d="M624.811,134.423h-24A1.817,1.817,0,0,1,599,132.611h0a1.817,1.817,0,0,1,1.811-1.811h24a1.817,1.817,0,0,1,1.811,1.811h0A1.817,1.817,0,0,1,624.811,134.423Z" transform="translate(0 -24.6)" fill="#000000"></path>
                    <path d="M618.019,166.123H600.811A1.817,1.817,0,0,1,599,164.311h0a1.817,1.817,0,0,1,1.811-1.811h17.208a1.817,1.817,0,0,1,1.811,1.811h0A1.817,1.817,0,0,1,618.019,166.123Z" transform="translate(0 -49.123)" fill="#000000"></path>
                    <path d="M613.491,102.623H600.811A1.817,1.817,0,0,1,599,100.811h0A1.817,1.817,0,0,1,600.811,99h12.679a1.817,1.817,0,0,1,1.811,1.811h0A1.817,1.817,0,0,1,613.491,102.623Z" fill="#000000"></path>
                </g>
            </svg>
        </button>
        <div class="collapse navbar-collapse d-lg-flex d-none order-3" id="navbarSupportedContent">
            <!-- <div class="col-12 d-lg-none d-flex sidebar_close_btn">
                <a href="#" class="text-decoration-none text-white fs-30 w-100 d-flex justify-content-end pe-3 h-60px align-items-center bg-theme3">
                    <i class="imgr img-times-circle"></i>
                </a>
            </div> -->
            <div class="col-auto ms-auto sidebar_scroll_part">
                <ul class="navbar-nav mb-2 mb-lg-0 pe-xxl-2 pe-xl-2 pe-ll-2 ">
                    <li class="nav-item  dropdown on-hover">
                      <a id="Company-mega-dropdown-button" class="nav-link text-uppercase fw-m fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1 dropdown-toggle" href="{{asset('/')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                      <div class="dropdown-menu py-0 maga_drop_down">
                            <div class="container py-xxl-4 py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sub-menu-center-block cus-full-block row rows">
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                                <div class="menuHeadTitle text-white fw-m fs-xxl-17 fs-16 m-0"><div class="fw-m m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Company</div></div>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/about-us.php')}}" class="text-nowrap">About Us</a></li>
                                                </ul>            
                                             
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/testimonials.php')}}" class="text-nowrap">Testimonials</a></li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="https://www.flickr.com/photos/imgglobalinfotech" target="_blank" class="text-nowrap">Life @IMG</a></li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/career.php')}}" class="text-nowrap">Career</a></li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/casestudy.php')}}" class="text-nowrap">Case Study</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item dropdown mega-menu on-hover">
                        <a id="services-mega-dropdown-button" class="nav-link text-uppercase fw-m fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1 dropdown-toggle" href="{{asset('/services.php')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <div class="dropdown-menu py-0 maga_drop_down">
                            <div class="container py-xxl-4 py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sub-menu-center-block cus-full-block row rows">
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col-3">
                                                <div class="menuHeadTitle text-white fw-m fs-xxl-17 fs-16 m-0"><div class="fw-m m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Mobile</div></div>
                                                <ul class=" w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/mobile-app-development.php')}}">Mobile App Development</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/android-application-development.php')}}">Android App </a>
                                                    </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/ios-app-development.php')}}">iOS App</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/flutter-app-development.php')}}">Flutter App</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/react-native-app-development.php')}}">React Native App</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                          <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/web-app-development.php')}}">Web App</a>
                                                        </li>
                                                </ul>
                                            </div>
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col-3">
                                                <div class="menuHeadTitle text-white fw-m fs-xxl-17 fs-16 m-0"><div class="fw-m m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Web</div></div>
                                                <ul class=" w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/web-development.php')}}">Web Development</a></li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/website-design.php')}}">Website Design</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/website-redesigning.php')}}">Website Redesign</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/responsive-web-designing.php')}}">Responsive Website Design</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                          <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/api-development.php')}}">API Development</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/cms-development.php')}}">CMS Website Development</a>
                                                       </li>
                                                </ul>
                                            </div>
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col-3">
                                                <div class="menuHeadTitle text-white fw-m fs-xxl-17 fs-16 m-0"><div class="fw-m m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Software</div></div>
                                                <ul class=" w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/oftware-development.php')}}">Custom Software Development</a></li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/customer-relationship-management-software.php')}}">CRM Software Development</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/')}}">SaaS Development</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/custom-erp-development.php')}}">ERP Software Development</a>
                                                        </li>
                                                </ul>
                                            </div>
                                            
                                          

                                            <!-- <div class="sub-menu-sec pt-lg-0 pt-3 col-4">
                                                <div class="menuHeadTitle text-white fw-m fs-xxl-17 fs-16 m-0"><div class="fw-m m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Marketing</div></div>
                                                <ul class=" w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/')}}">Digital Marketing</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/seo-services.php')}}">SEO</a><span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/app-store-optimization-services.php')}}">ASO</a><span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/pay-per-click-services.php')}}">PPC</a><span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/social-media-marketing-services.php')}}">SMO</a>
                                                    </li>
                                                </ul>
                                            </div> -->

                                            <div class="sub-menu-sec pt-lg-0 pt-3 col-3">
                                                <div class="menuHeadTitle text-white fw-m fs-xxl-17 fs-16 m-0"><div class="fw-m m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Fantasy Sports App</div></div>
                                                <ul class=" w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-sports-app-development.php')}}">Fantasy Sports App</a></li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-cricket-app-development.php')}}"> Fantasy Cricket App</a>
                                                        </li> 
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-football-app-development.php')}}">Fantasy Football App</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-kabaddi-app-development-1.php')}}"> Fantasy Kabbadi App</a>
                                                         </li>
                                                         <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-stock-market-app-development.php')}}">Fantasy Stock Market App</a>
                                                        </li>
                                                </ul>
                                            </div>
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                                <div class="menuHeadTitle text-white fw-m fs-xxl-17 fs-16 m-0"><div class="fw-m m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Ecommerce</div></div>
                                                <ul class=" w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/')}}">Ecommerce</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/ecommerce-website-development.php')}}">Ecommerce Website Development</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                                <div class="menuHeadTitle text-white fw-m fs-xxl-17 fs-16 m-0"><div class="fw-m m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Blockchain</div></div>
                                                  <ul class=" w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/')}}">Blockchain</a></li>
                                                 </ul>
                                                
                                            </div>

                                           
                                          
                                           
                                           
                                          

                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
      
                    <li class="nav-item dropdown mega-menu on-hover">
                        <a id="solutions-mega-dropdown-button" class="nav-link text-uppercase fw-m fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trending Solutions</a>
                        <div class="dropdown-menu py-0 maga_drop_down">
                            <div class="container py-xxl-4 py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sub-menu-center-block cus-full-block row rows">
                                         <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                            <div class="menuHeadTitle text-white fw-m fs-xxl-17 fs-16 m-0"><div class="fw-m m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Trending Solutions</div></div>
                                                <ul class=" w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/')}}">Trending Solutions</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/food-delivery-app-development.php')}}">Food Delivery App Development</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/grocery-app-development.php')}}"> Grocery Delivery</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/taxi-app-development-company.php')}}">Taxi App</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/healthcare-app-development.php')}}">Healthacare App </a>
                                                        </li> 
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/doctor-on-demand-app-development.php')}}">Doctor on Demand App</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/pharmacy-app-development.php')}}">Pharmacy App</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fitness-app-development.php')}}">Fitness App</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                          <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fashion-app-development.php')}}">Fashion App</a>
                                                          </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/jewellery-app-development.php')}}">Jwellery App</a>
                                                        </li>
                                                       
      
                                                    
                                                </ul>
                                                
                                            </div>
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                    <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/diet-and-nutrition-app-development.php')}}">Diet and Nutrotion App</a></li>
                                                <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                    <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/online-exam-app-development.php')}}">Online Exam App</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/matrimonial-portal-development.php')}}">Matrimonial App</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/property-portal-development.php')}}">Property Portal </a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/school-management-software.php')}}">School Management Software</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/gps-tracking-software.php')}}">GPS Traking Software</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/elearning-app-development.php')}}">Elearning App </a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/Hotel-management-software.php')}}">Hotel Management</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/inventory-management-software.php')}}">Inventory Management</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/vehicle-rental-software.php')}}">Vehicle Rental</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/real-estate-management-software.php')}}">Real State Management</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/news-portal-development.php')}}">News App</a></li>

                                                </ul>
                                            </div>
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                               
                                               <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                               <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/rfid-attendance-system-india.php')}}">RFID Tracking  </a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/college-management-software.php')}}">College Management System</a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/institute-management-software.php')}}">Institute Management Software </a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hospital-management-software.php')}}">Hospital Management System </a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/payroll-management-software.php')}}">HR & Payroll Management System</a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/nidhi-company-software-kerala.php')}}">Nidhi Software </a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/mlm-software-development-company.php')}}">MLM Software</a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/education-portal-development.php')}}">Education Portal</a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/financial-portal-development.php')}}">Financial Portalortal</a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/gym-management-software.php')}}">Gym Management</a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/credit-cooperative-society-software.php')}}">Credit Coopretive</a></li>
                                                   
                                               </ul>
                                           </div>
                                           <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                               
                                               <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/financial-management.php')}}">Financial Management </a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/nbfc-software.php')}}">Nbfc Software </a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/material-management.php')}}">Material Management</a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/biometric-attendance-software.php')}}">Biometric Attendence</a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/industrial-erp-development.php')}}">Industrial Erp</a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/online-exam-management-software.php')}}">Online Exam Management</a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-sports-app-development.php')}}">Fantasy Sports App</a>   </li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-stock-market-app-development.php')}}"> Fantasy Stock Market App </a></li>     
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-kabaddi-app-development-1.php')}}">Fantasy Kabbadi App</a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-cricket-app-development.php')}}">Fantasy Cricket App</a></li>
                                                   <li class="ssub-menu mt-1 ps-4 position-relative w-100"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-football-app-development.php')}}">Fantasy Football App</a></li>
                                               </ul>
                                           </div>
                                               
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="nav-item dropdown mega-menu on-hover">
                        <a id="hire-mega-dropdown-button" class="nav-link text-uppercase fw-m fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hire Developers</a>
                        <div class="dropdown-menu py-0 maga_drop_down">
                            <div class="container py-xxl-4 py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sub-menu-center-block cus-full-block row rows">
                                         <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                            <div class="menuHeadTitle text-white fw-m fs-xxl-17 fs-16 m-0"><div class="fw-m m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Hire Developers</div></div>
                                            <ul class=" w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-mobile-app-developers.php')}}">Hire Mobile App Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-android-app-developers.php')}}">Hire Android App Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-ios-app-developers.php')}}">Hire iOS App Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-react-native-app-developers.php')}}">Hire React Native App Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-flutter-app-developers.php')}}">Hire Flutter App Developers</a>
                                                    </li>
                                                   
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-php-developers.php')}}">Hire PHP Developers</a>
                                                    </li>
                                                   
      
                                                    
                                                </ul>
                                                
                                            </div>
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                             <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                            
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-python-developers.php')}}">Hire Python Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-web-designers.php')}}">Hire Website Designers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-mern-stack-developers.php')}}">Hire MERN Stack Developers</a>
                                                    </li>      
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-ui-ux-developers.php')}}">Hire UI / UX  Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-web-developers.php')}}">Hire Website Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/')}}">Hire Software Developers</a>
                                                    </li>
                                             </ul>
                                            </div>
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                              <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                             
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-reactjs-developers.php')}}">Hire React JS Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-full-stack-developers.php')}}">Hire Full Stack Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-java-developers.php')}}">Hire Java Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-angular-developers.php')}}">Hire Angularjs Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-mean-stack-developers.php')}}">Hire MEAN Stack Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-nodejs-developers.php')}}">Hire Node.js Developers</a>
                                                    </li>
                                              </ul>
                                            </div>


                                          

                                           
                                            
                                         
                                               
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>



              
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-m fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1" href="{{asset('/portfolio.php')}}"> Work</a>
                    </li>
   
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-m fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1" href="{{asset('/blog')}}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-m fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1" href="{{asset('/contact-us.php')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <form class="d-flex align-self-lg-start align-self-center ms-auto order-lg-4 order-2">
            {{-- <a class="d-lg-none d-none btn btn-theme1 fs-xxl-13 fs-lg-11 fs-13 mx-1 fw-l hero_read_more_btn py-xxl-1 py-1 px-4 coffee_with_us d-lg-flex d-none justify-content-center w-100" onclick="googleSearch()" data-bs-toggle="offcanvas" href="#top_search" role="button" aria-controls="offcanvasExample">
                <span class="d-flex text-nowrap"><i class="imgs img-search fs-md-14 fs-14" style="line-height:inherit;"></i></span>
            </a> --}}
			<a class="nav-link d-flex btn  btn-button1  fw-l fs-xxl-16 fs-xl-16 fs-lg-16 fs-14 mb-3 rounded text-white text-capitalize px-lg-3 py-xxl-2 py-xl-2 py-lg-2 py-md-1 py-sm-1 py-1 d-lg-flex d-none" href="{{asset('/request-a-quote.php')}}">Request a Quote<i class="imgd img-long-arrow-right position-relative fs-23 ms-2 arrowright"></i></a>
			
			
			
            {{---  <a class="fs-20 d-done d-md-done d-lg-none d-flex justify-content-center text-decoration-none me-2 h-30px align-items-center" onclick="googleSearch()" data-bs-toggle="offcanvas" href="#top_search" role="button" aria-controls="offcanvasExample" style="display:none">
                <span class="d-flex text-nowrap align-items-center"><i class="imgs img-search" ></i></span>
            </a> --}}
			
			{{--- <a class="fs-20 d-lg-none d-none d-flex justify-content-center text-decoration-none me-2 h-30px align-items-center" onclick="googleSearch()" data-bs-toggle="offcanvas" href="#top_search" role="button" aria-controls="offcanvasExample">
                <span class="d-flex text-nowrap align-items-center"><i class="imgs img-search"></i></span>
            </a> --}}
            <!-- <a class="fs-20 d-lg-none d-flex justify-content-center text-decoration-none mx-2 h-30px align-items-center d-done" data-bs-toggle="offcanvas" href="#contactWithIMG" role="button" aria-controls="offcanvasExample">
                <span class="d-flex text-nowrap align-items-center"><i class="imgs img-user-headset"></i></span>
            </a> -->
            <div class="d-lg-none nav-item dropdown dropstart on-hover navContactPopup d-lg-block d-none">
                <a class="btn btn-theme3 fs-xxl-13 fs-lg-11 fs-13 mx-1 fw-m hero_read_more_btn py-xxl-2 py-1 px-4 coffee_with_us d-lg-flex d-none justify-content-center w-100" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="d-flex text-nowrap"><i class="imgs img-phone"></i></span>
                </a>
                <div class="dropdown-menu py-0 right-n20px top-37px">
                    <div class="container px-3 pb-4 pt-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row flex-nowrap align-items-center border-bottom py-2 border-3">
                                    <div class="col-auto text-theme3 fs-25 pe-0">
                                        <i class="imgd img-headset"></i>
                                    </div>
                                    <div class="col text-nowrap text-theme3 fw-m fs-16">LET'S DISCUSS</div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-theme1 fs-15 fw-m pt-1 pb-1">IMG Helpline</div>
                                    <div class="col-12">
                                        <div class="row">
                                            <a href="tel:911442336011" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                                <div class="row mx-0 align-items-center flex-nowrap">
                                                    <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                                        <i class="imgs img-phone"></i>
                                                    </div>
                                                    <div class="col fw-m">+91-9694097245</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col mx-3 h-1px border-bottom my-2"></div>
                                    <div class="col-12 text-theme1 fs-15 fw-m pt-1 pb-1 text-nowrap">Fantasy App Development & Support</div>
                                    <div class="col-12">
                                        <div class="row">
                                            <a href="tel:919694097245" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                                <div class="row mx-0 align-items-center flex-nowrap">
                                                    <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                                        <i class="imgs img-phone"></i>
                                                    </div>
                                                    <div class="col fw-m">+91-9694097241</div>
                                                </div>
                                            </a>
                                            <a href="tel:919887034345" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                                <div class="row mx-0 align-items-center flex-nowrap">
                                                    <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                                        <i class="imgs img-phone"></i>
                                                    </div>
                                                    <div class="col fw-m">+91-9887034345</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col mx-3 h-1px border-bottom my-2"></div>
                                    <div class="col-12 text-theme1 fs-15 fw-m pt-1 pb-1">For Quick Connect</div>
                                    <div class="col-12">
                                        <div class="row">
                                            <a href="tel:919694097245" target="_blank" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                                <div class="row mx-0 align-items-center flex-nowrap">
                                                    <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                                        <i class="imgs img-phone"></i>
                                                    </div>
                                                    <div class="col fw-m">+91-9694097245</div>
                                                </div>
                                            </a>
                                            <a href="skype:kunwar.neeraj.rajput?call" target="_blank" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                                <div class="row mx-0 align-items-center flex-nowrap">
                                                    <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-theme1 d-grid align-items-center justify-content-center">
                                                        <i class="imgb img-skype"></i>
                                                    </div>
                                                    <div class="col fw-m">live:kunwar.neeraj.rajput</div>
                                                </div>
                                            </a>
                                            <a href="mailto:info@imgglobalinfotech.com" target="_blank" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                                <div class="row mx-0 align-items-center flex-nowrap">
                                                    <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-warning d-grid align-items-center justify-content-center">
                                                        <i class="imgs img-envelope"></i>
                                                    </div>
                                                    <div class="col fw-m">info@imgglobalinfotech.com</div>
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
        </form>
    </div>
</nav>


{{-- <div class="offcanvas offcanvas-end search_top" tabindex="-1" id="top_search" aria-labelledby="top_searchLabel">
    <div class="offcanvas-body">
        <button type="button" id="closeGoogleSearch" class="btn-close bg-white rounded-pill text-reset d-grid align-items-center justify-content-center h-50px position-absolute right-30px top-10px zi-1000" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div class="row searchBoxSection">
            <div class="col-12 search_Gsd"></div>
            <div class="col-12 text-center h-1px">
                <img src="{{asset('/public')}}/assets/img/logos/logo.webp" class="h-50px position-relative top-n90px" alt="IMG Global Infotech Logo">
            </div>
            <div class="col-12 ">
                <div class="row mx-0 align-items-start">
                    <div class="col" id="top_searchLabel">
                        <div class="gcse-search"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="offcanvas offcanvas-end search_top" tabindex="-1" id="contactWithIMG" aria-labelledby="contactWithIMGLabel">
    <div class="offcanvas-header">
        <div class="row flex-nowrap align-items-center border-bottom py-2 border-3 mx-0 w-100">
            <div class="col-auto text-theme3 fs-25 pe-0">
                <i class="imgd img-headset"></i>
            </div>
            <div class="col text-nowrap text-theme3 fw-m fs-16">LET'S DISCUSS</div>
            <div class="col-auto">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <div class="offcanvas-body">
        <div class="container px-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-12 text-theme1 fs-15 fw-m pb-1">IMG Helpline</div>
                        <div class="col-12">
                            <div class="row">
                                <a href="tel:911442336011" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                    <div class="row mx-0 align-items-center flex-nowrap">
                                        <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                            <i class="imgs img-phone"></i>
                                        </div>
                                        <div class="col fw-m">+91-9694097245</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col mx-3 h-1px border-bottom my-2"></div>
                        <div class="col-12 text-theme1 fs-15 fw-m pt-1 pb-1 text-nowrap">Fantasy App Development & Support</div>
                        <div class="col-12">
                            <div class="row">
                                <a href="tel:919694097245" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                    <div class="row mx-0 align-items-center flex-nowrap">
                                        <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                            <i class="imgs img-phone"></i>
                                        </div>
                                        <div class="col fw-m">+91-9694097241</div>
                                    </div>
                                </a>
                                <a href="tel:919887034345" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                    <div class="row mx-0 align-items-center flex-nowrap">
                                        <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                            <i class="imgs img-phone"></i>
                                        </div>
                                        <div class="col fw-m">+91-9887034345</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col mx-3 h-1px border-bottom my-2"></div>
                        <div class="col-12 text-theme1 fs-15 fw-m pt-1 pb-1">For Quick Connect</div>
                        <div class="col-12">
                            <div class="row">
                                <a href="tel:919694097245" target="_blank" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                    <div class="row mx-0 align-items-center flex-nowrap">
                                        <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                            <i class="imgs img-phone"></i>
                                        </div>
                                        <div class="col fw-m">+91-9694097245</div>
                                    </div>
                                </a>
                                <a href="skype:kunwar.neeraj.rajput?call" target="_blank" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                    <div class="row mx-0 align-items-center flex-nowrap">
                                        <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-theme1 d-grid align-items-center justify-content-center">
                                            <i class="imgb img-skype"></i>
                                        </div>
                                        <div class="col fw-m">live:kunwar.neeraj.rajput</div>
                                    </div>
                                </a>
                                <a href="mailto:info@imgglobalinfotech.com" target="_blank" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                    <div class="row mx-0 align-items-center flex-nowrap">
                                        <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-warning d-grid align-items-center justify-content-center">
                                            <i class="imgs img-envelope"></i>
                                        </div>
                                        <div class="col fw-m">info@imgglobalinfotech.com</div>
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



<div class="offcanvas mobile_header offcanvas-start sidebar" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header align-items-center">
        <div class="offcanvas-title" id="offcanvasExampleLabel">
            <a class="navbar-brand order-1" href="{{asset('/')}}">
                <img src="{{asset('/public')}}/assets/img/logos/logo.webp" srcset="{{asset('/public')}}/assets/img/logos/m-logo.webp 850w, {{asset('/public')}}/assets/img/logos/logo.webp 1280w" class="h-35px" width="127" height="35" alt="IMG Global Infotech Logo">
            </a>
        </div>
        <button type="button" class="text-decoration-none fs-25 text-dark border-0" data-bs-dismiss="offcanvas" aria-label="Close" style="background: transparent;color: #fff !important;">
            <i class="imgs img-times"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion levelFirst" id="levelFirst">
            <a href="{{asset('/')}}" class="sidebar-item fw-l fs-17 border-0 mb-2 collapsed">
                Home
            </a>
            <div class="accordion-item">
                <div class="accordion-header py-2" id="headingmenu4">
                    <button class="accordion-button fw-l fs-17 border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemenu4" aria-expanded="false" aria-controls="collapsemenu4">
                        Company
                    </button>
                </div>
              
                <div id="collapsemenu4" class="accordion-collapse collapse" aria-labelledby="headingmenu4" data-bs-parent="#levelFirst">
                    <div class="accordion-body pt-0 px-2">
                        <div class="row sidebar_group ps-3">
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/about-us.php')}}" class="col-12 text-decoration-none fs-13 text-white fw-l">About Us</a>
                                </div>
                                <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/testimonials.php')}}" class="col-12 text-decoration-none fs-13 text-white fw-l">Testimonials</a>
                                </div>
                                <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                    <a href="https://www.flickr.com/photos/imgglobalinfotech" target="_blank" class="col-12 text-decoration-none fs-13 text-white fw-l">Life @IMG</a>
                                </div>
                                <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/career.php')}}" class="col-12 text-decoration-none fs-13 text-white fw-l">Career</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header py-2" id="headingmenu1">
                    <button class="accordion-button fw-l fs-17 border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemenu1" aria-expanded="false" aria-controls="collapsemenu1">
                        Services
                    </button>
                </div>
                <div id="collapsemenu1" class="accordion-collapse collapse" aria-labelledby="headingmenu1" data-bs-parent="#levelFirst">
                    <div class="accordion-body pt-0 px-2">
                        <div class="row sidebar_group ps-3">
                            <div class="col-12 fw-l fs-17 text-white ps-1 pb-2">Mobile</div>
                            <div class="col-12 ps-1">
                                <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/mobile-app-development.php')}}" class="col-12 text-decoration-none fs-15 text-white fw-l">Mobile App Development</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/android-application-development.php')}}" class="col-12 fs-14 text-white">Android App Development</a>
                                            <a href="{{asset('/ios-app-development.php')}}" class="col-12 fs-14 text-white">iOS App Development</a>
                                            <a href="{{asset('/flutter-app-development.php')}}" class="col-12 fs-14 text-white ">Flutter App Development</a>
                                            <!-- <a href="{{asset('/cross-platform-app-development')}}" class="col-12 fs-14 text-white ">Cross Platform App Development</a>
                                            <a href="javascript:;" class="col-12 fs-14 text-white">Wearable App Development</a>
                                            <a href="javascript:;" class="col-12 fs-14 text-white">PWA Development</a> -->
                                            <a href="{{asset('/react-native-app-development.php')}}" class="col-12 fs-14 text-white">React Native App Development</a>
                                            <a href="{{asset('/web-app-development.php')}}" class="col-12 fs-14 text-white">Web App Development</a>
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                    <!-- <a href="{{asset('/web-development.php')}}" class="col-12 text-decoration-none fs-15 text-white fw-l text-white">Cross Platform App Development</a> -->
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Coming Soon" href="javascript:;" class="col-auto fs-14 text-white">React Native</a>
                                            <a href="{{asset('/ionic-app-development.php')}}" class="col-auto fs-14 text-white">Ionic</a>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Coming Soon" href="javascript:;" class="col-auto fs-14 text-white">Flutter</a>
                                        </div>
                                    </div>
                                </div> --}}

                               <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/fantasy-sports-app-development.php')}}" class="col-12 text-decoration-none fs-15 text-white fw-l">Fantasy Sports Development</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/fantasy-cricket-app-development.php')}}" class="col-auto fs-14 text-white">Fantasy Cricket App</a>
                                            <a href="{{asset('/fantasy-football-app-development.php')}}" class="col-auto fs-14 text-white">Fantasy Football App</a>
                                            <a href="{{asset('/fantasy-kabaddi-app-development.php')}}" class="col-auto fs-14 text-white">Fantasy Kabaddi App</a>
                                            <a href="{{asset('/fantasy-stock-market-app-development.php')}}" class="col-auto fs-14 text-white">Fantasy Stock Market App</a>
                                        </div>
                                    </div>
                                </div>

                               
                            </div>
                        </div>
                        <div class="row sidebar_group ps-3">
                            <div class="col-12 fw-l fs-18 text-white ps-2 pb-2 ">Web</div>
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                <a href="{{asset('/web-development.php')}}" class="col-12 text-decoration-none fs-15 text-white fw-l">Web Development</a>   
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                                <a href="{{asset('/website-design.php')}}" class="col-12 fs-14 text-white">Website Design</a>
                                                <a href="{{asset('/website-redesigning.php')}}" class="col-12 fs-14 text-white">Website Redesign</a>
                                                <a href="{{asset('/responsive-web-designing.php')}}" class="col-12 fs-14 text-white">Responsive Website Design</a>
                                                <!-- <a href="{{asset('javascript:;')}}" class="col-12 fs-14 text-white">Full Stack Development</a> -->
                                                <!-- <a href="{{asset('javascript:;')}}" class="col-12 fs-14 text-white">Python Development</a> -->

                                                <!-- <a href="{{asset('javascript:;')}}" class="col-12 fs-14 text-white">Php Development</a> -->
                                                <!-- <a href="{{asset('javascript:;')}}" class="col-12 fs-14 text-white">Laravel Development</a> -->
                                                <!-- <a href="{{asset('javascript:;')}}" class="col-12 fs-14 text-white">Wordpress Development</a> -->
                                                <a href="{{asset('/api-development.php')}}" class="col-12 fs-14 text-white">API Development</a>
                                                <a href="{{asset('/cms-development.php')}}" class="col-12 fs-14 text-white">CMS Website Development</a>
                                                <!-- <a href="{{asset('javascript:;')}}" class="col-12 fs-14 text-white">Drupal Development</a> -->                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row sidebar_group ps-3">
                            <div class="col-12 fw-l fs-17 text-white ps-2 pb-2">Ecommerce</div>
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/digital-marketing-services.php')}}" class="col-12 text-decoration-none fs-15 text-white fw-l">Ecommerce</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <!-- <a href="{{asset('/javascript:;')}}" class="col-12 fs-14 text-white">Ecommerce App Development</a> -->
                                            <a href="{{asset('/ecommerce-website-development.php')}}" class="col-12 fs-14 text-white">Ecommerce Website Development</a>
                                            <!-- <a href="{{asset('/javascript:;')}}" class="col-12 fs-14 text-white">Magento Development</a> -->
                                            <!-- <a href="{{asset('/javascript:;')}}" class="col-12 fs-14 text-white">Shopify Development</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                    <a href="#" class="col-12 text-decoration-none fs-15 text-white fw-l">Software</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/software-development.php')}}" class="col-12 fs-14 text-white">Custom Software Development</a>
                                            <!-- <a href="{{asset('/javascript:;')}}" class="col-12 fs-14 text-white">Bespoke Software Development </a> -->
                                            <!-- <a href="{{asset('/javascript:;')}}" class="col-12 fs-14 text-white">Software Product Development </a> -->
                                            <!-- <a href="{{asset('/javascript:;')}}" class="col-12 fs-14 text-white"> Pos Software Development</a> -->
                                            <a href="{{asset('customer-relationship-management-software.php')}}" class="col-12 fs-14 text-white">CRM Software Development </a>
                                            <a href="{{asset('/javascript:;')}}" class="col-12 fs-14 text-white"> SaaS Development</a>
                                            <!-- <a href="{{asset('/javascript:;')}}" class="col-12 fs-14 text-white">DevOps Consulting </a> -->
                                            <a href="{{asset('/custom-erp-development.php')}}" class="col-12 fs-14 text-white">ERP Software Development</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row sidebar_group ps-3">
                            <div class="col-12 fw-l fs-17 text-white ps-2 pb-2">Blockchain</div>
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                    <!-- <a href="{{asset('/offshore-web-development-india.php')}}" class="col-12 text-decoration-none fs-15 text-white fw-l">Blockchain Development</a> -->
                                    <!-- <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/avascript:;')}}" class="col-auto fs-14 text-white">Smart Contract Development</a>
                                            <a href="{{asset('/avascript:;')}}" class="col-auto fs-14 text-white">NFT Development</a>
                                            <a href="{{asset('/avascript:;')}}" class="col-auto fs-14 text-white">NFT Marketplace Development</a>
                                            <a href="{{asset('/avascript:;')}}" class="col-auto fs-14 text-white">Cryptocurrency Exchange Development</a>
                                            <a href="{{asset('/avascript:;')}}" class="col-auto fs-14 text-white">Metaverse Development</a>
                                           </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="row sidebar_group ps-3">
                            <div class="col-12 fw-l fs-18 text-white ps-2 pb-2">Marketing</div>
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/digital-marketing-services.php')}}" class="col-12 text-decoration-none fs-15 text-white fw-l">Digital Marketing</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/seo-services.php')}}" class="col-12 fs-14 text-white">SEO</a>
                                            <a href="{{asset('/pay-per-click-services.php')}}" class="col-12 fs-14 text-white">PPC</a>
                                            <a href="{{asset('/social-media-marketing-services.php')}}" class="col-12 fs-14 text-white">SMO</a>
                                            <a href="{{asset('/app-store-optimization-services.php')}}" class="col-12 fs-14 text-white">ASO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <div class="accordion-header py-2" id="headingmenu2">
                    <button class="accordion-button fw-l fs-17 border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemenu2" aria-expanded="false" aria-controls="collapsemenu2">
                    Trending Solutions
                    </button>
                </div>
                <div id="collapsemenu2" class="accordion-collapse collapse" aria-labelledby="headingmenu2" data-bs-parent="#levelFirst">
                    <div class="accordion-body pt-0 px-2">
                        <div class="row sidebar_group ps-3">
                            <div class="col-12 fw-l fs-17 text-white ps-1 pb-2">Trending Solutions</div>
                            <div class="col-12 ps-1">
                                <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                 
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/food-delivery-app-development.php')}}" class="col-12 fs-14 text-white">Food Delivery App Development</a>
                                            <a href="{{asset('/grocery-app-development.php')}}" class="col-12 fs-14 text-white">Grocery Delivery </a>
                                            <a href="{{asset('/taxi-app-development-company.php')}}" class="col-12 fs-14 text-white">Taxi App </a>
                                            <a href="{{asset('/healthcare-app-development.php')}}" class="col-12 fs-14 text-white">Healthacare App </a>
                                            <a href="{{asset('/doctor-on-demand-app-development.php')}}" class="col-12 fs-14 text-white"> Doctor on Demand App</a>
                                            <a href="{{asset('/pharmacy-app-development.php')}}" class="col-12 fs-14 text-white">Pharmacy App </a>
                                            <a href="{{asset('/fitness-app-development.php')}}" class="col-12 fs-14 text-white">Fitness App</a>
                                            <a href="{{asset('/diet-and-nutrition-app-development.php')}}" class="col-12 fs-14 text-white">Diet and Nutrotion App</a>
                                            <a href="{{asset('/fashion-app-development.php')}}" class="col-12 fs-14 text-white">Fashion App</a>
                                            <a href="{{asset('/jewellery-app-development.php')}}" class="col-12 fs-14 text-white"> Jwellery App</a>
                                            <a href="{{asset('/online-exam-app-development.php')}}" class="col-12 fs-14 text-white">Online Exam App</a>  
                                            <a href="{{asset('/matrimonial-portal-development.php')}}" class="col-12 fs-14 text-white">Matrimonial App</a>
                                            <a href="{{asset('/property-portal-development.php')}}" class="col-12 fs-14 text-white">Property Portal</a>
                                            <a href="{{asset('/news-portal-development.php')}}" class="col-12 fs-14 text-white">News App</a>
                                            <a href="{{asset('/school-management-software.php')}}" class="col-12 fs-14 text-white"> School Management Software</a>
                                            <a href="{{asset('/gps-tracking-software.php')}}" class="col-12 fs-14 text-white">GPS Traking Software</a>
                                            <a href="{{asset('/rfid-attendance-system-india.php')}}" class="col-12 fs-14 text-white">RFID Tracking </a>
                                            <a href="{{asset('/college-management-software.php')}}" class="col-12 fs-14 text-white">College Management System</a>
                                            <a href="{{asset('/institute-management-software.php')}}" class="col-12 fs-14 text-white"> Institute Management Software </a>
                                            <a href="{{asset('/hospital-management-software.php')}}" class="col-12 fs-14 text-white">Hospital Management System </a>
                                            <a href="{{asset('/payroll-management-software.php')}}" class="col-12 fs-14 text-white">HR & Payroll Management System </a>
                                            <a href="{{asset('/nidhi-company-software-kerala.php')}}" class="col-12 fs-14 text-white">Nidhi Software </a>
                                            <a href="{{asset('/mlm-software-development-company.php')}}" class="col-12 fs-14 text-white"> MLM Software</a>
                                            <a href="{{asset('/education-portal-development.php')}}" class="col-12 fs-14 text-white"> Education Portal</a>
                                            <a href="{{asset('/financial-portal-development.php')}}" class="col-12 fs-14 text-white"> Financial Portalortal</a>
                                            <a href="{{asset('/elearning-app-development.php')}}" class="col-12 fs-14 text-white">Elearning App </a>
                                            <a href="{{asset('/Hotel-management-software.php')}}" class="col-12 fs-14 text-white"> Hotel Management</a>
                                            <a href="{{asset('/inventory-management-software.php')}}" class="col-12 fs-14 text-white"> Inventory Management</a>
                                            <a href="{{asset('/gym-management-software.php')}}" class="col-12 fs-14 text-white"> Gym Management</a>
                                            <a href="{{asset('/vehicle-rental-software.php')}}" class="col-12 fs-14 text-white">Vehicle Rental</a>
                                            <a href="{{asset('/real-estate-management-software.php')}}" class="col-12 fs-14 text-white"> Real State Management</a>
                                            <a href="{{asset('/credit-cooperative-society-software.php')}}" class="col-12 fs-14 text-white"> Credit Coopretive</a>
                                            <a href="{{asset('/financial-management.php')}}" class="col-12 fs-14 text-white"> Financial Management</a>
                                            <a href="{{asset('/nbfc-software.php')}}" class="col-12 fs-14 text-white">Nbfc Software </a>
                                            <a href="{{asset('/material-management.php')}}" class="col-12 fs-14 text-white"> Material Management</a>
                                            <a href="{{asset('//biometric-attendance-software.php')}}" class="col-12 fs-14 text-white">Biometric Attendence </a>
                                            <a href="{{asset('/industrial-erp-development.php')}}" class="col-12 fs-14 text-white"> Industrial Erp</a>
                                            <a href="{{asset('/online-exam-management-software.php')}}" class="col-12 fs-14 text-white"> Online Exam Management</a>
                                            <a href="{{asset('/fantasy-movie-app-development.php')}}" class="col-12 fs-14 text-white">Fantasy Movie App </a>
                                           

                                           
                                        </div>
                                    </div>
                                </div>
                             
                        </div>
                    </div>
                 </div>
              </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header py-2" id="headingmenu3">
                    <button class="accordion-button fw-l fs-17 border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemenu3" aria-expanded="false" aria-controls="collapsemenu3">
                    Hire Developers
                    </button>
                </div>
                <div id="collapsemenu3" class="accordion-collapse collapse" aria-labelledby="headingmenu3" data-bs-parent="#levelFirst">
                    <div class="accordion-body pt-0 px-2">
                        <div class="row sidebar_group ps-3">
                            <div class="col-12 fw-l fs-17 text-white ps-1 pb-2">Hire Developers</div>
                            <div class="col-12 ps-1">
                                <div class="row border-start border-3 border-white ms-0 mb-4 position-relative left-2px">
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                        <a href="{{asset('/')}}" class="col-12 fs-14 text-white"> </a>
                                            <a href="{{asset('/hire-mobile-app-developers.php')}}" class="col-12 fs-14 text-white">Hire Mobile App Developers </a>
                                            <a href="{{asset('/hire-android-app-developers.php')}}" class="col-12 fs-14 text-white"> Hire Android App Developers</a>
                                            <a href="{{asset('/hire-ios-app-developers.php')}}" class="col-12 fs-14 text-white"> Hire iOS App Developers</a>
                                            <a href="{{asset('/hire-react-native-app-developers.php')}}" class="col-12 fs-14 text-white"> Hire React Native App Developers</a>
                                            <a href="{{asset('/hire-flutter-app-developers.php')}}" class="col-12 fs-14 text-white"> Hire Flutter App Developers</a>
                                            <a href="{{asset('/hire-web-developers.php')}}" class="col-12 fs-14 text-white"> Hire Website Developers</a>
                                            <a href="{{asset('/hire-php-developers.php')}}" class="col-12 fs-14 text-white"> Hire PHP Developers</a>
                                            <a href="{{asset('/hire-nodejs-developers.php')}}" class="col-12 fs-14 text-white"> Hire Node.js Developers</a>
                                            <a href="{{asset('/hire-python-developers.php')}}" class="col-12 fs-14 text-white"> Hire Python Developers</a>
                                            <a href="{{asset('/hire-web-designers.php')}}" class="col-12 fs-14 text-white"> Hire Website Designers</a>
                                            <a href="{{asset('/hire-reactjs-developers.php')}}" class="col-12 fs-14 text-white"> Hire React JS Developers</a>
                                            <a href="{{asset('/hire-full-stack-developers.php')}}" class="col-12 fs-14 text-white"> Hire Full Stack Developers</a>
                                            <a href="{{asset('/hire-python-developers.php')}}" class="col-12 fs-14 text-white"> Hire Python Developers</a>
                                            <!-- <a href="{{asset('/')}}" class="col-12 fs-14 text-white"> Hire Laravel Developers</a> -->
                                            <!-- <a href="{{asset('/')}}" class="col-12 fs-14 text-white"> Hire Drupal Developers</a> -->
                                            <!-- <a href="{{asset('/')}}" class="col-12 fs-14 text-white"> Hire Software Developers</a> -->
                                            <!-- <a href="{{asset('/')}}" class="col-12 fs-14 text-white"> Hire blockchian Developers</a> -->
                                            <!-- <a href="{{asset('/')}}" class="col-12 fs-14 text-white"> Hire Cryptocurrency exchange Developers</a> -->
                                            <!-- <a href="{{asset('/')}}" class="col-12 fs-14 text-white"> Hire Smart Contract Developers</a> -->
                                            <!-- <a href="{{asset('/')}}" class="col-12 fs-14 text-white"> Hire Nft Developers</a> -->
                                            <a href="{{asset('/hire-java-developers.php')}}" class="col-12 fs-14 text-white"> Hire Java Developers</a>
                                            <a href="{{asset('/hire-angular-developers.php')}}" class="col-12 fs-14 text-white"> Hire Angularjs Developers</a>
                                            <a href="{{asset('/hire-mean-stack-developers.php')}}" class="col-12 fs-14 text-white"> Hire MEAN Stack Developers</a>
                                            <a href="{{asset('/hire-mern-stack-developers.php')}}" class="col-12 fs-14 text-white"> Hire MERN Stack Developers</a> 
                                            <a href="{{asset('/hire-ui-ux-developers.php')}}" class="col-12 fs-14 text-white"> Hire UI / UX  Developers</a> 
                                            <a href="{{asset('/')}}" class="col-12 fs-14 text-white"> Hire Software Developers</a> 
                                         </div>
                                    </div>
                                </div>
                             
                        </div>
                    </div>
                 </div>
              </div>
            </div>
            
            <a href="{{asset('/portfolio.php')}}" class="sidebar-item fw-l fs-17 border-0 py-4 collapsed">
                Work
            </a>
            
            <a href="{{asset('/contact-us.php')}}" class="sidebar-item fw-l fs-17 border-0 py-4 collapsed mt-2">
                Contact Us
            </a>
            <a href="{{asset('/blog')}}" class="sidebar-item fw-l fs-17 border-0 py-4 collapsed mt-2">
                Blogs
            </a>
            <a href="{{asset('/request-a-quote.php')}}" class="sidebar-item fw-l fs-17 border-0 mt-2 collapsed">
                Request a Quote
            </a>
        </div>
    </div>
 </div>