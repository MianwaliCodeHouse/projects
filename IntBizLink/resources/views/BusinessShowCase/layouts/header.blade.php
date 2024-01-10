<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ isset($pageTitle) ? $pageTitle : '' }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('') }}/BusinessShowCase/downloadAssets/img/favicon.png" rel="icon">
  <link href="{{ url('') }}/BusinessShowCase/downloadAssets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('') }}/BusinessShowCase/downloadAssets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ url('') }}/BusinessShowCase/downloadAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ url('') }}/BusinessShowCase/downloadAssets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ url('') }}/BusinessShowCase/downloadAssets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ url('') }}/BusinessShowCase/downloadAssets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ url('') }}/BusinessShowCase/downloadAssets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('') }}/BusinessShowCase/downloadAssets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland
  * Updated: Sep 25 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent border-bottom border-secondary" style="--bs-border-opacity: .5;">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="fw-bold"><a href="{{ route('home.page') }}">IntBizLink</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ isset($homePage) ? 'active' : '' }}" href="{{ route('home.page') }}">Home</a></li>
          <li><a class="nav-link scrollto {{ isset($portfolioPage) ? 'active' : '' }}" href="#features">Portfolio</a></li>
          <li><a class="nav-link scrollto {{ isset($aboutPage) ? 'active' : '' }}" href="#gallery">About</a></li>
          <li><a class="nav-link scrollto {{ isset($contactPage) ? 'active' : '' }}" href="{{ route('contact.page') }}">Contact</a></li>
          <li><a class="getstarted scrollto" href="#features">Get a Quote</a></li>
          <li><a class="getstarted scrollto" href="{{ route('client.login.page') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->