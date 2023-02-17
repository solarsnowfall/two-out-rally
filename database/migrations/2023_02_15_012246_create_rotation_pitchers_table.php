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
        Schema::create('rotation_pitchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rotation_id');
            $table->unsignedBigInteger('player_id');
            $table->unsignedTinyInteger('roster_position_id');

            $table->foreign('rotation_id')->references('id')->on('rotations');
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
        Schema::dropIfExists('rotation_pitchers');
    }
};
