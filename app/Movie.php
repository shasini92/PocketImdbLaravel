<?php

namespace App;

use App\Reaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }
}
