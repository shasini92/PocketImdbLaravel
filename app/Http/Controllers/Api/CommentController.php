<?php

namespace App\Http\Controllers\Api;

use App\Services\CommentService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCommentRequest;

class CommentController extends Controller
{
    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function store(CreateCommentRequest $request)
    {
        return $this->commentService->create($request->validated());
    }

    public function index($id)
    {
        return $this->commentService->getByMovieId($id);
    }
}
