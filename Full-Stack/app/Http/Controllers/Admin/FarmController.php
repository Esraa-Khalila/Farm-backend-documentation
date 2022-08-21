<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Farm;

class FarmController extends Controller
{
   public function index()
    {
        $data = Farm::all();
        return view('admin.admin-dashboard-Farm-agents',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        $request->validate(['name'=>'min:3|required', 'category_image'=>'mimes:jpg,png|image']);
        $Farm= new Farm();
        $Farm->name=$request->name;
          $Farm->description=$request->description;
          $Farm->location=$request->location;
          $Farm->price=$request->price;
          $Farm->day=$request->day;
            $Farm->roomNumber=$request->roomNumber;
        if($request->hasfile('images')){
            $file=$request->file('images');
            $ex=$file->getClientOriginalExtension();
            $filename=time().'.'.$ex;
            $file->move('uploads/Farm',$filename);
            $Farm->images=$filename;
        }
        $Farm->save();
        return redirect() -> route('')->with('flash_message', 'farm Added!');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
        $Farm = Farm::find($id);
        return view('admin.editFarm') -> with('Farms', $Farm);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $Farm = Farm::find($id);
        if($request->hasfile('images')){
            $file=$request->file('images');
            $ex=$file->getClientOriginalExtension();
            $filename=time().'.'.$ex;
            $file->move('uploads/Farm',$filename);
            $Farm->images=$filename;
        }
        $Farm->name=$request->name;
          $Farm->description=$request->description;
          $Farm->location=$request->location;
          $Farm->price=$request->price;
          $Farm->day=$request->day;
            $Farm->roomNumber=$request->roomNumber;
        $category->save();
        return redirect('')->with('flash_message', 'Farm Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($Farm)
    {
        $m = Farm::find($Farm);
        $m->delete();
        return redirect()->back()->with('status', 'farm Deleted Successfully');
    }


}
