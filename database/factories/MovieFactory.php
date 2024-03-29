<?php

use Faker\Generator as Faker;
use App\Genre;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Movie::class, function (Faker $faker) {
    $genresId = Genre::all()->pluck('id')->all();
    $randomGenre = $genresId[array_rand($genresId, 1)];

    return [
        'title' => $faker->words(2, true),
        'description' => $faker->paragraph(10, true),
        'image_url' => $faker->imageUrl(640, 480),
        'genre_id' => $randomGenre,
        'visits' => $faker->numberBetween(10, 100),
        'likes' => $faker->numberBetween(5, 50),
        'dislikes' => $faker->numberBetween(5, 50),
    ];
});
