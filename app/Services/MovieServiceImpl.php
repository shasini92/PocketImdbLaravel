<?php

namespace App\Services;

use App\Movie;
use App\Services\MovieService;

class MovieServiceImpl implements MovieService
{
    const PAGINATE_LIMIT = 10;

    public function getAll($queryTerm)
    {
        $query = Movie::query();

        if ($query !== null) {
            $query->whereRaw("title LIKE '%$queryTerm%'");
        }

        return $query->latest()->paginate(self::PAGINATE_LIMIT);
    }

    public function getByID($id)
    {
        return Movie::where('id', $id)->with('reactions')->get();
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
