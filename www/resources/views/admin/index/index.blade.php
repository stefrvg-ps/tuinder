@php
    $page = "home";
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
              <h3 class="mb-0">Home</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <form method="POST" action="/admin/index/1" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-6">
                        <div class="from-group">
                          <label for="title">Titel</label>
                          <input id="title" name="title" value="{{$about->title}}" class="form-control" >
                        </div>
                      </div>
                      <div class="col-6">
                          <div class="from-group">
                            <label for="image">Omslag foto</label>
                            <input type="file" name="image" id="image" class="form-control">
                          </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-12">
                        <label for="desc">Beschrijving</label>
                        <textarea class="form-control" rows="10" id="desc" name="desc">{{$about->desc}}</textarea>
                      </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-12">
                        <label for="pro1">Waarom ons: 1</label>
                        <input id="pro1" name="pro1" value="{{$about->pro1}}" class="form-control" >
                      </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-12">
                        <label for="pro2">Waarom ons: 2</label>
                        <input id="pro2" name="pro2" value="{{$about->pro2}}" class="form-control" >
                      </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-12">
                        <label for="pro3">Waarom ons: 3</label>
                        <input id="pro3" name="pro3" value="{{$about->pro3}}" class="form-control" >
                      </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-12">
                        <span class="float-right mt-3"><button type="submit" class="btn btn-info">Opslaan</button></span>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection