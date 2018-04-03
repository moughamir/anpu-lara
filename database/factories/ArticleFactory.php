<?php

use Faker\Generator as Faker;

$factory->define(Anpu\Article::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'image' => 'http://via.placeholder.com/576x358',
        'url' => $faker->url,
        'intro' => $faker->paragraph,
        'article' => $faker->paragraph,
    ];
});


