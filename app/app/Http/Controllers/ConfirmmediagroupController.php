<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirmmediagroup;

class ConfirmmediagroupController extends Controller
{
    public function index()
    {
        $confirmmediagroups = Confirmmediagroup::paginate();

        return view('confirmmediagroups.index',compact('confirmmediagroups'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('confirmmediagroups.create');
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
        
        Confirmmediagroup::create($request->all());
        
        return redirect()->route('mybookings.index');
    }
}
