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
        Schema::create('foci', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('type')->index()->nullable();
            $table->unsignedTinyInteger('strong_against')->nullable();
            $table->unsignedTinyInteger('weak_against')->nullable();
            $table->string('name')->index();
            $table->string('abbrv');
            $table->string('description');

            $table->foreign('strong_against')->references('id')->on('foci');
            $table->foreign('weak_against')->references('id')->on('foci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_focuses');
    }
};
