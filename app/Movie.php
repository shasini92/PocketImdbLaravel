<?php

namespace App;

use App\Reaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    protected $appends = ['reaction_type'];

    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }

    public function getReactionTypeAttribute()
    {
        $reaction = $this->reactions()->whereUserId(Auth::id())->first();

        return $reaction ? $reaction->reaction_type : false;
    }
}
