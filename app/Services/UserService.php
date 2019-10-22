<?php

namespace App\Services;

interface UserService
{
    public function getWatchlistMovies($request);
    public function addToWatchlist($movieId);
    public function markAsWatched($movieId);
    public function removeFromWatchlist($movieId);
}
