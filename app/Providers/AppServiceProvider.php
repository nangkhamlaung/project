<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Title;
use App\Question;
 use App\Answer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       schema::defaultStringlength(191);
       $titles=Title::all();
       View::share('titles',$titles);
        $questions=Question::all();
        View::share('questions',$questions);
        $answers=Answer::all();
        View::share('answers',$answers);

     }
}
