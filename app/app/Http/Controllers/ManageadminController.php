<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manageadmin;

class ManageadminController extends Controller
{
    public function index()
    {
        $manageadmins = Manageadmin::paginate();
        $count = count($manageadmins);
        
        return view('manageadmins.index',compact(['manageadmins','count']))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('manageadmins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'admin_username' => 'required',
            'admin_fullname' => 'required',
            'admin_email' => 'required|email',
            'admin_telnum' => 'required',
        ]);

        Manageadmin::create($request->all());
        
        return redirect()->route('manageadmins.index');
    }

    public function update(Request $request, $id)
    {
        $where = array('id' => $id);
        $updateArr = [
                        'admin_fullname' => $request->input('admin_fullname'),
                        'admin_email' => $request->input('admin_email'),
                        'admin_telnum' => $request->input('admin_telnum'),
                     ];
        $update_admin  = Manageadmin::where($where)->update($updateArr);

        return redirect()->route('manageadmins.index');
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $del_admin  = Manageadmin::where($where)->delete();

        return redirect()->route('manageadmins.index');
    }

}