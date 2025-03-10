<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Stock;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'address' => $faker->word,
        'description' => $faker->word
    ];
});
