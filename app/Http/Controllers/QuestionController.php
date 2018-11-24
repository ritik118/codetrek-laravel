<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function retrieve()
    {


        $questions=Question::all();
        

        return View('question')->with('allquestion',$questions);
    }
}
