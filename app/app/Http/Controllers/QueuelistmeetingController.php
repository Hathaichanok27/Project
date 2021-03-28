<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservemeet;
use App\Room;

class QueuelistmeetingController extends Controller
{
    public function index()
    {
        $reservemeets1 = Reservemeet::select("*")->where("book_status", "=", "รอการอนุมัติ")->get();
        $reservemeets2 = Reservemeet::select("*")->where("book_status", "=", "อนุมัติ")->get();
        $reservemeets3 = Reservemeet::select("*")->where("book_status", "=", "คืนห้อง")->get();
        $reservemeets4 = Reservemeet::select("*")->where("book_status", "=", "ยกเลิกการจอง")->get();
        $count1 = count($reservemeets1);
        $count2 = count($reservemeets2);
        $count3 = count($reservemeets3);
        $count4 = count($reservemeets4);
        // $rooms = Room::paginate();

        return view('queuelistmeetings.index',compact(['reservemeets1','reservemeets2','reservemeets3','reservemeets4',
                                                            'count1','count2','count3','count4']))
                ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    public function update(Request $request, $id)
    {
        $where = array('id' => $id);
        // $where1 = array('room_name' => $request->input('room_name'));
        $updateArr = [
                       'book_status' => $request->input('book_status')
                     ];
        // $updateArr1 = [
        //                 'room_status'  => $request->input('room_status'),
        //              ];
        $booking  = Reservemeet::where($where)->update($updateArr);
        // $booking1  = Room::where($where1)->update($updateArr1);
        
        return redirect()->route('queuelistmeetings.index');
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $del_booking  = Reservemeet::where($where)->delete();
        
        return redirect()->route('queuelistmeetings.index');
    }
}
