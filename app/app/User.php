<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'user_fullname', 'username', 'user_telnum', 'user_email', 'password', 'is_admin', 'is_superadmin',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
