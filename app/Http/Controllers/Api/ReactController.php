<?php

namespace App\Http\Controllers\Api;

use App\Reaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReactController extends Controller
{
    public function react(Request $request)
    {
        // return $request;
        return Reaction::updateOrCreate(
            ['user_id' => Auth::id(), 'movie_id' => $request->id],
            ['reaction_type' => "$request->reactionType"]
        );
    }
}
