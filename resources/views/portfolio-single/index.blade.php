@extends('main')
@push('meta')
<title>{{$portfolioData->meta_title ?? 'Web Development Company in India, Mobile App Development Company | IMG Global Infotech'}} | IMG Global Infotech</title>

<!-- Required meta tags -->
<meta name="title" content="{{$portfolioData->meta_title  ?? 'Web Development Company in India, Mobile App Development Company | IMG Global Infotech'}} | IMG Global Infotech" />
<meta name="description" content="{{$portfolioData->meta_description ?? 'Best web and mobile app development company in India, USA & UK. We offer top class custom website design & development services like eCommerce, CMS at affordable rates.'}}" />
<meta name="keywords" content="{{$portfolioData->meta_keyword  ?? 'web and mobile app development company, software development, eCommerce development services, fantasy sports app development, online exam app'}}" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="{{$portfolioData->meta_title ?? 'Best web and mobile app development company in India, USA & UK. We offer top class custom website design & development services like eCommerce, CMS at affordable rates.'}} | IMG Global Infotech">
<meta name="twitter:description" content="{{$portfolioData->meta_description ?? 'Best web and mobile app development company in India, USA & UK. We offer top class custom website design & development services like eCommerce, CMS at affordable rates.'}}">


<!-- Facebook Meta -->
<meta property="og:url" content="{{asset('/')}}">
<meta property="og:title" content="{{$portfolioData->meta_title ?? 'Best web and mobile app development company in India, USA & UK. We offer top class custom website design & development services like eCommerce, CMS at affordable rates.'}} | IMG Global Infotech">
<meta property="og:description" content="{{$portfolioData->meta_description ?? 'Best web and mobile app development company in India, USA & UK. We offer top class custom website design & development services like eCommerce, CMS at affordable rates.'}}">





<meta name="classification" content="{{$portfolioData->meta_keyword  ?? 'web and mobile app development company, software development, eCommerce development services, fantasy sports app development, online exam app'}}" />
<link rel="canonical" href="{{asset('/')}}" />
<meta name="robots" content="index, follow" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/portfolio-single.min.css">
@endpush
@section('content')
   <!-- portfolio_single section -->
   <div class="container-fluid portfolio_single position-relative overflow-hidden" data-putcolor="samedomain{{$portfolioData->slug}}">
      <div class="container positition-relative zi-9">
         <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12">
               <div class="w-100 bg-white mx-0 my-lg-3 border row d-block z-index-3 shadow position-relative p-2">
                  <div class="col-12 px-0">
                     <div class="portfolio_single_img overflow-hidden">
                        <img data-getcolor="samedomain{{$portfolioData->slug}}" src="{{PORTFOLIO_IMAGE_URL('single/'.$portfolioData->single_image)}}" alt="" onerror="$(this).attr('src','{{PORTFOLIO_IMAGE_URL($portfolioData->image)}}');">
                        <div class="portfolio_single_btn">
                           <a href="{{asset('/contact-us.php')}}" class="btn btn-theme3 fs-md-14 fs-12 fw-bold hero_read_more_btn py-2 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                              <span class="d-block"><span>Get In Touch</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="locations col-auto">
                     <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i></span>
                     {{$portfolioData->location}}
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12 d-flex align-items-stretch">
               <div class="w-100 bg-white mx-0 my-3 border row d-block z-index-3 shadow position-relative p-2">
                  <div class="col-12 px-0">
                     <div class="row p-4">
                        <div class="col-12 heading fs-md-14 fs-12 left fs-lg-12 fs-md-11 fs-11">{{$portfolioData->tagline}}<span class="fs-xxl-24 fs-xl-24 fs-lg-20 fs-md-20 fs-20">@php echo GET_CHUNK_WORD($portfolioData->title) @endphp</span></div>
                        <div class="col-12 px-0 fw-600 fs-lg-16 fs-md-15 fs-15 text-muted mt-3">@php echo $portfolioData->description; @endphp</div>
                        <div class="col-12 mt-3 portfolio_single_tags bg-white border-top py-2 border-bottom">
                           <div class="row">
                              <div class="col-12 px-0 fw-bold fs-md-18 fs-16 text-theme1 mb-2">Technology Used:</div>
                              @forelse(GET_TECHNOLOGY($portfolioData->tech) as $tech)
                                 <div class="col-auto px-1"><a href="javascript:;">{{Str::upper($tech->name)}}</a></div>
                              @empty

                              @endif
                           </div>
                        </div>
                        <div class="col-12 px-0 text-start mt-4">
                           <a href="{{asset('/contact-us.php')}}" class="btn btn-theme1 fs-md-12 fs-11 fw-bold hero_read_more_btn py-2 px-md-3 px-2" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                              <span class="d-block"><span>Get In Touch</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- related_work section -->
   <div class="container-fluid related_work position-relative overflow-hidden">
      <div class="container position-relative zi-9">
         <div class="row mx-0 pb-5">
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Related <b>Work </b></span></div>
         </div>
         <div class="row">
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
                           <div class="fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal">- {{Str::title($value->title)}} -</div>
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
         </div>
      </div>
   </div>
@endsection
@push('scripts')
<script src="{{asset('/public')}}/assets/plugins/imageColorPicker/script.js"></script>
<script src="{{asset('/public')}}/assets/js/portfolio-single.min.js"></script>
@endpush