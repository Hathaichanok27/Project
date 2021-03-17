<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

use App\Events;
use Redirect,Response;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::paginate();

        return view('rooms.index', compact('rooms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('rooms.show',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('rooms.edit',compact('room'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')
                        ->with('success','Deleted room successfully');
    }

// Fullcalendar
    // public function index1() 
    // {
    //     if(request()->ajax()) 
    //     {
 
    //         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
    //         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
 
    //         $data = Events::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
    //         return Response::json($data);
    //         print_r($data);
    //     }
    //     return view('roommeetings');
    // }
    
    // public function create1(Request $request)
    // {  
    //     $insertArr = [ 'title' => $request->title,
    //                   'start' => $request->start,
    //                   'end' => $request->end ];
    //     $event = Events::insert($insertArr);   
    //     return Response::json($event);
    // }
}
