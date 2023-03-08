<?php

namespace App\Modules;

class HitLocation
{
    protected int $distance;
    protected HitVector $vector;

    public function __construct(HitVector $vector, int $distance)
    {
        $this->vector = $vector;
        $this->distance = $distance;
    }

    public static function zoneDescription(string $zone)
    {
        list($vector, $distance) = str_split($zone);

        return HitVector::fromValue($vector)->description($distance);
    }

    /**
     * @return string
     */
    public function getGridLocation(): string
    {
        return $this->vector->name . $this->distance;
    }

    public function getDescription(): string
    {
        return $this->vector->description($this->distance);
    }
}
