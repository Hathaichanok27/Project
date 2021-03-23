<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminroombookingController extends Controller
{
    public function index()
    {
        return view('adminroombookings.index');
    }
}
