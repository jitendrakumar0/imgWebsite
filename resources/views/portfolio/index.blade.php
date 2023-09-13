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
<meta name="robots" content="index, follow" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/portfolio.min.css">
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
   <div class="container-fluid position-relative overflow-hidden portfolio_main_img">
      <div class="container py-5 position-relative zi-9">
         {{-- <div class="row mx-0 pb-5">
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">IMG <b> portfolio </b></span></div>
         </div> --}}
         <div class="row mx-lg-2 mx-md-2 mx-2">

            
            <div class="col-md-12">
               <div class="portfolio_category_part bg-white border row d-block shadow">
                  <div class="portfolio_category d-flex align-items-center justify-content-between fw-bold fs-16 bg-theme1 text-white py-1">Portfolio Category <span class="categrory_ico">Filter By <i class="imgr me-1 fs-16 img-sort-alpha-up"></i></span></div>
                  <div class="portfolio_category_outer px-0">
                     <ul class="list-unstyled mb-0">

                        @if( !empty($portfolio_category) )
                           @foreach($portfolio_category as $value)
                              @if($bgc!='' && $bgc->id==$value->id)
                                 <li style="flex: 1 1 auto;"> <a href="{{asset('/portfolio/category/'.$value->slugcategory)}}" class="text-capitalize active">{{$value->title}}</a></li>
                              @else
                                 <li style="flex: 1 1 auto;"> <a href="{{asset('/portfolio/category/'.$value->slugcategory)}}" class="text-capitalize">{{$value->title}}</a></li>
                              @endif
                           
                           @endforeach
                        @endif

                     </ul>
                  </div>
               </div>
               <div class="bg-white mt-3 border row d-block z-index-3 py-3 shadow">
                  <div class="col-md-12 col-12 px-3">
                     <div class="row mx-0 position-relative">
                        <div class="col-md-12 col-12 px-0 dp-0">
                           <input type="text" id="searchPortfolio"  value="{{ request()->get('search', '') }}"  class="form-control shadow-none" placeholder="Search Portfolio">
                        </div>
                        <div class="col-auto px-0 position-absolute right-10px top-3px bottom-0">
                           <input type="button"  class="btn shadow-none imgr img-search">
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-12 px-0 pt-4">
               <div class="portfolio_left_part row" id="portfolioList">
                        

                  @forelse($portfolios as $value)
                     <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-12 mb-4">
                        <a href="{{asset('/portfolio/'.$value->slug)}}" class="portfolio_page_box d-block shadow" style="--bg:url({{PORTFOLIO_IMAGE_URL($value->image)}});">
                           <img class="d-none invisible" data-getcolor="samedomain{{$value->slug}}" src="{{PORTFOLIO_IMAGE_URL($value->image)}}" alt="{{Str::title($value->title)}}">
                           <div class="locations">
                              <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i></span>
                              {{$value->location}}
                           </div>
                           <div class="portfolio_hover" data-putcolor="samedomain{{$value->slug}}">
                              <div class="portfolio_hover_inner">
                                 <div class="fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal">{{Str::title($value->title)}}</div>
                                 <div class="fw-600 fs-lg-16 fs-md-14 fs-15 mt-2 mb-0">{{$value->tagline}}</div>
                                 <div class="row justify-content-center mt-3 mx-0 portfolio_tags">
                                    @forelse(GET_TECHNOLOGY($value->tech) as $tech)
                                    <div class="col-auto px-1">
                                       <span class="tag_port">{{$tech->name}}</span>
                                    </div>
                                    @empty

                                    @endif
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                  @empty

                  @endif

                  {{ $portfolios->appends(request()->all())->links() }}
               </div>
            </div>
            
            {{-- <div class="seemore text-center mt-3">
               <a class="load-more rounded-pill m-auto d-inline-flex fs-22 text-white align-items-center justify-content-center h-60px w-60px bg-primary font-weight-bold text-decoration-none" href="javascript:;">
                  <i class="imgs img-arrow-down"></i>
               </a>
            </div> --}}
         </div>
      </div>
   </div>

@endsection
@push('scripts')
<script src="{{asset('/public')}}/assets/plugins/imageColorPicker/script.js"></script>
<script src="{{asset('/public')}}/assets/js/portfolio.min.js"></script>
<script>
   $('#searchPortfolio').keyup(function(e){
      e.preventDefault();
      var front_url = window.location.href.split('?')[0];
      let content = $(this).val();
      var url = 'search='+content;
      var newRelativePathQuery = front_url + '?' +url;
      history.pushState(null, '', newRelativePathQuery);
      $.ajax({
         'url':"{{asset('/portfolio/search')}}",
         'type':'POST',
         'data':'_token={{csrf_token()}}&search='+content,
         success:function(data){
            $('#portfolioList').html(data);
         }
      });
   });
   
</script>
@endpush