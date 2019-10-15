<?php

namespace App\Services;

use App\Movie;

interface MovieService
{
    public function getAll();
    public function getByID($id);
    public function create($request);
    public function update($request, $movie);
    public function delete($movie);
}
