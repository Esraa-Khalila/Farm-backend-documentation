<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farm;
class FarmController extends Controller
{
        public function index()
    {
        $matchThese = ['active' => 'active'];


        //  $farm = Farm::select('farms.*', 'users.name')
        // ->join('users', 'users.id', '=', 'farms.user_id')->get();     
        // $farms = Farm::where($matchThese)->get();
        $farms = Farm::all();
         return view('index',compact('farms'));
        
    }

    public function store(Request $request)
    {
  
        $request->validate(['name'=>'min:3|required', 'images'=>'mimes:jpg,png|image']);
        $Farm= new Farm();
        $Farm->name=$request->name;
          $Farm->description=$request->description;
          $Farm->location=$request->location;
          $Farm->price=$request->price;
          $Farm->day=$request->day;
            $Farm->roomNumber=$request->roomNumber;
            $Farm->user_id= $request->user_id;
        if($request->hasfile('images')){
            $file=$request->file('images');
            $ex=$file->getClientOriginalExtension();
            $filename=time().'.'.$ex;
            $file->move('uploads/Farm',$filename);
            $Farm->images=$filename;
        }
        $Farm->save();
        return redirect() -> route('add')->with('flash_message', 'farm Added!');
    

    }
}
