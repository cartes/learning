<?php

use Faker\Generator as Faker;

$factory->define(App\Unit::class, function (Faker $faker) {
    $user = \App\User::all()->random()->id;
    return [
        'name_unit' => $faker->numberBetween(100, 118),
        'rate_unit' => $faker->randomFloat(2, 0.1, 1),
        'type_unit' => $faker->numberBetween(0, 4),
        'asignation_id' => 0,
        'user_id' => null,
        'owner_id' => null,
        'buildings_id' => \App\Building::all()->first()->id,
    ];
});
