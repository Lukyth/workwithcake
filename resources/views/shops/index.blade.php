@extends('app')

@section('content')
  <h2>Shops</h2>

  @if ( !$shops->count() )
      You have no shops
  @else
    <ul>
      @foreach( $shops as $shop )
        <li><a href="{{ route('shops.show', $shop->slug) }}">{{ $shop->name }}</a></li>
      @endforeach
    </ul>
  @endif


@endsection