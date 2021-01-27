<?php

namespace App\Http\Controllers;

use App\Manageadmin;
use Illuminate\Http\Request;

class ManageadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manageadmins = Manageadmin::paginate(5);

        return view('manageadmins.index',compact('manageadmins'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manageadmins.create');
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
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
            'roles' => 'required',
        ]);

        Manageadmin::create($request->all());

        return redirect()->route('manageadmins.index')
                        ->with('success','Manageadmin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manageadmin  $manageadmin
     * @return \Illuminate\Http\Response
     */
    public function show(Manageadmin $manageadmin)
    {
        return view('manageadmins.show',compact('manageadmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manageadmin  $manageadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Manageadmin $manageadmin)
    {
        return view('manageadmins.edit',compact('manageadmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manageadmin  $manageadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manageadmin $manageadmin)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
            'roles' => 'required',
        ]);

        $manageadmin->update($request->all());

        return redirect()->route('manageadmins.index')
                        ->with('success','Manageadmin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manageadmin  $manageadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manageadmin $manageadmin)
    {
        $manageadmin->delete();

        return redirect()->route('manageadmins.index')
                        ->with('success','Manageadmin deleted successfully');
    }
}