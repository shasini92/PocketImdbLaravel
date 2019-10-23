<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Movie;

class AddLikesAndDislikesToMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->unsignedInteger(Movie::MOVIE_COLUMN_LIKES)->default(0);
            $table->unsignedInteger(Movie::MOVIE_COLUMN_DISLIKES)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn(Movie::MOVIE_COLUMN_LIKES);
            $table->dropColumn(Movie::MOVIE_COLUMN_DISLIKES);
        });
    }
}
