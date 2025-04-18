<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <title>Selim Estetik Hastanesi | Yüz, Vücut ve Medikal Estetik Hizmetleri</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Asem Estetik Hastanesi olarak yüz estetiği, vücut şekillendirme, medikal estetik, lazer uygulamaları ve saç ekimi hizmetleri sunuyoruz. Uzman kadro ve son teknolojiyle güzelliğinizi yeniden keşfedin.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Asem Estetik Hastanesi | Tasarım & Geliştirme: Selimcan Gürsu - Full Stack Web Developer">
  <meta name="keywords" content="estetik hastanesi, burun estetiği, yüz germe, botoks, dolgu, lazer epilasyon, saç ekimi, medikal estetik, Asem Estetik, estetik merkezi İstanbul">
  <meta property="og:title" content="Asem Estetik Hastanesi">
  <meta property="og:description" content="Güzelliğinize değer katın! Yüz ve vücut estetiğinde güvenilir adres: Asem Estetik Hastanesi. Uzman ekip, ileri teknoloji.">
  <meta property="og:image" content="#">
  <meta property="og:url" content="#">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Asem Estetik Hastanesi">
  <meta name="twitter:description" content="Yüz ve vücut estetiğinde profesyonel çözümler. Asem Estetik Hastanesi ile yeni bir siz!">
  <meta name="twitter:image" content="#">
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
