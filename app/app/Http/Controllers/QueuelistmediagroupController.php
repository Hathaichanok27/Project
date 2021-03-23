<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirmmediagroup;
use App\Roommediagroup;

class QueuelistmediagroupController extends Controller
{
    public function index()
    {
        $confirmmediagroups1 = Confirmmediagroup::select("*")->where("book_status", "=", "รอการอนุมัติ")->get();
        $confirmmediagroups2 = Confirmmediagroup::select("*")->where("book_status", "=", "อนุมัติ")->get();
        $confirmmediagroups3 = Confirmmediagroup::select("*")->where("book_status", "=", "คืนห้อง")->get();
        $confirmmediagroups4 = Confirmmediagroup::select("*")->where("book_status", "=", "ยกเลิกการจอง")->get();
        $count1 = count($confirmmediagroups1);
        $count2 = count($confirmmediagroups2);
        $count3 = count($confirmmediagroups3);
        $count4 = count($confirmmediagroups4);
        $roommediagroups = Roommediagroup::paginate();

        return view('queuelistmediagroups.index',compact(['confirmmediagroups1','confirmmediagroups2','confirmmediagroups3','confirmmediagroups4','count1','count2','count3','count4','roommediagroups']))
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
        $booking  = Confirmmediagroup::where($where)->update($updateArr);
        $booking1  = Roommediagroup::where($where1)->update($updateArr1);
        
        return redirect()->route('queuelistmediagroups.index');
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $del_booking  = Confirmmediagroup::where($where)->delete();
        
        return redirect()->route('queuelistmediagroups.index');
    }
}
