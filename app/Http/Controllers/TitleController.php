<?php

namespace App\Http\Controllers;

use App\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$titles=Title::All();
        return view('backend.titles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.titles.create');
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
        //Validation
        $request->validate([
        
        "name"=>'required'
        
         //inputname
        ]);
        $title=new Title();
        //$item->colname=$request->inputname
        
        $title->name = $request->name;
       
        

        $title ->save();
        //redirect
        return redirect()->route('titles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $title)
    {
        $titles=Title::all();
        return view('backend.titles.edit',compact('titles','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Title $title)
    {
        $request->validate([
        
        "name"=>'required']);
        
        
        $title->name = $request->name;
       

        $title ->save();
        //redirect
             return redirect()->route('titles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Title $title)
    {
        $title->delete();
        return redirect()->route('titles.index');
    }
 }
