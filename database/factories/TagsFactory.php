<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    $text = $faker->text(20);
    return [
        'name' => $text,
        'created_at' => $date_time,
        'updated_at' => $date_time
    ];
});
