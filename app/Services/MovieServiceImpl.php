<?php

namespace App\Services;

use App\Genre;
use App\Movie;
use App\Services\MovieService;
use Illuminate\Support\Facades\Auth;

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
            $query->whereRaw("genre_id LIKE '%$genreId%'");
        }


        return $query->paginate(self::PAGINATE_LIMIT);
    }

    public function getByID($id)
    {
        return Movie::find($id);
    }

    public function getGenres()
    {
        return Genre::all();
    }

    public function create($request)
    { }

    public function update($request, $id)
    { }

    public function delete($movie)
    { }
}
