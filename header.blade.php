<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Chemxpert Database</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{asset('front/assets/images/favicon.png')}}" rel="icon">
  <link href="{{asset('front/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('front/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/datatables.min.css')}}">
  <!-- Template Main CSS File -->
  <link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="{{asset('front/assets/js/charts.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
</head>
<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="display-mobile align-items-center fixed-top">
    <div class="container display-mobile justify-content-between">
      <div class="contact-info display-mobile  align-items-center">

        <!-- <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">database@lifescienceintellipedia.com</a>
        <i class="bi bi-phone"></i> +91-120-6631301-361 -->
      </div>
      <div class="d-lg-flex social-links align-items-center">
       
        <a href="chemtrademart.php" class="book-demo"><i class="fas fa-chart-bar"></i> Chemtrade MART </a>
        <a href="dataIntel.php" class="book-demo"><i class="fas fa-chart-bar"></i> Data Intel </a>
         <a href="downloadsample.php" class="book-demo"><i class="fas fa-file-download"></i> Download Sample </a>
        <!--<a href="demo_request.php" class="book-demo"><i class="fas fa-hand-pointer"></i> Book Demo </a>-->
        <a href="https://twitter.com/LIntellipedia" class="twitter twitter1"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/lifescience.intellipedia/?ref=pages_you_manage" class="facebook facebook1"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/lifescienceintellipedia/" class="instagram instagram1"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/3711222/admin/" class="linkedin linkedin1"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.youtube.com/channel/UC9aFfuj8m3uO1lCKCjP6xtA" class="google-plus"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php"><img src="{{asset('front/assets/images/logo.png')}}" class="img-fluid"></a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="chempharma_insights.php">ChemPharma Pro-Insights</a></li>
              <li><a href="#">Company Profiling</a></li>
              <li><a href="chemtrademart.php">Chemtrade MART</a></li>
              <li><a href="advertisment.php">Advertisement</a></li>
            </ul>
          </li>
           <!--<li><a class="nav-link scrollto" href="#">Data Intel</a></li>-->
          <li><a class="nav-link scrollto" href="pricing.php">Subscription</a></li>
          <li><a class="nav-link scrollto" href="sources.php">Sources</a></li>
          <li><a class="nav-link scrollto" href="blogs.php">Blogs</a></li>
          <li class="dropdown"><a href="#"><span>Legal</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="policy.php"> Privacy Policy</a></li>
              <li><a href="disclaimer.php"> Disclaimer</a></li>
              <li><a href="terms&conditions.php">  Terms and Conditions </a></li>
              <li><a href="refund.php">  Refund Policy</a></li>
             <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop</a></li>
                  <li><a href="#">Deep Drop</a></li>
                  <li><a href="#">Deep Drop</a></li>
                  <li><a href="#">Deep Drop</a></li>
                  <li><a href="#">Deep Drop</a></li>
                </ul>
              </li> -->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Hii Monika Sha...</span> <i class="bi bi-chevron-down"></i></a>-->
          <!--  <ul>-->
          <!--    <li><a href="user_profile.php"> My Profile</a></li>-->
          <!--    <li><a href="#"> Change Password</a></li>-->
          <!--    <li><a href="#">  Dashboard </a></li>-->
          <!--    <li><a href="#">Upload Company Info</a></li>-->
          <!--    <li><a href="#">Logout</a></li>-->
          <!--  </ul>-->
          <!--</li>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
       <a href="demo_request.php" class="appointment-btn scrollto"><span class="d-md-inline"> Book Demo</span></a>
       <a href="login.php" class="appointment-btn scrollto" style="background: #ec9112;width: 55px;padding:8px 8px;"><span class="d-md-inline"> Log In </span></a>
    </div>
  </header><!-- End Header -->