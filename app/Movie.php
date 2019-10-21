<?php

namespace App;

use App\Genre;
use App\Reaction;
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

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
