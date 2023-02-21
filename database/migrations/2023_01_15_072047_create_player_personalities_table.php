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
        Schema::create('player_personalities', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name', 50);
            $table->unsignedTinyInteger('charisma')->default(0);
            $table->unsignedTinyInteger('chemistry')->default(0);
            $table->unsignedTinyInteger('competitiveness')->default(0);
            $table->unsignedTinyInteger('leadership')->default(0);
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_personalities');
    }
};
