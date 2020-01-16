<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>NC Tuinservice</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.ico') }}" rel="icon" type="image/x-icon">
  <link href="{{ asset('img/apple-icon.png') }}"  rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        
      </div>
      <div class="social-links float-right">
        <i class="fa fa-envelope-o" style="color:white"></i> <a href="mailto:nielscoppens@hotmail.com">nielscoppens@hotmail.com</a>
        <i class="fa fa-phone" style="color:white"></i><a>+31 (0) 620215285</a> 
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">NC <span>Tuinservice</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="#body"><img src="img/Logo.png" alt="" title="" class="img mh-10"/></a> --}}
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="{{Request::url() == '/extraportfolio' ? '/' : '/#about'}}">Over ons</a></li>
          <li><a href="{{Request::url() == '/extraportfolio' ? '/' : '/#portfolio'}}">Portfolio</a></li>
          <li><a href="{{Request::url() == '/extraportfolio' ? '/' : '/#news'}}">Nieuws</a></li>
          <li><a href="{{Request::url() == '/extraportfolio' ? '/' : '/#contact'}}">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  @yield('content')

    <!--==========================
    Footer
  ============================-->
  <footer id="footer">
        <div class="container">
          <div class="copyright">
            <span class="float-left"><a href="/login">Login medewerker</a></span>
            &copy; Copyright <strong>NC Tuinservice</strong>. All Rights Reserved
          </div>
        </div>
      </footer><!-- #footer -->
    
      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
      <!-- JavaScript Libraries -->
      <script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
      <script src="{{ asset('lib/jquery/jquery-migrate.min.js')}}"></script>
      <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
      <script src="{{ asset('lib/superfish/hoverIntent.js')}}"></script>
      <script src="{{ asset('lib/superfish/superfish.min.js')}}"></script>
      <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
      <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
      <script src="{{ asset('lib/magnific-popup/magnific-popup.min.js')}}"></script>
      <script src="{{ asset('lib/sticky/sticky.js')}}"></script>
    
      <!-- Contact Form JavaScript File -->
      <script src="{{ asset('contactform/contactform.js')}}"></script>
    
      <!-- Template Main Javascript File -->
      <script src="{{ asset('js/main.js')}}"></script>
    
    
    </body>
    </html>