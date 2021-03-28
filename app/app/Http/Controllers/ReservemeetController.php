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
        // date_default_timezone_set('Asia/Bangkok');
        // print($_GET['start']);
        // $date = $_GET['start'];
        // return view('reservemeets.create',compact('date'));
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
            'book_status' => 'required',
        ]);
        Reservemeet::create($request->all());
        
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
