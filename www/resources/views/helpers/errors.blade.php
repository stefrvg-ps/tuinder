@if ($message = Session::get('success'))
<div class="alert-temp alert alert-success alert-block mx-5 ">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><i class="ni ni-check-bold"></i> {{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class=" alert-temp alert alert-danger alert-block mx-5">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><i class="fas fa-exclamation-triangle"></i> {{ $message }}</strong>
</div>
@endif

@if ($errors->any())
    <div class=" alert-temp alert alert-warning alert-block mx-5">
            @foreach ($errors->all() as $error)
               <i class="fas fa-exclamation-triangle"></i> {{ $error }}<br>
            @endforeach
    </div>
@endif