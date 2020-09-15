<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use App\Question;
use App\Answer;
class PageController extends Controller
{
    public function mainfun($value='')
     {
     	
     	return view('frontend.main');
     }
     public function loginfun($value='')
    {
        

    	return view('frontend.login');
    }
    public function registerfun($value='')
    {
         

    	return view('frontend.register');
    }
    public function titlefun($value='')
     {
        $titles=Title::all();
     	return view('frontend.title',compact('titles'));
     }
      public function questionfun($value='')
     {
        $questions=Question::all();
        $answers=Answer::all();
        return view('frontend.question',compact(
            'questions','answers'));
     }
     
}
