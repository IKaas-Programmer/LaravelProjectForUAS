@extends('layout.index')
@section('main')
    <h1> <b> Agendas </b> </h1>
    <hr>

<div class="row mt-4 mb-4">
    @foreach ( $data as $d )
    <div class="col-md-3 mb-4">
        <div class="container-col-md-3">
            <div class="card" style="width: 18rem; box-shadow: 2px 2px; color: #4a4848;">
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