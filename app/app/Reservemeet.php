<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservemeet extends Model
{
    protected $fillable = [
        'username', 'user_fullname',
        'room_type', 'room_floor', 'room_name', 'book_date', 'book_starttime', 'book_endtime', 'book_status'
    ];
    
    protected $dates = ['book_date'];
}
