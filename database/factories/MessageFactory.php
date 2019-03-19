<?php

use Faker\Generator as Faker;
use App\Message;
$factory->define(Message::class, function (Faker $faker) {
    
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'body' => $faker->text(300),
        'date' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+12 months', $timezone = null),
    ];
});
