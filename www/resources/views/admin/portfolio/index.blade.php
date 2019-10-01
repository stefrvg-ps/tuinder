@php
    $page = "Sfeerimpressie";
@endphp
@extends('admin.layouts.app')
 
@section('admin-content')

  
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          @include('helpers.errors')
          <div class="row"> <!-- QUICK STATS -->

            <div class="col-12">
                <div class="card card-stats my-4 mb-xl-0 shadow">
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col">

                          <?php echo date('d / m / Y'); ?>
                          <p class="float-right" id="clock" style="display: inline;"></p>
                
                          <script>
                            var myVar = setInterval(function() { myTimer(); }, 0);
                            function myTimer() { var d = new Date(); document.getElementById("clock").innerHTML =  d.toLocaleTimeString('nl'); }  
                          </script>
                        
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Sfeerimpressie</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-inverse table-responsive">
                  <thead class="thead-inverse">
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
@endsection