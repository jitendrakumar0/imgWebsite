<!DOCTYPE html>
<html lang="en">


<!--
0 ,00000, .000000   .000000 0     .0000. 0000b,    0    0       0 db   0 d0000 .0000. 00000 d000b d000b  0    0
0 0  0  0 0  ,,,,   0  ,,,, 0     0    0 0 ___)   0 0   0       0 0 0  0 0     0    0   0   0     0      0    0
0 0  0  0 0     0   0     0 0     0    0 0    )  0   0  0       0 0  0 0 0"""" 0    0   0   0"""" 0      0""""0
0 0  0  0 "000000   "000000 00000 '0000' 0000d' 0"""""0 d0000   0 0   db 0     '0000'   0   d000b d000b  0    0
-->


<head>

    
<title>500 Server Error</title>

  <!-- Required meta tags -->
  <meta name="title" content="500 Server Error" />
  <meta name="discrption" content="500 Server Error" />

  <meta name="robots" content="noindex, nofollow" />

  


  <meta name="classification" content="500 Server Error" />

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{asset('/public')}}/assets/js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap == -->
    <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/bootstrap.min.css">

    <!-- IMG Icons == -->
    <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/imgIcons.min.css">

    <!-- BijarniaDream == -->
    <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/bijarniadream.min.css">

    <!-- Google Search -->
    <script async src="https://cse.google.com/cse.js?cx=f99a2f0b162ad43b6"></script>
    
    <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/500.min.css">
    
    <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/style.min.css" />
@include('layouts/header')
<main class="main-scrollbar errors-section">
   <div class="moon"></div>
   <div class="moon__crater moon__crater1"></div>
   <div class="moon__crater moon__crater2"></div>
   <div class="moon__crater moon__crater3"></div>

   <div class="star star1"></div>
   <div class="star star2"></div>
   <div class="star star3"></div>
   <div class="star star4"></div>
   <div class="star star5"></div>

   <div class="error text-md-start text-center">
      <div class="error__title fw-900">500</div>
      <div class="error__subtitle fw-900 mt-md-0 mt-n4">Uf... Server Error</div>
      <button class="error__button error__button--active mt-1 text-decoration-none fw-bold mt-3 d-inline-block">Back to Home</button>
   </div>

   <div class="astronaut">
      <div class="astronaut__backpack"></div>
      <div class="astronaut__body"></div>
      <div class="astronaut__body__chest">
         <img src="<?php echo iii ?>assets/img/logos/favicon-original.webp" class="position-absolute w-20px left-0 right-0 m-auto top-0 bottom-0" alt="">
      </div>
      <div class="astronaut__arm-left1"></div>
      <div class="astronaut__arm-left2"></div>
      <div class="astronaut__arm-right1"></div>
      <div class="astronaut__arm-right2"></div>
      <div class="astronaut__arm-thumb-left"></div>
      <div class="astronaut__arm-thumb-right"></div>
      <div class="astronaut__leg-left"></div>
      <div class="astronaut__leg-right"></div>
      <div class="astronaut__foot-left"></div>
      <div class="astronaut__foot-right"></div>
      <div class="astronaut__wrist-left"></div>
      <div class="astronaut__wrist-right"></div>

      <div class="astronaut__cord">
         <canvas id="cord" height="500px" width="500px"></canvas>
      </div>

      <div class="astronaut__head">
         <canvas id="visor" width="60px" height="60px"></canvas>
         <div class="astronaut__head-visor-flare1"></div>
         <div class="astronaut__head-visor-flare2"></div>
      </div>
   </div>
</main>
@include('layouts/footer')

<!-- Optional JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="{{asset('/public')}}/assets/plugins/vanillaTilt/vanillaTilt.js"></script>
<script src="{{asset('/public')}}/assets/js/buttons.js"></script>

<script src="{{asset('/public')}}/assets/js/errors/500.js"></script>

<script src="{{asset('/public')}}/assets/js/main.js"></script>