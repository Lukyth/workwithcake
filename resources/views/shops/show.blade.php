@extends('app')

@section('content')
  <h2>{{ $shop->name }}</h2>

  <p>Name : {{ $shop->name }}</p>
  <p>Slug : {{ $shop->slug }}</p>
  <p>Tel : {{ $shop->tel }}</p>
  <p>Rate : {{ $shop->rate }}</p>
  <p>Description : {{ $shop->description }}</p>
  <p>Place : {{ $shop->place }}</p>
  <p>Created At : {{ $shop->created_at }}</p>
  <p>Updated At : {{ $shop->updated_at }}</p>

@endsection