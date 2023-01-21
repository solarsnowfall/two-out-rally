<?php

namespace App\Models\Player;


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
 * @property-read \App\Models\Player\PitcherSkill|null $skill
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
 */
class Pitcher extends Player
{
    protected $table = 'players';

    public function skill()
    {
        return $this->hasOne(PitcherSkill::class, 'player_id', 'id');
    }

    public function getAvoidFlyBallPower(): int
    {
        return $this->skillBlender($this->skill->induce_popup, $this->skill->induce_grounder);
    }

    public function getAvoidGrounder(): int
    {
        return $this->skillBlender($this->skill->release, $this->skill->pickoff, $this->skill->explosiveness);
    }

    public function getAvoidLiner(): int
    {
        return $this->skillBlender(
            $this->skill->horizontal_break,
            $this->skill->induce_grounder,
            $this->skill->paint_corner
        );
    }

    public function getAvoidWalk(): int
    {
        return $this->skillBlender($this->skill->paint_corner, $this->skill->mechanics, $this->skill->release);
    }

    public function getAvoidWildPitch(): int
    {
        return $this->skillBlender($this->skill->mechanics, $this->skill->vertical_break);
    }

    public function getStrikeout(): int
    {
        return $this->skillBlender($this->skill->power, $this->skill->explosiveness, $this->skill->vertical_break);
    }
}
