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
              <h3 class="mb-0">
                Sfeerimpressie
                <span class="float-right"><button data-toggle="modal" data-target="#addPicture" class="btn btn-secondary">Foto toevoegen</button></span>
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table table-striped table-inverse  w-100 ">
                      <thead class="thead-inverse">
                        <tr>
                          <th>Afbeelding beschrijving</th>
                          <th>Afbeelding type</th>
                          <th>Afbeelding</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($CmsPictures as $cp)
                            <tr>
                              <td>{{$cp->image_desc}}</td>
                              @if ($cp->image_type == '0')
                                <td>Aanleg</td>
                              @elseif($cp->image_type == '1')
                                <td>Onderhoud</td>
                              @else
                                <td>Renovatie</td>
                              @endif
                              <td><img src="{{ asset('storage/portfolio/'.$cp->image_name) }}" style="max-height:5%" alt=""></td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="addPicture" tabindex="-1" role="dialog" aria-labelledby="addPicture" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Foto toevoegen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="{{ action('CmsPortfolioController@store') }}" method="POST" enctype="multipart/form-data" id="pictureForm">
                @csrf
                @method('POST')
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="desc">Korte beschrijving</label>
                      <input type="text" name="desc" id="desc" class="form-control" placeholder="Beschrijving" aria-describedby="helpId" value="{{old('desc')}}" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="from-group">
                      <label for="image">Omslag foto</label>
                      <input type="file" name="image" id="image" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="type">Type</label>
                      <select name="type" id="type" class="form-control" required>
                        <option value="0">Aanleg</option>
                        <option value="1">Onderhoud</option>
                        <option value="2">Renovatie</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button form="pictureForm" type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
@endsection