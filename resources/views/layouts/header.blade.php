@include('layouts.preloader')
<nav class="navbar navbar-expand-lg navbar-light bg-light d-block">
    <div class="container topbar d-lg-block d-none">
        <ul class="row justify-content-end mx-0 w-100 list-unstyled">
            <li class="col-auto px-xxl-1 px-0"><a class="text-decoration-none fs-xxl-16 fs-11 fw-light d-flex rounded align-items-center wave-1 px-2 py-2 topbar-email" href="mailto:info@imgglobalinfotech.com"><i class="imgs me-1 fs-xxl-16 fs-14 img-envelope"></i> <span>info@imgglobalinfotech.com</span></a></li>
            <li class="col-auto px-xxl-1 px-0"><a class="text-decoration-none fs-xxl-16 fs-11 fw-light d-flex rounded align-items-center wave-1 px-2 py-2 topbar-skype" href="skype:kunwar.neeraj.rajput?call"><i class="imgb me-1 fs-xxl-16 fs-14 img-skype"></i> <span>live:kunwar.neeraj.rajput</span></a></li>
            {{-- <li class="col-auto px-xxl-1 px-0 pe-0"><a class="text-decoration-none fs-xxl-14 fs-11 fw-light d-flex rounded align-items-center wave-1 px-2 py-2 topbar-phone" href="tel:+919876543210"><i class="imgs me-1 fs-xxl-16 fs-14 img-phone"></i> <span>+91 9876543210</span></a></li> --}}
        </ul>
    </div>
    <div class="container bottombar">
        <a class="navbar-brand animate order-1" href="{{asset('/')}}">
            <img src="{{asset('/public')}}/assets/img/logos/xl-logo.webp" srcset="{{asset('/public')}}/assets/img/logos/m-logo.webp 700w, {{asset('/public')}}/assets/img/logos/logo.webp 1000w, {{asset('/public')}}/assets/img/logos/xl-logo.webp 1200w" width="199" height="55" alt="IMG Global Infotech Logo">
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
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-600 fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1 active" aria-current="page" href="{{asset('/')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown mega-menu on-hover">
                        <a id="services-mega-dropdown-button" class="nav-link text-uppercase fw-600 fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1 dropdown-toggle" href="{{asset('/services.php')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <div class="dropdown-menu py-0 maga_drop_down">
                            <div class="container py-xxl-4 py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sub-menu-center-block cus-full-block row rows">
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                                <div class="menuHeadTitle text-white fw-600 fs-xxl-17 fs-16 m-0"><div class="fw-600 m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Mobile</div></div>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/mobile-app-development.php')}}">Mobile App Development</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/android-application-development.php')}}">Android</a><span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/ios-app-development.php')}}">iPhone</a><span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/flutter-app-development.php')}}">Flutter</a><span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/react-native-app-development.php')}}">React Native</a>
                                                    </li>
                                                </ul>
                                                {{-- <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/web-development.php')}}">Cross Platform App Development</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming Soon" href="javascript:;">React Native</a> <span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/ionic-app-development.php')}}">Ionic</a><span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming Soon" href="javascript:;">Flutter</a>
                                                    </li>
                                                </ul> --}}
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-sports-app-development.php')}}">Fantasy Sports Development</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-cricket-app-development.php')}}">Cricket</a> <span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-football-app-development.php')}}">Football</a><span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="#0">Kabaddi</a><span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-movie-app-development.php')}}">Movie</a>
                                                    </li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fantasy-stock-market-app-development.php')}}">Fantasy Stock Market App</a></li>
                                                </ul>
                                            </div>
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                                <div class="menuHeadTitle text-white fw-600 fs-xxl-17 fs-16 m-0"><div class="fw-600 m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Web</div></div>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/website-design.php')}}">Website Design</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                            <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/parallax-web-designing.php')}}">Parallax Website </a><span>|</span> 
                                                            <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/dynamic-website-designing.php')}}">Dynamic Website</a> 
                                                       </li>
                                                     <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/responsive-web-designing.php')}}">Responsive</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/website-redesigning.php')}}">Website Re-designing</a>
                                                    </li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/web-development.php')}}">Web Development</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-14 fs-xl-13 fs-14" href="{{asset('/ecommerce-website-development.php')}}">Ecommerce Development</a><span>|</span> 
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-14 fs-xl-13 fs-14" href="{{asset('/cms-development.php')}}">CMS Development</a>
                                                        </li>
                                                        <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-14 fs-xl-13 fs-14" href="{{asset('/web-portal-development.php')}}">Web Portal Development</a> <span>|</span> 
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-14 fs-xl-13 fs-14" href="{{asset('/api-development.php')}}">API Development</a>
                                                        </li>
                                                </ul>
                                            </div>
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                                <div class="menuHeadTitle text-white fw-600 fs-xxl-17 fs-16 m-0"><div class="fw-600 m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Marketing</div></div>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/digital-marketing-services.php')}}">Digital Marketing</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/seo-services.php')}}">SEO</a><span>|</span> 
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/pay-per-click-services.php')}}">PPC</a> <span>|</span> 
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/social-media-marketing-services.php')}}">SMO</a> <span>|</span> 
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/app-store-optimization-services.php')}}">ASO</a></li>
                                                    </ul>
                                                <div class="menuHeadTitle text-white fw-600 fs-xxl-17 fs-16 m-0 pt-4"><div class="fw-600 m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Others</div></div>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/software-development.php')}}">Software Development</a></li>
                                                </ul>
                                            </div>

                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                                <div class="menuHeadTitle text-white fw-600 fs-xxl-17 fs-16 m-0"><div class="fw-600 m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Offshore Development</div></div>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/offshore-web-development-india.php')}}">Hire Remote Developers</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                    <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-mobile-app-developers.php')}}">Mobile App</a><span>|</span> 
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-android-app-developers.php')}}">Android</a> <span>|</span> 
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-ios-app-developers.php')}}">iOS</a><span></span> 
                                                        
                                                    </li>

                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-react-native-app-developers.php')}}">React Native</a> <span>|</span> 
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-flutter-app-developers.php')}}">Flutter</a><span></span> 
                                                    </li>

                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-web-developers.php')}}">Web Developer</a><span>|</span>
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-php-developers.php')}}">PHP</a><span></span>
                                                    </li>

                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                         <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-nodejs-developers.php')}}">Node.js</a><span>|</span> 
                                                       <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-python-developers.php')}}">Python</a><span></span>
                                                     </li>

                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-web-designers.php')}}">Web Designer</a><span>|</span> 
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-ui-ux-developers.php')}}">UI UX</a><span></span> 
                                                     </li>

                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        
                                                    <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-reactjs-developers.php')}}">React JS</a><span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-full-stack-developers.php')}}">Full Stack</a><span></span> 
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                    <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-mean-stack-developers.php')}}">Mean</a><span>|</span> 
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-mern-stack-developers.php')}}">Mern</a><span>|</span> 
                                                    <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hire-java-developers.php')}}">Java</a><span></span> 
                                                   
                                                      
                                                    </li>
                                                    </ul>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown mega-menu on-hover">
                        <a id="solutions-mega-dropdown-button" class="nav-link text-uppercase fw-600 fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Solutions</a>
                        <div class="dropdown-menu py-0 maga_drop_down">
                            <div class="container py-xxl-4 py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sub-menu-center-block cus-full-block row rows">
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                                <div class="menuHeadTitle text-white fw-600 fs-xxl-17 fs-16 m-0"><div class="fw-600 m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Solutions</div></div>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/school-management-software.php')}}">School Management Software</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/gps-tracking-software.php')}}">GPS System</a><span>|</span>
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/rfid-attendance-system-india.php')}}">RFID Tracking</a>
                                                    </li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/college-management-software.php')}}">College Management System</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/custom-erp-development.php')}}" href="javascript:;">Institute ERP</a>
                                                    </li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/customer-relationship-management-software.php')}}">CRM Software</a></li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/hospital-management-software.php')}}">Hospital Management System</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                                <div class="menuHeadTitle text-white fw-600 fs-xxl-17 fs-16 m-0"><div class="fw-600 m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Others</div></div>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/payroll-management-software.php')}}">HR & Payroll Management System</a></li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/nidhi-company-software.php')}}">Nidhi Software</a></li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/mlm-software-development-company.php')}}">MLM Software</a></li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/elearning-app-development.php')}}">eLearning App Development</a></li>
                                                </ul>
                                            </div>
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col invisible">
                                                <div class="menuHeadTitle text-white fw-600 fs-xxl-17 fs-16 m-0"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming Soon" href="javascript:;">Emerging Technologies</a></div>
                                                <ul>
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming Soon" href="javascript:;">Wearable App Development</a></li>
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" data-bs-toggle="tooltip" data-bs-placement="top" title="Coming Soon" href="javascript:;">IoT Development</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown on-hover">
                        <a id="Industry-mega-dropdown-button" class="nav-link text-uppercase fw-600 fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Industry</a>
                        <div class="dropdown-menu py-0 maga_drop_down">
                            <div class="container py-xxl-4 py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sub-menu-center-block cus-full-block row rows">
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                                <div class="menuHeadTitle text-white fw-600 fs-xxl-17 fs-16 m-0"><div class="fw-600 m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Industry</div></div>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/healthcare-app-development.php')}}">Healthcare</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/doctor-on-demand-app-development.php')}}">Doctor on Demand</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/pharmacy-app-development.php')}}">Pharmacy</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fitness-app-development.php')}}">Fitness</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/diet-and-nutrition-app-development.php')}}">Diet and Nutrition</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/grocery-app-development.php')}}">Grocery</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/food-delivery-app-development.php')}}">Food Delivery</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/fashion-app-development.php')}}">Fashion</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/jewellery-app-development.php')}}">Jewellery</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/taxi-app-development-company.php')}}">Taxi Booking</a>
                                                    </li>
                                                    <li class="ssub-menu mt-1 ps-4 position-relative w-100">
                                                        <a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/online-exam-app-development.php')}}">Online Exam</a>
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
                        <a class="nav-link text-uppercase fw-600 fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1" href="{{asset('/portfolio.php')}}">Portfolio</a>
                    </li>
                    <li class="nav-item dropdown on-hover">
                        <a id="Company-mega-dropdown-button" class="nav-link text-uppercase fw-600 fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                        <div class="dropdown-menu py-0 maga_drop_down">
                            <div class="container py-xxl-4 py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="sub-menu-center-block cus-full-block row rows">
                                            <div class="sub-menu-sec pt-lg-0 pt-3 col">
                                                <div class="menuHeadTitle text-white fw-600 fs-xxl-17 fs-16 m-0"><div class="fw-600 m-0 fs-xxl-18 fs-17 text-white p-0 text-decoration-none">Company</div></div>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/about-us.php')}}" class="text-nowrap">About Us</a></li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/contact-us.php')}}" class="text-nowrap">Contact Us</a></li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/mission-and-vision.php')}}" class="text-nowrap">Mission & Vision</a></li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/testimonials.php')}}" class="text-nowrap">Testimonials</a></li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="{{asset('/career.php')}}" class="text-nowrap">Career</a></li>
                                                </ul>
                                                <ul class="text-nowrap w-100 d-inline-block position-relative ps-xxl-4 ps-3 mt-xxl-4 mt-2 list-unstyled">
                                                    <li class="w-100 h-auto p-0 me-0 mb-2"><a class="text-white text-nowarp position-relative text-decoration-none fs-xxl-15 fs-xl-13 fs-14" href="https://www.flickr.com/photos/imgglobalinfotech" target="_blank" class="text-nowrap">Life @IMG</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-600 fs-xxl-13 fs-xl-11 fs-lg-11 fs-14 rounded wave-1" href="{{asset('/blog')}}">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        <form class="d-flex align-self-lg-start align-self-center ms-auto order-lg-4 order-2">
            {{-- <a class="d-lg-none d-none btn btn-theme1 fs-xxl-13 fs-lg-11 fs-13 mx-1 fw-600 hero_read_more_btn py-xxl-1 py-1 px-4 coffee_with_us d-lg-flex d-none justify-content-center w-100" onclick="googleSearch()" data-bs-toggle="offcanvas" href="#top_search" role="button" aria-controls="offcanvasExample">
                <span class="d-flex text-nowrap"><i class="imgs img-search fs-md-14 fs-14" style="line-height:inherit;"></i></span>
            </a> --}}
			
			 <a class="ms-xl-3 lg-xl-3 ms-md-3 btn btn-theme3 fs-xxl-13 fs-lg-13 fs-13 mx-1 fw-600 hero_read_more_btn py-xxl-1 py-1 px-4 coffee_with_us d-lg-flex d-none justify-content-center w-100" href="{{asset('/contact-us.php')}}" >
                <span class="d-flex text-nowrap "><i class="imgs img-phone pe-2" style="line-height:inherit;"></i> Request a Quote! </span>
            </a>
			
			
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
                <a class="btn btn-theme3 fs-xxl-13 fs-lg-11 fs-13 mx-1 fw-600 hero_read_more_btn py-xxl-2 py-1 px-4 coffee_with_us d-lg-flex d-none justify-content-center w-100" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                    <div class="col text-nowrap text-theme3 fw-600 fs-16">LET'S DISCUSS</div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-theme1 fs-15 fw-600 pt-1 pb-1">IMG Helpline</div>
                                    <div class="col-12">
                                        <div class="row">
                                            <a href="tel:911442336011" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                                <div class="row mx-0 align-items-center flex-nowrap">
                                                    <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                                        <i class="imgs img-phone"></i>
                                                    </div>
                                                    <div class="col fw-600">+91-9694097245</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col mx-3 h-1px border-bottom my-2"></div>
                                    <div class="col-12 text-theme1 fs-15 fw-600 pt-1 pb-1 text-nowrap">Fantasy App Development & Support</div>
                                    <div class="col-12">
                                        <div class="row">
                                            <a href="tel:919694097245" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                                <div class="row mx-0 align-items-center flex-nowrap">
                                                    <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                                        <i class="imgs img-phone"></i>
                                                    </div>
                                                    <div class="col fw-600">+91-9694097241</div>
                                                </div>
                                            </a>
                                            <a href="tel:919887034345" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                                <div class="row mx-0 align-items-center flex-nowrap">
                                                    <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                                        <i class="imgs img-phone"></i>
                                                    </div>
                                                    <div class="col fw-600">+91-9887034345</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col mx-3 h-1px border-bottom my-2"></div>
                                    <div class="col-12 text-theme1 fs-15 fw-600 pt-1 pb-1">For Quick Connect</div>
                                    <div class="col-12">
                                        <div class="row">
                                            <a href="tel:919694097245" target="_blank" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                                <div class="row mx-0 align-items-center flex-nowrap">
                                                    <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                                        <i class="imgs img-phone"></i>
                                                    </div>
                                                    <div class="col fw-600">+91-9694097245</div>
                                                </div>
                                            </a>
                                            <a href="skype:kunwar.neeraj.rajput?call" target="_blank" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                                <div class="row mx-0 align-items-center flex-nowrap">
                                                    <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-theme1 d-grid align-items-center justify-content-center">
                                                        <i class="imgb img-skype"></i>
                                                    </div>
                                                    <div class="col fw-600">live:kunwar.neeraj.rajput</div>
                                                </div>
                                            </a>
                                            <a href="mailto:info@imgglobalinfotech.com" target="_blank" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                                <div class="row mx-0 align-items-center flex-nowrap">
                                                    <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-warning d-grid align-items-center justify-content-center">
                                                        <i class="imgs img-envelope"></i>
                                                    </div>
                                                    <div class="col fw-600">info@imgglobalinfotech.com</div>
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
            <div class="col text-nowrap text-theme3 fw-600 fs-16">LET'S DISCUSS</div>
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
                        <div class="col-12 text-theme1 fs-15 fw-600 pb-1">IMG Helpline</div>
                        <div class="col-12">
                            <div class="row">
                                <a href="tel:911442336011" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                    <div class="row mx-0 align-items-center flex-nowrap">
                                        <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                            <i class="imgs img-phone"></i>
                                        </div>
                                        <div class="col fw-600">+91-9694097245</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col mx-3 h-1px border-bottom my-2"></div>
                        <div class="col-12 text-theme1 fs-15 fw-600 pt-1 pb-1 text-nowrap">Fantasy App Development & Support</div>
                        <div class="col-12">
                            <div class="row">
                                <a href="tel:919694097245" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                    <div class="row mx-0 align-items-center flex-nowrap">
                                        <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                            <i class="imgs img-phone"></i>
                                        </div>
                                        <div class="col fw-600">+91-9694097241</div>
                                    </div>
                                </a>
                                <a href="tel:919887034345" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                    <div class="row mx-0 align-items-center flex-nowrap">
                                        <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                            <i class="imgs img-phone"></i>
                                        </div>
                                        <div class="col fw-600">+91-9887034345</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col mx-3 h-1px border-bottom my-2"></div>
                        <div class="col-12 text-theme1 fs-15 fw-600 pt-1 pb-1">For Quick Connect</div>
                        <div class="col-12">
                            <div class="row">
                                <a href="tel:919694097245" target="_blank" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                    <div class="row mx-0 align-items-center flex-nowrap">
                                        <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-info d-grid align-items-center justify-content-center">
                                            <i class="imgs img-phone"></i>
                                        </div>
                                        <div class="col fw-600">+91-9694097245</div>
                                    </div>
                                </a>
                                <a href="skype:kunwar.neeraj.rajput?call" target="_blank" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                    <div class="row mx-0 align-items-center flex-nowrap">
                                        <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-theme1 d-grid align-items-center justify-content-center">
                                            <i class="imgb img-skype"></i>
                                        </div>
                                        <div class="col fw-600">live:kunwar.neeraj.rajput</div>
                                    </div>
                                </a>
                                <a href="mailto:info@imgglobalinfotech.com" target="_blank" class="col-12 fs-14 text-decoration-none text-dark py-1">
                                    <div class="row mx-0 align-items-center flex-nowrap">
                                        <div class="col-auto p-0 w-30px h-30px rounded-pill text-white bg-warning d-grid align-items-center justify-content-center">
                                            <i class="imgs img-envelope"></i>
                                        </div>
                                        <div class="col fw-600">info@imgglobalinfotech.com</div>
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



<div class="offcanvas offcanvas-start sidebar" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header align-items-center">
        <div class="offcanvas-title" id="offcanvasExampleLabel">
            <a class="navbar-brand order-1" href="{{asset('/')}}">
                <img src="{{asset('/public')}}/assets/img/logos/logo.webp" srcset="{{asset('/public')}}/assets/img/logos/m-logo.webp 850w, {{asset('/public')}}/assets/img/logos/logo.webp 1280w" class="h-35px" width="127" height="35" alt="IMG Global Infotech Logo">
            </a>
        </div>
        <button type="button" class="text-decoration-none bg-white fs-25 text-dark border-0" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="imgs img-times"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion levelFirst" id="levelFirst">
            <a href="{{asset('/')}}" class="sidebar-item fw-600 fs-22 border-0 mb-2 collapsed">
                Home
            </a>
            <div class="accordion-item">
                <div class="accordion-header py-2" id="headingmenu1">
                    <button class="accordion-button fw-600 fs-22 border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemenu1" aria-expanded="false" aria-controls="collapsemenu1">
                        Services
                    </button>
                </div>
                <div id="collapsemenu1" class="accordion-collapse collapse" aria-labelledby="headingmenu1" data-bs-parent="#levelFirst">
                    <div class="accordion-body pt-0 px-2">
                        <div class="row sidebar_group">
                            <div class="col-12 fw-600 fs-22 text-theme3 ps-2 pb-2">Mobile</div>
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/mobile-app-development.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">Mobile App Development</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/android-application-development.php')}}" class="col-auto fs-14">Android</a>
                                            <a href="{{asset('/ios-app-development.php')}}" class="col-auto fs-14">iPhone</a>
                                            <a href="{{asset('/flutter-app-development.php')}}" class="col-auto fs-14">Flutter</a>
                                            <a href="{{asset('/react-native-app-development.php')}}" class="col-auto fs-14">React Native</a>
                                            {{-- <a data-bs-toggle="tooltip" data-bs-placement="top" title="Coming Soon" href="javascript:;" class="col-auto fs-14">PWA</a> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/web-development.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">Cross Platform App Development</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Coming Soon" href="javascript:;" class="col-auto fs-14">React Native</a>
                                            <a href="{{asset('/ionic-app-development.php')}}" class="col-auto fs-14">Ionic</a>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Coming Soon" href="javascript:;" class="col-auto fs-14">Flutter</a>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/fantasy-sports-app-development.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">Fantasy Sports Development</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/fantasy-cricket-app-development.php')}}" class="col-auto fs-14">Cricket</a>
                                            <a href="{{asset('/fantasy-football-app-development.php')}}" class="col-auto fs-14">Football</a>
                                            <a href="#0" class="col-auto fs-14">Kabaddi</a>
                                            <a href="{{asset('/fantasy-movie-app-development.php')}}" class="col-auto fs-14">Movie</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/fantasy-stock-market-app-development.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">Fantasy Stock Market App</a>
                                </div>
                            </div>
                        </div>
                        <div class="row sidebar_group">
                            <div class="col-12 fw-600 fs-18 text-theme3 ps-2 pb-2">Web</div>
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/website-design.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">Website Design</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/parallax-web-designing.php')}}" class="col-auto fs-14">Parallax Website</a>
                                            <a href="{{asset('/dynamic-website-designing.php')}}" class="col-auto fs-14"> Dynamic Website </a>
                                            <a href="{{asset('/responsive-web-designing.php')}}" class="col-auto fs-14">Responsive</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/web-development.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">Web Development</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/ecommerce-website-design-services.php')}}" class="col-auto fs-14">Ecommerce Development</a>
                                            <a href="{{asset('/cms-development.php')}}" class="col-auto fs-14">CMS Development</a>
                                            <a href="{{asset('/web-portal-development.php')}}" class="col-auto fs-14">Web Portal Development</a>
                                            <a href="{{asset('/api-development.php')}}" class="col-auto fs-14">API Development</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row sidebar_group">
                            <div class="col-12 fw-600 fs-18 text-theme3 ps-2 pb-2">Marketing</div>
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/digital-marketing-services.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">Digital Marketing</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/seo-services.php')}}" class="col-auto fs-14">SEO</a>
                                            <a href="{{asset('/pay-per-click-services.php')}}" class="col-auto fs-14">PPC</a>
                                            <a href="{{asset('/social-media-marketing-services.php')}}" class="col-auto fs-14">SMO</a>
                                            <a href="{{asset('/app-store-optimization-services.php')}}" class="col-auto fs-14">ASO</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="#" class="col-12 text-decoration-none fs-15 text-dark fw-600">Others</a>
                                    <div class="col-12">
                                       
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/software-development.php')}}" class="col-auto fs-14">Software Development</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row sidebar_group">
                            <div class="col-12 fw-600 fs-22 text-theme3 ps-2 pb-2">Offshore Development</div>
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/offshore-web-development-india.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">Hire Remote Developers</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            
                                            <a href="{{asset('/hire-mobile-app-developers.php')}}" class="col-auto fs-14">Mobile App</a>
                                            <a href="{{asset('/hire-android-app-developers.php')}}" class="col-auto fs-14">Android</a>
                                            <a href="{{asset('/hire-ios-app-developers.php')}}" class="col-auto fs-14">iOS</a>
                                            <a href="{{asset('/hire-react-native-app-developers.php')}}" class="col-auto fs-14">React Native</a>
                                            <a href="{{asset('/hire-flutter-app-developers.php')}}" class="col-auto fs-14">Flutter</a>
                                            <a href="{{asset('/hire-web-developers.php')}}" class="col-auto fs-14">Web Developer </a>
                                            <a href="{{asset('/hire-php-developers.php')}}" class="col-auto fs-14">PHP</a>
                                            <a href="{{asset('/hire-nodejs-developers.php')}}" class="col-auto fs-14">Node.js</a>
                                            <a href="{{asset('/hire-python-developers.php')}}" class="col-auto fs-14">Python</a>
                                            <a href="{{asset('/hire-web-designer.php')}}" class="col-auto fs-14">Web Designer </a>
                                            <a href="{{asset('/hire-ui-ux-developers.php')}}" class="col-auto fs-14">UI UX </a>
                                            <a href="{{asset('/hire-angular-developers.php')}}" class="col-auto fs-14">Angular </a>
                                            <a href="{{asset('/hire-reactjs-developers.php')}}" class="col-auto fs-14">React JS</a>
                                            <a href="{{asset('/hire-full-stack-developers.php')}}" class="col-auto fs-14">Full Stack </a>
                                            <a href="{{asset('/hire-mean-stack-developers.php')}}" class="col-auto fs-14">Mean</a>
                                            <a href="{{asset('/hire-mern-stack-developers.php')}}" class="col-auto fs-14">Mern </a>
                                            <a href="{{asset('/hire-java-developers.php')}}" class="col-auto fs-14"> Java</a>
                                         
                                            
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
                    <button class="accordion-button fw-600 fs-22 border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemenu2" aria-expanded="false" aria-controls="collapsemenu2">
                        Solutions
                    </button>
                </div>
                <div id="collapsemenu2" class="accordion-collapse collapse" aria-labelledby="headingmenu2" data-bs-parent="#levelFirst">
                    <div class="accordion-body pt-0 px-2">
                        <div class="row sidebar_group">
                            <div class="col-12 fw-600 fs-18 text-theme3 ps-2 pb-2">Solutions</div>
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/school-management-software.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">School Management Software</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/gps-tracking-software.php')}}" class="col-auto fs-14">GPS System</a>
                                            <a href="{{asset('/rfid-attendance-system-india.php')}}" class="col-auto fs-14">RFID Tracking</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/college-management-software.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">College Management System</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/custom-erp-development.php')}}" class="col-auto fs-14">Institute ERP</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/customer-relationship-management-software.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">CRM Software</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/hospital-management-software.php')}}" class="col-auto fs-14">Hospital Management System</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row sidebar_group">
                            <div class="col-12 fw-600 fs-18 text-theme3 ps-2 pb-2">Others</div>
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/payroll-management-software.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">HR & Payroll Management System</a>
                                </div>
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/nidhi-company-software.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">Nidhi Software</a>
                                </div>
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/mlm-software-development-company.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">MLM Software</a>
                                </div>
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/elearning-app-development.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">eLearning App Development</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-header py-2" id="headingmenu3">
                    <button class="accordion-button fw-600 fs-22 border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemenu3" aria-expanded="false" aria-controls="collapsemenu3">
                        Industry
                    </button>
                </div>
                <div id="collapsemenu3" class="accordion-collapse collapse" aria-labelledby="headingmenu3" data-bs-parent="#levelFirst">
                    <div class="accordion-body pt-0 px-2">
                        <div class="row sidebar_group">
                            <div class="col-12 fw-600 fs-18 text-theme3 ps-2 pb-2">Industry</div>
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/mobile-app-development.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600 text-nowrap">App Development</a>
                                    <div class="col-12">
                                        <div class="row grp_items pt-2 ms-0">
                                            <a href="{{asset('/healthcare-app-development.php')}}" class="col-auto fs-14">Healthcare</a>
                                            <a href="{{asset('/doctor-on-demand-app-development.php')}}" class="col-auto fs-14">Doctor on Demand</a>
                                            <a href="{{asset('/pharmacy-app-development.php')}}" class="col-auto fs-14">Pharmacy</a>
                                            <a href="{{asset('/fitness-app-development.php')}}" class="col-auto fs-14">Fitness</a>
                                            <a href="{{asset('/diet-and-nutrition-app-development.php')}}" class="col-auto fs-14">Diet and Nutrition</a>
                                            <a href="{{asset('/grocery-app-development.php')}}" class="col-auto fs-14">Grocery</a>
                                            <a href="{{asset('/food-delivery-app-development.php')}}" class="col-auto fs-14">Food Delivery</a>
                                            <a href="{{asset('/fashion-app-development.php')}}" class="col-auto fs-14">Fashion</a>
                                            <a href="{{asset('/jewellery-app-development.php')}}" class="col-auto fs-14">Jewellery</a>
                                            <a href="{{asset('/taxi-app-development-company.php')}}" class="col-auto fs-14">Taxi Booking</a>
                                            <a href="{{asset('/online-exam-app-development.php')}}" class="col-auto fs-14">Online Exam</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <a href="{{asset('/portfolio.php')}}" class="sidebar-item fw-600 fs-22 border-0 my-2 collapsed">
                Portfolio
            </a>
            <div class="accordion-item">
                <div class="accordion-header py-2" id="headingmenu4">
                    <button class="accordion-button fw-600 fs-22 border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemenu4" aria-expanded="false" aria-controls="collapsemenu4">
                        Company
                    </button>
                </div>
                <div id="collapsemenu4" class="accordion-collapse collapse" aria-labelledby="headingmenu4" data-bs-parent="#levelFirst">
                    <div class="accordion-body pt-0 px-2">
                        <div class="row sidebar_group">
                            <div class="col-12 ps-2">
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/about-us.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">About Us</a>
                                </div>
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/mission-and-vision.php')}}"  class="col-12 text-decoration-none fs-15 text-dark fw-600">Mission & Vision</a>
                                </div>
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/testimonials.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">Testimonials</a>
                                </div>
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="{{asset('/career.php')}}" class="col-12 text-decoration-none fs-15 text-dark fw-600">Career</a>
                                </div>
                                <div class="row border-start border-3 border-theme2 ms-0 mb-4 position-relative left-2px">
                                    <a href="https://www.flickr.com/photos/imgglobalinfotech" target="_blank" class="col-12 text-decoration-none fs-15 text-dark fw-600">Life @IMG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{asset('/blog')}}" class="sidebar-item fw-600 fs-22 border-0 mt-2 collapsed">
                Blog
            </a>
            <a href="{{asset('/contact-us.php')}}" class="sidebar-item fw-600 fs-22 border-0 mt-2 collapsed">
                Contact Us
            </a>
        </div>
    </div>
</div>
