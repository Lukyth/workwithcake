@extends('app')

@section('content')

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>{{ $shop->name }}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
          class="img-responsive">
      </div>
      <div class="col-md-6">
        <p class="row">
          <div class="col-md-4">Tel :</div>
          <div class="col-md-8">{{ $shop->tel }}</div>
        </p>
        <p class="row">
          <div class="col-md-4">Time :</div>
          <div class="col-md-8">{{ $shop->open_time }} - {{ $shop->close_time }} ({{ $shop->open_day }})</div>
        </p>
        <p class="row">
          <div class="col-md-4">Price :</div>
          <div class="col-md-8">{{ $shop->min_price }} - {{ $shop->max_price }}</div>
        </p>
        <p class="row">
          <div class="col-md-4">Place :</div>
          <div class="col-md-8">{{ $shop->building }}, {{ $shop->district }}, {{ $shop->area }}</div>
        </p>
        <p class="row">
          <div class="col-md-4">Wifi :</div>
          <div class="col-md-8">{{ $shop->wifi }}</div>
        </p>
        <p class="row">
          <div class="col-md-4">Parking :</div>
          <div class="col-md-8">{{ $shop->parking }}</div>
        </p>
        <p class="row">
          <div class="col-md-4">Credit Card :</div>
          <div class="col-md-8">{{ $shop->credit_card }}</div>
        </p>
      </div>
    </div>
  </div>
</div>

@endsection