<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers=Answer::All();
        return view('backend.answers.index',compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $answers=Answer::All();
        return view('backend.answers.create',compact('answers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       //dd($request);

       $request->validate([
        "answer1"=>'required',
        "answer2"=>'required',
        "answer3"=>'required',
        "answer4"=>'required',
        "rightanswer"=>'required',
        "question"=>'required'

     ]);
       $answer=new Answer();
       $answer->answer1=$request->answer1;
       $answer->answer2=$request->answer2;
       $answer->answer3=$request->answer3;
       $answer->answer4=$request->answer4;
       $answer->right_answer=$request->rightanswer;


       $answer->question_id = $request->question;
       $answer->save();

       return redirect()->route('answers.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
         $answers=Answer::All();
        return view('backend.answers.show',compact('answers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
         //$answers=Answer::all();
        
        return view('backend.answers.edit',compact('answer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
//dd($request);

       $request->validate([
        "answer1"=>'required',
        "answer2"=>'required',
        "answer3"=>'required',
        "answer4"=>'required',
        "rightanswer"=>'required',
        "question"=>'required'

     ]);
       $answer=new Answer();
       $answer->answer1=$request->answer1;
       $answer->answer2=$request->answer2;
       $answer->answer3=$request->answer3;
       $answer->answer4=$request->answer4;
       $answer->right_answer=$request->rightanswer;


       $answer->question_id = $request->question;
       $answer->save();

       return redirect()->route('answers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
                $answer->delete();
        return redirect()->route('answers.index');
    }
}
 