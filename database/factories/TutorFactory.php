<?php

use Faker\Generator as Faker;

$factory->define(App\Tutor::class, function (Faker $faker) {
    return [
        'phone_number' => '243903726598'
    ];
});
