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
        Schema::create('defensive_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id')->index();
            $table->unsignedBigInteger('player_id')->index();
            $table->unsignedBigInteger('team_id')->index();
            $table->unsignedBigInteger('season_id')->index();
            $table->boolean('active')->default(true)->index();

            $table->unsignedSmallInteger('g')->default(0);
            $table->unsignedTinyInteger('err')->default(0);
            $table->unsignedSmallInteger('po')->default(0);
            $table->unsignedSmallInteger('a')->default(0);
            $table->unsignedSmallInteger('dp')->default(0);
            $table->unsignedTinyInteger('pb')->default(0);
            $table->double('wpa', 5, 4)->default(0);
            $table->timestamps();

            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('season_id')->references('id')->on('seasons');
            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('defensive_stats');
    }
};
