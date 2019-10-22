<?php

namespace App\Services;

use App\Movie;
use App\Services\MovieService;

class MovieServiceImpl implements MovieService
{
    const PAGINATE_LIMIT = 10;

    public function getAll($searchQuery, $genreId, $popular)
    {
        $query = Movie::query();

        if ($searchQuery !== null) {
            $query->whereRaw("title LIKE '%$searchQuery%'");
        }

        if ($genreId !== null) {
            $query->whereRaw("genre_id = '$genreId'");
        }

        if ($popular !== null) {
            return $query->orderBy('likes', 'desc')->take(10)->get();
        }

        return $query->with('reactions')->latest()->paginate(self::PAGINATE_LIMIT);
    }

    public function getByID($id)
    {
        $movie = Movie::where('id', $id)->with(['reactions', 'genre'])->first();
        $movie->increment('visits');

        return $movie;
    }

    public function create($data)
    {
        return Movie::create($data);
    }
}
