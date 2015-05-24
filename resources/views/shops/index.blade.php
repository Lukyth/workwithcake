@extends('app')

@section('content')

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Shops&nbsp;</h1>
        </div>
      </div>
    </div>
    <div class="row">
      @if ( !$shops->count() )
        There's no shops.
      @else
        @foreach( $shops as $shop )
          <div class="col-md-3">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive">
            <a href="{{ route('shops.show', $shop->slug) }}">
              <h2 class="cut-text">{{ $shop->name }}</h2>
            </a>
            <p class="cut-text">Building : {{ $shop->building }}</p>
            <p>Price : {{ $shop->min_price }} - {{ $shop->max_price }}</p>
            <p>Time : {{ $shop->open_time }} - {{ $shop->close_time }}</p>
          </div>
        @endforeach
      @endif
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <ul class="pagination">
          <li>
            <a href="#">Prev</a>
          </li>
          <li>
            <a href="#">1</a>
          </li>
          <li>
            <a href="#">2</a>
          </li>
          <li>
            <a href="#">3</a>
          </li>
          <li>
            <a href="#">4</a>
          </li>
          <li>
            <a href="#">5</a>
          </li>
          <li>
            <a href="#">Next</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection