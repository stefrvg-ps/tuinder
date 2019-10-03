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
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col-12">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Foto aanpassen</h3>
            </div>
            <div class="card-body">
                <form id="editForm" method="POST" action="/admin/portfolio/{{$picture->id}}" enctype="multipart/form-data">

                  @csrf
                  @method('PUT')
                  
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                              <label for="desc">Korte beschrijving</label>
                              <input type="text" name="desc" id="desc" class="form-control" placeholder="Titel" aria-describedby="helpId" value="{{$picture->image_desc}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="image">Afbeelding</label>
                                <input type="file" id="image" name="image" class="form-control">
                            </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" id="type" class="form-control" required>
                              <option value="0" {{$picture->image_type == 0 ? 'selected' : ''}}>Renovatie</option>
                              <option value="1" {{$picture->image_type == 1 ? 'selected' : ''}}>Aanleg</option>
                              <option value="2" {{$picture->image_type == 2 ? 'selected' : ''}}>Onderhoud</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          
                    <a href="/admin/portfolio" class="btn btn-secondary">Terug</a>
                    <button type="submit" form="editForm" class="btn btn-success">BEWERK</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection