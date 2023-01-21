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
        Schema::create('batter_skills', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('player_id');

            $table->enum('stealing', ['never', 'conservative', 'moderate', 'aggressive', 'always'])
                ->default('conservative');

            $table->unsignedTinyInteger('line_drive')->default(0);
            $table->unsignedTinyInteger('reaction')->default(0);
            $table->unsignedTinyInteger('discipline')->default(0);
            $table->unsignedTinyInteger('bat_control')->default(0);
            $table->unsignedTinyInteger('fly_ball')->default(0);
            $table->unsignedTinyInteger('lower_body')->default(0);
            $table->unsignedTinyInteger('pull')->default(0);
            $table->unsignedTinyInteger('arm_strength')->default(0);
            $table->unsignedTinyInteger('speed')->default(0);
            $table->unsignedTinyInteger('grace')->default(0);
            $table->unsignedTinyInteger('ground_ball')->default(0);
            $table->unsignedTinyInteger('accuracy')->default(0);

            $table->timestamp('created_at')
                ->index()
                ->nullable()
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamp('updated_at')
                ->index()
                ->nullable()
                ->default(DB::raw('NULL on update CURRENT_TIMESTAMP'));

            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batter_skills');
    }
};
