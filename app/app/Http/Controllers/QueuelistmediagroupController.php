<?php

namespace App\Http\Controllers;

// use App\Confirmmediagroup;
use App\queuelistmediagroup;
use Illuminate\Http\Request;

class QueuelistmediagroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $confirmmediagroups = Confirmmediagroup::paginate(5);
        
        // return view('queuelistmediagroups.index',compact('confirmmediagroups'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);

        $queuelistmediagroups = Queuelistmediagroup::paginate(5);
        
        return view('queuelistmediagroups.index',compact('queuelistmediagroups'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'book_createtime' => 'required',
        ]);

        Room::create($request->all());

        return redirect()->route('queuelistmediagroups.index')
                        ->with('success','Created booking successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\queuelistmediagroup $queuelistmediagroup
     * @return \Illuminate\Http\Response
     */
    public function show(Queuelistmediagroup $queuelistmediagroup)
    {
        return view('queuelistmediagroups.show',compact('queuelistmediagroup'));
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
        //
    }
}
