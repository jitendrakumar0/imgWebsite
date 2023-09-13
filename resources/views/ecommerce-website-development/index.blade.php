@extends('main')
@push('meta')
   <!--  Title -->
   <title>Ecommerce Website Development Company | IMG Global</title>

   <!-- Required meta tags -->
   <meta name="title" content="Ecommerce Website Development Company | IMG Global" />
   <meta name="description" content="Need Ecommerce website development services? Trust IMG Global best Ecommerce website development company. With 10+ years of experience, we provide top eCommerce websites." />
   <meta name="keywords" content="e commerce service provider, ecommerce website development company, ecommerce website development services, ecommerce web development services, ecommerce web development company, e commerce solutions services, ecommerce portal development, ecommerce development solutions, ecommerce developer" />

   <!-- Twitter Meta -->
   <meta name="twitter:title" content="Ecommerce Website Development Company | IMG Global">
   <meta name="twitter:description" content="Need Ecommerce website development services? Trust IMG Global best Ecommerce website development company. With 10+ years of experience, we provide top eCommerce websites.">
   <meta name="twitter:image" content="{{GETFOLDERPATH()}}/ECommerce-Web-Development.webp">

   <!-- Facebook Meta -->
   <meta property="og:url" content="{{asset('/')}}ecommerce-website-development.php">
   <meta property="og:title" content="Ecommerce Website Development Company | IMG Global">
   <meta property="og:description" content="Need Ecommerce website development services? Trust IMG Global best Ecommerce website development company. With 10+ years of experience, we provide top eCommerce websites.">
   <meta property="og:image" content="{{GETFOLDERPATH()}}/ECommerce-Web-Development.webp">
   <meta property="og:image:secure_url" content="{{GETFOLDERPATH()}}/ECommerce-Web-Development.webp">



   <meta name="classification" content="e commerce service provider, ecommerce website development company, ecommerce website development services, ecommerce web development services, ecommerce web development company, e commerce solutions services, ecommerce portal development, ecommerce development solutions, ecommerce developer" />
   <link rel="canonical" href="{{asset('/')}}ecommerce-website-development.php" />
   <meta name="robots" content="index, follow" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/ecommerce-website-development.min.css">
 
@endpush
@section('content')

 {{-- Hero Section --}}
   @section('hero_hiddenHeading')
   Ecommerce Website Design & Development
   @endsection('hero_hiddenHeading')
   @section('hero_heading')
   <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Ecommerce Website Design & <b>  Development</b></span>
   @endsection('hero_heading')
   @section('hero_tagline')
   Scale your retail business with our revolutionary eCommerce website development services & CMS solution
   @endsection('hero_tagline')
   @section('hero_btn')
   <div class="col-12 pt-3 text-lg-start text-center">
	   <a href="tel:+91-9694097245" class="btn btn-theme3 text-white fs-14 fw-m my-3 py-2 px-4">
		  <span class="d-block"><span>+91 -9694097245</span> <i class="imgr ms-2 img-phone-volume position-relative bottom-n2px"></i></span>
	   </a>
	   <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 text-white fs-14 fw-m my-3 py-2 px-4 ms-md-2">
		  <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
	   </a>
	</div>
   @endsection('hero_btn')
   @section('hero_img')
   <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/Ecommerce-web-developmentv-512PX.webp" alt="Ecommerce Website Design & Development">
   @endsection('hero_img')
   @include('inner-page-section.hero.index')



   <!-- bredcrumb section -->
   <div class="container-fluid overflow-hidden px-0 bredcrumb_main py-lg-3 py-md-2 py-2 d-md-block d-none">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                     <li class="breadcrumb-item"><a class="fw-l fs-lg-16 fs-md-15 fs-14 text-theme2 text-decoration-none" href="{{asset('/')}}">Home</a></li>
                     <li class="breadcrumb-item"><a class="fw-l fs-lg-16 fs-md-15 fs-14 text-theme2 text-decoration-none" href="{{asset('/web-development.php')}}">Web Development</a></li>
                     <li class="breadcrumb-item active fw-l fs-lg-16 fs-md-15 fs-14 text-dark" aria-current="page">ECommerce Development</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>


   <!-- Creative Intuitive Web section -->
   <div class="container-fluid overflow-hidden creative-intuitive-web bg-white position-relative">
      <div class="container py-5 position-relative zi-2">
         <div class="row">
            <div class="col-12">
               <div class="row align-items-center">
                  <div class="col-lg-5 pe-lg-5 top_banner-left-part">
                     <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-5 col-7 position-relative" >
                           <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/Ecommerce-web-design-512px.webp" alt="Take your business to new heights with the top-notch eCommerce website development company!">

                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="row">
                        <div class="col-12">
                           <div class="row mx-0 pb-4 pt-lg-0 pt-4">
                              <h2 class="d-none invisible">Ecommerce Website Development Solution in India</h2>
                              <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Ecommerce Website Development <b> Solution in India </b></span></div>
                           </div>
                        </div>
                        <div class="col-12 fw-l fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted text-lg-start text-center mt-3">Anyone looking to sell products online needs to have an ecommerce website with the motive of selling products to customers. However, amazon is a great platform to use but they charge astronomically high commission on every sale that your product makes. Therefore, it is always feasible to build your own portal which can be done through taking assistance from an eCommerce website development company in Jaipur.</div>
                        <div class="col-12 fw-l fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted text-lg-start text-center mt-3">When it comes to eCommerce website design in Jaipur, no competition can match the level of IMG. eCommerce websites are evolving at a fast pace requiring professionals to handle it by adopting latest trends and using advanced technologies. IMG possesses all the professional experts who can perform the above description with effectiveness.</div>
                        <div class="col-12 pt-3 text-md-start text-center">
                           <a href="{{asset('#ourLatestWork')}}" class="btn btn-theme3 text-white fs-xxl-13 fs-11 fw-m py-xxl-2 py-1 px-lg-4 px-3 mb-xl-0 mb-3">
                              <span class="d-block"><span>OUR LATEST WORK</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Imperative Features For Ecommerce Store section -->
   <div class="container-fluid ecommerce_platforms overflow-hidden position-relative">
      <div class="container py-md-5 py-4 position-relative zi-2">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Imperative Features For Ecommerce Store</h2>
            <div class="col-12 heading fs-md-14 fs-12 center text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Imperative Features For <b>Ecommerce Store</b></span></div>
            <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-center mt-4 text-white">To maximise the range of your business, give an outrageous look by presenting magnificent ecommerce website design. All elementary features required for ecommerce website design are shattered under this. With no comparison, we deliver best in class ecommerce solutions.</div>
         </div>
         <div class="row justify-content-center">
            <div class="col-md-2 col-6 mb-md-5 mb-4">
               <div class="ecommerce_platforms_box row mx-0 justify-content-center">
                  <span class="ico_box d-block h-100px w-100px d-grid align-items-center justify-content-center border-start border-top border-muted rounded-pill border-5"><img class="img-fluid h-70" src="{{GETFOLDERPATH()}}/payment-gateway.webp" alt="Multiple Payment options"></span>
                  <h3 class="d-none invisible">Multiple Payment options</h3>
                  <div class="col-12 fw-m fs-md-17 fs-15 lh-normal text-light text-center pt-3">Multiple Payment options</div>
               </div>
            </div>
            <div class="col-md-2 col-6 mb-md-5 mb-4">
               <div class="ecommerce_platforms_box row mx-0 justify-content-center">
                  <span class="ico_box d-block h-100px w-100px d-grid align-items-center justify-content-center border-start border-top border-muted rounded-pill border-5"><img class="img-fluid h-70" src="{{GETFOLDERPATH()}}/Shopping-Experience-Tools.webp" alt="User Engaging Experience"></span>
                  <h3 class="d-none invisible">User Engaging Experience</h3>
                  <div class="col-12 fw-m fs-md-17 fs-15 lh-normal text-light text-center pt-3">User Engaging Experience</div>
               </div>
            </div>
            <div class="col-md-2 col-6 mb-md-5 mb-4">
               <div class="ecommerce_platforms_box row mx-0 justify-content-center">
                  <span class="ico_box d-block h-100px w-100px d-grid align-items-center justify-content-center border-start border-top border-muted rounded-pill border-5"><img class="img-fluid h-70" src="{{GETFOLDERPATH()}}/payment-gateway.webp" alt="Mobile friendly Features"></span>
                  <h3 class="d-none invisible">Mobile friendly Features</h3>
                  <div class="col-12 fw-m fs-md-17 fs-15 lh-normal text-light text-center pt-3">Mobile friendly Features</div>
               </div>
            </div>
            <div class="col-md-2 col-6 mb-md-5 mb-4">
               <div class="ecommerce_platforms_box row mx-0 justify-content-center">
                  <span class="ico_box d-block h-100px w-100px d-grid align-items-center justify-content-center border-start border-top border-muted rounded-pill border-5"><img class="img-fluid h-70" src="{{GETFOLDERPATH()}}/product-listing-page.webp" alt="Extensive Product Listing"></span>
                  <h3 class="d-none invisible">Extensive Product Listing</h3>
                  <div class="col-12 fw-m fs-md-17 fs-15 lh-normal text-light text-center pt-3">Extensive Product Listing</div>
               </div>
            </div>
            <div class="col-md-2 col-6 mb-md-5 mb-4">
               <div class="ecommerce_platforms_box row mx-0 justify-content-center">
                  <span class="ico_box d-block h-100px w-100px d-grid align-items-center justify-content-center border-start border-top border-muted rounded-pill border-5"><img class="img-fluid h-70" src="{{GETFOLDERPATH()}}/User-Interface.webp" alt="User Review"></span>
                  <h3 class="d-none invisible">User Review</h3>
                  <div class="col-12 fw-m fs-md-17 fs-15 lh-normal text-light text-center pt-3">User Review</div>
               </div>
            </div>
            <div class="w-100 d-md-block d-none"></div>
            <div class="col-md-2 col-6 mb-md-5 mb-4">
               <div class="ecommerce_platforms_box row mx-0 justify-content-center">
                  <span class="ico_box d-block h-100px w-100px d-grid align-items-center justify-content-center border-start border-top border-muted rounded-pill border-5"><img class="img-fluid h-70" src="{{GETFOLDERPATH()}}/Platform-Selection.webp" alt="All Time Customer Service"></span>
                  <h3 class="d-none invisible">All Time Customer Service</h3>
                  <div class="col-12 fw-m fs-md-17 fs-15 lh-normal text-light text-center pt-3">All Time Customer Service</div>
               </div>
            </div>
            <div class="col-md-2 col-6 mb-md-5 mb-4">
               <div class="ecommerce_platforms_box row mx-0 justify-content-center">
                  <span class="ico_box d-block h-100px w-100px d-grid align-items-center justify-content-center border-start border-top border-muted rounded-pill border-5"><img class="img-fluid h-70" src="{{GETFOLDERPATH()}}/Optimization.webp" alt="User Discount"></span>
                  <h3 class="d-none invisible">User Discount</h3>
                  <div class="col-12 fw-m fs-md-17 fs-15 lh-normal text-light text-center pt-3">User Discount</div>
               </div>
            </div>
            <div class="col-md-2 col-6 mb-md-5 mb-4">
               <div class="ecommerce_platforms_box row mx-0 justify-content-center">
                  <span class="ico_box d-block h-100px w-100px d-grid align-items-center justify-content-center border-start border-top border-muted rounded-pill border-5"><img class="img-fluid h-70" src="{{GETFOLDERPATH()}}/Social-Media-Power.webp" alt="Rich- experience Features"></span>
                  <h3 class="d-none invisible">Rich- experience Features</h3>
                  <div class="col-12 fw-m fs-md-17 fs-15 lh-normal text-light text-center pt-3">Rich- experience Features</div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- We work with Agile Technology section -->
   <div class="container-fluid services app_development_services overflow-hidden position-relative">
      <div class="container py-5 position-relative zi-9">
         <div class="row devolopment_service_tab align-items-center">
            <div class="col-md-12">
               <div class="row mx-0 pb-3">
                  <div class="col-12 heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> We work with <b> Agile Technology </b></span></div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-center mt-4">We build innovative designs using advanced technologies that are exclusively delivering best outcomes. We use these well known platforms that are PHP, Laravel, Angular.JS, React.JS, Node.JS. These platforms assure marvellous results by delivering ignite and flexible solutions for Ecommerce website design.</div>
               </div>
               <div class="row s-sidebar mx-0 py-4 gap-4 justify-content-center">
                  <a href="javascript:;" class="col-auto s-item wave-1 shadow bg-white" style="--tz:20px;">
                     <div class="row align-items-center">
                        <div class="col"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/Angular.webp" alt="Angular"></span></div>
                     </div>
                  </a>
                  <a href="javascript:;" class="col-auto s-item wave-1 shadow bg-white" style="--tz:20px;">
                     <div class="row align-items-center">
                        <div class="col"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/Php.webp" alt="Php"></span></div>
                     </div>
                  </a>
                  <a href="javascript:;" class="col-auto s-item wave-1 shadow bg-white" style="--tz:20px;">
                     <div class="row align-items-center">
                        <div class="col"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/reac.webp" alt="reac"></span></div>
                     </div>
                  </a>
                  <a href="javascript:;" class="col-auto s-item wave-1 shadow bg-white" style="--tz:20px;">
                     <div class="row align-items-center">
                        <div class="col"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/Laravel.webp" alt="Laravel"></span></div>
                     </div>
                  </a>
                  {{-- <a href="javascript:;" class="col-auto s-item wave-1 shadow bg-white" style="--tz:20px;">
                     <div class="row align-items-center">
                        <div class="col"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/Magento.webp" alt="Magento"></span></div>
                     </div>
                  </a>
                  <a href="javascript:;" class="col-auto s-item wave-1 shadow bg-white" style="--tz:20px;">
                     <div class="row align-items-center">
                        <div class="col"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/shopify.webp" alt="shopify"></span></div>
                     </div>
                  </a> --}}
                  <a href="javascript:;" class="col-auto s-item wave-1 shadow bg-white" style="--tz:20px;">
                     <div class="row align-items-center">
                        <div class="col"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/java.webp" alt="java"></span></div>
                     </div>
                  </a>
                  <a href="javascript:;" class="col-auto s-item wave-1 shadow bg-white" style="--tz:20px;">
                     <div class="row align-items-center">
                        <div class="col"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/codeigniter.webp" alt="codeigniter"></span></div>
                     </div>
                  </a>
                  <a href="javascript:;" class="col-auto s-item wave-1 shadow bg-white" style="--tz:20px;">
                     <div class="row align-items-center">
                        <div class="col"><span class="d-block"><img class="w-auto h-md-70px h-40px" src="{{GETFOLDERPATH()}}/node.webp" alt="node"></span></div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   

   <!-- want to join section -->
   <div class="container-fluid want-to-join-section">
      <div class="container py-5 zi-2 position-relative">
         <div class="row mx-0 align-items-center gy-md-0 gy-4">
            <div class="col-lg-auto col-12 text-center pe-lg-5">
               <img src="{{GETFOLDERPATH()}}/call_join.webp" class="h-70px" alt="Discuss Your Project With Our Team">
            </div>
            <h2 class="d-none invisible">Discuss Your Project With Our Team</h2>
            <div class="col heading fs-md-14 fs-12 left text-white">Discuss Your Project With Our Team <span> If you need a website, mobile application...let's meet</span></div>
            <div class="col-lg-auto col-12 text-center">
               <a href="tel:919694097245" class="btn btn-theme3 fs-md-14 fs-13 fw-m py-2 px-md-4 px-3">
                  <span class="d-block"><span>Talk to our experts</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
               </a>
            </div>
         </div>
      </div>
   </div>

   
   <!-- ecommerce services section -->
   <div class="container-fluid ecommerce_services2 overflow-hidden">
      <div class="container py-5 position-relative zi-9">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Benefits for Developing Ecommerce Websites</h2>
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Benefits for Developing <b> Ecommerce Websites </b></span></div>
            <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-center mt-4">To grab the attention of global and local audiences, an ecommerce website is the only solution for this digitised era. Removing geographical barriers and launching it to the global market is the main advantage for building an ecommerce website. Some of the other advantages are below, get their insight.</div>
         </div>
         <div class="row">
            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
               <div class="service-box text-center w-100 rounded shadow-sm bg-white">
                  <span class="service_ico d-grid mx-auto mb-3 w-100px h-100px justify-content-center align-items-center shadow rounded-pill"><img src="{{GETFOLDERPATH()}}/operational1.webp" alt="Ease in Operating"></span>
                  <h3 class="d-none invisible">Ease in Operating</h3>
                  <div class="col-12 fw-m text-theme1 fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Ease in Operating</div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">Model of ecommerce website design for seizing market opportunities and comparatively lesser investment including for expanding your business. Therefore you can grow and scale your business without any complexity.</div>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
               <div class="service-box text-center w-100 rounded shadow-sm bg-white">
                  <span class="service_ico d-grid mx-auto mb-3 w-100px h-100px justify-content-center align-items-center shadow rounded-pill"><img src="{{GETFOLDERPATH()}}/convenience3.webp" alt="Flexible and Convenient Approach"></span>
                  <h3 class="d-none invisible">Flexible and Convenient Approach</h3>
                  <div class="col-12 fw-m text-theme1 fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Flexible and Convenient Approach</div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">We build agile website designs that are convenient to customise as per requirement of your business.We use out of box tools and technologies to deliver best ecommerce website design.</div>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
               <div class="service-box text-center w-100 rounded shadow-sm bg-white">
                  <span class="service_ico d-grid mx-auto mb-3 w-100px h-100px justify-content-center align-items-center shadow rounded-pill"><img src="{{GETFOLDERPATH()}}/showcase2.webp" alt="Ease in Exhibition"></span>
                  <h3 class="d-none invisible">Ease in Exhibition</h3>
                  <div class="col-12 fw-m text-theme1 fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Ease in Exhibition</div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">It removes geographical barriers and enables your product to showcase at global level. It increases the reach and visibility of the target audience resulting in maximising expansion of your business with minimal cost.</div>
               </div>
            </div>
         </div>
      </div>
   </div>


                           
   <!-- ecommerce services section -->
   <div class="container-fluid ecommerce_services overflow-hidden">
      <div class="container py-5 position-relative zi-9">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">We deliver Personalised solutions among various industries</h2>
            <div class="col-12 heading fs-md-14 fs-12 center text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> We deliver Personalised solutions <b> among various industries </b></span></div>
            <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-white text-center mt-4">Eager to know about our industry collaboration, we are building great connections in various sectors by proffering exclusive and innovative solutions. Explore unlimited possibilities with us by expanding and growing. Now, let's have a look at the industries with whom we worked for.</div>
         </div>
         <div class="row">
            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
               <div class="service-box text-center w-100 rounded shadow">
                  <span class="service_ico d-grid mx-auto mb-3 w-100px h-100px justify-content-center align-items-center shadow rounded"><img src="{{GETFOLDERPATH()}}/Jewellery3.webp" alt="Jewellery & Gemstone"></span>
                  <h3 class="d-none invisible">Jewellery & Gemstone</h3>
                  <div class="col-12 fw-m text-theme1 fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Jewellery & Gemstone</div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">We give the best ecommerce jewellery design solution with a view to expand the reach of your business. The supplier and maker of your industry can put faith in us for fulfilling their ecommerce website development needs.</div>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
               <div class="service-box text-center w-100 rounded shadow">
                  <span class="service_ico d-grid mx-auto mb-3 w-100px h-100px justify-content-center align-items-center shadow rounded"><img src="{{GETFOLDERPATH()}}/Grocery2.webp" alt="Grocery, Fruits and Vegetables"></span>
                  <h3 class="d-none invisible">Grocery, Fruits and Vegetables</h3>
                  <div class="col-12 fw-m text-theme1 fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Grocery, Fruits and Vegetables</div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">There is a huge demand for online grocery and it has become more convenient to go for. We pledge to deliver innovative ecommerce website designing for our customers so that they can increase visibility of their business.</div>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
               <div class="service-box text-center w-100 rounded shadow">
                  <span class="service_ico d-grid mx-auto mb-3 w-100px h-100px justify-content-center align-items-center shadow rounded"><img src="{{GETFOLDERPATH()}}/Garments1.webp" alt="Garments & Clothing"></span>
                  <h3 class="d-none invisible">Garments & Clothing</h3>
                  <div class="col-12 fw-m text-theme1 fs-md-19 fs-sm-18 fs-17 lh-normal tz" style="--tz:30px;">Garments & Clothing</div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">We build agile and exclusive website design specialised for garments manufacturing. To succeed in the online industry, you need to get the best ecommerce garments website design and that you can get by associating with us.</div>
               </div>
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
                        <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-theme1 mt-lg-2 fs-14">
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
                        <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-theme1 mt-lg-2 fs-14">
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
                        <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-theme1 mt-lg-2 fs-14">
                           Custom eCommerce website design , shopping cart development, plugin, mobile development, eCommerce app development, maintenance and support, eCommerce store optimization, e-commerce marketplace development, responsive website development, and payment gateway integration.
                        </div>
                     </div>
                  </div>
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
                              <div class="col-12 text-white fw-m mb-1 fs-md-17 fs-15 titles">Unique Design</div>
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
                              <div class="col-12 text-white fw-m mb-1 fs-md-17 fs-15 titles">On-Time Delivery</div>
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
                              <div class="col-12 text-white fw-m mb-1 fs-md-17 fs-15 titles">No Hidden Charges</div>
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
                              <div class="col-12 text-white fw-m mb-1 fs-md-17 fs-15 titles">Certified Experts</div>
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
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageA-Comprehensive-Guide-to-Developing-Multi-Sport-Fantasy-Apps.webp" class="img-fluid" alt="10 Innovative Healthcare Business Ideas For Startups And Aspiring Entrepreneurs" width="302" height="170">
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
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageThe-Ultimate-Guide-to-Fantasy-Cricket-App-Development.webp" class="img-fluid" alt="10 Innovative Healthcare Business Ideas For Startups And Aspiring Entrepreneurs" width="302" height="170">
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
                                                                 <img src="{{asset('/public')}}/assets/img/blog-section/blogimageHow-to-Create-a-Fantasy-Sports-Website-6-Easy-Steps.jpg" class="img-fluid" alt="Top Custom Software Development Companies" width="302" height="170">
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
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Aug 18, 2023</span>
                                                            </div>
                                                        
                                                        </div>
                                                     </div>
                                                     <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageList-Of-Top-10-Best-Fantasy-Cricket-Apps-in-India-2023.jpg" class="img-fluid" alt="10 Innovative Healthcare Business Ideas For Startups And Aspiring Entrepreneurs" width="302" height="170">
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
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Aug 10, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>
                                                     <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-companies-in-India">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageTop-Fantasy-Sports-App-Development-Companies-in-India.jpg" class="img-fluid" alt="How To Develop Hotel Booking App: Cost, Features (2023)" width="302" height="170">
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
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Jul 13, 2023</span>
                                                            </div>
                                                        </div>
                                                     </div>

                                                     <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-fantasy-cricket-app-for-asia-cup">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageHow-To-Develop-Fantasy-Cricket-App-for-Asia-Cup-2023-A-Complete-Guide.jpg" class="img-fluid" alt="How To Develop Hotel Booking App: Cost, Features (2023)" width="302" height="170">
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
                                    <label class="fw-m" for="name">Name <label class="text-danger">* </label></label>
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
                                                <label class="fw-m" for="phoneNumber">Mobile Number <label class="text-danger">* </label></label>
                                                <div class="invalid-feedback fs-12">Please Enter a Valid Phone Number.</div>
                                            </div>
                                            </div>
                                        </div>
                                </div>
                              <div class="col-md-12">
                                 <div class="form-floating">
                                    <input type="email" name="email" class="form-control rounded-0" id="emailID" placeholder="Enter Email ID">
                                    <label class="fw-m" for="emailID">Email ID (Optional)</label>
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
                                        <input type="text" name="message" class="form-control rounded-0" id="type" placeholder="Wirte a Message" required >
                                        <label class="fw-m fs-md-16 fs-14" for="Requierment"> Wirte a Message</label> 
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
               <button type="submit" id="digitalBTN" class="btn btn-theme3 fs-md-14 fs-13 fw-m py-2 px-md-4 px-3 w-100">
                  <span class="d-block"><span>Submit</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
               </button>
            </div>
         </form>
      </div>
   </div>

@endsection
@push('scripts')
<script src="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.js"></script>
<script src="{{asset('/public')}}/assets/js/ecommerce-website-development.min.js"></script>
<script src="{{asset('/public')}}/assets/js/fantasy-sports-app-development.min.js"></script>
<script src="{{asset('/public')}}/assets/js/fantasy-cricket-app-development.min.js"></script>


@endpush