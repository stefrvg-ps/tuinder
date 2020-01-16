@php
    $page = "contact";
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
              <h3 class="mb-0">Contact</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table table-striped table-inverse  w-100 ">
                      <thead class="thead-inverse">
                        <tr>
                          <th>Naam</th>
                          <th>Email</th>
                          <th>Onderwerp</th>
                          <th>Aangemaakt</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($messages as $m)
                            <tr>
                              <td>{{$m->name}}</td>
                              <td>{{$m->email}}</td>
                              <td>{{$m->subject}}</td>
                              <td>{{$m->created_at}}</td>
                              <td class="float-right">
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#viewMsg{{$m->id}}"><i class="fas fa-eye" style="font-size: 24px;"></i> </button>
                                @if($m->count('id') > 0)
                                    <form method="post" action="/admin/contact/{{$m->id}}"style="display: inline-block;">
                                        @csrf
                                        @method('delete')
                                        <button name="delete" type="submit" class="btn btn-danger" title="Verwijder" style="padding-top: -31px !important;">
                                                <i class="fas fa-trash-alt" style="font-size: 24px;"></i>
                                        </button>
                                    </form>
                                @endif
                                </td>
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



      @foreach ($messages as $m)
        <div class="modal fade shadow" id="viewMsg{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="viewMsg{{$m->id}}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Bericht</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <small>Naam:</small><br>
                  <h4>{{$m->name}}</h4>
                  <hr>
                  <small>Email:</small><br>
                  <h5><a href="mailto: {{$m->email}}">{{$m->email}}</a></h5>
                  <hr>
                  <small>Bericht:</small><br>
                  <div class="w-100">
                    <textarea name="" id="" cols="30" rows="10" class="form-control w-100">
                        {{$m->desc}}
                    </textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
      @endforeach

@endsection