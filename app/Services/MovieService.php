<?php

namespace App\Services;

interface MovieService
{
    public function getAll($searchQuery, $genreId);
    public function getByID($id);
    public function create($data);
}
