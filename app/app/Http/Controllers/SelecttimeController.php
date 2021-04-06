<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservemeet;


class SelecttimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reservemeets = Reservemeet::select("*")->where("room_name", "=",$request->name)->whereDate("book_startdate", "like", date('Y-m-d',strtotime($request->date)))->get()->toArray();
        $start = $request->date;
        $timestart = Array_column($reservemeets,"book_starttime");
        $timeend = Array_column($reservemeets,"book_endtime");
      // print_r($request->name);
        //print_r($timestart);
        //print_r($timeend);
        /* echo "<pre>";
        print_r($reservemeets);
        echo "</pre>";*/
        return view('selecttimes.index',compact('reservemeets','timestart','timeend','start'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
