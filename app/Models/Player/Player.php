<?php

namespace App\Models\Player;

use App\Models\Stats\DefensiveStat;
use App\Models\Team\RosterPosition;
use App\Models\Team\Team;
use App\Models\Team\TeamPlayer;
use App\Modules\BlendsSkills;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parental\HasChildren;

/**
 * App\Models\Player\Player
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $team_id
 * @property int $availability
 * @property string $handedness
 * @property int $position_id
 * @property int $background_id
 * @property int $personality_id
 * @property string $name
 * @property int $level
 * @property int $experience
 * @property int $experience_up
 * @property int $skill_points
 * @property int $moxie
 * @property int $moxie_up
 * @property int $height
 * @property int $weight
 * @property int $age
 * @property string $hometown
 * @property int $birth_day
 * @property int $birth_season
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read RosterPosition|null $rosterPosition
 * @property-read Team|null $team
 * @method static \Illuminate\Database\Eloquent\Builder|Player newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Player newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Player query()
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereAvailability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereBirthDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereBirthSeason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereExperienceUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereHandedness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereHometown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereMoxieUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player wherePersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereSkillPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereWeight($value)
 * @mixin \Eloquent
 * @property string $height_class
 * @property string $weight_class
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereHeightClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereWeightClass($value)
 * @method static \Database\Factories\Player\PlayerFactory factory(...$parameters)
 * @property int|null $team_player_id
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereTeamPlayerId($value)
 * @property-read TeamPlayer|null $teamPosition
 * @property string $type
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereType($value)
 */
class Player extends Model
{
    use HasFactory;
    use HasChildren;

    protected $fillable = [
        'user_id',
        'availability',
        'handedness',
        'position_id',
        'background_id',
        'personality_id',
        'name',
        'level',
        'experience',
        'experience_up',
        'skill_points',
        'moxie',
        'moxie_up',
        'stealing',
        'effort',
        'height',
        'weight',
        'age',
        'hometown',
        'birth_day',
        'birth_season'
    ];

    /**
     * @return bool
     */
    public function isPitcher(): bool
    {
        return $this->position_id === Position::P;
    }

    public function teamPlayer()
    {
        return $this->belongsTo(TeamPlayer::class, 'player_id', 'id');
    }

    public function defensiveStats()
    {
        return $this->hasMany(DefensiveStat::class);
    }

    public function rosterPosition()
    {
        return $this->hasOneThrough(
            RosterPosition::class,
            TeamPlayer::class,
            'player_id',
            'id',
            'id',
            'roster_position_id'
        );
    }

    public function team()
    {
        return $this->hasOneThrough(
            Team::class,
            TeamPlayer::class,
            'player_id',
            'id',
            'id',
            'team_id'
        );
    }
}
