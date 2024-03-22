@extends('serviceTemplate.app')

@section('content')
    <div class="container">
        <h2>Visos Serviso imones</h2>
        <button class="btn btn-primary mb-4"><a class="dropdown-item" href="/create">Prideti servisa</a></button>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->title }}</h5>
                            <p class="card-text">{{ $service->address }}</p>
                            <p class="card-text">{{ $service->director }}</p>
                            <a href="/services/{{ $service->id }}" class="btn btn-primary">Plačiau</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection