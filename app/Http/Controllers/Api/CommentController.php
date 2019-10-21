<?php

namespace App\Http\Controllers\Api;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateCommentRequest;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCommentRequest $request)
    {
        $data = $request->validated();

        return Comment::create([
            'user_id' => Auth::id(),
            'movie_id' => $data['movieId'],
            'comment_body' => $data['commentBody']
        ]);
    }
}
