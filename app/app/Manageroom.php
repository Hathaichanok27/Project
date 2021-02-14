<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manageroom extends Model
{
    protected $fillable = [
        'area_floor','room_type','room_name','capacity',
    ];
}
