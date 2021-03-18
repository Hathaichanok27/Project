<?php

namespace App\Http\Controllers;

use App\Confirmmediagroup;
use Illuminate\Http\Request;

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

    public function show($id)
    {
        // return view('confirmmediagroup.show',compact('confirmmediagroup'));
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
