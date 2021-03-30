<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservemeet;


class QueuelistmeetingController extends Controller
{
    public function index()
    {
        $reservemeets = Reservemeet::paginate();
        
        return view('queuelistmeetings.index',compact('reservemeets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function update(Request $request, $id)
    {
        $where = array('id' => $id);
        $updateArr = ['book_status' => $request->input('book_status'),];
        $booking  = Reservemeet::where($where)->update($updateArr);
        
        return redirect()->route('queuelistmeetings.index');
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $del_booking  = Reservemeet::where($where)->delete();
        
        return redirect()->route('queuelistmeetings.index');
    }
}
