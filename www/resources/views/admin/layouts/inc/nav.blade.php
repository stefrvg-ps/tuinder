<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="/">
        <img src="{{ asset('img/logo.jpg') }}" alt="NC Tuinservice" style="width: 100%; max-height: 90px; max-width: 180px;">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="" src="{{ asset('storage/users/'.Auth::user()->image)}}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welkom !</h6>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" onclick="document.location.reload()"><i class="fas fa-undo-alt"></i> Herladen</a>
            <a class="dropdown-item" href="javascript:void(0)" onclick="history.back()"><i class="fas fa-arrow-left"></i> Terug</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Uitloggen">
                <i class="ni ni-button-power"></i>
                <span>
                  Uitloggen
                </span>
              </a>
              <form id="logout-form" action="/logout" method="POST" style="display: none;">
                @csrf
              </form>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="/admin/dashboard">
                NC Tuinservice
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class=" nav-link {{ $page === "dashboard" ? 'active' : '' }}" href="/admin/dashboard"> 
                <i class="ni ni-tv-2 text-black"></i>Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $page === "home" ? 'active' : '' }}" href="/admin/index">
              <i class="ni ni-shop text-black"></i> Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $page === "nieuws" ? 'active' : '' }}" href="/admin/news">
              <i class="ni ni-notification-70 text-black"></i> Nieuws
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $page === "Sfeerimpressie" ? 'active' : '' }}" href="/admin/portfolio">
              <i class="fas fa-users text-black"></i> Sfeerimpressie
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $page === "contact" ? 'active' : '' }}" href="/admin/contact">
              <i class="ni ni-email-83 text-black"></i> Contact
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Persoonlijk</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link {{ $page === "planning" ? 'active' : '' }}" href="/admin/planning">
              <i class="ni ni-email-83 text-black"></i> Planning
            </a>
          </li>
          <hr class="my-3">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="ni ni-bold-left"></i> Terug
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#" onClick="window.location.reload()" >{{$page}}</a>
        
      </div>
    </nav>
    <!-- End Navbar -->