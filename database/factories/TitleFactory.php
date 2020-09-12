<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Title;
use Faker\Generator as Faker;

$factory->define(Title::class, function (Faker $faker) {
    return [
        "name"=>$faker->sentence($nbWords=3)
    ];
});
$factory->define(Question::class, function (Faker $faker) {
    return [
        "name"=>$faker->sentence($nbWords=3),
       
    ];
});
