<?php

namespace App\Http\Controllers;

use App\Reservemeet;
use Illuminate\Http\Request;

class QueuelistmeetingController extends Controller
{
    public function index()
    {
        $reservemeets = Reservemeet::paginate();
        
        return view('queuelistmeetings.index',compact('reservemeets'))
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
