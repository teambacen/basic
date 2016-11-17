<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Auth::routes();

Route::get('/', 'HomeController@index');
Route::group(['middleware' => 'web'] , function(){
  Route::get('/place' , 'PlaceController@index');
  Route::post('/place' , 'PlaceController@insert');
  Route::get('/book/{id}' , 'PlaceController@book_index');
  Route::post('/book', 'PlaceController@book');
  Route::get('/done' , function(){
    return view('done');
  });
});
