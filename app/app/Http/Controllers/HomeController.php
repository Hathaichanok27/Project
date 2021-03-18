<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('roombookings.index');
    }

    public function adminhome()
    {
        return view('adminroombookings.index');
    }

    public function superadminhome()
    {
        return view('superadminroombookings.index');
    }

}
