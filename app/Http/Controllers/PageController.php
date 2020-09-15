<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Knowledge;

class PageController extends Controller
{
    public function mainfun($value='')
     {
     	$knowledges=Knowledge::all();
     	return view('frontend.main',compact('knowledges'));
     }
}

