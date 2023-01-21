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
        Schema::create('roster_positions', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->unsignedTinyInteger('position_id')->index()->nullable();
            $table->string('abbrv', 3);
            $table->string('name', 50);
            $table->string('description')->nullable();

            $table->foreign('position_id')
                ->references('id')
                ->on('positions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roster_positions');
    }
};
