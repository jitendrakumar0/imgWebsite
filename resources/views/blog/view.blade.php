@extends('main')
@push('meta')
<title>{{$blog->meta_title}} | IMG Global Infotech</title>

<!-- Required meta tags -->
<meta name="title" content="{{$blog->meta_title}} | IMG Global Infotech-blog" />
<meta name="description" content="{{$blog->meta_description}}" />
<meta name="keywords" content="{{$blog->meta_keyword}}" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="{{$blog->meta_title}} | IMG Global Infotech">
<meta name="twitter:description" content="{{$blog->meta_description}}">

<meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- Facebook Meta -->
<meta property="og:url" content="{{asset('/')}}blog/{{ $blog->urlBlog}}">
<meta property="og:title" content="{{$blog->meta_title}} | IMG Global Infotech">
<meta property="og:description" content="{{$blog->meta_description}}">
<meta property="og:image" content="{{BLOG_IMAGE_URL()}}{{$blog->blog_image}}">
<meta property="og:image:secure_url" content="{{BLOG_IMAGE_URL()}}{{$blog->blog_image}}">



<meta name="classification" content="{{$blog->meta_title}} | IMG Global Infotech" />
<link rel="canonical" href="{{asset('/')}}blog/{{ $blog->urlBlog}}" />
<meta name="robots" content="index, follow" />
@endpush
<?php
$default_text_color = "#000";
$background_color = "#fff";

if(isset($blog->background_color) && !empty($blog->background_color) && isset($blog->background_color_status) && $blog->background_color_status=='1'){
   $background_color = $blog->background_color;
   $default_text_color = "#fff";

   ?>
   @push('scripts')
<script>
   $(document).ready(function(){
      $('.blog_logo').html("<img src='{{asset('/public')}}/assets/img/logos/img-logo11.png' srcset='{{asset('/public')}}/assets/img/logos/img-logo11.png 700w, {{asset('/public')}}/assets/img/logos/img-logo11.png 1000w, {{asset('/public')}}/assets/img/logos/img-logo11.png 1200w' width='199' height='55' alt='IMG Global Infotech Logo'>");
  });  
</script>
@endpush
<?php   
}
?>

@push('styles')
<link data-root-putcolor="singleBlogBanner" rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/blog.min.css">

<style>
 .navbar{
      background: none !important;
   }
   nav.navbar.nav-active::before{
      background: #fff !important;
   }
   nav.navbar.nav-active a.nav-link{
      color: #000 !important;
   }
   
   nav.navbar a.nav-link{
      color: <?= $default_text_color; ?> !important;
   }
   nav.navbar .topbar ul li a{
      color: <?= $default_text_color; ?> !important;
   }
    nav.navbar.nav-active  .topbar  ul li a{
        color: #000 !important;
    }
    .blog-main{
      background:<?= $background_color; ?>
    }
    .blog_logo1{
      display: none;
    }

    nav.navbar.nav-active .blog_logo{
      display: none;
    }
    nav.navbar.nav-active .blog_logo1{
      display: block !important;
    }
</style>
@endpush
@section('content')


   <!-- blog single section -->
   <div class="container-fluid  blog_single position-relative overflow-hidden blog-main" data-putcolor="singleBlogBanner">
      <div class="container py-5 position-relative zi-9">
         <div class="row pt-lg-5 mt-4">
           <div class="col-lg-12 col-12">
              <div class="row  gy-lg-0 gx-lg-5 gx-0 gy-5  my-3 z-index-3 py-4  position-relative">
                <div class="col-lg-6 col-12">
                   <div class="blog_baner_top">
                     <div class="col-12">
                     <a href="{{asset('/blog/category/'.$blog->slugcategory)}}" class="blog_up_heading fw-m fs-xl-17 fs-lg-17 fs-md-17 fs-14" style="color: <?= $default_text_color; ?>;">{{ucwords($blog->category_title)}}</a>
                      <div class="col-12 fw-m fs-md-14 fs-12 left pt-1 lh-sm"><span class="fs-xl-42 fs-lg-42 fs-md-40 fs-24" style="color: <?= $default_text_color; ?>;">{{ucwords($blog->title)}}</span></div>
                      <div class="col-12 fw-l fs-lg-22 fs-md-18 fs-sm-15 fs-14  mt-3 mb-lg-3" style="color: <?= $default_text_color; ?>;">{{$blog->short_description}}</div>
                      <div class="col-12 d-flex align-items-center blog_side_img pt-2">
                        <a href="" class="me-3">
                          <img class="h-55px w-55px  rounded-pill d-flex align-items-center" src="{{asset('/imgadmin2/images')}}/blogauthor/{{$blog->author_image}}" alt="writer">
                        </a>
                        <div class="blog_content">
                         <a href="" class="blog_up_heading fw-l fs-lg-16 fs-md-16 fs-sm-15 fs-14" style="color: <?= $default_text_color; ?>;">Written by <b>{{$blog->author_name}} </b></a>
                         <div class="fw-l fs-lg-14 fs-md-13 fs-sm-12 fs-12 d-flex align-items-center " style="color: <?= $default_text_color; ?>;">{{date('M d, Y',strtotime($blog->created_date))}} </div>
                        </div>
                      </div>
                     </div>  
                   </div>
                
                </div>
                <div class="col-lg-6 col-12">
                <img class="img-fluid d-flex" height="647" src="{{BLOG_IMAGE_URL()}}{{$blog->blog_image}}" alt="{{ucwords($blog->category_title)}}">
                </div>
              </div>
           </div>
          
         
            </div>
         </div>
      </div>
   </div>


   <div class="container-fluid  blog_single position-relative  " data-putcolor="singleBlogBanner">
      <div class="container  zi-9">
         <div class="row">


   <div class="col-lg-8 col-12">
               <div class="blog_single_main mx-0  my-3  row d-block z-index-3 py-4  position-relative">
                  <div class="col-12">
                     <!-- <div class="blog_single_top row">
                        
                        <a href="{{asset('/blog/category/'.$blog->slugcategory)}}" class="tag_blog_single">{{ucwords($blog->category_title)}}</a>
                        <h1 class="col-12 px-md-4 px-2 fw-m fs-md-22 fs-22 lh-normal text-decoration-none mt-3 mb-1 blog_single_title">{{ucwords($blog->title)}}</h1>
                        
                     

                        <div class="col-12">
                           <div class="row align-items-center py-2 border-top border-bottom mt-3 mb-0 blogBySingleBlog">
                              <div class="col">
                                 <div class="d-flex align-items-center fs-14">
                                    <span class="h-40px bg-white w-40px border shadow rounded-pill d-flex align-items-center justify-content-center">
                                       <img class="w-100" src="{{asset('/public')}}/assets/img/logos/avatar.webp" alt="{{$blog->author_name}}">
                                    </span>
                                    <div class="ms-2">
                                       <strong class="text-white fs-14">By {{$blog->author_name}}</strong>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-auto">
                                 <div class="text-white fs-md-14 fs-13 fw-m pl-0 d-flex align-items-center mb-0 justify-content-start"> <span class=""><i class="imgr img-calendar-alt me-1 fs-15"></i> {{date('M d, Y',strtotime($blog->created_date))}}</span></div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                  </div>
                  <!-- <div class="event_img px-0 position-relative overflow-hidden">
                     <a href="javascript:;"><img data-getcolor="singleBlogBanner" class="w-100" src="{{BLOG_IMAGE_URL()}}{{$blog->blog_image}}" alt="{{ucwords($blog->category_title)}}"></a>
                     <span class="views"><i class="imgs img-eye me-2"></i> {{$blog->count}}</span>
                  </div> -->
                  <div class="col-12 px-md-4 px-3">
                     <div class="blog_single_text">
                        @php
                           echo $blog->description;
                        @endphp
                     </div>
                  </div>


                  <?php if(isset($blog->faq) && !empty($blog->faq) && ($blog->faq!='[]')){ ?>
                  <div class="col-12 px-md-0 px-0">
                     <div class="fs-18 text-theme1 fw-m pt-4 px-4">Faq</div>
                          <!-- faq section -->
                               
                                  
                                          <div class="container position-relative zi-2 py-lg-2 overflow-hidden bg-white faq_section position-relative py-3">
                                          
                                             <div class="row">
                                             <div class="col-md-12">
                                       
                                       
                                       <div class="accordion" id="accordionExample">

                                          <?php if(!empty($blog->faq)){
                                                $faqResult = json_decode($blog->faq,true);
                                                foreach($faqResult as $key=>$faqdata) {   
                                          ?>
                                          <div class="accordion-item mb-4 position-relative zi-2">
                                             <div class="accordion-header" id="heading<?= $key; ?>">
                                                <button class="accordion-button fs-lg-14 fs-md-13 fs-13 fs-lg-14 fs-md-13 fs-13 p-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $key; ?>" aria-expanded="false" aria-controls="collapseOne">
                                                <?= $faqdata['question']; ?>
                                                </button>
                                             </div>
                                             <div id="collapse<?= $key; ?>" class="position-relative accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-muted fs-14">
                                                <?= $faqdata['answer']; ?>
                                                </div>
                                             </div>
                                          </div>
                                          <?php } } ?>
                                    </div>
                                 </div>
                                 </div>
                              </div>
                           </div> 
                     
                   <?php } ?>

                   <div class="row mb-3 position-relative px-md-4 px-3">
           <div class="col-12">
           <div class="fs-18 text-theme1 fw-m pt-2 pb-2">Tag:</div>
           @if( !empty($blog->tags_foo) )
                        <div class="col-12  blog-single-tags d-md-block d-none">
                           <ul class="list-unstyled mb-0">
                                    
                              @foreach($blog->tags_foo as $tag)
                                 <li> <a  href="{{asset('/blog/tag/'.$tag->tags_slug)}}" class="px-2 bg-dark">{{$tag->tags}}</a></li>
                              @endforeach

                           </ul>
                        </div>
                        @endif
           </div>
           </div>
         


                  <div class="col-12 px-md-4 px-3">
                     <div class="fs-18 text-theme1 fw-m pt-2">Share On:</div>
                     <div class="blog_socials">
                        <a class="facebook" style="cursor:pointer;" onclick="sharePost('facebook','<?php echo $blog->urlBlog; ?>');"><i class="imgb img-facebook"></i></a>
                        <a class="twitter" style="cursor:pointer;" onclick="sharePost('twitter','<?php echo $blog->urlBlog; ?>');"><i class="imgb img-twitter"></i></a>
                        <a class="linkden" style="cursor:pointer;" onclick="sharePost('linkedin','<?php echo $blog->urlBlog; ?>');"><i class="imgb img-linkedin"></i></a>
                     </div>
                  </div>
               </div>


                



               <!-- <div class="bg-white my-3 border mx-0 row d-block z-index-3  position-relative">
                  <div class="outer_heading fs-18  fw-m mb-4 py-2 px-4 d-flex align-items-center justify-content-start position-relative z-index-2 ">Recent Comment.</div>
                  <div class="col-12 px-md-4 px-3">
                     @forelse($comments as $cms)
                        <div class="coment_box bg-light p-3 border rounded mb-4">
                           <div class="fs-18 text-theme3 fw-m">{{ucwords($cms->name)}}</div>
                           <div class="fs-14 text-dark fw-m pt-1">@php echo $cms->comment; @endphp</div>
                        </div>
                     @empty
                        <div class="coment_box bg-light p-3 border rounded mb-4">
                           <div class="fs-18 text-theme3 fw-m"></div>
                           <div class="fs-14 text-dark fw-m pt-1">No Comments..</div>
                        </div>
                     @endif
                  </div>
               </div> -->
               <div class="blog_single_form mx-0 bg-white my-3 border row d-none z-index-3 pb-4  position-relative">
                  <div class="outer_heading fs-18  fw-m mb-4 py-2 px-4 d-flex align-items-center justify-content-start position-relative z-index-2 ">Post a Comment.</div>
                  <div class="col-12 px-md-4 px-3">
                     <p id="message"></p>
                     <form method="post" action="{{url('blog/Post_comment')}}" id="blogComment" name="blog-form" class="row ">
                        <div class="col-md-6 mb-4">
                           <div class="form-floating">
                              <input type="text" name="name" class="form-control " id="name" placeholder="Enter Full Name" required="">
                              <label class="fw-m" for="name">Full Name <span class="text-danger">*</span></label>
                              <!-- <div class="invalid-feedback fs-12">Please Enter Full Name.</div> -->
                           </div>
                        </div>
                        <div class="col-md-6 mb-4">
                           <div class="form-floating">
                              <input type="email" name="email" class="form-control " id="emailID" placeholder="Enter Email ID" required="">
                              <label class="fw-m" for="emailID">Email ID <span class="text-danger">*</span></label>
                              <!-- <div class="invalid-feedback fs-12">Please Enter a Valid Email ID.</div> -->
                           </div>
                        </div> 
                        <div class="col-md-12 mb-4" style="display:none;">
                           <div class="form-floating">
                              <input type="url" name="website" class="form-control " id="organization" placeholder="Enter Organization Name">
                              <label class="fw-m" for="organization">Website</label>
                              <div class="invalid-feedback fs-12">Enter Website URL here</div>
                           </div>
                        </div>
                        <input type="hidden" required="required" name="page_url" value="{{$blog->urlBlog}}">
                        <input type="hidden" required="required" name="blog_id" value="{{$blog->id}}">
                        <div class="col-md-12 mb-4">
                           <div class="form-floating">
                              <textarea name="comment" class="form-control " id="Requierment" placeholder="Enter Requierment Name" required=""></textarea>
                              <label class="fw-m" for="Requierment">Write Your Comment Here <span class="text-danger">*</span></label>
                              <!-- <div class="invalid-feedback fs-12">Please write something in comment box.</div> -->
                           </div>
                        </div>
                        <div class="col-auto align-self-center mt-2 mb-3">
                           <button type="submit" class="btn btn-theme3 fs-md-14 fs-12 fw-m hero_read_more_btn py-2 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt="" data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                              <span class="d-block"><span>Post Comment</span> <i class="imgd img-paper-plane position-relative bottom-n2px ms-2"  id="PlaneCommentLoader"></i> <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="Comment_Loader"></span></span>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-12">
                  <div class="blog-recent-post mx-0 bg-white my-3  row d-block z-index-3 pb-4  ">
                  <div class="outer_heading fs-18  fw-m mb-3 py-2 px-4 d-flex align-items-center justify-content-start position-relative z-index-2">Recent Post.</div>
                  <span class="tab-border"></span>
                  <div class="col-12">
                     <ul class="ps-0">
                        @forelse($blogsRecent as $post)
                           <li>
                              <a href="{{asset('/blog/'.$post->urlBlog)}}">{{$post->title}}</a>
                           </li>
                        @empty
                           <li><a href="javascript:;">No Post Available</a></li>
                        @endif
                     </ul>
                  </div>
                  <span class="tab-border"></span>
               </div>
              <!-- <div class="blog-galler mx-0 bg-white my-3 border row d-block z-index-3 pb-2 shadow position-relative">
                  <div class="outer_heading fs-18  fw-m mb-3 py-2 px-4 d-flex align-items-center justify-content-start position-relative z-index-2 shadow">Gallery.</div>
                  <div class="col-12">
                     <div class="blog_gallery_inner">
                        @forelse($blogs as $gl)
                           <a class="border" href="{{asset('/blog/'.$gl->urlBlog)}}">
                              <img src="{{BLOG_IMAGE_URL()}}/blog_thumb2/{{$gl->blog_image}}" alt="{{$gl->image_alttag}}" data-bs-toggle="tooltip" title="{{$gl->image_title}}">
                           </a>
                        @empty
                           <a class="border" href="javascript:;">
                              <img src="{{asset('/public')}}/assets/img/blog/10-things-to-consider-mobile-app-development/gallery/4_Reasons_Why_Tech_Startups_Should_Hire_a_Full-Stack_Developer-01.webp" alt="">
                           </a>
                        @endif
                     </div>
                  </div>
               </div> 
               <div class="blog-folow mx-0 bg-white my-3  row d-block z-index-3 pb-3  position-relative">
                  <div class="outer_heading fs-18  fw-m mb-0 py-2 px-4 d-flex align-items-center justify-content-start position-relative z-index-2 ">Follow Us.</div>
                  <div class="col-12">
                     <div class="blog_socials">
                        <a class="facebook" href="https://www.facebook.com/imgglobalinfotech"><i class="imgb img-facebook"></i></a>
                        <a class="twitter" href="https://twitter.com/imgglobal"><i class="imgb img-twitter"></i></a>
                        <a class="linkden" href="https://www.linkedin.com/company/imgglobalinfotechpltd/"><i class="imgb img-linkedin"></i></a>
                        <a class="instagram" href="https://www.instagram.com/imgglobalinfotech/"><i class="imgb img-instagram"></i></a>
                        <a class="youtube" href="https://www.youtube.com/c/IMGGlobalInfotechPrivateLimited"><i class="imgb img-youtube"></i></a>
                     </div>
                  </div>
               </div>
               <div class="blog_single_form single_form_right  mx-0 bg-white my-3  row d-block z-index-3 pb-3  position-relative">
                  <div class="outer_heading fs-18  fw-m mb-4 py-2 px-4 d-flex align-items-center justify-content-start position-relative z-index-2 ">Contact Us</div>
                  <form method="post" id="blog-form" name="blog-form" class="recentpostFormValidation" novalidate="">
                     @csrf
                     <div class="col-md-12 mb-3">
                        <div class="form-floating">
                           <input name="contactname" type="text" class="form-control rounded-0" id="name" placeholder="Enter Full Name" required="">
                           <label class="fw-m" for="name"> Name</label>
                           <div class="invalid-feedback fs-12">Please Enter Full Name.</div>
                        </div>
                     </div>
                     <div class="col-md-12 mb-3">
                        <div class="form-floating">
                           <input name="contactemail" type="email" class="form-control rounded-0" id="emailID" placeholder="Enter Email ID" required="">
                           <label class="fw-m" for="emailID">Email ID (Optional)</label>
                           <div class="invalid-feedback fs-12">Please Enter a Valid Email ID.</div>
                        </div>
                     </div>
                     <div class="col-md-12 mb-3">
                                                <div class="row form-floating">
                                                   <div class="col-5 pe-0">
                                                        <select class="form-select rounded-0 brl form-control" name="phonecode" id="phonecode" aria-label="Default select example" style="padding: 0.375rem 0.25rem 0.375rem 0.75rem !important;height: 43px;">
                                                        <option value="IN +91" selected="selected"> IN +91</option>
                                                      

                                                    
                                                    </select>
                                                    </div>
                                                    <div class="col-7 ps-0">
                                                        <div class="form-floating">
                                                        
                                                            <input type="tel" name="contactnumber" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control rounded-0 fs-md-16 fs-14 border-start" id="phoneNumber" placeholder="Enter Phone Number" required="">
                                                            <label class="fw-m fs-lg-14 fs-md-12 fs-14" for="phoneNumber">Mobile Number <label class="text-danger">* </label></label>
                                                            <div class="invalid-feedback fs-12">Please Enter a Valid Phone Number.</div>
                                                        </div>
                                                    </div>
                                               </div>
                                            </div>
                   <div class="col-md-12 mb-3">
                        <div class="form-floating">
                           <input name="contactnumber" type="tel" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control rounded-0" id="phoneNumber" placeholder="Enter Phone Number" required="">
                           <label class="fw-m" for="phoneNumber">Mobile Number</label>
                           <div class="invalid-feedback fs-12">Please Enter a Valid Phone Number.</div>
                        </div>
                     </div> 
                     <div class="col-md-12 mb-3">
                        <div class="form-floating">
                           <select name="requirement" required="" class="form-control rounded-0">
                           <option value="">Looking For *</option>
                           <option value="Fantasy Cricket App Development">Fantasy Cricket App Development</option>
                           <option value="Fantasy Sports App Development">Fantasy Sports App Development</option>
                           <option value="Fantasy Football App Development">Fantasy Football App Development</option>
                           <option value="Mobile App Development">Mobile App Development</option>
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
                        </div>
                     </div>
                     <div class="col-md-12 mb-3">
                        <div class="form-floating">
                           <textarea name="mmessage" class="form-control rounded-0" id="Requierment" placeholder="Enter Requierment Name" required=""></textarea>
                           <label class="fw-m" for="Requierment">Please Enter Message</label>
                           <div class="invalid-feedback fs-12">Please Enter a Valid Requierment.</div>
                        </div>
                     </div>
                   
                     <div class="col-auto d-flex align-self-center justify-content-center mt-4 mb-3">
                        <button type="submit" class="btn btn-theme3 fs-12 fw-m hero_read_more_btn py-2 px-3" style="transform-style: preserve-3d;" data-tilt="" data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500" id="conBtn" >
                           <span class="d-block"><span>Submit</span> <i class="imgd img-paper-plane position-relative bottom-n2px ms-2"></i></span>
                        </button>
                     </div>
                  </form>
               </div> -->
            </div>
            <div class="row gy-lg-0 gx-lg-4 gx-md-3 gx-0 gy-4  my-3 z-index-3 py-4  position-relative blog_guide">
               
            @if(!empty($blogs))
            @foreach($blogs as $gl)
            <?php 
               $blogTitle=strip_tags($gl->title);
               if(strlen($blogTitle)>50){
                  $title = substr($blogTitle,0,50).'..';
               }else{
                  $title = ($blogTitle); 
               }
            ?>
               <div class="col-lg-4  col-sm-12 col-12">
                     <div class="col-12 ">
                     <figure>
                     <a href="{{asset('/blog/'.$gl->urlBlog)}}" >
                        <img  class="img-fluid w-100" src="{{BLOG_IMAGE_URL()}}/blog_thumb2/{{$gl->blog_image}}" class="blog-grid-img" alt="{{$gl->image_alttag}}">
                        </a>
                     </figure>
                     <div class="blog_grid_content">
                        <div class="blog_cat"><a href="" class="col-12 fs-lg-14 fs-12 text-dark fw-m blog_up_heading">{{$gl->blogtitle}}</a></div>
                        <div><a href="{{asset('/')}}blog/{{$gl->urlBlog}}" class="col-12 fw-m  fs-24 text-dark lh-normal pt-2 blog_up_heading" >{{$title}}</a></div>
                        <div class="col-12 fs-19 pt-3 mb-4 fw-l blog_guide_content">
                        <?php 
                              $resvi=$gl->description; 
                              $resvi=strip_tags($resvi);
                              if(strlen($resvi)>120){
                                 echo substr((($resvi)),0,120).'...';  
                              }else{
                                 echo (($resvi)); 
                              } 
                           ?>
                        </div>
                        
                        <span class="col-12 writer_name pe-2 fw-m text-muted">{{$gl->author_name}}</span>
                           <span class="col-12content_date fw-m text-muted "><?php echo date('M d, Y', strtotime($gl->blog_date));?></span>
                     
                     </div>
                  </div>
               </div>
               @endforeach
               @endif

               </div>
               </div>
               </div>
               </div>


               

@endsection
@push('scripts')
<script src="{{asset('/public')}}/assets/plugins/imageColorPicker/script.js"></script>
<script src="{{asset('/public')}}/assets/js/blog.min.js"></script>
<script>

$('#Comment_Loader').hide();

   $('#conBtn').click(function(e){
      e.preventDefault();
      $.ajax({
			type: "POST",
			url: "{{asset('/contact_action')}}",
			data: $('form#blog-form').serialize(), // <--- THIS IS THE CHANGE
			dataType: "json",
			async: false,
			beforeSend: function(){ 
				$('#loader').show();  					  
			},
			success: function(data){ 
				if(data[0].error=='1'){
               $('#msg').html('<p style="color:red;font-size:18px;text-align:center">'+data[0].msg+'</p>'); 
				}else{
					window.location = "{{asset('/thankyou.php')}}";
               // console.log('contact_us')
				} 
            $('#loader').hide(); 
            
			},
			error: function() { alert("Error posting feed."); $('#loader').hide();  }
      });
		
		return false;	
   });

   document.getElementById('Requierment').addEventListener('change', (e)=> {
      let tValue = e.target.value.replace(/<[^>]+>/gim, '');
      e.target.value = tValue;
   });

   $("form#blogComment").submit(function(e) {
        e.preventDefault();

        $('#message').html('');

        var formId = $(this).attr('id');
        var formAction = $(this).attr('action');
        
        let formData = new FormData(this);
       
        $.ajax({
            url: formAction,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            dataType: 'json',
            type: 'post',
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function() {

                $('#Comment_Loader').show();
                $('#PlaneCommentLoader').hide();
            },
            error: function(xhr, textStatus) {

                if (xhr && xhr.responseJSON.message) {
                    
                    $('#message').html('<p style="color:red;font-size:18px;text-align:center">'+xhr.responseJSON.message+'</p>');
                } else {
                    
                    $('#message').html('<p style="color:red;font-size:18px;text-align:center">'+xhr.statusTex+'</p>');
                }

                $('#Comment_Loader').hide();
                $('#PlaneCommentLoader').show();

            },
            success: function(data) { 
               
               $("#blogComment")[0].reset();
               $('#message').html('<p style="color:green;font-size:18px;text-align:center">'+data.message+'</p>');
               $('#Comment_Loader').hide();
               $('#PlaneCommentLoader').show();
                
            },
            cache: false,
            contentType: false,
            processData: false,
        });
    });

</script>
<script>
   function sharePost(type,url){
		window.close();
		if(type=='facebook'){
		  window.open( 
			"https://www.facebook.com/sharer/sharer.php?u=https://www.imgglobalinfotech.com/blog/"+url, 
			  "_blank", "width=600, height=450"); 
		}else if(type=='twitter'){
		  window.open( 
			"https://twitter.com/intent/tweet?url=https://www.imgglobalinfotech.com/blog/"+url, 
			  "_blank", "width=600, height=450"); 
		}else if(type=='linkedin'){
		  window.open( 
			"https://www.linkedin.com/shareArticle?mini=true&url=https://www.imgglobalinfotech.com/blog/"+url, 
			  "_blank", "width=600, height=450"); 
		}else if(type=='pinterest'){
		  window.open( 
			"https://pinterest.com/pin/create/button/?url=https://www.imgglobalinfotech.com/blog/"+url, 
			  "_blank", "width=600, height=450"); 
		}else if(type=='whatsup'){
		  var number = '9694097243';
		  var message = url.split(' ').join('%20');
		  window.open( 
			"https://api.whatsapp.com/send?phone=" + number + "&text=%20" + 'https://www.imgglobalinfotech.com/blog/'+message, 
			  "_blank", "width=600, height=450"); 
		}
	}
</script>
@endpush