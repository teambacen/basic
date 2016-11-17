@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($places as $place)
          <div class="col-md-4">
            <a href="#">
              <img src="img/{{ $place->image }}" alt="" class="img-thumbnail"/>
            </a>
            <h3>{{ $place->name }}</h3>
            <a href="{{ action('PlaceController@book_index', [ 'id' => $place->id]) }}" class="btn btn-primary">Book</a>
          </div>
        @endforeach

    </div>
</div>
@endsection
