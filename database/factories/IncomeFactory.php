<?php

use Faker\Generator as Faker;

$factory->define(App\Income::class, function (Faker $faker) {
    return [
        'rut' => null,
        'buildings_id' => null,
        'users_id' => null,
        'providers_id' => null,
        'integer' => $faker->numberBetween(0, 10),
        'income_date' => $faker->date(['Y-m-d']),
        'value' => $faker->numberBetween(1000, 700000),
    ];
});
