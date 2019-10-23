<?php

use App\User;
use App\Movie;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    $usersIds = User::all()->pluck('id')->all();
    $randomUserId = $usersIds[array_rand($usersIds, 1)];

    $moviesIds = Movie::all()->pluck('id')->all();
    $randomMovieId = $moviesIds[array_rand($moviesIds, 1)];

    return [
        'user_id' => $randomUserId,
        'movie_id' => $randomMovieId,
        'comment_body' => $faker->paragraph(2, true),
    ];
});
