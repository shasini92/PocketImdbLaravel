<?php

namespace App\Services;

interface MovieService
{
    public function getAll($queryTerm);
    public function getByID($id);
    public function create($request);
    public function update($request, $movie);
    public function delete($movie);
}
