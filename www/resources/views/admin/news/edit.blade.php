@php
  $page = "Nieuws";
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
              <h3 class="mb-0">Nieuwsartikel aanpassen</h3>
            </div>
            <div class="card-body">
                <form id="editForm" method="POST" action="/admin/news/{{$news->id}}" enctype="multipart/form-data">

                  @csrf
                  @method('PUT')
                  
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" name="title" id="title" class="form-control" placeholder="titel" aria-describedby="helpId" value="{{$news->title}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="image">Omslag foto</label>
                                <input type="file" id="image" name="image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                  <label for="desc">Beschrijving</label>
                                  <input type="text" name="desc" id="desc" class="form-control" placeholder="beschrijving" aria-describedby="helpId" value="{{$news->news_desc}}">
                                </div>
                            </div>
                        </div>
                      <div class="row">
                          
                    <a href="/admin/news" class="btn btn-secondary">Terug</a>
                    <button type="submit" form="editForm" class="btn btn-success">BEWERK</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection