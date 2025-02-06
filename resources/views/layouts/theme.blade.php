<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MBTI-MATES</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/mbti-mates-logo.png" rel="icon">
  <link href="assets/img/mbti-mates-logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/mbti-mates-logo.png" alt="">
        {{-- <h1 class="sitename">MBTI-MATES</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{url('/')}}">Beranda</a></li>
          <li><a href="{{url('/')}}#mbti">Apa itu MBTI?</a></li>
          <li><a href="{{url('/')}}#about">Tentang</a></li>
          <li><a href="{{url('/personality-type')}}">Tipe Kepribadian</a></li>
          <li><a href="{{url('/')}}#guide">Panduan</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="/mulai-test-mbti">Mulai Test Tipe Kepribadian</a>
    </div>
  </header>

  <main class="main">

  <!-- Hero Section -->
    @yield('hero')
  <!-- /Hero Section -->

  <!-- About Section -->

  <!-- /About Section -->

  <!-- guide Section -->
     @yield('guide')
  <!-- /guide Section -->

  <!-- Personality type Section -->
        @yield('personality-type')
  <!-- /End Personality type Section -->

  {{-- tipe kepribadian kelompok analisis section --}}
          @yield('kepribadian-intj')

          @yield('kepribadian-intp')

          @yield('kepribadian-entj')

          @yield('kepribadian-entp')    
  {{-- end tipe kepribadian kelompok analisis section --}}

  {{-- tipe kepribadian kelompok diplomat section --}}
          @yield('kepribadian-infj')

          @yield('kepribadian-infp')

          @yield('kepribadian-enfj')

          @yield('kepribadian-enfp')
  {{-- end tipe kepribadian kelompok diplomat section --}}

      {{-- tipe kepribadian kelompok sentinel section --}}
          @yield('kepribadian-istj')

          @yield('kepribadian-isfj')

          @yield('kepribadian-estj')

          @yield('kepribadian-esfj')
  {{-- end tipe kepribadian kelompok sentinel section --}}

    {{-- tipe kepribadian kelompok explorer section --}}
          @yield('kepribadian-istp')

          @yield('kepribadian-isfp')

          @yield('kepribadian-estp')

          @yield('kepribadian-esfp')
  {{-- end tipe kepribadian kelompok explorer section --}}

  </main>

  {{-- footer  --}}
  {{-- end footer --}}

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>