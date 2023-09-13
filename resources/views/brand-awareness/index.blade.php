@extends('main')
@push('meta')
   <!--  Title -->
   <title>SMO Services India | Brand Awareness in Jaipur – IMG Global Infotech</title>

   <!-- Required meta tags -->
   <meta name="title" content="SMO Services India | Brand Awareness in Jaipur – IMG Global Infotech" />
   <meta name="description" content="IMG Global Infotech implements well researched SMO Services for its clients. Brand Awareness is important for Social Media Branding." />
   <meta name="keywords" content="Brand Awareness in Jaipur, Social Media Marketing Services Jaipur, Social Media Branding, Social Media Search Engine Optimization, Digital and Social Media Marketing Jaipur, Digital Marketing Social Media, SMO Services India" />

   <!-- Twitter Meta -->
   <meta name="twitter:title" content="SMO Services India | Brand Awareness in Jaipur – IMG Global Infotech">
   <meta name="twitter:description" content="IMG Global Infotech implements well researched SMO Services for its clients. Brand Awareness is important for Social Media Branding.">
   <meta name="twitter:image" content="{{GETFOLDERPATH()}}/1.webp">

   <!-- Facebook Meta -->
   <meta property="og:url" content="{{asset('/')}}brand-awareness.php">
   <meta property="og:title" content="SMO Services India | Brand Awareness in Jaipur – IMG Global Infotech">
   <meta property="og:description" content="IMG Global Infotech implements well researched SMO Services for its clients. Brand Awareness is important for Social Media Branding.">
   <meta property="og:image" content="{{GETFOLDERPATH()}}/1.webp">
   <meta property="og:image:secure_url" content="{{GETFOLDERPATH()}}/1.webp">



   <meta name="classification" content="Brand Awareness in Jaipur, Social Media Marketing Services Jaipur, Social Media Branding, Social Media Search Engine Optimization, Digital and Social Media Marketing Jaipur, Digital Marketing Social Media, SMO Services India" />
   <link rel="canonical" href="{{asset('/')}}brand-awareness.php" />
   <meta name="robots" content="index, follow" />
@endpush
@push('styles')
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/brand-awareness.min.css">
@endpush
@section('content')


   {{-- Hero Section --}}
   @section('hero_hiddenHeading')
   Brand Awareness
   @endsection('hero_hiddenHeading')
   @section('hero_heading')
   <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Brand <b> Awareness</b></span>
   @endsection('hero_heading')
   @section('hero_tagline')
   Your brand is your voice - say it loud, say it proud.
   <br><br>
   Your brand is the voice of who you are as a company, and it's your responsibility to inform the general public of exactly “who” you are. No doubt, you want your brand to stand out among the rest – to be a recognizable name and one to which your target audience turns when they need something in your respective field. If you aren’t consistently reminding your target market that you’re doing business and you’re doing it well, they will move on and forget about you and your brand. Creating strong brand awareness starts with a vision of who you want to be and branches out from there to relay this vision to the public.
   @endsection('hero_tagline')
   @section('hero_btn')
   {{-- <a href="{{asset('/contact-us.php')}}" class="btn btn-theme1 text-white fs-xxl-13 fs-11 fw-bold py-xxl-2 py-1 px-lg-4 px-3 mb-xl-0 mb-3">
      <span class="d-block"><span>Get Free Consultation</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
   </a> --}}
   @endsection('hero_btn')
   @section('hero_img')
   <img class="w-100 position-relative" src="{{GETFOLDERPATH()}}/1.webp" alt="Brand Awareness">
   @endsection('hero_img')
   @include('inner-page-section.hero.index')

   <!-- bredcrumb section -->
   <div class="container-fluid overflow-hidden px-0 bredcrumb_main py-3 d-md-block d-none ">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                     <li class="breadcrumb-item"><a class="fw-600 fs-lg-16 fs-md-15 fs-14 text-theme2 text-decoration-none" href="{{asset('/')}}">Home</a></li>
                     <li class="breadcrumb-item active fw-600 fs-lg-16 fs-md-15 fs-14 text-dark" aria-current="page">Brand Awareness</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>

   <!-- Why Choose Third Party section -->
   <div class="container-fluid overflow-hidden why-choose-third-party position-relative py-5">
      <div class="container zi-2 position-relative">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Benefits Of Brand Awareness</h2>
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Benefits Of <b> Brand Awareness </b></span></div>
         </div>
         <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="py-3 px-4 bg-dark shadow rounded mb-3 border-top border-theme3 border-4 text-lg-end text-center">
                        <h3 class="d-none invisible">Keeping Your Brand Top of mind.</h3>
                        <div class="col-12 fw-600 text-light fs-md-16 fs-sm-15 fs-14 lh-normal">Keeping Your Brand Top of mind.<span class="imgl img-star ms-2 d-lg-inline-block d-none"></span></div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="py-3 px-4 bg-dark shadow rounded mb-3 border-top border-success border-4 text-lg-end text-center">
                        <h3 class="d-none invisible">Increased word of mouth marketing.</h3>
                        <div class="col-12 fw-600 text-light fs-md-16 fs-sm-15 fs-14 lh-normal">Increased word of mouth marketing.<span class="imgl img-star ms-2 d-lg-inline-block d-none"></span></div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="py-3 px-4 bg-dark shadow rounded mb-3 border-top border-theme2 border-4 text-lg-end text-center">
                        <h3 class="d-none invisible">Increased Sales.</h3>
                        <div class="col-12 fw-600 text-light fs-md-16 fs-sm-15 fs-14 lh-normal">Increased Sales.<span class="imgl img-star ms-2 d-lg-inline-block d-none"></span></div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="py-3 px-4 bg-dark shadow rounded mb-3 border-top border-theme1 border-4 text-lg-end text-center">
                        <h3 class="d-none invisible">Building Your Brand Equity.</h3>
                        <div class="col-12 fw-600 text-light fs-md-16 fs-sm-15 fs-14 lh-normal">Building Your Brand Equity.<span class="imgl img-star ms-2 d-lg-inline-block d-none"></span></div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="py-3 px-4 bg-dark shadow rounded mb-3 border-top border-success border-4 text-lg-end text-center">
                        <h3 class="d-none invisible">Increased Customer Loyalty.</h3>
                        <div class="col-12 fw-600 text-light fs-md-16 fs-sm-15 fs-14 lh-normal">Increased Customer Loyalty.<span class="imgl img-star ms-2 d-lg-inline-block d-none"></span></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 pe-lg-5 top_banner-left-part order-lg-2 order-1 pb-lg-0 pb-5">
               <div class="row justify-content-lg-end justify-content-md-center justify-content-center">
                  <div class="col-lg-10 col-md-5 col-7 position-relative" style="transform-style: preserve-3d;" data-tilt="" data-tilt-max="2" data-tilt-speed="400" data-tilt-perspective="2500" data-tilt-reverse="true">
                     <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/11.webp" alt="Benefits Of Brand Awareness">
                     <img class="w-100 position-absolute top-0 start-0 bottom-0 end-0 tz" style="--tz:20px; filter: contrast(0);" src="{{GETFOLDERPATH()}}/benefits.webp" alt="IMG Global Infotech Layer">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!--  on page optimization Devolopements Benefits section -->
   <div class="container-fluid position-relative overflow-hidden devolopements-benefits py-5">
      <div class="container position-relative zi-2">
         <div class="row">
            <div class="col-12">
               <div class="row mx-0 pb-5">
                  <h2 class="d-none invisible">How IMG Global Infotech Spread’s Brand Awareness And Benefits Of It To Your Business?</h2>
                  <div class="col-12 heading fs-md-14 fs-12 left text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> How IMG Global Infotech Spread’s Brand Awareness And Benefits Of <b> It To Your Business?</b></span></div>
                  <div class="col-12 px-0 fw-600 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-white mt-4 text-start  ">Boosting brand awareness is the end goal of your business’s brand awareness campaign. We work towards putting up a positive note about your product or business in the market.</div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12 mb-4">
               <div class="devolopements-benefits-box text-md-start text-center position-relative shadow rounded p-md-4 pt-5 pb-4 mb-md-0 mb-4 px-3 ps-md-5">
                  <span class="devolopements-benefits-box-count left-md-n25px left-20px top-md-10px top-n20px">01</span>
                  <h3 class="d-none invisible">Using Search Ads to Boost Awareness</h3>
                  <div class="col-12 text-start fw-900 text-theme3 fs-md-18 fs-16 text-uppercase lh-normal">Using Search Ads to Boost Awareness</div>
                  <div class="col-12 text-start fw-600 fs-md-16 fs-sm-15 fs-14 text-white mt-2">Conducting search on search engines like Google and Bing has increasingly become a popular method for consumers to shop and search for information. As such, search ads not only drive traffic to generate sales, but also help build brand awareness for your products and services. The benefit of using search ads is that you have complete control over your budget and your ad messages. Furthermore, you can immediately track the responses of your ads with analytic tools such as Google Analytics.
                  </div>
               </div>
            </div>
            <div class="col-md-12 mb-4">
               <div class="devolopements-benefits-box text-md-start text-center position-relative shadow rounded p-md-4 pt-5 pb-4 mb-md-0 mb-4 px-3 ps-md-5">
                  <span class="devolopements-benefits-box-count left-md-n25px left-20px top-md-10px top-n20px">02</span>
                  <h3 class="d-none invisible">Maximising brand awareness with Social Media Tools</h3>
                  <div class="col-12 text-start fw-900 text-theme3 fs-md-18 fs-16 text-uppercase lh-normal">Maximising brand awareness with Social Media Tools</div>
                  <div class="col-12 text-start fw-600 fs-md-16 fs-sm-15 fs-14 text-white mt-2">Of all the tools available, social media has the most potential to help you promote your business and increase brand exposure. Best of all, most of these powerful social media tools are flexible to use, giving you the same opportunity as the corporate giants to promote your brand. What’s great about using social media tools is that you could reach and engage with millions of people, with many of them potentially turning into your prospects and leads.
                  </div>
               </div>
            </div>
            <div class="col-md-12 mb-4">
               <div class="devolopements-benefits-box text-md-start text-center position-relative shadow rounded p-md-4 pt-5 pb-4 mb-md-0 mb-4 px-3 ps-md-5">
                  <span class="devolopements-benefits-box-count left-md-n25px left-20px top-md-10px top-n20px">03</span>
                  <h3 class="d-none invisible">Reeling People with Content Rich Blogs</h3>
                  <div class="col-12 text-start fw-900 text-theme3 fs-md-18 fs-16 text-uppercase lh-normal">Reeling People with Content Rich Blogs</div>
                  <div class="col-12 text-start fw-600 fs-md-16 fs-sm-15 fs-14 text-white mt-2">Blogging used to be a buzzword that you often hear about. Nowadays, it has become the most powerful inbound marketing tool to raise awareness of your brand. IMG Global Infotech understands that, Blogging is a powerful platform for you to establish yourself as an expert and a thought leader in your field. You could blog about issues and topics related to industry. You could share useful and educational content with your target audience.
                  </div>
               </div>
            </div>
            <div class="col-md-12 mb-0">
               <div class="devolopements-benefits-box text-md-start text-center position-relative shadow rounded p-md-4 pt-5 pb-4 mb-md-0 mb-4 px-3 ps-md-5">
                  <span class="devolopements-benefits-box-count left-md-n25px left-20px top-md-10px top-n20px">04</span>
                  <h3 class="d-none invisible">Compelling Press Releases</h3>
                  <div class="col-12 text-start fw-900 text-theme3 fs-md-18 fs-16 text-uppercase lh-normal">Compelling Press Releases </div>
                  <div class="col-12 text-start fw-600 fs-md-16 fs-sm-15 fs-14 text-white mt-2">o quickly raise the profile of your brand, IMG Global Infotech writes a compelling press releases that are newsworthy. A Press Release can benefit just about any businesses, regardless of your size. Although it is commonly used to announce new products or new services, it can also be used to announce any information or events related to your business or products/services. The benefit of using an online press release service is that they can send your story out to the top news sites such as Google news, yahoo news, and a bunch of other blogs and media outlets.
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Contact Us Project section -->
   <div class="container-fluid overflow-hidden Contact_us_project position-relative py-5  ">
      <div class="proposal_bg position-relative d-sm-block d-none"></div>
      <div class="container zi-2 position-relative">
         <div class="row">
            <div class="col-12">
               <div class="row mx-0 pb-lg-4">
                  <h2 class="d-none invisible">Race to the Top</h2>
                  <div class="col-12 heading fs-md-14 fs-12 center text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Race to <b> the Top</b></span></div>
                  <h3 class="d-none invisible">In the Era of Digital Transformation, your business needs to adapts and shift to Digital Marketing. In order to rise above the rest, join hands with IMG Global Infotech Pvt. Ltd. today and get only the best professional services for your business.</h3>
                  <div class="col-12 fw-600 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-white mb-4 pt-3 text-center">In the Era of Digital Transformation, your business needs to adapts and shift to Digital Marketing. In order to rise above the rest, join hands with IMG Global Infotech Pvt. Ltd. today and get only the best professional services for your business.</div>
                  <div class="col-12 fw-600 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-white mb-4 text-center">Discuss Promotion plans for your business with an expert from IMG Global Infotech Pvt. Ltd. today over a Cup <br> of Coffee and take your business to maximum heights. Let sky be the only limit for your business.</div>
               </div>
            </div>
            <div class="col-12 pt-3 text-center">
               <a href="{{asset('/contact-us.php')}}" class="btn btn-theme2 fs-md-14 fs-12 fw-bold hero_read_more_btn py-2 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                  <span class="d-block"><span>Get a Proposal</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
               </a>
            </div>
         </div>
      </div>
   </div>

@endsection
@push('scripts')
   <script src="{{asset('/public')}}/assets/js/brand-awareness.min.js"></script>
@endpush