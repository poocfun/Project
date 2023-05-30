<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yummy Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('template')}}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('template')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  {{-- <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css"> --}}
  <script src="https://kit.fontawesome.com/0278088b8e.js" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{asset('admin')}}/dist/css/adminlte.min.css">
  <link href="{{ asset('template')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('template')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('template')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('template')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('template')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('template')}}/assets/img/logo.png" alt=""> -->
        <img src="{{ asset('template/assets/img/Loker.png') }}">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="{{ url('home') }} ">Home</a></li>
          <li><a href="#">Cari Loker</a></li>
          <li><a class="active" href="{{ url('layanan') }} ">Layanan KerjaGan</a></li>
          <li><a class="active" href="{{ url('buatcv') }} ">Buat CV</a></li>
          <li><a class="active" href="{{ url('aboutus') }} ">Tentang Kami</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn btn  text-white" style="background-color:#0075FF;" href="{{ url('registrasi') }}">Daftar</a>

      <a class="btn btn  text-white" style="background-color:#0075FF;" href="{{ url('login') }}">Login</a>

      <a class="btn btn  text-white" style="background-color:#0FBF00;" href="#">Pasang Loker</a>

    </div>
  </header><!-- End Header -->
