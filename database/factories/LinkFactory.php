<?php

use Faker\Generator as Faker;

$factory->define(App\Link::class, function (Faker $faker) {
    return [
        'path' => $faker->url,
        'note_id' => function() {
            return factory('App\Note')->create()->id;
        },
    ];
});
