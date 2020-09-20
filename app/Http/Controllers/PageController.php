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
        

        $questions=Question::all();
        // $question=Question::find('id');


     	return view('frontend.title',compact('titles','questions'));
     }
      public function questionfun($id)
     {
        //dd($id);

         $title=Title::find($id);
         //dd($title);
         $answers=Answer::all();
       $questions=Question::all();
        return view('frontend.question',compact('title','questions','answers'));
     }
     public function contactfun($value='')
    {


        return view('frontend.contact');
    }
     
}

