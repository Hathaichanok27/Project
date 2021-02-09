<?php

namespace App\Http\Controllers;

use App\Managemeetroom;
use Illuminate\Http\Request;

class ManagemeetroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managemeetrooms = Managemeetroom::paginate(5);

        return view('managemeetrooms.index', compact('managemeetrooms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('managemeetrooms.create');
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

        Managemeetroom::create($request->all());

        return redirect()->route('managemeetrooms.index')
                        ->with('success','Managemeetroom created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Managemeetroom $managemeetroom)
    {
        return view('managemeetrooms.show',compact('managemeetroom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Managemeetroom $managemeetroom)
    {
        return view('managemeetrooms.edit',compact('managemeetroom'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Managemeetroom $managemeetroom)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'capacity' => 'required',
            'email_admin'  => 'required',
        ]);

        $managemeetroom->update($request->all());

        return redirect()->route('managemeetrooms.index')
                        ->with('success','Managemeetroom updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Managemeetroom $managemeetroom)
    {
        $managemeetroom->delete();

        return redirect()->route('managemeetrooms.index')
                        ->with('success','Managemeetroom deleted successfully');
    }
}
