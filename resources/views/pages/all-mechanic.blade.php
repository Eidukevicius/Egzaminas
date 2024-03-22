@extends('serviceTemplate.app')

@section('content')
    <div class="container">
        <h2>Darbuotojai</h2>
        <button class="btn btn-primary mb-4"><a class="dropdown-item" href="/add-mechanic">Prideti servisa</a></button>
        <div class="row">
            @foreach ($mechanics as $mechanic)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $mechanic->firstname }}</h5>
                            <p class="card-text">{{ $mechanic->lastname }}</p>
                            <p class="card-text">{{ $mechanic->specialization }}</p>
                            <p class="card-text">{{ $mechanic->city }}</p>
                            <a href="/mechanics/{{ $mechanic->id }}" class="btn btn-primary">Plačiau</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection