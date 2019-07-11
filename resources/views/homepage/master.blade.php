<!DOCTYPE html>
<html lang="en">

<head>
    <title>Voyage - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('homepage/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/style.css') }}">
</head>
<body>
@include('homepage.resource.navbar')
@yield('content')
@include('homepage.resource.footer')
<script src="{{ asset('homepage/js/jquery.min.js') }}"></script>
  <script src="{{ asset('homepage/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('homepage/js/popper.min.js') }}"></script>
  <script src="{{ asset('homepage/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('homepage/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('homepage/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('homepage/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('homepage/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('homepage/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('homepage/js/aos.js') }}"></script>
  <script src="{{ asset('homepage/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('homepage/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('homepage/js/jquery.timepicker.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('homepage/js/google-map.js') }}"></script>
  <script src="{{ asset('homepage/js/main.js') }}"></script>
    
  </body>
</html>