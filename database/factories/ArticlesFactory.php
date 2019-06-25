<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'title' => $faker->text(30),
        'content' => $faker->text(),
        'introduction' => $faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time
    ];
});
