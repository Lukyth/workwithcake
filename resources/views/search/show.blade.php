@extends('app')

@section('content')

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Search Result&nbsp;</h1>
        </div>
      </div>
    </div>
    <div class="row">
      @if ( !$shops->count() )
        There's no matching result.
      @else
        @foreach( $shops as $shop )
          <a href="{{ route('shops.show', $shop->slug) }}">
            <div class="col-md-3">
              <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
              class="img-responsive">
              <h2>{{ $shop->name }}</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
          </a>
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