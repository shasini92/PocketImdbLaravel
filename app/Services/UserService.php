<?php

namespace App\Services;

interface UserService
{
    public function getWatchlistMovies($watched);
    public function addToWatchlist($movieId);
    public function markAsWatched($data);
    public function removeFromWatchlist($movieId);
}
