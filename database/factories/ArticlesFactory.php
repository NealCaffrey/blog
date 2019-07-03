<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    $text = $faker->text(1000);
    return [
        'title' => substr($text, 0, 40),
        'introduction' => substr($text, 0, 200),
        'content' => $text,
        'num' => random_int(10, 200),
        'created_at' => $date_time,
        'updated_at' => $date_time
    ];
});
