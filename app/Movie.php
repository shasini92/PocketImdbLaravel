<?php

namespace App;

use App\Genre;
use App\Comment;
use App\Reaction;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    const MOVIE_COLUMN_LIKES = 'likes';
    const MOVIE_COLUMN_DISLIKES = 'dislikes';
    const MOVIE_COLUMN_VISITS = 'visits';
    const SORT_BY_COLUMNS = [
        self::MOVIE_COLUMN_DISLIKES,
        self::MOVIE_COLUMN_LIKES,
        self::MOVIE_COLUMN_VISITS
    ];

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

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
