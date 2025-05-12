@extends('layout.index')
@section('main')
    <h1>Page</h1>
    <hr>


<div class="row">
    @foreach ( $data as $d )
    <div class="col-md-3">
        <div class="container-md">
            <div class="card" style="width: 18rem; box-shadow: 2px 2px; color: #4a4848;">
                <div class="card-body">
                <h5 class="card-title">{{ $d->title  }}</h5> 
                <span class="card-type" style="color: red;">{{ $d->type }}</span> 
                <hr>
                <p class="card-text">{{ $d->description }}</p>
                <a href="#" class="card-link">See More</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection