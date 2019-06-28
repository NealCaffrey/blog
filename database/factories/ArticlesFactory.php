<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    $text = $faker->text();
    return [
        'title' => substr($text, 0, 20),
        'introduction' => substr($text, 0, 40),
        'content' => $text,
        'created_at' => $date_time,
        'updated_at' => $date_time
    ];
});
