<?php

namespace App\Models\Player;

use App\Models\Stats\DefensiveStat;
use Parental\HasParent;

/**
 * App\Models\Player\Batter
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
 * @property-read \App\Models\Team\RosterPosition|null $rosterPosition
 * @property-read BatterSkill|null $skill
 * @property-read \App\Models\Team\Team|null $team
 * @method static \Illuminate\Database\Eloquent\Builder|Batter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Batter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Batter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereAvailability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereBirthDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereBirthSeason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereExperienceUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereHandedness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereHometown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereMoxieUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter wherePersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereSkillPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereWeight($value)
 * @mixin \Eloquent
 * @property string $height_class
 * @property string $weight_class
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereHeightClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereWeightClass($value)
 * @method static \Database\Factories\Player\BatterFactory factory(...$parameters)
 * @property int|null $team_player_id
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereTeamPlayerId($value)
 * @property-read \App\Models\Team\TeamPlayer|null $teamPosition
 * @property string $type
 * @method static \Illuminate\Database\Eloquent\Builder|Batter whereType($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|DefensiveStat[] $defensiveStats
 * @property-read int|null $defensive_stats_count
 * @property-read \Illuminate\Database\Eloquent\Collection|DefensiveStat[] $offensiveStats
 * @property-read int|null $offensive_stats_count
 * @property-read \App\Models\Team\TeamPlayer|null $teamPlayer
 */
class Batter extends Player
{
    use HasParent;

    protected $table = 'players';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function skill()
    {
        return $this->hasOne(BatterSkill::class, 'player_id', 'id');
    }

    public function offensiveStats()
    {
        return $this->hasMany(DefensiveStat::class);
    }
}
