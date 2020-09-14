<?php

namespace App\Http\Controllers;

use App\Question;
use App\Title;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $questions=Question::all();
        
        return view('backend.questions.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$questions=Question::all();
        $titles=Title::All();
        return view('backend.questions.create',compact('titles'));
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
        "name"=>'required'
     ]);
       $question=new Question();
       $question->name=$request->name;
       
       $question->title_id = $request->title;
       $question->save();

       return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $questions=Question::all();
        
        return view('backend.questions.edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
       $request->validate([
        
        "name"=>'required']);
//data update
        
        $question->name = $request->name;
        
        $question->title_id = $request->title;

        $question ->save();
        //redirect
             return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('questions.index');
    }
}





// <?php

// namespace App\Http\Controllers;

// use App\Knowledge;
// use Illuminate\Http\Request;

// class KnowledgeController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//      return view('backend.knowledges.index');
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//              return view('backend.knowledges.create');

//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         $request->validate([
        
//         "name"=>'required',
//         "photo"=>'required',
//         "description"=>'required'

        
//          //inputname
//         ]);
//                 $imageName = time().'.'.$request->photo->extension();

//         $request->photo->move(public_path('backend/knowledgeimg'),$imageName);

//         $path = 'backend/knowledgeimg/'.$imageName;
//         $knowledge=new Knowledge();
//         //$item->colname=$request->inputname
        
//         $knowledge->name = $request->name;
//         $knowledge->photo = $path;
//         $knowledge->description = $request->description;

       
        

//         $knowledge ->save();

//         //redirect
//         return redirect()->route('knowledges.index');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Knowledge  $knowledge
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Knowledge $knowledge)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Knowledge  $knowledge
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Knowledge $knowledge)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Knowledge  $knowledge
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Knowledge $knowledge)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Knowledge  $knowledge
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Knowledge $knowledge)
//     {
//         //
//     }
// }
