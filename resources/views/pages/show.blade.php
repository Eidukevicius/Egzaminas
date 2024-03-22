@extends('serviceTemplate.app')

@section('content')
    <div class="container">
        <h2>{{ $services->title }}</h2>
        <p><strong>Adresas:</strong> {{ $services->address }}</p>
        <p><strong>Vadovas:</strong> {{ $services->director }}</p>
        <a href="/services/{{ $services->id }}/edit" class="btn btn-primary">Redaguoti</a>
        <form action="/services/{{ $services->id }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Ar tikrai norite ištrinti šią įmonę?')">Ištrinti</button>
        </form>
    </div>
@endsection