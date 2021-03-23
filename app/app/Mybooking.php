<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mybooking extends Model
{
    protected $fillable = [
        'username',
        'room_type', 'room_floor', 'room_name', 'book_createtime', 'book_starttime', 'book_endtime', 'book_status'
    ];
}
