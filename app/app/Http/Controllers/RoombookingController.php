<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoombookingController extends Controller
{
    public function index()
    {
        return view('roombookings.index');
    }
}
