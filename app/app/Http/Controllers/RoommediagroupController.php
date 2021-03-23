<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roommediagroup;

class RoommediagroupController extends Controller
{
    public function index()
    {
        $roommediagroups = Roommediagroup::paginate(10);
        
        return view('roommediagroups.index', compact('roommediagroups'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
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
        
        return redirect()->route('roommediagroups.index')
                        ->with('success','Created room successfully.');
    }

    public function show(Roommediagroup $roommediagroup)
    {
        return view('roommediagroups.show',compact('roommediagroup'));
    }

    public function edit(Roommediagroup $roommediagroup)
    {
        return view('roommediagroups.edit',compact('roommediagroup'));
    }

    public function update(Request $request, Roommediagroup $roommediagroup)
    {
        $request->validate([
            'room_type' => 'required',
            'room_floor' => 'required',
            'room_name' => 'required',
            'room_status' => 'required',
        ]);

        $roommediagroup->update($request->all());
        
        return redirect()->route('roommediagroups.index')
                        ->with('success','Update room successfully');
    }

    public function destroy(Roommediagroup $roommediagroup)
    {
        $roommediagroup->delete();
        
        return redirect()->route('roommediagroups.index')
                        ->with('success','Deleted room successfully');
    }
}
