<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class MediagroupController extends Controller
{
    public function index()
    {
        // $rooms = Room::paginate();
        // return view('mediagroups.index', compact('rooms'))
        //         ->with('i', (request()->input('page', 1) - 1) * 5);

        $rooms = Room::select("*")
                    ->where("room_floor", "=", "ชั้น 6 - ห้องสื่อศึกษากลุ่ม")
                    ->get();
        return view('mediagroups.index', ['rooms' => $rooms])
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
        //
    }

    public function destroy($id)
    {
        //
    }
}
