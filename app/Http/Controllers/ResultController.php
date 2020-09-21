<?php

namespace App\Http\Controllers;
use App\Title;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function __construct($value='')
    {
        $this->middleware('role:Admin')->only('index','show');
        $this->middleware('role:Customer')->only('store');
    }
    // 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $date1 = $request->sdate;
        // $date2 = $request->edate;

        // if ($request->sdate && $request->edate) {
        //     $orders = Order::whereBetween('orderdate', [new Carbon($date1), new Carbon($date2)])->where('status',0)->get();
        // }else{
        //     $results = Result::all();
        // }

    
        
        // dd($items);
        $results=Result::all();
       return view('backend.results.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        
       $title=$request->title;
       $result=$request->result;
       // dd($title);
       //dd($result);
    
     

        
        $results=new Result;
        $results->user_id=Auth::id();//auth id(1 =users table)
        $results->title_id=$title;
        $results->total=$result;
      
        $results->save();//only saved into order table

        //save into order_detail
        
        return 'Successful!';
    }






    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
       return view('backend.results.show',compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
