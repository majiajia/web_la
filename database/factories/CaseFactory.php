<?php

use Faker\Generator as Faker;

$factory->define(App\cases::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'brief' => $faker->name,
        'content'=> $faker->name,
    ];
});
