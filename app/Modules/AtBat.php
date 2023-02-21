<?php

namespace App\Modules;

use App\Models\Player\Batter;
use App\Models\Player\Pitcher;

class AtBat
{
    /**
     * @var Batter
     */
    public Batter $batter;

    public HitLocation $hitLocation;

    /**
     * @var HitType
     */
    public HitType $hitType;

    /**
     * @var HitVector
     */
    public HitVector $hitVector;

    /**
     * @var AtBatOutcome
     */
    public AtBatOutcome $outcome;

    /**
     * @var Pitcher
     */
    public Pitcher $pitcher;

    /**
     * @param Batter $batter
     * @param Pitcher $pitcher
     */
    public function __construct(Batter $batter, Pitcher $pitcher)
    {
        $this->batter = $batter;
        $this->pitcher = $pitcher;
        $this->outcome = $this->outcome();

        if ($this->outcome === AtBatOutcome::Hit) {
            $this->hitType = $this->hitType();
            $this->hitVector = $this->hitVector();
            $this->hitLocation = $this->hitLocation();
        }
    }

    /**
     * @return HitLocation
     */
    public function hitLocation(): HitLocation
    {
        switch ($this->hitType) {
            case HitType::FlyBall:
                return new HitLocation($this->hitVector, $this->flyBallDistance());
            case HitType::LineDrive:
                return new HitLocation($this->hitVector, 2);
            default:
                return new HitLocation($this->hitVector, 1);
        }
    }

    /**
     * @return HitType
     */
    public function hitType(): HitType
    {
        $lhp = 62.2 + $this->batter->skill->liner() * 0.113;
        $lhp += $this->batter->skill->grounder() * 0.296;
        $lhp += $this->batter->skill->flyBall() * 0.354;
        $lhp -= $this->pitcher->skill->avoidLiner() * 0.113;
        $lhp += $this->pitcher->skill->induce_grounder * 0.296;
        $lhp -= $this->pitcher->skill->induce_popup * 0.354;
        $lhp = Chance::constrain($lhp / 100, 0.437, 0.846);

        return Chance::roll() > $lhp ? $this->highHit() : $this->lowHit();
    }

    /**
     * @return AtBatOutcome
     */
    public function outcome(): AtBatOutcome
    {
        if ($this->ballInPlay()) {
            return AtBatOutcome::Hit;
        }

        if ($this->struckOut()) {
            return AtBatOutcome::Strikeout;
        }

        return AtBatOutcome::Walk;
    }

    /**
     * @return HitVector
     */
    public function hitVector(): HitVector
    {
        $vector = $this->batter->skill->bat_control * 0.2;
        $vector -= $this->batter->skill->pull * 0.2;
        $vector /= 100;

        $direction = Chance::roll() - $vector;

        if ($direction < 0) {
            $direction = 0.2;
        } elseif ($direction > 1) {
            $direction = 0.85;
        }

        if ($this->batter->handedness == Handedness::Left) {
            $direction = 1.0 - $direction;
        }

        switch ($direction) {
            case ($direction >= 0 && $direction <= 0.1):
                return HitVector::A;
            case ($direction > 0.1 && $direction <= 0.286):
                return HitVector::B;
            case ($direction > 0.286 && $direction <= 0.429):
                return HitVector::C;
            case ($direction > 0.429 && $direction <= 0.573):
                return HitVector::D;
            case ($direction > 0.573 && $direction <= 0.716):
                return HitVector::E;
            case ($direction > 0.716 && $direction <= 0.899):
                return HitVector::F;
            default:
                return HitVector::G;
        }
    }

    /**
     * @param int $bonus
     * @return int
     */
    public function flyBallDistance(int $bonus = 0): int
    {
        $power = $this->batter->skill->flyballPower($bonus) * 0.2;
        $power -= $this->pitcher->skill->avoidFlyBallPower() * 0.2;
        $power = Chance::constrain(($power + 13.7) / 100, -0.3, -0.049);

        $distance = Chance::constrain(Chance::roll() + $power, 0, 1.0);

        return floor($distance * 4 + 3);
    }

    /**
     * @return bool
     */
    protected function ballInPlay(): bool
    {
        $bip = $this->batter->skill->walk() * 0.314;
        $bip -= $this->batter->skill->avoidStrikeout() * 0.314;
        $bip -= $this->pitcher->skill->avoidWalk() * 0.314;
        $bip += $this->pitcher->skill->strikeout() * 0.314;
        $bip = Chance::constrain(($bip + 26.3) / 100, 0.097, 0.56);

        return Chance::roll() > $bip;
    }

    /**
     * @return HitType
     */
    protected function lowHit(): HitType
    {
        $gb = 64.8 - $this->batter->skill->liner() * 0.264;
        $gb += $this->pitcher->skill->avoidLiner() * 0.264;
        $gb = Chance::constrain($gb / 100, 0.511, 0.755);

        return Chance::roll() > $gb ? HitType::LineDrive : HitType::GroundBall;
    }

    /**
     * @return HitType
     */
    protected function highHit(): HitType
    {
        $fb = 69.4 + $this->batter->skill->fly_ball * 0.102;
        $fb -= $this->pitcher->skill->induce_popup * 0.102;
        $fb = Chance::constrain($fb / 100, 0.592, 0.796);

        return Chance::roll() > $fb ? HitType::PopUp : HitType::FlyBall;
    }

    /**
     * @return PopUp
     */
    protected function popup(): PopUp
    {
        $popup = new PopUp();
        $popup->type = HitType::PopUp;
        $roll = Chance::roll();

        switch ($roll) {
            case ($roll >= 0 && $roll <= 0.2):
                $popup->position = FieldPosition::SecondBase;
                break;
            case ($roll > 0.2 && $roll <= 0.4):
                $popup->position = FieldPosition::Shortstop;
                break;
            case ($roll > 0.4 && $roll <= 0.5):
                $popup->position = FieldPosition::FirstBase;
                break;
            case ($roll > 0.5 && $roll <= 0.6):
                $popup->position = FieldPosition::ThirdBase;
                break;
            case ($roll > 0.6 && $roll <= 0.7):
                $popup->position = FieldPosition::Catcher;
                break;
            case ($roll > 0.7 && $roll <= 0.74):
                $popup->position = FieldPosition::Pitcher;
                break;
            case ($roll > 0.74 && $roll <= 0.8):
                $popup->position = FieldPosition::LeftField;
                break;
            case ($roll > 0.8 && $roll <= 0.87):
                $popup->position = FieldPosition::CenterField;
                break;
            case ($roll > 0.87 && $roll <= 0.97):
                $popup->position = FieldPosition::RightField;
                break;
            case ($roll > 0.97 && $roll <= 0.98):
                $popup->type = HitType::BaseHit;
                $popup->position = FieldPosition::LeftField;
                break;
            case ($roll > 0.98 && $roll <= 0.99):
                $popup->type = HitType::BaseHit;
                $popup->position = FieldPosition::CenterField;
                break;
            case ($roll > 0.9 && $roll <= 1.0):
                $popup->type = HitType::BaseHit;
                $popup->position = FieldPosition::RightField;
                break;
        }

        return $popup;
    }

    protected function struckOut(): bool
    {
        $wp = $this->batter->skill->walk() * 0.314;
        $wp -= $this->pitcher->skill->avoidWalk() * 0.314;
        $wp += $this->batter->skill->avoidStrikeout() * 0.314;
        $wp -= $this->pitcher->skill->strikeout() * 0.314;
        $wp = Chance::constrain(($wp + 33.3) / 100, 0.1, 0.6);

        return Chance::roll() > $wp;
    }
}
