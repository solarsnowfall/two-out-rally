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
        Schema::create('game_changers', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('type')->index();

            $table->enum('category', [
                'hitter_approach',
                'pitcher_approach',
                'team_approach'
            ]);

            $table->set('bonus_type', [
                'at_bat',
                'base_running',
                'export',
                'fielding',
                'fly_ball_distance',
                'fly_ball_power',
                'home_v_away',
                'import',
                'loss',
                'moxie',
                'reliever',
                'steal',
                'trailing',
                'vector',
                'win'
            ]);

            $table->unsignedTinyInteger('rarity')->index();
            $table->unsignedTinyInteger('roster_position_id')->nullable()->default(null);

            $table->set('focus_id', [
                \App\Models\Player\Skill\Focus::VISION,
                \App\Models\Player\Skill\Focus::MUSCLE,
                \App\Models\Player\Skill\Focus::ATHLETICISM,
                \App\Models\Player\Skill\Focus::CONTROL,
                \App\Models\Player\Skill\Focus::MOVEMENT,
                \App\Models\Player\Skill\Focus::VELOCITY,
                \App\Models\Player\Skill\Focus::BALANCED
            ])->nullable()->default(null);

            $table->unsignedTinyInteger('player_personality_id')->nullable()->default(null);
            $table->unsignedTinyInteger('player_background_id')->nullable()->default(null);
            $table->enum('intangible', ['charisma', 'chemistry', 'competitiveness', 'leadership']);
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->unsignedTinyInteger('celebrity')->default(0);
            $table->unsignedTinyInteger('rep')->default(0);
            $table->unsignedTinyInteger('fitness')->default(0);
            $table->unsignedTinyInteger('moxie')->default(0);

            $table->foreign('roster_position_id')->references('id')->on('roster_positions');
            $table->foreign('player_personality_id')->references('id')->on('player_personalities');
            $table->foreign('player_background_id')->references('id')->on('player_backgrounds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_changers');
    }
};
