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
        Schema::create('pitching_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id')->index();
            $table->unsignedBigInteger('team_id')->index();
            $table->unsignedBigInteger('season_id')->index();
            $table->boolean('active')->default(true)->index();

            $table->unsignedTinyInteger('w')->default(0);
            $table->unsignedTinyInteger('l')->default(0);
            $table->unsignedTinyInteger('gs')->default(0);
            $table->unsignedTinyInteger('gf')->default(0);
            $table->unsignedTinyInteger('cg')->default(0);
            $table->unsignedTinyInteger('sho')->default(0);
            $table->unsignedSmallInteger('sv')->default(0);
            $table->unsignedTinyInteger('bs')->default(0);
            $table->unsignedSmallInteger('ip')->default(0);
            $table->unsignedSmallInteger('1ba')->default(0);
            $table->unsignedTinyInteger('2ba')->default(0);
            $table->unsignedTinyInteger('3ba')->default(0);
            $table->unsignedTinyInteger('hra')->default(0);
            $table->unsignedTinyInteger('ra')->default(0);
            $table->unsignedTinyInteger('er')->default(0);
            $table->unsignedSmallInteger('bba')->default(0);
            $table->unsignedTinyInteger('ibba')->default(0);
            $table->unsignedSmallInteger('so')->default(0);
            $table->unsignedTinyInteger('hbpa')->default(0);
            $table->unsignedTinyInteger('bk')->default(0);
            $table->unsignedTinyInteger('wp')->default(0);
            $table->unsignedSmallInteger('bf')->default(0);
            $table->unsignedTinyInteger('pk')->default(0);
            $table->unsignedMediumInteger('pt')->default(0);
            $table->unsignedTinyInteger('sfa')->default(0);

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
        Schema::dropIfExists('pitching_stats');
    }
};
