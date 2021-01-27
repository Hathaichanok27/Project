<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manageroom extends Model
{
    protected $fillable = [
        'name', 'description','capacity','email_admin'
    ];
}
