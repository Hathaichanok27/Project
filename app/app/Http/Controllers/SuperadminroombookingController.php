<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminroombookingController extends Controller
{
    public function index()
    {
        return view('superadminroombookings.index');
    }
}
