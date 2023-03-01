<?php

namespace App\Modules;

class Leverage
{
    protected static array $data = [
        'very_low' => [
            'range_low' => 0,
            'range_high' => 0.1,
        ],
        'low' => [
            'range_low' => 0.1,
            'range_high' => 1,
        ],
        'medium' => [
            'range_low' => 0.13,
            'range_high' => 1,
        ],
        'high' => [
            'range_low' => 0.15,
            'range_high' => 1,
        ],
        'very_high' => [
            'range_low' => 0.18,
            'range_high' => 0.1,
        ],
        'critical' => [
            'range_low' => 0,
            'range_high' => 0.1,
        ]
    ];

    public function __construct(
        public string $name,
        public float $range_low,
        public float $range_high
    ) {}

    /**
     * @return Leverage[]
     */
    public static function all(): array
    {
        $all = [];

        foreach (array_keys(static::$data) as $name) {
            $all[] = static::make($name);
        }

        return $all;
    }

    public static function make(string $name): static
    {
        return new self(
            $name,
            static::$data[$name]['range_low'],
            static::$data[$name]['range_high']
        );
    }

    public function check(float $wpa_offset): bool
    {
        return $wpa_offset >= $this->range_low && $wpa_offset <= $this->range_high;
    }
}
