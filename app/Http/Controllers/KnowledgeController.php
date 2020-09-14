<?php

namespace App\Http\Controllers;

use App\Knowledge;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knowledges=Knowledge::all();
        
        return view('backend.knowledges.index',compact('knowledges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.knowledges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
       $request->validate([
        "name"=>'required',
        "photo"=>'required',
        "description"=>'required'
     ]);
       //dd($request);
       $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/knowledgeimg'),$imageName);
        $path='backend/knowledgeimg/'.$imageName;
        //dd($path);
       $knowledge=new Knowledge;
       //dd($knowledge);
       $knowledge->name=$request->name;
       $knowledge->photo =$path;
       $knowledge->description=$request->description;
       $knowledge->save();

       return redirect()->route('knowledges.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Knowledge  $knowledge
     * @return \Illuminate\Http\Response
     */
    public function show(Knowledge $knowledge)
    {
        $knowledges=Knowledge::all();
        
        return view('backend.knowledges.show',compact('knowledges','knowledge'));
       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Knowledge  $knowledge
     * @return \Illuminate\Http\Response
     */
    public function edit(Knowledge $knowledge)
    {
        $knowledges=Knowledge::all();
        
        return view('backend.knowledges.edit',compact('knowledge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Knowledge  $knowledge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Knowledge $knowledge)
    {
        //dd($request);
        //Validation
        $request->validate([
            "name" => 'required',
            "description" => 'required',
            "photo" => 'sometimes',
            "oldphoto" => 'required'

        ]);
        //If include file,upload file
        if($request->hasFile('photo')){
             $imageName = time().'.'.$request->photo->extension();
             $request->photo->move(public_path('backend/knowledgeimg'),$imageName);

        $path='backend/knowledgeimg/'.$imageName;

        }else{
            $path=$request->oldphoto;

        }
        $knowledge->name=$request->name;
        $knowledge->photo=$path;
        $knowledge->description=$request->description;
        $knowledge->save();

        //data insert
        //redirect
        return redirect()->route('knowledges.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Knowledge  $knowledge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Knowledge $knowledge)
    {
        $knowledge->delete();
        return redirect()->route('knowledges.index');
    }
}
