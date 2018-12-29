<?php

use Faker\Generator as Faker;

$factory->define(App\Social::class, function (Faker $faker) {
    $social = $faker->randomElement([\App\Employee::AFP, \App\Employee::ISAPRE, \App\Employee::CCAF, \App\Employee::OTHER]);
    return [
        'name' => $faker->name,
        'type' => $type,
    ];
});

$factory->define(App\Employee::class, function (Faker $faker){
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'prevision_id' => null,
        'afp_id' => null,
    ];
});