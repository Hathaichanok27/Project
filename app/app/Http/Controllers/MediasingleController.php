<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class MediasingleController extends Controller
{
    public function index()
    {
        // $rooms = Room::paginate();
        // return view('mediasingles.index', compact('rooms'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);

        $rooms = Room::select("*")
                    ->where("room_type", "=", "ห้องสื่อศึกษาเดี่ยว")
                    ->get();
        return view('mediasingles.index', ['rooms' => $rooms])
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
