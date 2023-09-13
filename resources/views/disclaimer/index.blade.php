@extends('main')
@push('meta')
   <!--  Title -->
   <title>Case Study - IMG Global Infotech</title>

   <!-- Required meta tags -->
   <meta name="title" content="Disclaimer - IMG Global Infotech" />
   <meta name="description" content="The information contained in this website is for general information purposes only. The information is provided by IMG Global Infotech and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk." />
   <meta name="keywords" content="IMG Global Infotech, Disclaimer" />

   <!-- Twitter Meta -->
   <meta name="twitter:title" content="Disclaimer - IMG Global Infotech">
   <meta name="twitter:description" content="The information contained in this website is for general information purposes only. The information is provided by IMG Global Infotech and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.">
   

   <!-- Facebook Meta -->
   <meta property="og:url" content="{{asset('/')}}disclaimer.php">
   <meta property="og:title" content="Disclaimer - IMG Global Infotech">
   <meta property="og:description" content="The information contained in this website is for general information purposes only. The information is provided by IMG Global Infotech and while we endeavour to keep the infordisclaimer/mation up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.">
   
   



   <meta name="classification" content="IMG Global Infotech, Disclaimer" />
   <link rel="canonical" href="{{asset('/')}}disclaimer.php" />
   <meta name="robots" content="index, follow" />
@endpush
@push('styles')
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/disclaimer.min.css">
@endpush
@section('content')
   <h1 class="d-none invisible">Case Study</h1>
   <!-- disclaimer section -->
   <div class="container-fluid overflow-hidden disclaimer position-relative">
      <div class="container zi-2 position-relative py-5">
         <div class="row mx-0 pb-4">
            <div class="col-12 heading fs-md-14 fs-12 pt-5 mt-lg-5"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Case Study</span></div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-12 text-center fw-600 fs-lg-18 fs-md-15 fs-14 text-muted mt-3">The information contained in this website is for general information purposes only. The information is provided by IMG GLOBAL INFOTECH and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.</div>
                  <div class="col-12 fw-600 fs-lg-18 fs-md-15 fs-14 text-center text-muted mt-3">In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website.
                     Through this website you are able to link to other websites which are not under the control of IMG GLOBAL INFOTECH We have no control over the nature, content and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them.
                     IMG Global Infotech does not intend to infringe the copyright of any outlet by using images and content. For any copyright-related issues right to us and we would reply within 48 Hours.
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
@push('scripts')
   <script src="{{asset('/public')}}/assets/js/disclaimer.min.js"></script>
@endpush
