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
        Schema::create('game_changer_pitcher_skills', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('game_changer_id');
            $table->tinyInteger('stamina')->default(0);
            $table->tinyInteger('mechanics')->default(0);
            $table->tinyInteger('paint_corner')->default(0);
            $table->tinyInteger('induce_grounder')->default(0);
            $table->tinyInteger('vertical_break')->default(0);
            $table->tinyInteger('release')->default(0);
            $table->tinyInteger('horizontal_break')->default(0);
            $table->tinyInteger('induce_popup')->default(0);
            $table->tinyInteger('power')->default(0);
            $table->tinyInteger('delivery')->default(0);
            $table->tinyInteger('explosiveness')->default(0);
            $table->tinyInteger('pickoff')->default(0);

            $table->foreign('game_changer_id')->references('id')->on('game_changers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_changer_pitcher_skills');
    }
};
