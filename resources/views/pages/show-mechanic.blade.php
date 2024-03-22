@extends('serviceTemplate.app')

@section('content')
    <div class="container">
        <h2>{{ $mechanics->firstname }}</h2>
        <p><strong>Pavarde:</strong> {{ $mechanics->lastname }}</p>
        <p><strong>Specializacija:</strong> {{ $mechanics->specialization }}</p>
        <p><strong>Miestas:</strong> {{ $mechanics->city }}</p>
        <a href="/mechanics/{{ $mechanics->id }}/edit" class="btn btn-primary">Redaguoti</a>
        <form action="/mechanics/{{ $mechanics->id }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Ar tikrai norite ištrinti šią įmonę?')">Ištrinti</button>
        </form>
    </div>
@endsection