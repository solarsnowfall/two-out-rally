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
            $table->unsignedBigInteger('away_team_id')->index();
            $table->unsignedBigInteger('home_team_id')->index();

            $table->unsignedTinyInteger('ra')->default(0);
            $table->unsignedTinyInteger('rh')->default(0);
            $table->unsignedTinyInteger('ha')->default(0);
            $table->unsignedTinyInteger('hh')->default(0);
            $table->unsignedTinyInteger('ea')->default(0);
            $table->unsignedTinyInteger('eh')->default(0);
            $table->json('inning_runs');

            $table->foreign('series_id')->references('id')->on('series');
            $table->foreign('away_team_id')->references('id')->on('teams');
            $table->foreign('home_team_id')->references('id')->on('teams');

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
