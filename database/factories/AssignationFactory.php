<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'unit_id' => \App\Unit::all()->first(),
    ];
});
