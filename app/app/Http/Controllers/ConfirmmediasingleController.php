<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirmmediasingle;

class ConfirmmediasingleController extends Controller
{
    public function index()
    {
        $confirmmediasingles = Confirmmediasingle::paginate();

        return view('confirmmediasingles.index',compact('confirmmediasingles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('confirmmediasingles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'user_fullname' => 'required',
            'user_telnum' => 'required',
            'room_type' => 'required',
            'room_floor' => 'required',
            'book_status' => 'required',
        ]);
        
        Confirmmediasingle::create($request->all());
        
        return redirect()->route('mybookings.index');
    }
}
