<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(), // oración
    	'short'=> $faker->text(140),
    	'description'=> $faker->text(600)
    ];
});
