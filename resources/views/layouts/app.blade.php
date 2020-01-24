<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>
        <link rel="icon" href="{{ asset('images/logo.svg') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <link rel="stylesheet" href="{{asset('vendor/fontawesome-free-5.8.2/scss/fontawesome.scss')}}">

        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('vendor/fontawesome-free-5.8.2/js/all.min.js')}}"></script>

    </head>
    <body class="bg-white">
      <nav class="navbar navbar-expand-lg navbar-light bg-white px-5 py-3 fixed-top">
        <a class="navbar-brand" href="/">
          <img src="{{asset('images/logo.svg')}}" width="30" height="30" alt="">
        </a>
        {{-- <a class="navbar-brand" href="#">Kokoroyok </a> --}}
        <button class="navbar-toggler ml-auto border-0 navbar-font text-dark" type="button">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item mx-1 {{ Request::path() === '/' ? 'active' : '' }}">
              <a class="nav-link navbar-font" href="/">Kokoroyok </a>
            </li>
            <li class="nav-item mx-1 {{ Request::path() === 'side-projects' ? 'active' : '' }}">
              <a class="nav-link navbar-font" href="/side-projects">Side Projects</a>
            </li>
            <li class="nav-item mx-1 {{ Request::path() === 'me' ? 'active' : '' }}">
              <a class="nav-link navbar-font" href="/me">Me</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link navbar-font"><i class="fab fa-medium-m"></i></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link navbar-font"><i class="fab fa-dribbble"></i></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link navbar-font"><i class="fab fa-linkedin-in"></i></i></a>
            </li>
          </ul>
        </div>
      </nav>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn">&times;</a>
        <a class=" {{ Request::path() === '/' ? 'font-weight-bold text-dark' : '' }}" href="/">Kokoroyok</a>
        <a class=" {{ Request::path() === 'side-projects' ? 'font-weight-bold text-dark' : '' }}" href="/side-projects">Side Projects</a>
        <a class=" {{ Request::path() === 'me' ? 'font-weight-bold text-dark' : '' }}" href="/me">Me</a>
        <div class="container mt-5">
          <div class="row justify-content-center">
            <a href="#" class="sidenav-icon"><i class="fab fa-medium-m"></i></a>
            <a href="#" class="sidenav-icon"><i class="fab fa-dribbble"></i></a>
            <a href="#" class="sidenav-icon"><i class="fab fa-linkedin-in"></i></i></a>
          </div>
        </div>
      </div>

      <div class="scroll-top text-danger">
        <i class="fas fa-arrow-circle-up fa-3x"></i>
      </div>

      <div class="app" id="app">
        @yield('content')
      </div>

      <div class="container">
        <div class="footer mt-5 py-3">
          <div class="text-center">
            Designed and Created with <i class="text-danger fas fa-heart"></i> by <a href="#">@kokoroyok</a> From Jakarta, Indonesia
          </div>
        </div>
      </div>

<script>
  $(document).ready(function () {
    $(".navbar-toggler").on('click', function () {
      $("#mySidenav").css('width', '100%');
    });
    $(".closebtn").on('click', function () {
      $("#mySidenav").css('width', '0%');
    });
    $(".scroll-top").on('click', function () {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    });
    $(window).scroll(function() {
        if ($(document).scrollTop() > 200) {
            $('nav').addClass('shadow p-3 mb-5 rounded');
            $('.scroll-top').css('display', 'block');
        }
        else {
            $('nav').removeClass('shadow p-3 mb-5 rounded');
            $('.scroll-top').css('display', 'none');
        }
    });
  });
</script>


    </body>
</html>