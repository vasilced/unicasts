<?php

use Faker\Generator as Faker;

$factory->define(App\Note::class, function (Faker $faker) {
    return [
        'summary' => $faker->paragraph,
        'episode_id' => function() {
            return factory('App\Episode')->create()->id;
        },
    ];
});
