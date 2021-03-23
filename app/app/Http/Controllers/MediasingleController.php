<?php

namespace App\Http\Controllers;

use App\Roommediasingle;
use Illuminate\Http\Request;

class MediasingleController extends Controller
{
    public function index()
    {
        $roommediasingles = Roommediasingle::paginate();
        return view('mediasingles.index', compact('roommediasingles'))
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
