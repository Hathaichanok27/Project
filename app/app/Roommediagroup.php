<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roommediagroup extends Model
{
    protected $fillable = [
        'room_type', 'room_floor','room_name', 'room_status'
    ];
}
