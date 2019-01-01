<?php

use Faker\Generator as Faker;

$factory->define(App\Resident::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'user_id' => null,
    ];
});
