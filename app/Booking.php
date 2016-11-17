<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = [ 'place_id','name', 'ic', 'address', 'doc1', 'doc2', 'doc3 ' ];
}
