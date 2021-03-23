<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::paginate(10);
        
        return view('rooms.index', compact('rooms'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_type' => 'required',
            'room_floor' => 'required',
            'room_name' => 'required',
            'room_status' => 'required',
        ]);
        
        Room::create($request->all());
        
        return redirect()->route('rooms.index')
                        ->with('success','Created room successfully.');
    }

    public function show(Room $room)
    {
        return view('rooms.show',compact('room'));
    }

    public function edit(Room $room)
    {
        return view('rooms.edit',compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $request->validate([
            'room_type' => 'required',
            'room_floor' => 'required',
            'room_name' => 'required',
            'room_status' => 'required',
        ]);

        $room->update($request->all());
        
        return redirect()->route('rooms.index')
                        ->with('success','Update room successfully');
    }

    public function destroy(Room $room)
    {
        $room->delete();
        
        return redirect()->route('rooms.index')
                        ->with('success','Deleted room successfully');
    }
}
