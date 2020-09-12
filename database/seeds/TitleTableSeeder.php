<?php

use Illuminate\Database\Seeder;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Title::class,2)->create()->each(function ($Title){
        	//see the relation with 3 subcategories
        	$questions=factory(App\Question::class,3)->make();
        	$title->questions()->saveMany($questions);
        	 
        });
    }
    }
}
