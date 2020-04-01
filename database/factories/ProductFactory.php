<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model\Stock;
use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'unit_price' => $faker->numberBetween(1,100),
        'pur_price' => $faker->numberBetween(1,100),
        'model' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'description' => $faker->word,
        'expire' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'production' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'qty' => $faker->numberBetween(1,100),
        'unitinstock' => $faker->numberBetween(1,100),
        'min_qty' => $faker->numberBetween(1,100),
        'max_qty' => $faker->numberBetween(1,100),
        'stock_id' => function(){
            return Stock::all()->random();
        }

    ];
});
