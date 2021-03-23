<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirmmediasingle;
use App\Confirmmediagroup;
use App\Reservemeet;

class MybookingController extends Controller
{
    public function index()
    {            
        $reservemeets = Reservemeet::paginate();
        $confirmmediagroups = Confirmmediagroup::paginate();
        $confirmmediasingles = Confirmmediasingle::paginate();
        
        return view('mybookings.index',compact('reservemeets','confirmmediagroups','confirmmediasingles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
