<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');   
// });
// Route::get ('/testing',function($value=''){
// 	return 'This is a testing page!';
// });

Route::get('/','PageController@mainfun')->name('mainpage'); //nang haung nwan

Route::get('dashboard','BackendTemplateController@dashboardfun')->name('dashboardpage'); 

// Route::get ('/test',function($value=''){
// 	return 'This is a test page!';
// });




//Nang Kham Laung
Route::resource('questions','QuestionController');
Route::resource('titles','TitleController');


Route::resource('answers','AnswerController');

