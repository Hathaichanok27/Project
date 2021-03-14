<?php

namespace App\Http\Controllers;

use App\Confirmmediagroup;
use Illuminate\Http\Request;

class ConfirmmediagroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confirmmediagroups = Confirmmediagroup::paginate(5);

        return view('confirmmediagroups.index',compact('confirmmediagroups'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('confirmmediagroups.create');
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
            'username' => 'required',
            'user_fullname' => 'required',
            'user_telnum' => 'required',
            'room_type' => 'required',
            'room_floor' => 'required',
            'book_status' => 'required',
        ]);
        Confirmmediagroup::create($request->all());
        return redirect()->route('mybookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Confirmmediagroup  $confirmmediagroup
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('confirmmediagroup.show',compact('confirmmediagroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $confirmmediagroups = Confirmmediagroup::find($id);
        $confirmmediagroups->delete();

        return redirect('/queuelistmediagroups/')->with('success','Data Deleted');
    }
}
