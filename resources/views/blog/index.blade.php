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
<meta name="robots" content="index, follow" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
<link data-root-putcolor="singleBlogBanner" rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/blog.min.css">

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
 <h1 class="d-none"> blog</h1>
   
  @if(isset($feature_blogs) && !empty($feature_blogs))
 <div class="container-fluid position-relative overflow-hidden featured-blog blog_section pt-lg-5 pt-md-2 pt-5">
      <div class="container py-lg-4 py-md-4 pt-5 position-relative zi-9 p-xl-0 p-lg-0 p-md-0 p-0">
          <div class="row">
            <div class="col-md-12">
               <div class="blog_category_part bg-white border row d-block mx-1">
                  <div class="blog_category d-flex align-items-center justify-content-between fw-bold fs-16 bg-theme1 text-white py-1">Featured Blog </div>
               </div>
             </div>

             <div class="row mx-0 portfolio-sldier owl-carousel">
             @foreach($feature_blogs as $blog)
             <?php 
                  $blogTitle=strip_tags($blog->title);
                  //$blogTitle=htmlspecialchars($blogTitle);
                  if(strlen($blogTitle)>70){
                     $title = substr($blogTitle,0,70).'..';
                  }else{
                     $title = ($blogTitle); 
                  }
               ?>
                <div class="col-md-12">
                   <div class="row mx-0 position-relative align-items-center pt-lg-2 pt-md-2 pt-2">
                           <div class="col-12 col-sm-12 col-md-6 mb-1 pt-lg-3 pt-md-3 pt-2 pb-lg-2 pb-md-2 pb-2 ps-xl-5 ps-lg-5 ps-1 pe-xl-5 pe-lg-5 pe-1 pb-xl-0 pe-pb-5 pb-1">
                              <a href="#0" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                 <div class="row">
                                    <div class="col-12 position-relative overflow-hidden">
                                       <a href="{{asset('/')}}blog/{{$blog->urlBlog}}" >
                                         <img src="{{BLOG_IMAGE_URL_THUMB($blog->blog_image)}}" class="img-fluid" alt="{{ $title }}" width="302" height="170" > 
                                       </a>
                                       </div>
                                 </div>
                               </a> 
                           </div>

                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-0 position-relative">
                                <div class="col-12 py-lg-1 py-md-1 py-0 text-left fs-lg-15 fs-md-15 fs-20 text-theme1 fw-bold">
                                 <a href="{{asset('/')}}blog/category/{{$blog->slugcategory}}" class="fs-lg-17 fs-md-15 fs-21 fw-600 text-decoration-none text-theme1">{{$blog->blogtitle}}</a> </div>
                                  <div class="col-12 py-lg-1 py-md-1 py-0 text-left fs-lg-25 fs-md-15 fs-20 fw-900 py-1">
                                    <a href="{{asset('/')}}blog/{{$blog->urlBlog}}" class="fs-lg-26 fs-md-19 fs-sm-26 fs-17 fw-900 text-decoration-none text-dark">
                                     {{ $title }}
                                    </a>
                                    </div>
                                    <div class="col-12 px-0 fw-600 fs-lg-17 fs-md-14 fs-16 text-muted mt-lg-3 mt-md-0 mt-0 blog-para">
                                    <?php 
                                       $resvi=$blog->description; 
                                       $resvi=strip_tags($resvi);
                                       //$resvi=htmlspecialchars($resvi);
                                       if(strlen($resvi)>120){
                                          echo substr((($resvi)),0,120).'...';  
                                       }else{
                                          echo (($resvi)); 
                                       } 
                                    ?>
                                 </div>
                                 <div class="col-12 fs-lg-16 fs-md-14 fs-16 fw-700 py-2 d-flex my-2 fw-600">
                                    <span class="me-2">By {{$blog->author_name}} </span> 
                                    <span> <?php echo date('M d, Y', strtotime($blog->blog_date));?></span>
                                 </div>
                              </div>
                           </div>
                    </div>
                @endforeach
                    </div>
                </div>  
            </div>      
         </div>    
   @endif
   
   <!-- blog section -->
   <div class="container-fluid blog_section position-relative overflow-hidden py-lg-5 py-md-0 py-4" style="--bg:white;">
      <div class="container mt-md-0 mt-0">
       <div class="row justify-content-center">
          <div class="row">
           <div class="col-md-12">
               <div class="blog_category_part bg-white border row d-block shadow">
                  <div class="blog_category d-flex align-items-center justify-content-between fw-bold fs-16 bg-theme1 text-white py-1">Blog Category <span class="categrory_ico">Filter By <i class="imgr me-1 fs-16 img-sort-alpha-up"></i></span></div>
                  <div class="blog_category_outer px-0">
                     <ul class="list-unstyled mb-0">
                        @foreach($blog_category as $value)
                           @if($bgc!='' && $bgc->id==$value->id)
                              <li style="flex: 1 1 auto;"> <a href="{{asset('/blog/category/'.$value->slugcategory)}}" class="text-capitalize active">{{$value->title}}</a></li>
                           @else
                              <li style="flex: 1 1 auto;"> <a href="{{asset('/blog/category/'.$value->slugcategory)}}" class="text-capitalize">{{$value->title}}</a></li>
                           @endif
                        
                        @endforeach
                     </ul>
                  </div>
               </div>
               <div class="bg-white mt-3 border row d-block z-index-3 py-3 shadow">
                  <div class="col-md-12 col-12 px-3">
                     <!-- <form action="{{asset('blog/search')}}" method="GET" class="row mx-0 position-relative">
                        <div class="col-md-12 col-12 px-0 dp-0">
                           <input type="text" class="form-control shadow-none" placeholder="Search Blog" value="<?php //if(isset($_GET['value'])){ echo $_GET['value']; } ?>" name="value" required="">
                        </div>
                        <div class="col-auto px-0 position-absolute right-10px top-3px bottom-0">
                           <input type="submit"  class="btn shadow-none imgr img-search">
                        </div>
                     </form> -->
                     <div class="row mx-0 position-relative">
                        <div class="col-md-12 col-12 px-0 dp-0">
                           <input type="text" value="{{ request()->get('search', '') }}" id="searchBlog" class="form-control shadow-none" placeholder="Search Blog">
                        </div>
                        <div class="col-auto px-0 position-absolute right-10px top-3px bottom-0">
                           <input type="button"  class="btn shadow-none imgr img-search">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12 px-0">
               <div class="blog_left_part row" id="blogList">
                  @foreach($blogs as $blog)
                  <div class="col-lg-6 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items" data-putcolor="samedomain{{$blog->id}}">
                     <div class="row mx-0 py-3 bg-white shadow border h-100">
                        <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                           <img class="img-fluid" data-getcolor="samedomain{{$blog->id}}" src="{{BLOG_IMAGE_URL_THUMB($blog->blog_image)}}" alt="{{$blog->image_alttag}}" title="{{$blog->image_title}}">
                          
                        </div>
                        <a href="{{asset('/')}}blog/{{$blog->urlBlog}}" class="col-12 fw-bold card_blog_title fs-16 lh-normal pt-2 text-decoration-none">
                           <?php 
                              $blogTitle=strip_tags($blog->title);
                              //$blogTitle=htmlspecialchars($blogTitle);
                              if(strlen($blogTitle)>70){
                                 echo substr($blogTitle,0,70).'..';
                              }else{
                                 echo ($blogTitle); 
                              }
                           ?>
                        </a>
                        <div class="col-12 fs-lg-14 fs-12 fw-bold py-2 d-flex justify-content-between align-items-center my-2 author_name_date">
                        <span> <span class="me-2">By {{$blog->author_name}} </span> 
                           <span> <?php echo date('M d, Y', strtotime($blog->blog_date));?></span> </span>
                           <a href="{{asset('/')}}blog/category/{{$blog->slugcategory}}" class="tag_blog fs-lg-14 fs-12 fw-600 text-decoration-none text-white">{{$blog->blogtitle}}</a>
                        </div>
                        <div class="col-12 fs-14 fw-600 h-65px">
                           <?php 
                              $resvi=$blog->description; 
                              $resvi=strip_tags($resvi);
                              //$resvi=htmlspecialchars($resvi);
                              if(strlen($resvi)>120){
                                 echo substr((($resvi)),0,120).'...';  
                              }else{
                                 echo (($resvi)); 
                              } 
                           ?>
                           <a class="text-decoration-none text-theme1" href="{{asset('/')}}blog/{{$blog->urlBlog}}">Read&nbsp;more </a>
                        </div>
                     </div>
                  </div>
                  @endforeach

                  {{ $blogs->appends(request()->all())->links() }}
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection
@push('scripts')
<script src="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.js"></script>
<script src="{{asset('/public')}}/assets/plugins/imageColorPicker/script.js"></script>
<script src="{{asset('/public')}}/assets/js/blog.min.js"></script>
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
