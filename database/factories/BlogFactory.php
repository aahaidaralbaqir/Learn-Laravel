<?php

use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'id' => $faker->randomDigitNotNull,
        'title' => $faker->title,
        'subject' => $faker->unique()->safeEmail
    ];
});
