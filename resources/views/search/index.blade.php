@extends('app')

@section('content')

  {!! Form::open(array('route' => 'search.store')) !!}

    <div class="form-group">
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', '', array('placeholder' => 'Bake a wish')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('tel', 'Tel:') !!}
      {!! Form::text('tel', '', array('placeholder' => '0812345678')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('min-rate', 'Min Rate:') !!}
      {!! Form::selectRange('min-rate', 0, 5); !!}
    </div>

    <div class="form-group">
      {!! Form::label('max-rate', 'Max Rate:') !!}
      {!! Form::selectRange('max-rate', 0, 5); !!}
    </div>

    <div class="form-group">
      {!! Form::label('description', 'Description:') !!}
      {!! Form::textarea('description', '', array('placeholder' => 'description')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('place', 'Place:') !!}
      {!! Form::textarea('place', '', array('placeholder' => 'Bangkok')) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Search') !!}
    </div>

  {!! Form::close() !!}

  {!! link_to_route('shops.index', 'Back to Shops') !!}
@endsection