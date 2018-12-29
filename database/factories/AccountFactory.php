<?php

use Faker\Generator as Faker;

$factory->define(App\Account::class, function (Faker $faker) {
    $type = $faker->randomElement([\App\Account::VISTA, \App\Account::CORRIENTE, \App\Account::AHORRO, \App\Account::OTHER]);
    return [
        'buildings_id' => null,
        'bank' => $faker->word,
        'number' => $faker->bankAccountNumber,
        'type' => $type,
    ];
});
