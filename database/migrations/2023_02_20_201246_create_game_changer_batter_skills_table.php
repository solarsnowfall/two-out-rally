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
        Schema::create('game_changer_batter_skills', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('game_changer_id');
            $table->tinyInteger('line_drive')->default(0);
            $table->tinyInteger('reaction')->default(0);
            $table->tinyInteger('discipline')->default(0);
            $table->tinyInteger('bat_control')->default(0);
            $table->tinyInteger('fly_ball')->default(0);
            $table->tinyInteger('lower_body')->default(0);
            $table->tinyInteger('pull')->default(0);
            $table->tinyInteger('arm_strength')->default(0);
            $table->tinyInteger('speed')->default(0);
            $table->tinyInteger('grace')->default(0);
            $table->tinyInteger('ground_ball')->default(0);
            $table->tinyInteger('accuracy')->default(0);

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
        Schema::dropIfExists('game_changer_batter_skills');
    }
};
