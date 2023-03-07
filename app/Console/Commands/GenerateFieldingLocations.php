<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateFieldingLocations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:fielding-locations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates the fielding location classes';

    /**
     * Classes to import.
     *
     * @var string[]
     */
    protected array $use = [
        'App\\Modules\\Chance'
    ];

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $grid = ['A','B','C','D','E','F','G'];
        $find = ['{{ using }}', '{{ class }}', '{{ fielder-class }}', '{{ fielder }}'];

        foreach ($grid as $letter) {

            for ($i=1; $i<=6; $i++) {

                $class = $letter . $i;
                $path = app_path("Sim/Fielding/Location/{$class}.php");

                if (file_exists($path)) {
                    continue;
                }

                $use = $this->use;
                $fielderClass = $this->fielderClass($class);
                $use[] = "App\\Models\\Player\\$fielderClass";
                sort($use);

                $using = '';
                foreach ($use as $className) {
                    $using .= "use $className;\n";
                }

                $stub = file_get_contents(base_path('stubs/fielding-location.stub'));
                $replace = [$using, $class, $fielderClass, $this->methodForClass($class)];
                $contents = str_replace($find, $replace, $stub);

                file_put_contents($path, $contents);
            }
        }
    }

    protected function methodForClass($class)
    {
        return match($class) {
            'A1', 'A2' => '$this->game->thirdBaseman()',
            'B1' => '$this->defensiveRange($this->game->thirdBaseman(), 0.6, $this->game->shortstop(), 0.65); // third of ss',
            'B2', 'C1', 'C2' => '$this->game->shortstop()',
            'D1', 'D2' => '$this->game->pitcher()',
            'E1', 'E2', 'F2' => '$this->game->secondBaseman()',
            'F1' => '$this->defensiveRange($this->game->firstBaseman(), 0.6, $this->game->secondBaseman(), 0.65); // first or second',
            'G1', 'G2' => '$this->game->firstBaseman()',
            'A3', 'B3', 'A4', 'B4', 'A5', 'B5' => '$this->game->leftFielder()',
            'C3' => '$this->defensiveRange($this->game->centerFielder(), 0.45, $this->game->leftFielder(), 0.65); // center or left',
            'C4' => '$this->defensiveRange($this->game->centerFielder(), 0.65, $this->game->leftFielder(), 0.8); // center or left',
            'C5' => '$this->defensiveRange($this->game->leftFielder(), 0.65, $this->game->centerFielder(), 0.8); // left or center',
            'D3', 'D4', 'D5', 'C6', 'D6', 'E6' => '$this->game->centerFielder()',
            'E3' => '$this->defensiveRange($this->game->centerFielder(), 0.45, $this->game->rightFielder(), 0.65); // center or right',
            'E4' => '$this->defensiveRange($this->game->centerFielder(), 0.65, $this->game->rightFielder(), 0.8); // center or right',
            'E5' => '$this->defensiveRange($this->game->rightFielder(), 0.65, $this->game->centerFielder(), 0.8); // right or center',
            'F3', 'G3', 'F4', 'G4', 'F5', 'G5' => '$this->game->rightFielder()',
            'A6', 'B6', 'F6', 'G6' => 'null',
        };
    }

    /**
     * @param string $class
     * @return string
     */
    protected function fielderClass(string $class): string
    {
        return match($class) {
            'D1', 'D2' => 'Pitcher',
            default => 'Batter'
        };
    }
}
