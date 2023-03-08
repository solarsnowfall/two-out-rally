<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Modules\AtBatOutcome;
use App\Modules\HitType;
use App\Modules\HitVector;
use App\Modules\BaseProgression;
use App\Modules\FieldingOutcome;
use App\Modules\PitchType;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id');
            $table->unsignedTinyInteger('inning')->index();
            $table->enum('batting', ['home', 'away'])->index();
            $table->enum('outs', [0, 1, 2, 3]);
            $table->json('line_score');

            $table->unsignedBigInteger('batter_id');
            $table->unsignedBigInteger('pitcher_id');
            $table->unsignedBigInteger('fielder_id')->nullable();
            $table->unsignedBigInteger('fielder_id2')->nullable();
            $table->unsignedBigInteger('fielder_id3')->nullable();
            $table->json('fielders');

            $table->enum('at_bat', [
                AtBatOutcome::Hit->value,
                AtBatOutcome::Strikeout->value,
                AtBatOutcome::Walk->value,
            ]);

            $table->unsignedTinyInteger('pitch_count')->default(0);
            $table->json('pitch_location')->nullable()->default(null);

            $table->enum('pitch_type', [
                PitchType::Changeup->value,
                PitchType::CircleChange->value,
                PitchType::Curveball->value,
                PitchType::Cutter->value,
                PitchType::Forkball->value,
                PitchType::FourSeamFastball->value,
                PitchType::Knuckleball->value,
                PitchType::KnuckleCurve->value,
                PitchType::Palmball->value,
                PitchType::Screwball->value,
                PitchType::Sinker->value,
                PitchType::Slider->value,
                PitchType::Slurve->value,
                PitchType::Splitter->value,
                PitchType::TwoSeamFastball->value,
                PitchType::TwelveSixCurveball->value,
                PitchType::VulcanChange->value
            ]);

            $table->unsignedTinyInteger('pitch_speed')->nullable()->default(null);
            $table->unsignedTinyInteger('balls')->default(0);
            $table->unsignedTinyInteger('strikes')->default(0);
            $table->enum('strike_type', ['looking', 'swinging'])->default(null);

            $table->enum('hit_type', [
                HitType::BaseHit->value,
                HitType::FlyBall->value,
                HitType::GroundBall->value,
                HitType::LineDrive->value,
                HitType::PopUp->value
            ])->nullable();

            $table->enum('hit_zone', [
                ...HitVector::A->grid(),
                ...HitVector::B->grid(),
                ...HitVector::C->grid(),
                ...HitVector::D->grid(),
                ...HitVector::E->grid(),
                ...HitVector::F->grid(),
                ...HitVector::G->grid()
            ])->nullable();

            $table->json('hit_location')->nullable()->default(null);

            $table->enum('base_progress', [
                BaseProgression::Single->value,
                BaseProgression::Double->value,
                BaseProgression::Triple->value,
                BaseProgression::HomeRun->value
            ])->nullable();

            $table->json('bases');

            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('batter_id')->references('id')->on('players');
            $table->foreign('fielder_id')->references('id')->on('players');
            $table->foreign('fielder_id2')->references('id')->on('players');
            $table->foreign('fielder_id3')->references('id')->on('players');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_events');
    }
};
