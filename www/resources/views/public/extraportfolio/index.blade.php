@extends('public.layouts.app')
    
@section('content')

    <section class="mt-5">
        <div class="container">
        <!-- Grid row -->
        <div class="row">

        </div>
        <!-- Grid row -->
        
        <!-- Grid row -->
        <div class="gallery" id="gallery">

            @foreach ($pictures as $p)
                <!-- Grid column -->
                <div class="mb-3 pics animation all 2">
                    <img class="img-fluid" src="{{ asset('storage/portfolio/'.$p->image_name) }}" alt="">
                </div>
                <!-- Grid column -->
            @endforeach

        </div>
    </div>
        <!-- Grid row -->
    </section>

@endsection