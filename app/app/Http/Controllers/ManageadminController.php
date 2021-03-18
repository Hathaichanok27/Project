<?php

namespace App\Http\Controllers;

use App\Manageadmin;
use Illuminate\Http\Request;

class ManageadminController extends Controller
{
    public function index()
    {
        $manageadmins = Manageadmin::paginate();
        return view('manageadmins.index',compact('manageadmins'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('manageadmins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);

        Manageadmin::create($request->all());
        return redirect()->route('manageadmins.index')
                        ->with('success','Created admin successfully.');
    }

    public function show(Manageadmin $manageadmin)
    {
        return view('manageadmins.show',compact('manageadmin'));
    }

    public function edit(Manageadmin $manageadmin)
    {
        return view('manageadmins.edit',compact('manageadmin'));
    }

    public function update(Request $request, Manageadmin $manageadmin)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);

        $manageadmin->update($request->all());

        return redirect()->route('manageadmins.index')
                        ->with('success','Updated admin successfully');
    }

    public function destroy(Manageadmin $manageadmin)
    {
        $manageadmin->delete();
        return redirect()->route('manageadmins.index')
                        ->with('success','Deleted admin successfully');
    }
}