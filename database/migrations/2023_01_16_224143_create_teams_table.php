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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->unsignedBigInteger('league_id')->index();
            $table->enum('division', ['Blue', 'Red']);
            $table->enum('sub_division', ['West', 'Central', 'East']);
            $table->string('name', 50)->index();
            $table->unsignedTinyInteger('wins')->index()->default(0);
            $table->unsignedTinyInteger('losses')->index()->default(0);

            $table->string('city', 50);
            $table->string('state', 2);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('league_id')->references('id')->on('leagues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
