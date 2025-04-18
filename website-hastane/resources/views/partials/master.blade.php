<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <title>Asem Estetik ∫ Yeni Bir Sen</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Selimcan Gürsu ∫ Full Stack Web Developer ">
  <meta name="generator" content="">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/icofont/icofont.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body id="top">
@include('partials.header')


<div class="main">
    @yield('main')
</div>
@include('partials.footer')
    <script src="{{asset('plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <script src="{{asset('plugins/shuffle/shuffle.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
    <script src="{{asset('plugins/google-map/gmap.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </body>
  </html>
