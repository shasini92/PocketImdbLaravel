<?php

namespace App\Services;

use App\Movie;
use App\Services\MovieService;
use Illuminate\Support\Facades\Auth;

class MovieServiceImpl implements MovieService
{
    const PAGINATE_LIMIT = 10;

    public function getAll($queryTerm)
    {
        $query = Movie::query();

        if ($query !== null) {
            $query->whereRaw("title LIKE '%$queryTerm%'");
        }

        return $query->paginate(self::PAGINATE_LIMIT);
    }

    public function getByID($id)
    {
        return Movie::find($id);
    }

    public function create($request)
    { }

    public function update($request, $id)
    { }

    public function delete($movie)
    { }
}
