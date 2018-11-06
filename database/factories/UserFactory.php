<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    $first_name = $faker->firstName;
    $last_name = $faker->lastName;

    $username = strtolower($first_name). '.' .strtolower($last_name);

    return [
    	'first_name' => $first_name,
        'middle_name' => '',
        'last_name' => $last_name,
        'birthday' => $faker->date,
        'sexe' => $faker->randomElement(['M', 'F']),
        'username' => $username,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'
    ];
});
