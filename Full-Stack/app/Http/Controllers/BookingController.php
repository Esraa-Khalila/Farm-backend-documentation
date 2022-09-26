<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function store(Request $request)
    {


        $arr = [];
        $validator = Validator::make(
            $request->all(),
            [
                'phone' => 'required',
              
                'address' => 'required',
            
         
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

            $book = new Booking();
            $book->phone = $request->phone;
            $book->address = $request->address;
          
            $book->user_id = $request->user_id;
            // $Farm->images = json_encode($arr);
;
            return $book->save();
            return response()->json(['status' => 200, 'message' => 'added successfuly']);
        }
    }
}
