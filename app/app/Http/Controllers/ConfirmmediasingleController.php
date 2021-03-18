<?php

namespace App\Http\Controllers;

use App\Confirmmediasingle;
use Illuminate\Http\Request;

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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
