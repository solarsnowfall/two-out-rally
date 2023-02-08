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
            $table->unsignedBigInteger('player_id')->index();
            $table->unsignedBigInteger('team_id')->index();
            $table->unsignedBigInteger('season_id')->index();

            $table->unsignedSmallInteger('pa')->default(0);
            $table->unsignedSmallInteger('1b')->default(0);
            $table->unsignedTinyInteger('2b')->default(0);
            $table->unsignedTinyInteger('3b')->default(0);
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

            $table->timestamp('created_at')
                ->index()
                ->nullable()
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamp('updated_at')
                ->index()
                ->nullable()
                ->default(DB::raw('NULL on update CURRENT_TIMESTAMP'));

            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('season_id')->references('id')->on('seasons');
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
