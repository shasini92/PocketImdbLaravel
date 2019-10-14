<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $genres = [
            [
                'id' => 1,
                'name' => Genre::ACTION_TYPE
            ],
            [
                'id' => 2,
                'name' => Genre::HORROR_TYPE
            ],
            [
                'id' => 3,
                'name' => Genre::THRILLER_TYPE
            ],
            [
                'id' => 4,
                'name' => Genre::SCIFI_TYPE
            ], [
                'id' => 5,
                'name' => Genre::COMEDY_TYPE
            ],
        ];
        DB::table('genres')->insert($genres);
    }
}
