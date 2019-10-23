<?php

namespace App\Services;

use App\Comment;
use App\Services\CommentService;
use Illuminate\Support\Facades\Auth;

class CommentServiceImpl implements CommentService
{
    const PAGINATE_LIMIT = 5;

    public function getByMovieId($id)
    {
        return Comment::where('movie_id', $id)->latest()->paginate(self::PAGINATE_LIMIT);
    }

    public function create($data)
    {
        return Comment::create([
            'user_id' => Auth::id(),
            'movie_id' => $data['movie_id'],
            'comment_body' => $data['commentBody']
        ]);
    }
}
