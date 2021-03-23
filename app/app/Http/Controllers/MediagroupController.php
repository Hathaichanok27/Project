<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roommediagroup;

class MediagroupController extends Controller
{
    public function index()
    {
        $roommediagroups = Roommediagroup::paginate();
        
        return view('mediagroups.index', compact('roommediagroups'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
