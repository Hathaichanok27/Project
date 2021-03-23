<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminroommediastaffController extends Controller
{
    public function index()
    {
        return view('adminroommediastaffs.index');
    }
}
