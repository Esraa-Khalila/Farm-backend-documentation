<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {

        $matchThese = ['active' => 'active'];    
        return $Feedback = Feedback::where($matchThese)->get();
    }
}
