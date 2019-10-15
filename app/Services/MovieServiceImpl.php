<?php

namespace App\Services;

use App\Movie;
use App\Services\MovieService;
use Illuminate\Support\Facades\Auth;

class MovieServiceImpl implements MovieService
{
    public function getAll()
    {
        return Movie::paginate(10);
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
