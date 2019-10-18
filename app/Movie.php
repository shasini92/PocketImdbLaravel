<?php

namespace App;

use App\Reaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    protected $fillable = [
        'title',
        'description',
        'genre_id',
        'image_url'
    ];
    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }
}
