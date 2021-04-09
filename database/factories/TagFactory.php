<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(webCS\Tag::class, function (Faker $faker) {
    $title = $faker->unique->word(5);
    return [
        'name'=> $title,
        'slug'=> Str::slug($title),
    ];
});
