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

            $table->enum('effort', ['very light', 'light', 'normal', 'strong', 'very strong'])
                ->default('normal');

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
        Schema::dropIfExists('pitcher_skills');
    }
};