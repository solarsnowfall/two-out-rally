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
        Schema::create('wpa_conditions', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->enum('batting', ['away', 'home'])->index();
            $table->unsignedTinyInteger('inning')->index();
            $table->unsignedTinyInteger('outs')->index();
            $table->boolean('first')->index();
            $table->boolean('second')->index();
            $table->boolean('third')->index();
            $table->decimal('down_by_five', 5, 4)->index();
            $table->decimal('down_by_four', 5, 4)->index();
            $table->decimal('down_by_three', 5, 4)->index();
            $table->decimal('down_by_two', 5, 4)->index();
            $table->decimal('down_by_one', 5, 4)->index();
            $table->decimal('tied', 5, 4)->index();
            $table->decimal('up_by_one', 5, 4)->index();
            $table->decimal('up_by_two', 5, 4)->index();
            $table->decimal('up_by_three', 5, 4)->index();
            $table->decimal('up_by_four', 5, 4)->index();
            $table->decimal('up_by_five', 5, 4)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wpa_conditions');
    }
};
