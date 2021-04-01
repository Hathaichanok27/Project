<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirmmediasingle;
use App\Confirmmediagroup;
use App\Reservemeet;
use App\User;

class MybookingController extends Controller
{
    public function index()
    {          
        // $username = session("username");
        // $reservemeets = Reservemeet::select("*")->where("username", "=", $username)->get();
        // $confirmmediagroups = Confirmmediagroup::select("*")->where("username", "=", $username)->get();
        // $confirmmediasingles = Confirmmediasingle::select("*")->where("username", "=", $username)->get();
        
        $reservemeets = Reservemeet::paginate();
        $confirmmediagroups = Confirmmediagroup::paginate();
        $confirmmediasingles = Confirmmediasingle::paginate();
        
        return view('mybookings.index',compact('reservemeets','confirmmediagroups','confirmmediasingles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
