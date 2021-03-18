<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservemeet;
use Redirect,Response;

class ReservemeetController extends Controller
{
    public function index()
    {
        $reservemeets = Reservemeet::paginate();
        return view('reservemeets.index',compact('reservemeets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('reservemeets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'room_type' => 'required',
            'room_floor' => 'required',
            'room_name' => 'required',
        ]);
        Reservemeet::create($request->all());
        return redirect()->route('roommeetings.index');
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
