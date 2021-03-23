<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoommeetingController extends Controller
{
    public function index()
    {
        return view('roommeetings.index');
    }
}
