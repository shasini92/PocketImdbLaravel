<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MovieTableSeeder extends Seeder
{
    public function run()
    {
        factory(Movie::class, 10)->create();
    }
}
