<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirmmediasingle extends Model
{
    protected $fillable = [
        'user_fullname', 'username', 'user_telnum', 'user_email',
        'room_type', 'room_floor', 'room_name', 'book_starttime', 'book_endtime', 'book_status'
    ];

    protected $dates = [
        'book_starttime', 'book_endtime'
    ];
}
