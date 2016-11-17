<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Booking;

class PlaceController extends Controller
{
    public function index(){
      return view('place');
    }
    public function insert(Request $request){
      $place = new Place;
      $name  = $request->input('name');
      $image = null;

      if ($request->hasFile('image')) {
        $path  =  'img';
        $img = $request->file('image');
        $img->move( $path, $img->getClientOriginalName());
        $image = $img->getClientOriginalName();
      }

      $place->insert([
          'name' => $name,
          'image' => $image,
      ]);

      return redirect('/');
    }
    public function book_index($id){
      return view('book');
    }
    public function book(Request $request){
      $doc1 = null;
      $doc2 = null;
      $doc3 = null;

      if ($request->hasFile('doc1')) {
        $path  =  'img';
        $img = $request->file('doc1');
        $img->move( $path, $img->getClientOriginalName());
        $doc1 = $img->getClientOriginalName();
      }
      if ($request->hasFile('doc2')) {
        $path  =  'img';
        $img = $request->file('doc2');
        $img->move( $path, $img->getClientOriginalName());
        $doc2 = $img->getClientOriginalName();
      }
      if ($request->hasFile('doc3')) {
        $path  =  'img';
        $img = $request->file('doc3');
        $img->move( $path, $img->getClientOriginalName());
        $doc3 = $img->getClientOriginalName();
      }

      $book = new Booking;
      $book->create([
          'place_id' => 1,
          'name' => $request->input('name'),
          'ic' => $request->input('ic'),
          'address' => $request->input('address'),
          'doc1' => $doc1,
          'doc2' => $doc2,
          'doc3' => $doc3
      ]);
      return redirect('/done');
    }
}
