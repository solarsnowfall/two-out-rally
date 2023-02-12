<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('series_id')->index();
            $table->unsignedBigInteger('away_id')->index();
            $table->unsignedBigInteger('home_id')->index();
            $table->unsignedBigInteger('winner_id')->index();

            $table->unsignedTinyInteger('r_away')->default(0);
            $table->unsignedTinyInteger('r_home')->default(0);
            $table->unsignedTinyInteger('h_away')->default(0);
            $table->unsignedTinyInteger('h_home')->default(0);
            $table->unsignedTinyInteger('e_away')->default(0);
            $table->unsignedTinyInteger('e_home')->default(0);
            $table->json('inning_runs');

            $table->foreign('series_id')->references('id')->on('series');
            $table->foreign('away_id')->references('id')->on('teams');
            $table->foreign('home_id')->references('id')->on('teams');
            $table->foreign('winner_id')->references('id')->on('teams');

            $table->timestamp('created_at')
                ->index()
                ->nullable()
                ->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
