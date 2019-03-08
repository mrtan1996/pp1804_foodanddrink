<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Order::class, function (Faker $faker) {
   
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
        'address'=> $faker->Realtext(50),
        'phone'=>123456789,
        'total' => $faker->randomDigit,
    ];
});
