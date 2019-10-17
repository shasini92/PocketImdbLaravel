<?php

use App\Reaction;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('movie_id');
            $table->enum('reaction_type', [
                Reaction::REACTION_TYPE_LIKED,
                Reaction::REACTION_TYPE_DISLIKED
            ]);
            $table->timestamps();
            $table->unique(['user_id', 'movie_id', 'reaction_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reactions');
    }
}
