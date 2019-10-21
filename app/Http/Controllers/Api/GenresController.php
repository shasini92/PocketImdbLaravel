<?php

namespace App\Http\Controllers\Api;

use App\Services\GenreService;
use App\Http\Controllers\Controller;

class GenresController extends Controller
{
    private $genreService;
    /**
     * Create a new GenresController instance.
     *
     * @return void
     */
    public function __construct(GenreService $genreService)
    {
        $this->genreService = $genreService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->genreService->getAll();
    }
}
