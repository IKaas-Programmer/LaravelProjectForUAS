@extends('layout.index')
@section('main')
    <h1>Comment</h1>
    <hr>


<div class="row">
    @foreach ( $data as $d )
    <div class="col-md-3">
        <div class="container-md">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <p class="card-text">{{ $d->comment }}</p>
                <a href="#" class="card-link"> See More</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection