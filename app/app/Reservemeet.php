<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservemeet extends Model
{
    protected $fillable = [
        'username', 'user_fullname', 'room_type', 'room_floor', 'room_name',  'time_start', 'time_end', 'book_status'
    ];
}
