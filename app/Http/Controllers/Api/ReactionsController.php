<?php

namespace App\Http\Controllers\Api;

use App\Movie;
use App\Reaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateReactionRequest;

class ReactionsController extends Controller
{
    public function store(CreateReactionRequest $request)
    {
        $data = $request->validated();

        $movie = Movie::find($data['movieId']);

        if ($data['reactionType'] == 'liked') {

            $movie->increment('likes');

            if ($movie->dislikes > 0) {
                $movie->decrement('dislikes');
            }
        }

        if ($data['reactionType'] == 'disliked') {
            $movie->increment('dislikes');

            if ($movie->likes > 0) {
                $movie->decrement('likes');
            }
        }

        return Reaction::updateOrCreate(
            ['user_id' => Auth::id(), 'movie_id' => $data['movieId']],
            ['reaction_type' => $data['reactionType']]
        );
    }
}
