@extends('app')

@section('content')
  <?php
    echo "<pre>";
    print_r($shops);
    echo "</pre>";
   ?>

  {!! link_to_route('shops.index', 'Back to Shops') !!}
@endsection