<?php

namespace App\Services;

use App\Services\UserService;

class UserServiceImpl implements UserService
{
    public function getWatchlistMovies()
    {
        return auth()->user()->moviesToWatch()->orderBy('movie_user.created_at', 'desc')->get();
    }

    public function addToWatchlist($movieId)
    {
        return auth()->user()->moviesToWatch()->syncWithoutDetaching($movieId);
    }

    public function markAsWatched($data)
    {
        return auth()->user()->moviesToWatch()->syncWithoutDetaching([$data['id'] => ['watched' => 1]]);
    }

    public function removeFromWatchlist($movieId)
    {
        return auth()->user()->moviesToWatch()->detach($movieId);
    }
}
