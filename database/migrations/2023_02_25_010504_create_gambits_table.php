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
        Schema::create('gambits', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('team_id');
            $table->unsignedTinyInteger('priority')->index();
            $table->enum('type', ['relieve_pitcher'])->index();
            $table->unsignedTinyInteger('position_id');
            $table->unsignedTinyInteger('sub_roster_position_id');
            $table->unsignedTinyInteger('bu_sub_roster_position_id');
            $table->string('name');
            $table->unsignedTinyInteger('base')->nullable()->default(null);

            $table->enum('relief_reason', [
                'exhaustion',
                'one_run_allowed',
                'two_runs_allowed',
                'three_runs_allowed',
                'four_runs_allowed',
                'five_runs_allowed',
                'situational'
            ]);

            $table->enum('leverage', [
                'ignore',
                'critical',
                'very_high',
                'high',
                'medium',
                'low',
                'very_low',
                'down_by_three',
                'down_by_two',
                'down_by_one',
                'tied',
                'up_by_one',
                'up_by_two',
                'up_by_three'
            ]);

            $table->unsignedTinyInteger('outs')->default(0);
            $table->unsignedTinyInteger('inning')->default(0);

            $table->json('on_base')->default(json_encode((object) [
                'first' => 0,
                'second' => 0,
                'third' => 0
            ]));

            $table->unsignedTinyInteger('focus_id')->nullable()->default(null);
            $table->enum('handedness', ['left', 'right'])->nullable()->default(null);

            $table->timestamps();

            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('sub_roster_position_id')->references('id')->on('roster_positions');
            $table->foreign('bu_sub_roster_position_id')->references('id')->on('roster_positions');
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('focus_id')->references('id')->on('foci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gambits');
    }
};
