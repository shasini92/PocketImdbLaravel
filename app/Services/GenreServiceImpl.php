<?php

namespace App\Services;

use App\Genre;
use App\Services\GenreService;

class GenreServiceImpl implements GenreService
{
    public function getAll()
    {
        return Genre::all();
    }
}
