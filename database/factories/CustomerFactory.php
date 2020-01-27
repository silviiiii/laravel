<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'code'=> $faker->unique()->randomNumber,
        'nama' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'country'=> $faker->country,
        'city'=> $faker->city,
        'address'=> $faker->address,
        'contact_number' => $faker->phoneNumber,

    ];
});
