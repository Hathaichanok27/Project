<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservemeet extends Model
{
    protected $fillable = [
        'username', 'time_start', 'time_end', 'room_type', 'room_floor','room_name'
    ];
}
