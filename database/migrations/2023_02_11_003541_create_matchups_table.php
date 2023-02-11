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
        Schema::create('matchups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('league_id')->index();
            $table->unsignedTinyInteger('day')->index();
            $table->unsignedBigInteger('away_id')->index();
            $table->unsignedBigInteger('home_id')->index();

            $table->foreign('away_id')->references('id')->on('teams');
            $table->foreign('home_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matchups');
    }
};
