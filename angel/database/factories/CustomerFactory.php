<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'created_uid' => \App\User::all()->random()->id,
        'update_uid' =>\App\User::all()->random()->id,
        'name' => $faker->name,
        'taxid' => '1234567890123',
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'is_company' => $faker->randomElement([1, 0]),
        'status' => $faker->randomElement([1, 0]),
        'adress' => $faker->address,
        'comercial_name' => $faker->name
    ];
});
