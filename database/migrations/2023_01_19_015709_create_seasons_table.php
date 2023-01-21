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
        Schema::create('seasons', function (Blueprint $table) {

            $table->id();
            $table->unsignedTinyInteger('day')->default(1);

            $table->timestamp('created_at')
                ->index()
                ->nullable()
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamp('updated_at')
                ->index()
                ->nullable()
                ->default(DB::raw('NULL on update CURRENT_TIMESTAMP'));

            $table->timestamp('completed_at')
                ->index()
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seasons');
    }
};
