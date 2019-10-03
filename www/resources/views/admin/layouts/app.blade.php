<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NC Tuinservice</title>
  <!-- Favicon -->
  <link href="{{ asset('img/favicon.ico') }}" rel="icon" type="image/x-icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('admin/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('admin/css/argon-dashboard.css?v=1.1.') }}" rel="stylesheet" />

</head>
  <body class="" style="overflow-x: hidden;">

    @include('admin.layouts.inc.nav')

                @yield('admin-content')

    @include('admin.layouts.inc.footer')

<!-- Include JS file. -->
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@3.0.5/js/froala_editor.pkgd.min.js'></script>


    <!--   Core   -->
    <script src="{{ asset('admin/js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--   Optional JS   -->
    <!--   Argon JS   -->
    <script src="{{ asset('admin/js/argon-dashboard.min.js?v=1.1.0') }}../assets/"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-dashboard-free"
        });
    $('.alert-temp').delay(7400).fadeOut(1200);
    </script>
    </body>
</html>