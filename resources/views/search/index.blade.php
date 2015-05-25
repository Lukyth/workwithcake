@extends('app')

@section('content')

<div class="section">
  <div class="container search index">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Search&nbsp;</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="well bs-component">
      {!! Form::open(array('route' => 'search.store')) !!}

        <div class="form-group col-md-6">
          {!! Form::label('name', 'Name:', array('class' => 'col-md-4 col-xs-4')) !!}
          {!! Form::text('name', '', array('class' => 'col-md-8 col-xs-8 form-control', 'placeholder' => 'ex. Bake a wish')) !!}
          <div class="clearfix"></div>
        </div>

        <div class="form-group col-md-6">
          {!! Form::label('tel', 'Tel:', array('class' => 'col-md-4 col-xs-4')) !!}
          {!! Form::text('tel', '', array('class' => 'col-md-8 col-xs-8 form-control', 'placeholder' => 'ex. 0812345678')) !!}
          <div class="clearfix"></div>
        </div>

        <div class="form-group col-md-6">
          {!! Form::label('open_time', 'Open Time:', array('class' => 'col-md-4 col-xs-4')) !!}
          {!! Form::text('open_time', '', array('class' => 'col-md-8 col-xs-8 form-control', 'placeholder' => 'ex. 10:00')) !!}
          <div class="clearfix"></div>
        </div>

        <div class="form-group col-md-6">
          {!! Form::label('close_time', 'Close Time:', array('class' => 'col-md-4 col-xs-4')) !!}
          {!! Form::text('close_time', '', array('class' => 'col-md-8 col-xs-8 form-control', 'placeholder' => 'ex. 21:00')) !!}
          <div class="clearfix"></div>
        </div>

        <div class="form-group col-md-6">
          {!! Form::label('open_day', 'Open Day:', array('class' => 'col-md-4 col-xs-4')) !!}
          {!! Form::text('open_day', '', array('class' => 'col-md-8 col-xs-8 form-control', 'placeholder' => 'ex. everyday')) !!}
          <div class="clearfix"></div>
        </div>

        <div class="form-group col-md-6">
          {!! Form::label('min_price', 'Min Price:', array('class' => 'col-md-4 col-xs-4')) !!}
          {!! Form::text('min_price', '', array('class' => 'col-md-8 col-xs-8 form-control', 'placeholder' => 'ex. 100')) !!}
          <div class="clearfix"></div>
        </div>

        <div class="form-group col-md-6">
          {!! Form::label('max_price', 'Max Price:', array('class' => 'col-md-4 col-xs-4')) !!}
          {!! Form::text('max_price', '', array('class' => 'col-md-8 col-xs-8 form-control', 'placeholder' => 'ex. 1000')) !!}
          <div class="clearfix"></div>
        </div>

        <div class="form-group col-md-6">
          {!! Form::label('building', 'Building:', array('class' => 'col-md-4 col-xs-4')) !!}
          {!! Form::text('building', '', array('class' => 'col-md-8 col-xs-8 form-control', 'placeholder' => 'ex. Paragon')) !!}
          <div class="clearfix"></div>
        </div>

        <div class="form-group col-md-6">
          {!! Form::label('district', 'District:', array('class' => 'col-md-4 col-xs-4')) !!}
          {!! Form::text('district', '', array('class' => 'col-md-8 col-xs-8 form-control', 'placeholder' => 'ex. 13 (Hunger Game)')) !!}
          <div class="clearfix"></div>
        </div>

        <div class="form-group col-md-6">
          {!! Form::label('area', 'Area:', array('class' => 'col-md-4 col-xs-4')) !!}
          {!! Form::text('area', '', array('class' => 'col-md-8 col-xs-8 form-control', 'placeholder' => 'ex. 11 (Code Geass)')) !!}
          <div class="clearfix"></div>
        </div>

        <div class="form-group col-md-6">
          {!! Form::label('nearby', 'Nearby Place:', array('class' => 'col-md-4 col-xs-4')) !!}
          {!! Form::text('nearby', '', array('class' => 'col-md-8 col-xs-8 form-control', 'placeholder' => 'ex. MBK')) !!}
          <div class="clearfix"></div>
        </div>

        <div class="form-group col-md-6">
          {!! Form::label('food', 'Food:', array('class' => 'col-md-4 col-xs-4')) !!}
          {!! Form::text('food', '', array('class' => 'col-md-8 col-xs-8 form-control', 'placeholder' => 'ex. Cake')) !!}
          {{-- <div class="clearfix"></div> --}}
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="container text-center">

            <div class="form-group col-md-2 col-xs-3 checkbox">
              <label>
                <input type="checkbox" name="wifi"><span class="checkbox-material"><span class="check"></span></span> Wifi
              </label>
            </div>

            <div class="form-group col-md-2 col-xs-3 checkbox">
              <label>
                <input type="checkbox" name="parking"><span class="checkbox-material"><span class="check"></span></span> Parking
              </label>
            </div>

            <div class="form-group col-md-2 col-xs-3 checkbox">
              <label>
                <input type="checkbox" name="credit_card"><span class="checkbox-material"><span class="check"></span></span> Credit Card
              </label>
            </div>

          </div>
        </div>

        {{-- <div class="clearfix"></div> --}}
        <div class="row">
          <div class="container text-center">
            <div class="form-group">
              {!! Form::submit('Search', array('class' => 'btn btn-success')) !!}
            </div>
          </div>
        </div>

      {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection