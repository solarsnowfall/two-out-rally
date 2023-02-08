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
        Schema::create('team_players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id');
            $table->unsignedTinyInteger('roster_position_id');
            $table->unsignedBigInteger('player_id');
            $table->boolean('active')->index()->default(true);

            $table->unique(['team_id', 'roster_position_id']);
            $table->unique(['player_id']);

            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('roster_position_id')->references('id')->on('roster_positions');
            $table->foreign('player_id')->references('id')->on('players');

            $table->timestamp('created_at')
                ->index()
                ->nullable()
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamp('updated_at')
                ->index()
                ->nullable()
                ->default(DB::raw('NULL on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_players');
    }
};
