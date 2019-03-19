<?php

use Faker\Generator as Faker;

use App\Tag;

$factory->define(Tag::class, function (Faker $faker) {
    $title = $faker->unique()->word(8);
    return [
        'name' => $title,
        'slug' => str_slug($title),
    ];
});
