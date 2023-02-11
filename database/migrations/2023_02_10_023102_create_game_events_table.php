<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Modules\AtBatOutcome;
use App\Modules\HitType;
use App\Modules\HitVector;
use App\Modules\BaseProgression;
use App\Modules\FieldingOutcome;

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
            $table->unsignedBigInteger('game_id')->index();

            $table->unsignedTinyInteger('inning');
            $table->enum('batting', ['home', 'away']);

            $table->enum('at_bat', [
                AtBatOutcome::Hit->value,
                AtBatOutcome::Strikeout->value,
                AtBatOutcome::Walk->value,
            ]);

            $table->enum('hit_type', [
                HitType::BaseHit->value,
                HitType::FlyBall->value,
                HitType::GroundBall->value,
                HitType::LineDrive->value,
                HitType::PopUp->value
            ])->nullable();

            $table->enum('fielding', [
                FieldingOutcome::FlyOut->value,
                FieldingOutcome::GroundOut->value,
                FieldingOutcome::ThrowingError->value
            ]);

            $table->enum('hit_vector', [
                ...HitVector::A->grid(),
                ...HitVector::B->grid(),
                ...HitVector::C->grid(),
                ...HitVector::D->grid(),
                ...HitVector::E->grid(),
                ...HitVector::F->grid(),
                ...HitVector::G->grid()
            ])->nullable();

            $table->enum('base_progress', [
                BaseProgression::Single->value,
                BaseProgression::Double->value,
                BaseProgression::Triple->value,
                BaseProgression::HomeRun->value
            ])->nullable();

            $table->foreign('game_id')->references('id')->on('games');
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
