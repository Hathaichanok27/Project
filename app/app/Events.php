<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'username', 'time_start', 'time_end', 'room_floor','room_name'
    ];
}
