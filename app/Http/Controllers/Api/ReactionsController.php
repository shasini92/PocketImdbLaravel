<?php

namespace App\Http\Controllers\Api;

use App\Services\MovieService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateReactionRequest;

class ReactionsController extends Controller
{
    public function __construct(MovieService $movieService)
    {
        $this->movieService = $movieService;
    }

    public function store(CreateReactionRequest $request)
    {
        return $this->movieService->react($request->validated());
    }
}
