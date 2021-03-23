<?php

namespace App\Http\Controllers;

use App\Confirmmediasingle;
use App\Roommediasingle;
use Illuminate\Http\Request;

class QueuelistmediasingleController extends Controller
{
    public function index()
    {
        $confirmmediasingles1 = Confirmmediasingle::select("*")->where("book_status", "=", "รอการอนุมัติ")->get();
        $confirmmediasingles2 = Confirmmediasingle::select("*")->where("book_status", "=", "อนุมัติ")->get();
        $confirmmediasingles3 = Confirmmediasingle::select("*")->where("book_status", "=", "คืนห้อง")->get();
        $confirmmediasingles4 = Confirmmediasingle::select("*")->where("book_status", "=", "ยกเลิกการจอง")->get();
        $count1 = count($confirmmediasingles1);
        $count2 = count($confirmmediasingles2);
        $count3 = count($confirmmediasingles3);
        $count4 = count($confirmmediasingles4);
        $roommediasingles = Roommediasingle::paginate();

        return view('queuelistmediasingles.index',compact(['count1','count2','count3','count4','confirmmediasingles1','confirmmediasingles2','confirmmediasingles3','confirmmediasingles4','roommediasingles']))
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
        $updateArr1 = [
                        'room_status_name'  => $request->input('room_status_name'),
                     ];
        $booking  = Confirmmediasingle::where($where)->update($updateArr);
        $booking  = Roommediasingle::where($where)->update($updateArr1);

        return redirect()->route('queuelistmediasingles.index');
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $del_booking  = Confirmmediasingle::where($where)->delete();
        return redirect()->route('queuelistmediasingles.index');
    }
}
