<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Knowledge;

use App\Title;
use App\Question;
use App\Answer;

class PageController extends Controller
{
    public function mainfun($value='')
     {

     	$knowledges=Knowledge::all();
     	return view('frontend.main',compact('knowledges'));

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

