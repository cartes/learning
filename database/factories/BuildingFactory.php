<?php

use Faker\Generator as Faker;

$factory->define(App\Building::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
        'number_buildings' => $faker->randomDigit,
        'description' => $faker->paragraph
    ];
});
