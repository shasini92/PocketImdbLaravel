<?php

namespace App\Http\Controllers\Api;

use App\Reaction;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateReactionRequest;
use Illuminate\Support\Facades\Auth;

class ReactionsController extends Controller
{
    public function create(CreateReactionRequest $request)
    {
        $data = $request->validated();

        return Reaction::updateOrCreate(
            ['user_id' => Auth::id(), 'movie_id' => $data['movieId']],
            ['reaction_type' => $data['reactionType']]
        );
    }
}
