<?php

namespace App\Services;

use App\Movie;
use App\Services\MovieService;

class MovieServiceImpl implements MovieService
{
    const PAGINATE_LIMIT = 10;

    public function getAll($searchQuery, $genreId)
    {
        $query = Movie::query();

        if ($searchQuery !== null) {
            $query->whereRaw("title LIKE '%$searchQuery%'");
        }
        if ($genreId !== null) {
            $query->whereRaw("genre_id = '$genreId'");
        }

        return $query->latest()->paginate(self::PAGINATE_LIMIT);
    }

    public function getByID($id)
    {
        Movie::find($id)->increment('visits');

        return Movie::where('id', $id)->with('reactions')->with('genre')->first();
    }

    public function create($data)
    {
        return Movie::create($data);
    }
}
