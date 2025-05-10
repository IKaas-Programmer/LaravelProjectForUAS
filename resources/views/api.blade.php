@extends('layout.index')
@section('main')

<div class="row d-flex gap-3">
  <h1><b>API Documentation</b></h1>
  <hr>

    @foreach ($data as $d)
      <div class="card mb-3 flex-row" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ $d->avatar }}" class="img-fluid rounded-start" alt="image" style="margin: 10px;">
    </div>
    <div class="col-sm-8 ">
      <div class="card-body">
        <h5 class="card-title"> {{ $d -> name }}</h5>
        <h5 class="card-title"> {{ $d -> email }}</h5>
        <h5 class="card-title"> {{ $d -> role }}</h5>
        
      </div>
    </div>
  </div>
</div> 
    @endforeach
</div>

@endsection
