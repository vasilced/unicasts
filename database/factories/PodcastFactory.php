<?php

use Faker\Generator as Faker;

$factory->define(App\Podcast::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'description' => $faker->paragraph,
    ];
});
