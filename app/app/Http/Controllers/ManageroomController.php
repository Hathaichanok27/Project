<?php

namespace App\Http\Controllers;

use App\Manageroom;
use Illuminate\Http\Request;

class ManageroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managerooms = Manageroom::paginate(5);

        return view('managerooms.index', compact('managerooms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('managerooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'capacity' => 'required',
            'email_admin'  => 'required',
        ]);

        Manageroom::create($request->all());

        return redirect()->route('managerooms.index')
                        ->with('success','Manageroom created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manageroom  $manageroom
     * @return \Illuminate\Http\Response
     */
    public function show(Manageroom $manageroom)
    {
        return view('managerooms.show',compact('manageroom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manageroom  $manageroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Manageroom $manageroom)
    {
        return view('managerooms.edit',compact('manageroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manageroom  $manageroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manageroom $manageroom)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'capacity' => 'required',
            'email_admin'  => 'required',
        ]);

        $manageroom->update($request->all());

        return redirect()->route('managerooms.index')
                        ->with('success','Manageroom updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manageroom  $manageroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manageroom $manageroom)
    {
        $manageroom->delete();

        return redirect()->route('managerooms.index')
                        ->with('success','Manageroom deleted successfully');
    }
}