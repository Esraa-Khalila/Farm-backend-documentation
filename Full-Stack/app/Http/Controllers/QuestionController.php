<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
  public function index()
  {
    return $questions = Question::limit(3)->get();
  }
  public function store(Request $request)
  {

    $request->validate([]);
    $question = new Question();
    $question->title = $request->title;
    $question->question = $request->question;
    $question->user_id = $request->user_id;
    return $question->save();

  }
}
