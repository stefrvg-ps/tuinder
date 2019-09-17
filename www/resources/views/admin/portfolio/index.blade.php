@php
    $page = "portfolio";
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
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda porro, atque saepe distinctio vitae nobis itaque facere autem animi inventore natus voluptate sunt obcaecati, amet voluptatem reprehenderit est consequuntur reiciendis corporis tempore labore error expedita cum ab! Maxime, molestias recusandae quas explicabo rerum voluptas? Numquam nemo, ratione quis asperiores voluptatum dignissimos repudiandae consequuntur ea omnis, minima quasi reiciendis quam maxime vel nisi dolore maiores eligendi error sapiente accusamus recusandae aspernatur molestias blanditiis? Fugiat libero, itaque, quasi vero exercitationem suscipit soluta sed veritatis autem expedita commodi optio et magnam quos tenetur minima veniam corporis vitae dignissimos aperiam porro! Magni, nisi inventore.
            </div>
          </div>
        </div>
      </div>
@endsection