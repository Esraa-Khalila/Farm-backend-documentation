<?php

namespace App\Http\Controllers;
use App\Models\Farm;
use Illuminate\Http\Request;

class FarmShowController extends Controller
{
          public function index()
    {
        $matchThese = ['active' => 'active'];


        //  $farm = Farm::select('farms.*', 'users.name')
        // ->join('users', 'users.id', '=', 'farms.user_id')->get();     
           $farms = Farm::where($matchThese)->get();
         return view('farm-list',compact('farms'));
        
    }

    public function show($id)
    {
          $farm = Farm::find($id);
         return view('farm-single',compact('farm'));
        
    }
}
