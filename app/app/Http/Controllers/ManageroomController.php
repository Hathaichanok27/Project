<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageroomController extends Controller
{
    public function index()
    {
        return view('managerooms.index');
    }
}
