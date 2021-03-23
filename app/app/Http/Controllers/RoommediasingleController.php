<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roommediasingle;

class RoommediasingleController extends Controller
{
    public function index()
    {
        $roommediasingles = Roommediasingle::paginate(10);
        
        return view('roommediasingles.index', compact('roommediasingles'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
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
        
        return redirect()->route('roommediasingles.index')
                        ->with('success','Created room successfully.');
    }

    public function show(Roommediasingle $roommediasingle)
    {
        return view('roommediasingles.show',compact('roommediasingle'));
    }

    public function edit(Roommediasingle $roommediasingle)
    {
        return view('roommediasingles.edit',compact('roommediasingle'));
    }

    public function update(Request $request, Roommediasingle $roommediasingle)
    {
        $request->validate([
            'room_type' => 'required',
            'room_floor' => 'required',
            'room_name' => 'required',
            'room_status' => 'required',
        ]);

        $roommediasingle->update($request->all());
        
        return redirect()->route('roommediasingles.index')
                        ->with('success','Update room successfully');
    }

    public function destroy(Roommediasingle $roommediasingle)
    {
        $roommediasingle->delete();
        
        return redirect()->route('roommediasingles.index')
                        ->with('success','Deleted room successfully');
    }
}
