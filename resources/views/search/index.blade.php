@extends('app')

@section('content')

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Search&nbsp;</h1>
        </div>
      </div>
    </div>
    <div class="row">
      {!! Form::open(array('route' => 'search.store')) !!}

        <div class="form-group">
          {!! Form::label('name', 'Name:') !!}
          {!! Form::text('name', '', array('placeholder' => 'ex. Bake a wish')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('tel', 'Tel:') !!}
          {!! Form::text('tel', '', array('placeholder' => 'ex. 0812345678')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('open_time', 'Open Time:') !!}
          {!! Form::text('open_time', '', array('placeholder' => 'ex. 10AM')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('close_time', 'Close Time:') !!}
          {!! Form::text('close_time', '', array('placeholder' => 'ex. 10PM')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('open_day', 'Open Day:') !!}
          {!! Form::text('open_day', '', array('placeholder' => 'ex. everyday')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('min_price', 'Min Price:') !!}
          {!! Form::text('min_price', '', array('placeholder' => 'ex. 100')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('max_price', 'Max Price:') !!}
          {!! Form::text('max_price', '', array('placeholder' => 'ex. 1000')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('building', 'Building:') !!}
          {!! Form::text('building', '', array('placeholder' => 'ex. Paragon')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('district', 'District:') !!}
          {!! Form::text('district', '', array('placeholder' => 'ex. 13 (Hunger Game)')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('area', 'Area:') !!}
          {!! Form::text('area', '', array('placeholder' => 'ex. 11 (Code Geass)')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('wifi', 'Wifi:') !!}
          {!! Form::checkbox('wifi'); !!}
        </div>

        <div class="form-group">
          {!! Form::label('parking', 'Parking:') !!}
          {!! Form::checkbox('parking'); !!}
        </div>

        <div class="form-group">
          {!! Form::label('creadit_card', 'Creadit Card:') !!}
          {!! Form::checkbox('creadit_card'); !!}
        </div>

        <div class="form-group">
          {!! Form::label('nearby', 'Nearby Place:') !!}
          {!! Form::text('nearby', '', array('placeholder' => 'ex. MBK')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('food', 'Food:') !!}
          {!! Form::text('food', '', array('placeholder' => 'ex. Cake')) !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Search') !!}
        </div>

      {!! Form::close() !!}
    </div>
  </div>
</div>

@endsection