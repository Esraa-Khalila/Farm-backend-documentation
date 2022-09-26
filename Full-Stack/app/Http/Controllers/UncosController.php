<?php

namespace App\Http\Controllers;
use App\Models\Uncos;
use Illuminate\Http\Request;

class UncosController extends Controller
{
  public function index(){
   return   $uncoss = Uncos::all();
  }
  public function destroy($id)
  {
    $Uncos = Uncos::find($id);
    $Uncos->delete();
    return response()->json($id);
  }
  public function question(Request $request)
  {
    $Uncos = new Uncos();
    $Uncos->uncos = $request->uncos;
    $Uncos->by = $request->by;
    $Uncos->save();
 
  }
  public function show(Request $request)
  {
    $Uncos = new Uncos();
    $Uncos->uncos = $request->uncos;
    $Uncos->by = $request->by;
    $Uncos->save();
  }
}
