<?php

use Faker\Generator as Faker;

use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
    	'user_id' => rand(1,30),
    	'category_id' => rand(1,20),
        'name' => $title,
        'slug' => str_slug($title),
        'excerpt' => $faker->text(200),
        'body' => $faker->text(2800),
        'file' => $faker->imageUrl($width = 1200, $heigth = 600),
        'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
    ];
});
