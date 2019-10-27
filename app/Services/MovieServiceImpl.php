<?php

namespace App\Services;

use App\Http\Resources\SearchedMovie;
use App\Movie;
use App\Reaction;
use App\Services\MovieService;
use Illuminate\Support\Facades\Auth;

class MovieServiceImpl implements MovieService
{
    const PAGINATE_LIMIT = 10;
    const POPULAR_LIMIT = 10;

    public function getAll($data)
    {
        $query = Movie::query();

        $searchQuery = $data['searchTerm'];
        $genreId = $data['genreId'];
        $sortBy = $data['sortBy'];

        if ($searchQuery !== null) {
            // $query->whereRaw("title LIKE '%$searchQuery%'");
            $movies =  Movie::searchByQuery(['match_phrase_prefix' => ['title' => $searchQuery]]);
            return new SearchedMovie($movies);
        }

        if ($genreId !== null) {
            $query->whereRaw("genre_id = '$genreId'");
        }

        if ($sortBy !== null) {
            return $query->orderBy($sortBy, 'desc')->take(self::POPULAR_LIMIT)->get();
        }

        return $query->with('reactions')->latest()->paginate(self::PAGINATE_LIMIT);
    }

    public function getByID($id)
    {
        $movie = Movie::where('id', $id)->with(['reactions', 'genre'])->first();
        $movie->increment(Movie::MOVIE_COLUMN_VISITS);

        return $movie;
    }

    public function create($data)
    {
        $newMovie =  Movie::create($data);
        $newMovie->addToIndex();
        return $newMovie;
    }

    public function react($data)
    {
        $movie = Movie::find($data['movieId']);

        if ($data['reactionType'] == Reaction::REACTION_TYPE_LIKED) {

            $movie->increment(Movie::MOVIE_COLUMN_LIKES);

            if ($movie->dislikes > 0) {
                $movie->decrement(Movie::MOVIE_COLUMN_DISLIKES);
            }
        }

        if ($data['reactionType'] == Reaction::REACTION_TYPE_DISLIKED) {
            $movie->increment(Movie::MOVIE_COLUMN_DISLIKES);

            if ($movie->likes > 0) {
                $movie->decrement(Movie::MOVIE_COLUMN_LIKES);
            }
        }

        return Reaction::updateOrCreate(
            ['user_id' => Auth::id(), 'movie_id' => $data['movieId']],
            ['reaction_type' => $data['reactionType']]
        );
    }
}
