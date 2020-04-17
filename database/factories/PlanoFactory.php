<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Plano;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Plano::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'original_price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 100),
        'discount_price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 100),
        'duration' => $faker->numberBetween(1,24), //meses
    ];
});
