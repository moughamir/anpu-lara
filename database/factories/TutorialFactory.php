<?php

use Faker\Generator as Faker;

$factory->define(Anpu\Tutorial::class, function (Faker $faker) {
    return [
        'oid' => $faker->uuid,
        'title' => $faker->catchPhrase,
        'subtitle' => substr($faker->sentence(3), 0, -1),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'url' => str_random(7),
        'videoId' => 'v-'.str_random(8),
        'intro' => $faker->paragraph,
        'article' => $faker->text,
        'published' => $faker->boolean,
        'featured' => $faker->boolean,
    ];
});