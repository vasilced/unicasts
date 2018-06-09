<?php

use Faker\Generator as Faker;

$factory->define(App\Episode::class, function (Faker $faker) {
    return [
        'podcast_id' => function() {
            return factory('App\Podcast')->create()->id;
        },
        'title' => $faker->word,
        'description' => $faker->paragraph,
    ];
});
