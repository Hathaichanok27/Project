<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirmmediagroup extends Model
{
    protected $fillable = [
        'user_fullname', 'username', 'user_telnum', 'user_email',
        'room_type', 'room_floor', 'room_name', 'book_createtime', 'book_starttime', 'book_endtime', 'book_status'
    ];
}
