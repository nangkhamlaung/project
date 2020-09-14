<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Knowledge;

=======
use App\Title;
use App\Question;
use App\Answer;
>>>>>>> 9d46e2411de019cbbb94d7ae54026287a28b78f9
class PageController extends Controller
{
    public function mainfun($value='')
     {
<<<<<<< HEAD
     	$knowledges=Knowledge::all();
     	return view('frontend.main',compact('knowledges'));
=======
     	
     	return view('frontend.main');
>>>>>>> 9d46e2411de019cbbb94d7ae54026287a28b78f9
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

