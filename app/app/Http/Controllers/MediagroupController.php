<?php

namespace App\Http\Controllers;

use App\Roommediagroup;
use Illuminate\Http\Request;

class MediagroupController extends Controller
{
    public function index()
    {
        $roommediagroups = Roommediagroup::paginate();
        return view('mediagroups.index', compact('roommediagroups'))
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
