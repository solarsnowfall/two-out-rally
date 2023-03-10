<?php

use App\Modules\HeightClass;
use App\Modules\WeightClass;
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
        Schema::create('players', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->string('type')->index();
            $table->boolean('availability')->index()->default(true);
            $table->enum('handedness', ['left', 'right'])->index();
            $table->unsignedTinyInteger('position_id')->index();
            $table->unsignedTinyInteger('background_id')->index();
            $table->unsignedTinyInteger('personality_id')->index();
            $table->string('name', 50)->index();
            $table->unsignedTinyInteger('level')->default(1)->index();

            $table->unsignedBigInteger('experience')->default(0);
            $table->unsignedTinyInteger('experience_up')->default(0);
            $table->unsignedTinyInteger('skill_points')->default(0);
            $table->unsignedTinyInteger('moxie')->default(50);
            $table->unsignedTinyInteger('moxie_up')->default(0);

            $table->unsignedTinyInteger('height');
            $table->enum('height_class', range(HeightClass::Short->value, HeightClass::Towering->value));
            $table->unsignedMediumInteger('weight');
            $table->enum('weight_class', range(WeightClass::Thin->value, WeightClass::Thick->value));
            $table->unsignedTinyInteger('age')->default(18);
            $table->string('hometown', 50);
            $table->unsignedTinyInteger('birth_day');
            $table->unsignedMediumInteger('birth_season');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('background_id')->references('id')->on('player_backgrounds');
            $table->foreign('personality_id')->references('id')->on('player_personalities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};
