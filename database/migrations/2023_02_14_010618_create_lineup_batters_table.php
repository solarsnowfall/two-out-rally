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
        Schema::create('lineup_batters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lineup_id');
            $table->unsignedBigInteger('player_id');
            $table->unsignedTinyInteger('roster_position_id');
            $table->unsignedTinyInteger('batting_order')->index();

            $table->foreign('lineup_id')->references('id')->on('lineups');
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('roster_position_id')->references('id')->on('roster_positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineup_batters');
    }
};
