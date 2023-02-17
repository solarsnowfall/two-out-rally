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
        Schema::create('player_trainings', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('player_id')->index();

            $table->string('fitness', 50);
            $table->unsignedTinyInteger('fitness_level')->default(0);
            $table->unsignedInteger('fitness_exp')->default(0);
            $table->unsignedTinyInteger('fitness_up')->default(0);
            $table->unsignedMediumInteger('fitness_spent')->default(0);

            $table->string('celebrity', 50);
            $table->unsignedTinyInteger('celebrity_level')->default(0);
            $table->unsignedInteger('celebrity_exp')->default(0);
            $table->unsignedTinyInteger('celebrity_up')->default(0);
            $table->unsignedMediumInteger('celebrity_spent')->default(0);

            $table->string('rep', 50);
            $table->unsignedTinyInteger('rep_level')->default(0);
            $table->unsignedInteger('rep_exp')->default(0);
            $table->unsignedTinyInteger('rep_up')->default(0);
            $table->unsignedMediumInteger('rep_spent')->default(0);
            $table->timestamps();

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
        Schema::dropIfExists('player_training');
    }
};
