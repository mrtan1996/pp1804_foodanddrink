<?php

use Faker\Generator as Faker;

$factory->define(App\Model\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->password,
        'remember_token' => str_random(10),
        'role' => rand(1,2),

        
    ];
});
