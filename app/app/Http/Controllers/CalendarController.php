<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservemeet;
use Redirect,Response;

class CalendarController extends Controller
{
    public function index()
    {
        if(request()->ajax()) 
        {
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

            $data = Reservemeet::selectRaw('CONCAT(room_name, " - ", username) as title, id,book_starttime as start,book_endtime as end')
                    ->whereDate('book_starttime','>=',$start)->whereDate('book_endtime','<=',$end)
                    ->get(['id',"title",'start', 'end']);
            
            return Response::json($data);
            print_r($data);
        }
        return view('roommeetings');
    }
}
