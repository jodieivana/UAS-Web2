<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{ asset('home/images/favicon.png')}}" type="">
      <title>PageTurner - Your Gateway to Riveting Reads</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{ asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{ asset('home/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('home.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('home.bestseller')
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('home.release')
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('home.newrelease')
      <!-- end product section -->

      @include('home.discoverhome')

      @include('home.feedbackpart')
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">Copyright © 2024 PageTurner 
         </p>
      </div>
      <!-- jQery -->
      <script src="{{ asset('home/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{ asset('home/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{ asset('home/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{ asset('home/js/custom.js')}}"></script>
   </body>
</html>