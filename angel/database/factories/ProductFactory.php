<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'description' => $faker->name,
        'image' =>$faker-> imageUrl($width = 640, $height = 480),
        'type' => $faker->randomElement(['C','V']),
        'status' => $faker->randomElement([1, 0]),
        'created_uid' => \App\User::all()->random()->id,
        'update_uid' =>\App\User::all()->random()->id,
    ];
});
