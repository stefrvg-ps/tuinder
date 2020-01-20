@extends('public.layouts.app')
    
@section('content')

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
            <img src="{{asset('storage/about/'.$about->image_name)}}" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>{{$about->title}}</h2>
            <h3>{{$about->desc}}</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle" style="color:#50C878"></i> {{$about->pro1}}</li>
              <li><i class="ion-android-checkmark-circle" style="color:#50C878"></i> {{$about->pro2}}</li>
              <li><i class="ion-android-checkmark-circle" style="color:#50C878"></i> {{$about->pro3}}</li>
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
          <h2>Ons Portfolio</h2>
          <p>De foto's die u hier kunt vinden geven een sfeerimpressie van onze werkzaamheden. 
            Zoals u ziet is er een onderscheid gemaakt tussen onderhoud, renovatie en aanleg. 
            Laat u inspireren en bedenk dat er in uw tuin ook veel mogelijkheden zijn. 
            </p>
        </div>
      </div>

      <div class="container">
        <div class="section-header mt-3">
          <h3>Renovatie</h3>
          <p>U bent tevreden met uw huidige tuin maar wilt toch wat aanpassingen doorvoeren zonder dat de hele tuin op de schop gaat. 
            Dat kan!
            Wij noemen dit het renoveren van (een deel) van uw tuin. We kijken naar de bestaande situatie van de tuin, uw wensen en wat de mogelijkheden zijn. Als het kan proberen wij producten uit uw tuin te hergebruiken. Zo maken we van iets bestaands toch weer iets 'nieuws'. 
            </p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row ">
            <div class="col-8 mx-auto">
                <div class="row">
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
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="section-header mt-3">
          <h3>Aanleg</h3>
          <p>Bent u verhuisd of gaat u een nieuw huis bouwen? Of u woont nog op uw oude vertrouwde stek, maar wilt een compleet nieuwe tuin? Dan kunnen wij die voor u aanleggen. 

            Vaak wordt bij tuinaanleg gedacht aan het leggen van gras, een deel van de tuin bestraten en het zetten van planten. Dat klopt. Dit zijn veel voorkomende aanlegwerkzaamheden. Toch komt er nog meer bij kijken om een tuin op de juiste manier aan te leggen. 
            </p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-8 mx-auto">
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
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="section-header mt-3">
          <h3>Onderhoud</h3>
          <p>Steeds meer mensen hebben het druk in hun vrije tijd. Waar tuinieren eerst als ontspannen bezigheid gezien werd, is het tegenwoordig voor sommige mensen een groter wordende obstakel. Planten blijven maar groeien, onkruid overwoekert de tuin, en hagen of bomen worden te groot. 

            Daar kunnen wij wat mee. Onderhoud is namelijk de specialiteit van ons bedrijf. 
            Of het nu gaat om een jaarlijkse snoeibeurt van uw tuin of periodieke onderhoudsbeurten, bij ons is het allemaal mogelijk. Zowel voor de particulier als bedrijven.
            </p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-8 mx-auto">
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
        </div>
      </div>

      <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            <a class="btn btn-success float-right" href="/extraportfolio">Meer projecten</a>
          </div>
        </div>
      </div>

    </section><!-- #portfolio -->
    <hr>
    @endif
    
    {{-- News --}}
    <section id="news" class="wow fadeInUp">

        <div class="container">
            <div class="section-header">
              <h2>Nieuws</h2>
              <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
            </div>
    
            <div class="row">
              <div class="card-deck">
              @foreach ($news as $n)
              <div class="col-4 mx-auto">
                <!-- Card -->
                <div class="card promoting-card">
                    <!-- Card content -->
                    <div class="card-body d-flex flex-row">
                      <!-- Content -->
                      <div>
                        <!-- Title -->
                        <h4 class="card-title font-weight-bold mb-2">{{$n->title}}</h4>
                        <!-- Subtitle -->
                        <p class="card-text"><i class="far fa-clock pr-2"></i>{{$n->created_at}}</p>
                      </div>
                    </div>
                    <!-- Card image -->
                    <div class="view overlay">
                      <img class="card-img-top rounded-0" src="{{ asset('storage/news/'.$n->image_name)}}" alt="Card image cap" style="max-height:180px">
                      <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body">
                      <div class="collapse-content">
                        <!-- Text -->
                        <p class="card-text collapse" id="collapseContent{{$n->id}}">{{$n->news_desc}}</p>
                        <!-- Button -->
                        <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 collapsed" data-toggle="collapse" href="#collapseContent{{$n->id}}" aria-expanded="false" aria-controls="collapseContent">Read more</a>
                      </div>
                    </div>
                  </div>
                  <!-- Card -->
              </div>
              @endforeach
              </div>
            </div>
          </div>
    </section>  
    <hr class="mt-5 mb-5">
    {{-- end news --}}
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
            @include('helpers.errors')
          <form action="{{ action('IndexController@store') }}" method="POST">
    
            @csrf
            @method('POST')

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="naam..." value="{{ old('name')}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" placeholder="email..." value="{{ old('email')}}" required>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-12">
                  <div class="form-group">
                      <label for="subject">Onderwerp</label>
                      <input id="subject" class="form-control" type="text" name="subject" placeholder="onderwerp..." value="{{ old('subject')}}" required>
                  </div>
              </div>
           </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="desc">Bericht</label>
                        <textarea id="desc" class="form-control" type="text" name="desc" placeholder="bericht..." rows="5" required style="max-height: 1000px;">{{ old('desc')}}</textarea>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-info">Verstuur !</button>
                </div>
            </div>

        </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  @endsection
