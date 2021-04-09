<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(webCS\Category::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'name'=> $title,
        'slug'=> Str::slug($title),
        'body'=> $faker->text(500),
    ];
});
