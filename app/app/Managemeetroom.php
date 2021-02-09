<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Managemeetroom extends Model
{
    protected $fillable = [
        'name', 'description','capacity','email_admin'
    ];
}
