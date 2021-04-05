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
            'user_fullname' => 'required',
            'room_type' => 'required',
            'room_name' => 'required',
            'book_starttime' => 'required',
            'book_endtime' => 'required',
            'book_startdate' => 'required',
            'book_enddate' => 'required',
            'book_status' => 'required',
        ]);
        $updateArr = [
            'username' => $request->input("username"),
            'user_fullname' => $request->input("user_fullname"),
            'room_type' => $request->input("room_type"),
            'room_name' => $request->input("room_name"),
            'book_starttime' =>$request->input("book_startdate")." ". $request->input("book_starttime"),
            'book_endtime' => $request->input("book_enddate") ." ". $request->input("book_endtime"),
            'book_startdate' => $request->input("book_startdate"),
            'book_enddate' => $request->input("book_enddate"),
            'book_status' => $request->input("book_status"),
         ];
        Reservemeet::create($updateArr);
        return redirect()->route('roommeetings.index');
    }

    public function update(Request $request, Reservemeet $reservemeet)
    {
        $request->validate([
            'book_status' => 'required'
        ]);
        $reservemeet->update($request->all());
        
        return redirect()->route('roommeetings.index');
    }

    public function show(Reservemeet $reservemeet)
    {
        return view('reservemeets.show',compact('reservemeet'));
    }

    public function destroy(Reservemeet $reservemeet)
    {
        $reservemeet->delete();
        
        return redirect()->route('roommeetings.index');
    }
}
