<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    const REACTION_TYPE_LIKED = 'liked';
    const REACTION_TYPE_DISLIKED = 'disliked';

    protected $table = 'reactions';

    protected $fillable = [
        'user_id',
        'movie_id',
        'reaction_type'
    ];
}
