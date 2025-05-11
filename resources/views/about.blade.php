@extends('layout.index')
@section('main')
    <h1>About Us</h1>

    <div class="row">
        @foreach ($data as $item)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <a href="{{ $item->link }}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection