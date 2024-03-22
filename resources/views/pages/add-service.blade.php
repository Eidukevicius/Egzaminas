@extends('serviceTemplate.app')

@section('content')
<h1 class="mt-4 d-flex justify-content-center">Pridėti servisa</h1>
@include('serviceTemplate._partials.errors')
<form class="container" action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group m-1">    
        <input type="text" name="title" class="form-control" placeholder="Pavadinimas">
    </div>
    <div class="form-group m-1">
        <input type="text" name="address" class="form-control" placeholder="Adresas">
    </div>
    <div class="form-group m-1">
        <input type="text" name="director" class="form-control" placeholder="Vadovas">
    </div>
    <div class="form-group m-1">
        <button type="submit" class="btn btn-primary w-100">Saugoti</button>
    </div>
</form>
@endsection