<?php

namespace App\Http\Controllers;

use App\Confirmmediagroup;
use App\Room;
use Illuminate\Http\Request;

class QueuelistmediagroupController extends Controller
{
    public function index()
    {
        $confirmmediagroups1 = Confirmmediagroup::select("*")->where("book_status", "=", "รอการอนุมัติ")->get();
        $confirmmediagroups2 = Confirmmediagroup::select("*")->where("book_status", "=", "อนุมัติ")->get();
        $confirmmediagroups3 = Confirmmediagroup::select("*")->where("book_status", "=", "ยกเลิกการจอง")->get();
        $confirmmediagroups4 = Confirmmediagroup::select("*")->where("book_status", "=", "คืนห้อง")->get();
        $count1 = count($confirmmediagroups1);
        $count2 = count($confirmmediagroups2);
        $count3 = count($confirmmediagroups3);
        $count4 = count($confirmmediagroups4);
        $rooms = Room::select("*")->where("room_type", "=", "ห้องสื่อศึกษากลุ่ม")->get();

        return view('queuelistmediagroups.index',compact(['count1','count2','count3','count4','confirmmediagroups1','confirmmediagroups2','confirmmediagroups3','confirmmediagroups4','rooms']))
        ->with('i', (request()->input('page', 1) - 1) * 5);   
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        print_r($request->input());
        print_r($id);
        $where = array('id' => $id);
        $updateArr = [
                        'room_name' => $request->input('room_name'),
                        'book_status' => $request->input('book_status'),
                        'book_starttime' => $request->input('book_starttime'),
                        'book_endtime' => $request->input('book_endtime'),
                     ];
        $booking  = Confirmmediagroup::where($where)->update($updateArr);
        return redirect()->route('queuelistmediagroups.index');
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $del_booking  = Confirmmediagroup::where($where)->delete();
        return redirect()->route('queuelistmediagroups.index');
    }
}
