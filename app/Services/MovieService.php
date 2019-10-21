<?php

namespace App\Services;

interface MovieService
{
    public function getAll($request);
    public function getByID($id);
    public function create($data);
}
