<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
  return [
    'codproduct' => $faker->text($maxNbChars = 5) . $faker->numberBetween($min = 10, $max = 99),
    'name' => $faker->text($maxNbChars = 50),
    'description' => $faker->text($maxNbChars = 200)
  ];
});
