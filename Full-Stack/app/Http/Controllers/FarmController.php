<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farm;
use App\Models\Question;
use Illuminate\Support\Facades\Validator;

class FarmController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $location = $request->location;
        if (isset($location)) {

            return Farm::Where('location', $location)->get();
        }
        if (isset($name)) {

           return $farm = Farm::Where('name', $name)->get();
           
        } else {
            $matchThese = ['active' => 'active'];


            //  $farm = Farm::select('farms.*', 'users.name')
            // ->join('users', 'users.id', '=', 'farms.user_id')->get();     
            return $farms = Farm::where($matchThese)->get();
        }
    }

    public function store(Request $request)
    {


        $arr = [];
        $validator = Validator::make(
            $request->all(),
            [
                'images' => 'required',
                'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'name' => 'required',
                'price' => 'required',
                'day' => 'required',
                'time' => 'required',
                'location' => 'required',
                'description' => 'required',
                'phone' => 'required|digits:10',

            ]
        );

        if ($validator->fails()) {
            return response()->json(['validateError' => $validator->errors()]);
        } else {
            // if ($request->hasFile('images')) {
            //     foreach ($request->file('images') as $image) {
            //         $filename = time() . rand(1, 3) . '.' . $image->getClientOriginalExtension();
            //         $image->move('uploads/', $filename);
            //         $arr[] = $filename;
            //     }
            // }

            $Farm = new Farm();
            $Farm->name = $request->name;
            $Farm->description = $request->description;
            $Farm->location = $request->location;
            $Farm->price = $request->price;
            $Farm->day = $request->day;
            $Farm->active = $request->active;
            $Farm->phone = $request->phone;
            $Farm->facebook = $request->facebook;
            $Farm->roomNumber = $request->roomNumber;
            $Farm->user_id = $request->user_id;
            // $Farm->images = json_encode($arr);

            if ($request->file('images')) {
                $file = $request->file('images');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('image'), $filename);
                $Farm['images'] = $filename;
            }
            $Farm->images = $filename;
            $Farm->save();
            return response()->json(['status' => 200, 'message' => 'added successfuly']);
        }
    }
    public  function Show($id)
    {
        $farm = Farm::find($id);
        return $farm;
    }
    public function question(Request $request)
    {
        $question = new Question();
        $question->title = $request->title;
        $question->question = $request->question;
        $question->save();
        return redirect()->back()->with('flash_message', 'question Added!');
    }
    public function update($id, Request $request)
    {
        // return $request->all();
        $farm = Farm::findOrFail($id);

        //    $ad = Ad::findOrFail($id);
        // console.log("controller ads",$ad);
        $farm->name = $request->get('name') ?? $farm->name;
        $farm->description = $request->get('description') ?? $farm->description;
        $farm->space = $request->get('space') ?? $farm->space;
        $farm->location = $request->get('location') ?? $farm->location;
        $farm->phone = $request->get('phone') ?? $farm->phone;
        $farm->day = $request->get('day') ?? $farm->day;
        $farm->time = $request->get('time') ?? $farm->time;
        $farm->active = $request->get('active') ?? $farm->active;

        if ($request->file('images')) {
            $file = $request->file('images');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $farm->image = $filename;
            // return $filename;
        }


        $farm->update();

        return response()->json($farm);
    }
    public function destroy($id)
    {
        $farm = Farm::find($id);
        $farm->delete();
        return response()->json($id);
    }
}
