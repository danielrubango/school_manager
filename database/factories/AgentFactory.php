<?php

use Faker\Generator as Faker;

$factory->define(App\Agent::class, function (Faker $faker) {
    return [
        'started_at' => $faker->dateTimeThisDecade
    ];
});
