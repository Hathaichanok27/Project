<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roommediagroup;

class RoommediagroupController extends Controller
{
    public function index()
    {
        $roommediagroups1 = Roommediagroup::select("*")->where("room_status", "=", "ว่าง")->get();
        $roommediagroups2 = Roommediagroup::select("*")->where("room_status", "=", "กำลังใช้งาน")->get();
        $roommediagroups3 = Roommediagroup::select("*")->where("room_status", "=", "ไม่เปิดใช้งาน")->get();
        $count1 = count($roommediagroups1);
        $count2 = count($roommediagroups2);
        $count3 = count($roommediagroups3);
        $roommediagroups = Roommediagroup::paginate();

        return view('roommediagroups.index',compact(['roommediagroups1','roommediagroups2','roommediagroups3','count1','count2','count3','roommediagroups']))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('roommediagroups.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_type' => 'required',
            'room_floor' => 'required',
            'room_name' => 'required',
            'room_status' => 'required',
        ]);
        
        Roommediagroup::create($request->all());
        
        return redirect()->route('roommediagroups.index');
    }

    public function update(Request $request, $id)
    {
        $where = array('id' => $id);
        $updateArr = ['room_status' => $request->input('room_status')];
        $update_room  = Roommediagroup::where($where)->update($updateArr);

        return redirect()->route('roommediagroups.index');
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $del_room  = Roommediagroup::where($where)->delete();

        return redirect()->route('roommediagroups.index');
    }
}
