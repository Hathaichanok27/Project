<?php

namespace App\Http\Controllers;

use App\Confirmmediagroup;
use Illuminate\Http\Request;

class QueuelistmediagroupController extends Controller
{
    public function index()
    {
        $confirmmediagroups = Confirmmediagroup::paginate();
        
        return view('queuelistmediagroups.index',compact('confirmmediagroups'))
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
