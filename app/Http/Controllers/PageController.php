<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function mainfun($value='')
     {

     	return view('frontend.main');
     }
}
