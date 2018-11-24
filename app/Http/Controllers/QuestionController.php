<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function index()
    {


        $questions=Question::all();
        

        return View('questions/index')->with('allquestion',$questions);
    }
    public function create()
    {
        

        return View('questions/create');
    }
    public function store()
    {
        

        $question=new Question();
        $question->Title=request('title');
        $question->Description=request('description');
        $question->Tags=request('tags');
        $question->save();

        return redirect('/index');
    }
}
