<?php

namespace App\Models\GameChanger;

use App\Models\Player\PlayerBackground;
use App\Models\Player\PlayerPersonality;
use App\Models\Team\RosterPosition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parental\HasChildren;

/**
 * App\Models\GameChanger\GameChanger
 *
 * @property int $id
 * @property string $type
 * @property array $bonus_type
 * @property int $rarity
 * @property int $roster_position_id
 * @property array $focus_id
 * @property int $player_personality_id
 * @property int $player_background_id
 * @property string $intangible
 * @property string $name
 * @property string $description
 * @property string $image
 * @property int $celebrity
 * @property int $rep
 * @property int $fitness
 * @property int $moxie
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger query()
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameChanger whereType($value)
 * @mixin \Eloquent
 */
class GameChanger extends Model
{
    use HasFactory;
    use HasChildren;

    public $timestamps = false;

    protected $fillable = [
        'type',
        'category',
        'bonus_type',
        'rarity',
        'roster_position_id',
        'focus_id',
        'player_personality_id',
        'player_background_id',
        'intangible',
        'name',
        'description',
        'image',
        'celebrity',
        'rep',
        'fitness',
        'moxie'
    ];

    /*protected $casts = [
        'bonus_type' => 'array',
        'focus_id' => 'array'
    ];*/

    protected $attributes = [
        'bonus_type' => []
    ];

    public function batterSkill()
    {
        return $this->hasOne(BatterSkill::class);
    }

    public function pitcherSkill()
    {
        return $this->hasOne(PitcherSkill::class);
    }

    public function position()
    {
        return $this->belongsTo(RosterPosition::class);
    }

    public function playerPersonality()
    {
        return $this->belongsTo(PlayerPersonality::class);
    }

    public function playerBackground()
    {
        return $this->belongsTo(PlayerBackground::class);
    }
}
