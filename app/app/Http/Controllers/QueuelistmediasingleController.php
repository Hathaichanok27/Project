<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirmmediasingle;
use App\Roommediasingle;

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

        return view('queuelistmediasingles.index',compact(['confirmmediasingles1','confirmmediasingles2','confirmmediasingles3','confirmmediasingles4','count1','count2','count3','count4','roommediasingles']))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function update(Request $request, $id)
    {
        $where = array('id' => $id);
        $where1 = array('room_name' => $request->input('room_name'));
        $updateArr = [
                        'room_name' => $request->input('room_name'),
                        'book_status' => $request->input('book_status'),
                        'book_starttime' => $request->input('book_starttime'),
                        'book_endtime' => $request->input('book_endtime'),
                     ];
        $updateArr1 = [
                        'room_status'  => $request->input('room_status'),
                     ];
        $booking  = Confirmmediasingle::where($where)->update($updateArr);
        $booking1  = Roommediasingle::where($where1)->update($updateArr1);

        return redirect()->route('queuelistmediasingles.index');
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $del_booking  = Confirmmediasingle::where($where)->delete();

        return redirect()->route('queuelistmediasingles.index');
    }
}
