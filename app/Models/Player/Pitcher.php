<?php

namespace App\Models\Player;


use App\Models\Player\Skill\PitcherSkill;
use App\Models\Stats\PitchingStat;
use Parental\HasParent;

/**
 * App\Models\Player\Pitcher
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
 * @property-read \App\Models\Player\Skill\PitcherSkill|null $skill
 * @property-read \App\Models\Team\Team|null $team
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereAvailability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereBirthDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereBirthSeason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereExperienceUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereHandedness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereHometown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereMoxieUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher wherePersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereSkillPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereWeight($value)
 * @mixin \Eloquent
 * @property string $height_class
 * @property string $weight_class
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereHeightClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereWeightClass($value)
 * @method static \Database\Factories\Player\PitcherFactory factory(...$parameters)
 * @property int|null $team_player_id
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereTeamPlayerId($value)
 * @property-read \App\Models\Team\TeamPlayer|null $teamPosition
 * @property string $type
 * @method static \Illuminate\Database\Eloquent\Builder|Pitcher whereType($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Stats\DefensiveStat[] $defensiveStats
 * @property-read int|null $defensive_stats_count
 * @property-read \Illuminate\Database\Eloquent\Collection|PitchingStat[] $pitchingStats
 * @property-read int|null $pitching_stats_count
 * @property-read \App\Models\Team\TeamPlayer $teamPlayer
 * @property-read \App\Models\Player\Position $position
 */
class Pitcher extends Player
{
    use HasParent;

    protected $table = 'players';

    private int $pitches = 0;


    public function skill()
    {
        return $this->hasOne(PitcherSkill::class, 'player_id', 'id');
    }

    public function pitchingStats()
    {
        return $this->hasMany(PitchingStat::class);
    }
}
