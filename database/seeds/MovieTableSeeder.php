<?php

use App\Genre;
// use App\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieTableSeeder extends Seeder
{

    public function run()
    {
        // factory(Movie::class, 10)->create();

        $faker = \Faker\Factory::create();

        $genresId = Genre::all()->pluck('id')->all();

        $movies = [
            [
                'title' => 'Fight Club',
                'description' => 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.',
                'image_url' => 'https://m.media-amazon.com/images/M/MV5BMmEzNTkxYjQtZTc0MC00YTVjLTg5ZTEtZWMwOWVlYzY0NWIwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg',
                'genre_id' => $genresId[array_rand($genresId, 1)],
                'visits' => $faker->numberBetween(10, 100),
                'likes' => $faker->numberBetween(5, 50),
                'dislikes' => $faker->numberBetween(5, 50),
            ],
            [
                'title' => 'Harry Potter and the Deathly Hallows: Part 2',
                'description' => "Harry, Ron, and Hermione search for Voldemort's remaining Horcruxes in their effort to destroy the Dark Lord as the final battle rages on at Hogwarts.",
                'image_url' => "https://m.media-amazon.com/images/M/MV5BMjIyZGU4YzUtNDkzYi00ZDRhLTljYzctYTMxMDQ4M2E0Y2YxXkEyXkFqcGdeQXVyNTIzOTk5ODM@._V1_SX300.jpg",
                'genre_id' => $genresId[array_rand($genresId, 1)],
                'visits' => $faker->numberBetween(10, 100),
                'likes' => $faker->numberBetween(5, 50),
                'dislikes' => $faker->numberBetween(5, 50),
            ],
            [
                'title' => "Terminator 2: Judgment Day",
                'description' => "A cyborg, identical to the one who failed to kill Sarah Connor, must now protect her teenage son, John Connor, from a more advanced and powerful cyborg.",
                'image_url' => "https://m.media-amazon.com/images/M/MV5BMGU2NzRmZjUtOGUxYS00ZjdjLWEwZWItY2NlM2JhNjkxNTFmXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX300.jpg",
                'genre_id' => $genresId[array_rand($genresId, 1)],
                'visits' => $faker->numberBetween(10, 100),
                'likes' => $faker->numberBetween(5, 50),
                'dislikes' => $faker->numberBetween(5, 50),
            ],
            [
                'title' => "Freddie",
                'description' => "A successful chef living in Chicago inherits three generations of family: his niece, his sister-in-law, and his grandmother and learns to survive living with three very different women.",
                'image_url' => "https://m.media-amazon.com/images/M/MV5BZTVmNDk0MzEtZTMzNy00ODhjLWE4MTMtZWE0NTVhZDgxN2Q2XkEyXkFqcGdeQXVyOTQyNTIzNjM@._V1_SX300.jpg",
                'genre_id' => $genresId[array_rand($genresId, 1)],
                'visits' => $faker->numberBetween(10, 100),
                'likes' => $faker->numberBetween(5, 50),
                'dislikes' => $faker->numberBetween(5, 50),
            ],
            [
                'title' => "21 Jump Street",
                'description' => "A pair of underachieving cops are sent back to a local high school to blend in and bring down a synthetic drug ring.
                ",
                'image_url' => "https://m.media-amazon.com/images/M/MV5BNTZjNzRjMTMtZDMzNy00Y2ZjLTg0OTAtZjVhNzYyZmJjOTljXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_SX300.jpg",
                'genre_id' => $genresId[array_rand($genresId, 1)],
                'visits' => $faker->numberBetween(10, 100),
                'likes' => $faker->numberBetween(5, 50),
                'dislikes' => $faker->numberBetween(5, 50),
            ],
            [
                'title' => "Stuber",
                'description' => "A detective recruits his Uber driver into an unexpected night of adventure.",
                'image_url' => "https://m.media-amazon.com/images/M/MV5BOGE1ZjFhYzAtYWM4ZC00NGI1LWFmYzMtZWRhZDhjMjE4YzBjXkEyXkFqcGdeQXVyODQzNTE3ODc@._V1_SX300.jpg",
                'genre_id' => $genresId[array_rand($genresId, 1)],
                'visits' => $faker->numberBetween(10, 100),
                'likes' => $faker->numberBetween(5, 50),
                'dislikes' => $faker->numberBetween(5, 50),
            ],
            [
                'title' => "Superbad",
                'description' => "Two co-dependent high school seniors are forced to deal with separation anxiety after their plan to stage a booze-soaked party goes awry.",
                'image_url' => "https://m.media-amazon.com/images/M/MV5BMTc0NjIyMjA2OF5BMl5BanBnXkFtZTcwMzIxNDE1MQ@@._V1_SX300.jpg",
                'genre_id' => $genresId[array_rand($genresId, 1)],
                'visits' => $faker->numberBetween(10, 100),
                'likes' => $faker->numberBetween(5, 50),
                'dislikes' => $faker->numberBetween(5, 50),
            ],
            [
                'title' => "Pet Sematary",
                'description' => "After tragedy strikes, a grieving father discovers an ancient burial ground behind his home with the power to raise the dead.",
                'image_url' => "https://m.media-amazon.com/images/M/MV5BYjBlNTBhYWQtMzg5Yi00NDA2LWJmMjYtZmM0ODhiYzkwYmY5XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg",
                'genre_id' => $genresId[array_rand($genresId, 1)],
                'visits' => $faker->numberBetween(10, 100),
                'likes' => $faker->numberBetween(5, 50),
                'dislikes' => $faker->numberBetween(5, 50),
            ],
            [
                'title' => "It",
                'description' => "In the summer of 1989, a group of bullied kids band together to destroy a shape-shifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.",
                'image_url' => "https://m.media-amazon.com/images/M/MV5BZDVkZmI0YzAtNzdjYi00ZjhhLWE1ODEtMWMzMWMzNDA0NmQ4XkEyXkFqcGdeQXVyNzYzODM3Mzg@._V1_SX300.jpg",
                'genre_id' => $genresId[array_rand($genresId, 1)],
                'visits' => $faker->numberBetween(10, 100),
                'likes' => $faker->numberBetween(5, 50),
                'dislikes' => $faker->numberBetween(5, 50),
            ],
            [
                'title' => "Titanic",
                'description' => "A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.",
                'image_url' => "https://m.media-amazon.com/images/M/MV5BMDdmZGU3NDQtY2E5My00ZTliLWIzOTUtMTY4ZGI1YjdiNjk3XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SX300.jpg",
                'genre_id' => $genresId[array_rand($genresId, 1)],
                'visits' => $faker->numberBetween(10, 100),
                'likes' => $faker->numberBetween(5, 50),
                'dislikes' => $faker->numberBetween(5, 50),
            ],
            [
                'title' => "RED",
                'description' => "When his peaceful life is threatened by a high-tech assassin, former black-ops Agent Frank Moses (Bruce Willis) reassembles his old team in a last ditch effort to survive and uncover his assailants.",
                'image_url' => "https://m.media-amazon.com/images/M/MV5BMzg2Mjg1OTk0NF5BMl5BanBnXkFtZTcwMjQ4MTA3Mw@@._V1_SX300.jpg",
                'genre_id' => $genresId[array_rand($genresId, 1)],
                'visits' => $faker->numberBetween(10, 100),
                'likes' => $faker->numberBetween(5, 50),
                'dislikes' => $faker->numberBetween(5, 50),
            ],
        ];

        DB::table('movies')->insert($movies);
    }
}
