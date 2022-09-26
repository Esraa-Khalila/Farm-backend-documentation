<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;



class ActivityController extends Controller
{
    public function index()
    {
        return $activities = Activity::all();
    }

    public function store(Request $request)
    {

        $request->validate(['name' => 'min:3|required', 'images' => 'mimes:jpg,png|image']);
        $Farm = new Activity();
        $Farm->name = $request->name;
        $Farm->description = $request->description;
        $Farm->location = $request->location;
        $Farm->price = $request->price;
        $Farm->day = $request->day;
        $Farm->roomNumber = $request->roomNumber;
        $Farm->user_id = $request->user_id;
        if ($request->hasfile('images')) {
            $file = $request->file('images');
            $ex = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ex;
            $file->move('uploads/Farm', $filename);
            $Farm->images = $filename;
        }
        $Farm->save();
        return redirect()->route('add')->with('flash_message', 'farm Added!');
    }

}
