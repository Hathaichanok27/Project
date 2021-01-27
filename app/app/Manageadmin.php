<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manageadmin extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'confirm_password', 'roles'
    ];

    protected $hidden = [
        'password', 'confirm_password',
    ];
}
