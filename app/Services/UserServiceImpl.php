<?php

namespace App\Services;

use App\Services\UserService;

class UserServiceImpl implements UserService
{
    public function getWatchlistMovies($request)
    {
        $watched = $request->input('watched', null);

        $query = auth()->user()->moviesToWatch()->orderBy('movie_user.created_at', 'desc');

        if ($watched !== null) {
            $query->where('watched', 1);
        }

        return $query->get();
    }

    public function addToWatchlist($movieId)
    {
        return auth()->user()->moviesToWatch()->syncWithoutDetaching($movieId);
    }

    public function markAsWatched($movieId)
    {
        return auth()->user()->moviesToWatch()->syncWithoutDetaching([$movieId => ['watched' => 1]]);
    }

    public function removeFromWatchlist($movieId)
    {
        return auth()->user()->moviesToWatch()->detach($movieId);
    }
}
