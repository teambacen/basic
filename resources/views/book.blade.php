@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        {{ Form::open(['action' => 'PlaceController@book', 'files' => true]) }}
          <div class="form-group">
            {{ Form::label('name' , 'Name') }}
            {{ Form::text('name' , null , ['class' => 'form-control']) }}
          </div>
          <div class="form-group">
            {{ Form::label('ic' , 'IC Number') }}
            {{ Form::text('ic' , null , ['class' => 'form-control']) }}
          </div>
          <div class="form-group">
            {{ Form::label('address' , 'Address') }}
            {{ Form::text('address' , null , ['class' => 'form-control']) }}
          </div>
          <div class="form-group">
            {{ Form::label('doc1' , 'Document 1') }}
            {{ Form::file('doc1') }}
          </div>
          <div class="form-group">
            {{ Form::label('doc2' , 'Document 2') }}
            {{ Form::file('doc2') }}
          </div>
          <div class="form-group">
            {{ Form::label('doc3' , 'Document 3') }}
            {{ Form::file('doc3') }}
          </div>
          {{ Form::submit('Book' , ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
      </div>
    </div>
  </div>
@endsection
