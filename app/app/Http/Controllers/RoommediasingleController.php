<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roommediasingle;

class RoommediasingleController extends Controller
{
    public function index()
    {
        $roommediasingles1 = Roommediasingle::select("*")->where("room_status", "=", "ว่าง")->get();
        $roommediasingles2 = Roommediasingle::select("*")->where("room_status", "=", "กำลังใช้งาน")->get();
        $roommediasingles3 = Roommediasingle::select("*")->where("room_status", "=", "ไม่เปิดใช้งาน")->get();
        $count1 = count($roommediasingles1);
        $count2 = count($roommediasingles2);
        $count3 = count($roommediasingles3);
        $roommediasingles = Roommediasingle::paginate();

        return view('roommediasingles.index',compact(['roommediasingles1','roommediasingles2','roommediasingles3','count1','count2','count3','roommediasingles']))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('roommediasingles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_type' => 'required',
            'room_floor' => 'required',
            'room_name' => 'required',
            'room_status' => 'required',
        ]);
        
        Roommediasingle::create($request->all());
        
        return redirect()->route('roommediasingles.index');
    }

    public function update(Request $request, $id)
    {
        $where = array('id' => $id);
        $updateArr = ['room_status' => $request->input('room_status')];
        $update_room  = Roommediasingle::where($where)->update($updateArr);

        return redirect()->route('roommediasingles.index');
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $del_room  = Roommediasingle::where($where)->delete();

        return redirect()->route('roommediasingles.index');
    }
}
