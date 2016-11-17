@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1>Insert Place</h1>
        {{ Form::open(['action' => 'PlaceController@insert' , 'files' => true]) }}
            <div class="form-group">

              {{ Form::text('name' , null , ['class' => 'form-control' , 'placeholder' => 'Name']) }}
            </div>
            <div class="form-group">
              {{ Form::label('image' , 'File') }}
              {{ Form::file('image') }}

            </div>
            {{ Form::submit('Save' , ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
      </div>
    </div>
  </div>
@endsection
