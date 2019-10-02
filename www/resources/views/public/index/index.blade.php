<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tuinder</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
          <li><a href="#about">Over ons</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#werkwijze">Werkwijze</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>De zorg van <span>uw tuin</span><br>ligt in onze handen!</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Lees meer</a>
        <a href="#portfolio" class="btn-projects scrollto">Onze projecten</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/tuin/tuin-slider.jpg');"></div>
      <div class="item" style="background-image: url('img/tuin/tuin-slider.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/logo.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
            <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle" style="color:#50C878"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ion-android-checkmark-circle" style="color:#50C878"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ion-android-checkmark-circle" style="color:#50C878"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Diensten</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fas fa-tree"></i></div>
              <h4 class="title"><a href="">Renovatie</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-leaf"></i></div>
              <h4 class="title"><a href="">Aanleg</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-sun-o"></i></div>
              <h4 class="title"><a href="">Onderhoud</a></h4>
              <p class="description"></p>
            </div>
          </div>


        </div>

      </div>
    </section>

    <!--==========================
      Our Portfolio Section
    ============================-->
    @if (count($pictures) > 0)
        
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Ons Portfolio</h2></div>
      </div>

      <div class="container">
        <div class="section-header mt-3">
          <h3>Renovatie</h3>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row ">

          @foreach ($pictures as $p)
          {{-- Renovatie --}}
          @if ($p->image_type === 0)
            <div class="col-lg-3 col-md-4">
              <div class="portfolio-item wow fadeInUp">
                <a href="{{ asset('storage/portfolio/'.$p->image_name) }}" class="portfolio-popup">
                  <img src="{{ asset('storage/portfolio/'.$p->image_name) }}" alt="">
                  <div class="portfolio-overlay">
                    <div class="portfolio-info"><h2 class="wow fadeInUp">{{$p->image_desc}}</h2></div>
                  </div>
                </a>
              </div>
            </div>
            @endif
          @endforeach

        </div>
      </div>
      <hr>
      <div class="container">
        <div class="section-header mt-3">
          <h3>Aanleg</h3>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">

          @foreach ($pictures as $p)
          {{-- Renovatie --}}
          @if ($p->image_type === 1)
            <div class="col-lg-3 col-md-4">
              <div class="portfolio-item wow fadeInUp">
                <a href="{{ asset('storage/portfolio/'.$p->image_name) }}" class="portfolio-popup">
                  <img src="{{ asset('storage/portfolio/'.$p->image_name) }}" alt="">
                  <div class="portfolio-overlay">
                    <div class="portfolio-info"><h2 class="wow fadeInUp">{{$p->image_desc}}</h2></div>
                  </div>
                </a>
              </div>
            </div>
            @endif
          @endforeach

        </div>
      </div>
      <hr>
      <div class="container">
        <div class="section-header mt-3">
          <h3>Onderhoud</h3>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">

          @foreach ($pictures as $p)
          {{-- Onderhoud --}}
          @if ($p->image_type === 2)
              <div class="col-lg-3 col-md-4">
                <div class="portfolio-item wow fadeInUp">
                  <a href="{{ asset('storage/portfolio/'.$p->image_name) }}" class="portfolio-popup">
                    <img src="{{ asset('storage/portfolio/'.$p->image_name) }}" alt="">
                    <div class="portfolio-overlay">
                      <div class="portfolio-info"><h2 class="wow fadeInUp">{{$p->image_desc}}</h2></div>
                    </div>
                  </a>
                </div>
              </div>
            @endif
          @endforeach

        </div>
      </div>
    </section><!-- #portfolio -->
        
    @endif
    

    <hr>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Neem contact op</h2>
          <p>Voor informatie over onze werkzaamheden kunt u ons altijd bereiken via de mail maar natuurlijk ook via telefoon.</p>
        </div>

        <div class="row contact-info">
          <div class="col-md-6">
              <i class="ion-ios-telephone-outline" style="color:#50C878"></i>
              <h3>Telefoon nummer</h3>
              <p><a href="tel:+31(0)620215285">+31 (0) 620215285</a></p>
          </div>

          <div class="col-md-6">
              <i class="ion-ios-email-outline" style="color:#50C878"></i>
              <h3>Email</h3>
              <p><a href="mailto:nielscoppens@hotmail.com">nielscoppens@hotmail.com</a></p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Uw bericht is verstuurd!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Uw naam" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Uw email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Onderwerp" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Vertel ons waar het over gaat" placeholder="Bericht"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

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
