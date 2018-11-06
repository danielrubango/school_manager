<?php

use Faker\Generator as Faker;

$factory->define(App\Discussion::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence
    ];
});
