<?php

use Faker\Generator as Faker;

$factory->define(App\Document::class, function (Faker $faker) {
    return [
        'created_uid' => \App\User::all()->random()->id,
        'update_uid' =>\App\User::all()->random()->id,
        'document_type'=>'ATIPEDN',
        'name' => 'Pedido',
        'status' => '1',
        //'status' => $faker->randomElement([1, 0]),
     ];
});
