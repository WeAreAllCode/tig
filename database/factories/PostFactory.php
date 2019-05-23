<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(54),
        'slug' => $faker->slug,
        'sub_title' => $faker->text(24),
        'body' => $faker->text(200),
        'is_published' => $faker->randomElement($array = ['1', '2']),
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
        'category_id' => $faker->numberBetween($min = 1, $max = 20),
    ];
});
