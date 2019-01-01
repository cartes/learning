<?php

use Faker\Generator as Faker;

$factory->define(App\Expense::class, function (Faker $faker) {
    return [
        'document' => $faker->word,
        'providers_id' => null,
        'buildings_id' => null,
        'expense_date' => $faker->date(['Y-m-d']),
        'value' => $faker->numberBetween(1000, 2000000),
    ];
});
