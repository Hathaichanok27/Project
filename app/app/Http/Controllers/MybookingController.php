<?php

namespace App\Http\Controllers;

use App\Confirmmediasingle;
use App\Confirmmediagroup;
use App\Reservemeet;
use Illuminate\Http\Request;

class MybookingController extends Controller
{
    public function index()
    {
        $confirmmediasingles = Confirmmediasingle::paginate();
        $confirmmediagroups = Confirmmediagroup::paginate();
        $reservemeets = Reservemeet::paginate();
        
        return view('mybookings.index',compact('confirmmediasingles','confirmmediagroups','reservemeets'))
            ->with('i', request());
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
