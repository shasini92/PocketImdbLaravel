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
        return Movie::where('id', $id)->with('reactions')->first();
    }

    public function create($data)
    {
        return Movie::create($data);
    }

    public function update($request, $id)
    { }

    public function delete($movie)
    { }
}
