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
        Schema::create('pitcher_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id')->index();
            $table->unsignedTinyInteger('player_effort_id')->index();

            $table->unsignedTinyInteger('stamina')->default(0);
            $table->unsignedTinyInteger('mechanics')->default(0);
            $table->unsignedTinyInteger('paint_corner')->default(0);
            $table->unsignedTinyInteger('induce_grounder')->default(0);
            $table->unsignedTinyInteger('vertical_break')->default(0);
            $table->unsignedTinyInteger('release')->default(0);
            $table->unsignedTinyInteger('horizontal_break')->default(0);
            $table->unsignedTinyInteger('induce_popup')->default(0);
            $table->unsignedTinyInteger('power')->default(0);
            $table->unsignedTinyInteger('delivery')->default(0);
            $table->unsignedTinyInteger('explosiveness')->default(0);
            $table->unsignedTinyInteger('pickoff')->default(0);
            $table->timestamps();

            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('player_effort_id')->references('id')->on('player_efforts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pitcher_skills');
    }
};
