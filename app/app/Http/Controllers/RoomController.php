<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Roomfloor;

class RoomController extends Controller
{
    public function index()
    {
        $rooms1 = Room::select("*")->where("room_status", "=", "ว่าง")->get();
        $rooms2 = Room::select("*")->where("room_status", "=", "กำลังใช้งาน")->get();
        $rooms3 = Room::select("*")->where("room_status", "=", "ไม่เปิดใช้งาน")->get();
        $count1 = count($rooms1);
        $count2 = count($rooms2);
        $count3 = count($rooms3);
        $rooms = Room::paginate();
        $roomfloors = Roomfloor::paginate();
        return view('rooms.index',compact(['rooms1','rooms2','rooms3','count1','count2','count3','rooms','roomfloors']))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $roomfloors = Roomfloor::paginate();
        return view('rooms.create',compact('roomfloors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_type' => 'required',
            'room_floor_id' => 'required',
         //   'room_floor' => 'required',
            'room_name' => 'required',
            'room_status' => 'required',
        ]);
        
        Room::create($request->all());
        
        return redirect()->route('rooms.index');
    }

    public function update(Request $request, $id)
    {
        $where = array('id' => $id);
        $updateArr = ['room_status' => $request->input('room_status')];
        $update_room  = Room::where($where)->update($updateArr);

        return redirect()->route('rooms.index');
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $del_room  = Room::where($where)->delete();

        return redirect()->route('rooms.index');
    }
}
