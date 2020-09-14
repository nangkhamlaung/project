<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     	
     	return view('frontend.title');
     }
     
}
