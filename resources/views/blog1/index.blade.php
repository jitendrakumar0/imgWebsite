@extends('main')
@push('meta')
<!--  Title -->
<title>Web & Mobile App Development Blogs - IMG Global Infotech</title>

<!-- Required meta tags -->
<meta name="title" content="Web & Mobile App Development Blogs - IMG Global Infotech" />
<meta name="description" content="Here, you can find top trending blogs and news about mobile app development, web development, ecommerce development and more." />
<meta name="keywords" content="" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Web & Mobile App Development Blogs - IMG Global Infotech">
<meta name="twitter:description" content="Here, you can find top trending blogs and news about mobile app development, web development, ecommerce development and more.">


<!-- Facebook Meta -->
<meta property="og:url" content="{{asset('/')}}blog">
<meta property="og:title" content="Web & Mobile App Development Blogs - IMG Global Infotech">
<meta property="og:description" content="Here, you can find top trending blogs and news about mobile app development, web development, ecommerce development and more.">

<meta name="classification" content="Web & Mobile App Development Blogs - IMG Global Infotech" />
<link rel="canonical" href="{{asset('/')}}blog" />
<meta name="robots" content="noindex, nofollow" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
<link data-root-putcolor="singleBlogBanner" rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/blog1.min.css">

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
                     <li class="breadcrumb-item active fw-600 fs-lg-16 fs-md-15 fs-14 text-dark" aria-current="page">Blog</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>

 <!-- SEO headding -->
 <h1 class="d-none">blog</h1>

   <div class="container-fluid position-relative overflow-hidden featured-blog blog_section pt-lg-0 pt-lg-0 pt-5">
      <div class="container py-lg-4 py-md-4 py-5 position-relative zi-9">
          <div class="row mx-0">
            <div class="col-md-12">
               <div class="blog_category_part bg-white border row d-block ">
                  <div class="blog_category d-flex align-items-center justify-content-between fw-bold fs-16 bg-theme1 text-white py-1">Featured Blog </div>
               </div>
             </div>

             <div class="row mx-0 portfolio-sldier owl-carousel">
                <div class="col-md-12">
                   <div class="row mx-0 position-relative align-items-center pt-lg-5 pt-md-5 pt-2">
                           <div class="col-12 col-sm-12 col-md-6 mb-4 pt-lg-3 pt-md-3 pt-2 pb-lg-2 pb-md-2 pb-2 ps-xl-5 ps-lg-5 ps-1 pe-xl-5 pe-lg-5 pe-1 pb-xl-0 pe-pb-5 pb-1">
                              <a href="#0" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                 <div class="row">
                                    <div class="col-12 position-relative overflow-hidden p-0">
                                       <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.avif" class="lazy-image h-auto" 
                                       data-src="{{asset('/public')}}/assets/img/blog-section/Doctor-On-Demand-Mobile-Application-Development-Overall-Cost-and-Features.avif" class="img-fluid" alt="Doctor On-Demand Mobile Application Development- Overall Cost And Features" width="302" height="170" >
                                       </div>
                                 </div>
                               </a> 
                           </div>

                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-0 position-relative">
                                <div class="col-12 py-lg-1 py-md-1 py-0 text-left fs-lg-15 fs-md-15 fs-20 text-theme1 fw-bold">Guidess </div>
                                  <div class="col-12 py-lg-1 py-md-1 py-0 text-left fs-lg-25 fs-md-25 fs-20 fw-900 py-1">
                                     Doctor On-Demand Mobile Application Development- Overall Cost And Features
                                    </div>
                                    <div class="col-12 px-0 fw-600 fs-lg-16 fs-md-14 fs-15 text-muted mt-lg-3 mt-md-0 mt-0 blog-para">
                                    Women's Premier League appears to be riding a wave of popularity in 2023. However, despite growing interest, there remain stark differences in financial metrics between the women's game and the men's.  </p>
                                 </div>
                                 <div class="col-12 fs-16 fw-700 py-2 d-flex my-2 fw-600">
                                    <span class="me-2">By Lokesh Saini </span> 
                                    <span> May 10, 2023</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                </div>  
            </div>      
         </div>                       

         <div class="container-fluid new-blogs blog_section position-relative overflow-hidden py-md-5 py-4" >
           <div class="container mt-md-0 mt-5">
            <div class="row">
              <div class="col-md-12">
                </div>
                <div class="col-md-12 p-0">
                 <div class="col-md-12 px-0">
                  <div class="blog_left_part row" id="blogList">
                     <div class="col-lg-6 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items" data-putcolor="samedomain226" style="--h:80; --s:7.7; --l:59;">
                      <div class="row">
                        <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                           <img class="img-fluid" data-getcolor="samedomain226" src="https://www.imgglobalinfotech.com/imgadmin2/images/blog/blog_thumb/blogimageReadymade-Fantasy-Cricket-App-Development-Cost-A-Complete-Guide.webp" alt="top-15-celebrity-look-alike-apps" title="Top 15 Celebrity Look-Alike Apps 2023">
                           <a href="https://www.imgglobalinfotech.com/blog/category/mobile-app-development" class="tag_blog">Mobile App Development</a>
                        </div>
                        <div class="row align-items-center mx-1">
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 d-xl-block d-lg-block d-md-block d-none">
                              <img src="{{GETFOLDERPATH()}}/useravatar.webp" class="w-100" alt="useravatar">
                           </div>

                           <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                            <div class="row">
                              <a href="#0" class="col-12 fw-bold card_blog_title fs-16 lh-normal pt-2 text-decoration-none text-dark">
                              Doctor On-Demand Mobile Application Development- Overall Cost And Features </a>
                              <div class="col-12 fs-16 fw-700">
                                 <span class="me-2">By Lokesh Saini </span> 
                              <span> May 10, 2023</span>
                            </div>
                          </div>
                        </div>
                     </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items" data-putcolor="samedomain226" style="--h:80; --s:7.7; --l:59;">
                      <div class="row">
                        <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                           <img class="img-fluid" data-getcolor="samedomain226" src="https://www.imgglobalinfotech.com/imgadmin2/images/blog/blog_thumb/blogimageStep-By-Step-Process-on-How-to-Build-a-Mobile-App-from-Scratch.webp" alt="top-15-celebrity-look-alike-apps" title="Top 15 Celebrity Look-Alike Apps 2023">
                           <a href="https://www.imgglobalinfotech.com/blog/category/mobile-app-development" class="tag_blog">Mobile App Development</a>
                        </div>
                        <div class="row align-items-center mx-1">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 d-xl-block d-lg-block d-md-block d-none">
                             <img src="{{GETFOLDERPATH()}}/useravatar.webp" class="w-100" alt="useravatar">
                           </div>

                           <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                            <div class="row">
                              <a href="#0" class="col-12 fw-bold card_blog_title fs-16 lh-normal pt-2 text-decoration-none text-dark">
                              Doctor On-Demand Mobile Application Development- Overall Cost And Features </a>
                              <div class="col-12 fs-16 fw-700">
                                 <span class="me-2">By Lokesh Saini </span> 
                              <span> May 10, 2023</span>
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
<script src="{{asset('/public')}}/assets/plugins/imageColorPicker/script.js"></script>
<script src="{{asset('/public')}}/assets/js/blog1.min.js"></script>
<script>
   $('#searchBlog').keyup(function(e){
      e.preventDefault();
      // console.log($('#blogList').html());
      var front_url = window.location.href.split('?')[0];
      let content = $(this).val();
      var url = 'search='+content;
      var newRelativePathQuery = front_url + '?' +url;
      history.pushState(null, '', newRelativePathQuery);
      $.ajax({
         'url':"{{asset('/blog/search')}}",
         'type':'POST',
         'data':'_token={{csrf_token()}}&search='+content,
         success:function(data){
            $('#blogList').html(data);
         }
      });
   });
   
</script>
@endpush
