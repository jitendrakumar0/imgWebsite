@extends('main')
@push('meta')
<!--  Title -->
<title>Thank You | IMG Global Infotech</title>

<!-- Required meta tags -->
<meta name="title" content="Thank You | IMG Global Infotech" />
<meta name="description" content="Thank You | IMG Global Infotech" />
<meta name="keywords" content="Thank You" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Thank You | IMG Global Infotech">
<meta name="twitter:description" content="Thank You | IMG Global Infotech">
<meta name="twitter:image" content="{{asset('/public')}}/assets/img/logos/logo.webp">

<!-- Facebook Meta -->
<meta property="og:url" content="{{asset('/')}}thankyou.php">
<meta property="og:title" content="Thank You | IMG Global Infotech">
<meta property="og:description" content="Thank You | IMG Global Infotech">
<meta property="og:image" content="{{asset('/public')}}/assets/img/logos/android-chrome-192x192.png">
<meta property="og:image:secure_url" content="{{asset('/public')}}/assets/img/logos/android-chrome-192x192.png">

<link rel="shortcut" type="image/x-icon" href="{{asset('/public')}}/assets/img/logos/android-chrome-192x192.png" />



<meta name="classification" content="Thank You" />
<link rel="canonical" href="{{asset('/')}}thankyou.php" />
<meta name="robots" content="noindex, nofollow" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/thankyou.min.css">
@endpush
@section('content')
   
   <div class="container-fluid overflow-hidden thankYou position-relative py-5">
      <div class="container pt-5">
         <div class="row">
            <div class="col-12">
               <div class="thankYou_main text-center">
               <img src="{{GETFOLDERPATH()}}/imgthankyouimage.webp" class="img-fluid" alt="How About A Virtual Coffee/Tea?">
               <h1 class="d-none invisible">Thank you for taking the time to contact us</h1>
               <div class="col-12 heading fs-md-14 fs-12 center mb-4">IMG Global Infotech<span class="fs-xl-28 fs-lg-25 fs-md-22 fs-20"> Thank you for taking <b> the time to contact us </b></span></div>
               <h2 class="d-none invisible">We will be in touch shortly...Have a wonderful day!!</h2>
               <div class="col-12 fw-bold fs-lg-22 fs-md-20 fs-16 text-theme3 mb-lg-3 mb-md-2 mb-2 text-center">We will be in touch shortly...Have a wonderful day!!</div>
               <h3 class="d-none invisible">Excited? Let’s Talk Connect with us at +91-9694097245</h3>
               <div class="col-12 fw-bold fs-lg-18 fs-md-15 fs-15  text-muted mb-lg-3 mb-md-2 mb-2 text-center">Excited? Let’s Talk Connect with us at <a class="text-decoration-none text-theme1 fw-bold" href="tel:+91-9694097245">+91-9694097245</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
@push('scripts')
@endpush