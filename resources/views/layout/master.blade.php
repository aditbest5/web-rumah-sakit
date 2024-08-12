<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Rumah Sakit Pusat Pertamina</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('/medic-master/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('/medic-master/plugins/slick/slick-theme.css')}}">
  <!-- FancyBox -->
  <link rel="stylesheet" href="{{asset('/medic-master/plugins/fancybox/jquery.fancybox.min.css')}}">
  
  <!-- Stylesheets -->
  <link href="{{asset('/medic-master/css/style.css')}}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('/medic-master/images/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('/medic-master/images/favicon.png')}}" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
@include('partial.navbar')
<!--End Main Header -->

@yield('content')

<!--footer-main-->
@include('partial.footer')
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="{{asset('/medic-master/plugins/jquery.js')}}"></script>
<script src="{{asset('/medic-master/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('/medic-master/plugins/bootstrap-select.min.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('/medic-master/plugins/slick/slick.min.js')}}"></script>
<!-- FancyBox -->
<script src="{{asset('/medic-master/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
<!-- Google Map -->
<script src="{{asset('/medic-master/https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw')}}"></script>
<script src="{{asset('/medic-master/plugins/google-map/gmap.js')}}"></script>

<script src="{{asset('/medic-master/plugins/validate.js')}}"></script>
<script src="{{asset('/medic-master/plugins/wow.js')}}"></script>
<script src="{{asset('/medic-master/plugins/jquery-ui.js')}}"></script>
<script src="{{asset('/medic-master/plugins/timePicker.js')}}"></script>
<script src="{{asset('/medic-master/js/script.js')}}"></script>
</body>

</html>

