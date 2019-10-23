<?php

namespace App\Services;

interface CommentService
{
    public function create($data);
    public function getByMovieId($id);
}
