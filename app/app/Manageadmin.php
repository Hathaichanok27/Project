<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manageadmin extends Model
{
    protected $fillable = [
        'admin_username', 'admin_fullname', 'admin_email', 'admin_telnum', 'is_admin'
    ];
}
