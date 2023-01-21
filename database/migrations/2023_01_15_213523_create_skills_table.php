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
        Schema::create('skills', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->boolean('is_pitcher');
            $table->string('label', 50)->index();
            $table->string('name', 50);
            $table->enum('attribute', ['Control', 'Movement', 'Velocity', 'Vision', 'Muscle', 'Athleticism']);
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
        Schema::dropIfExists('skills');
    }
};
