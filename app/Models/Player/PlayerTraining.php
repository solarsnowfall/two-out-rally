<?php

namespace App\Models\Player;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Player\PlayerTraining
 *
 * @property int $id
 * @property int $player_id
 * @property string $fitness
 * @property int $fitness_level
 * @property int $fitness_exp
 * @property int $fitness_up
 * @property int $fitness_spent
 * @property string $celebrity
 * @property int $celebrity_level
 * @property int $celebrity_exp
 * @property int $celebrity_up
 * @property int $celebrity_spent
 * @property string $rep
 * @property int $rep_level
 * @property int $rep_exp
 * @property int $rep_up
 * @property int $rep_spent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereCelebrityExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereCelebrityLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereCelebritySpent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereCelebrityUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereFitnessExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereFitnessLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereFitnessSpent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereFitnessUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereRepExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereRepLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereRepSpent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereRepUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerTraining whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PlayerTraining extends Model
{
    use HasFactory;
}
