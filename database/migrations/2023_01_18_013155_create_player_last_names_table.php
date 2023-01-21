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
        Schema::create('player_last_names', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('name', 50);
            $table->unsignedMediumInteger('chance');
            $table->unsignedMediumInteger('chance_low');
            $table->unsignedMediumInteger('chance_high');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_last_names');
    }
};
