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
            
            $data = Reservemeet::whereDate('book_starttime', '>=', $start)->whereDate('book_date',   '<=', $end)->get(['id','book_date as title','book_starttime as start', 'book_date as end']);
            
            return Response::json($data);
            print_r($data);
        }

        return view('roommeetings');
    }

    public function create(Request $request)
    {  
        $insertArr = [ 'title' => $request->title,
                       'start' => $request->start,
                       'end' => $request->end
                     ];
        $event = Events::insert($insertArr);   
        
        return Response::json($event);
    }

    public function update(Request $request)
    {   
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Events::where($where)->update($updateArr);
        
        return Response::json($event);
    } 
 
    public function destroy(Request $request)
    {
        $event = Events::where('id',$request->id)->delete();
        
        return Response::json($event);
    }    
}
