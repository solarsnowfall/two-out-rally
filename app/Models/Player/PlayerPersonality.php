<?php

namespace App\Models\Player;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Player\PlayerPersonality
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality whereName($value)
 * @mixin \Eloquent
 * @property int $charisma
 * @property int $chemistry
 * @property int $competitiveness
 * @property int $leadership
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality whereCharisma($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality whereChemistry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality whereCompetitiveness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality whereLeadership($value)
 */
class PlayerPersonality extends Model
{
    use HasFactory;

    const THE_DUDE = 1;
    const THE_SHOWBOAT = 2;
    const THE_HOTHEAD = 3;
    const THE_CAPTAIN = 4;
    const THE_PROFESSIONAL = 5;
    const THE_SURLY = 6;
    const THE_WHIZ_KID = 7;

    protected $fillable = ['name', 'description'];

    public static function randomId(): int
    {
        return mt_rand(static::THE_DUDE, static::THE_WHIZ_KID);
    }
}
