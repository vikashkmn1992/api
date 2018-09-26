<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
             'name'=>$faker->name,
             'stock'=>$faker->randomDigit,
             'discount'=>$faker->randomDigit,
             'price'=>$faker->randomDigit,
             'details'=>$faker->address,

    ];
});
