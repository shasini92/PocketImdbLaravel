<?php

namespace App\Services;

use App\Movie;

interface MovieService
{
    public function getAll();
    public function getByID($id);
    public function create(Request $request);
    public function update(Request $request, Movie $movie);
    public function delete(Movie $movie);
}
