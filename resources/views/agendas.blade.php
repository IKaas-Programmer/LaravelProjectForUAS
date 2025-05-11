@extends('layout.index')
@section('main')
    <h1> <b> Agendas </b> </h1>
    <hr>

<div class="row">
    @foreach ( $data as $d )
    <div class="col-md-3">
        <div class="container-md">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{ $d->title  }}</h5>
                <p class="card-text">{{ $d->description }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection