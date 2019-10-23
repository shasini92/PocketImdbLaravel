<?php

namespace App\Services;

interface MovieService
{
    public function getAll($data);
    public function getByID($id);
    public function create($data);
    public function react($data);
}
