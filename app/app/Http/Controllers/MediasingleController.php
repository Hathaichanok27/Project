<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roommediasingle;


class MediasingleController extends Controller
{
    public function index()
    {
        $roommediasingles = Roommediasingle::paginate();
        
        return view('mediasingles.index', compact('roommediasingles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
