<?php

use App\Modules\PitcherFocus;
use App\Modules\Handedness;
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
        Schema::create('lineups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id');

            $table->enum('focus', [
                PitcherFocus::Balanced->value,
                PitcherFocus::Control->value,
                PitcherFocus::Movement->value,
                PitcherFocus::Velocity->value
            ])->nullable();

            $table->enum('handedness', [
                Handedness::Left->value,
                Handedness::Right->value
            ])->nullable();

            $table->unique(['team_id', 'focus', 'handedness']);
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineups');
    }
};
