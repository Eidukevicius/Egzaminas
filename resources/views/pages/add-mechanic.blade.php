@extends('serviceTemplate.app')

@section('content')
<h1 class="mt-4 d-flex justify-content-center">Pridėti mechanika</h1>
@include('serviceTemplate._partials.errors')
<form class="container" action="{{ route('mechanic.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group m-1">    
        <input type="text" name="firstname" class="form-control" placeholder="Vardas">
    </div>
    <div class="form-group m-1">
        <input type="text" name="lastname" class="form-control" placeholder="Pavarde">
    </div>
    <div class="form-group m-1">
        <input type="text" name="specialization" class="form-control" placeholder="specializacija">
    </div>
    <div class="form-group m-1">
        <input type="text" name="city" class="form-control" placeholder="Miestas">
    </div>
    <div class="form-group m-1">
        <label>Nuotrauka:</label>
        <input type="file" name="poster" class="form-control">
    </div>
    <div class="form-group m-1">
        <button type="submit" class="btn btn-primary w-100">Saugoti</button>
    </div>
</form>
@endsection 