<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoommediaController extends Controller
{
    public function index()
    {
        return view('roommedias.index');
    }
}
