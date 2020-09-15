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
Route::get('login','PageController@loginfun')->name('loginpage');

Route::get('register','PageController@registerfun')->name('registerpage');

Route::get('title','PageController@titlefun')->name('titlepage');
Route::get('question/{id}','PageController@questionfun')->name('questionpage');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Honey Zue
Route::resource('answers','AnswerController');

//Nang Haung nwan
Route::resource('knowledges','KnowledgeController');









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
