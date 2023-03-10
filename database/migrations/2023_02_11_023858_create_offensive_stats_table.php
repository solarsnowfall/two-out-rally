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
        Schema::create('offensive_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id')->index();
            $table->unsignedBigInteger('player_id')->index();
            $table->unsignedBigInteger('team_id')->index();
            $table->unsignedBigInteger('season_id')->index();
            $table->boolean('active')->default(true)->index();

            $table->unsignedSmallInteger('pa')->default(0);
            $table->unsignedSmallInteger('b1')->default(0);
            $table->unsignedTinyInteger('b2')->default(0);
            $table->unsignedTinyInteger('b3')->default(0);
            $table->unsignedTinyInteger('hr')->default(0);
            $table->unsignedSmallInteger('r')->default(0);
            $table->unsignedSmallInteger('rbi')->default(0);
            $table->unsignedSmallInteger('sb')->default(0);
            $table->unsignedSmallInteger('cs')->default(0);
            $table->unsignedSmallInteger('k')->default(0);
            $table->unsignedSmallInteger('bb')->default(0);
            $table->unsignedTinyInteger('hbp')->default(0);
            $table->unsignedTinyInteger('sh')->default(0);
            $table->unsignedTinyInteger('sf')->default(0);
            $table->unsignedTinyInteger('ibb')->default(0);
            $table->unsignedTinyInteger('gdp')->default(0);
            $table->unsignedSmallInteger('ld')->default(0);
            $table->unsignedSmallInteger('fp')->default(0);
            $table->unsignedSmallInteger('gb')->default(0);
            $table->unsignedSmallInteger('pop')->default(0);
            $table->unsignedMediumInteger('ps')->default(0);
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
        Schema::dropIfExists('offensive_stats');
    }
};
