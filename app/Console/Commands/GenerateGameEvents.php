<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateGameEvents extends Command
{
    public static $class_list = [
        'Strikeout',
        'Walk',
        'BatterHitByPitch',
        'RunnersAdvanceOnWildPitch',
        'RunnersAdvanceOnPassedBall',
        'RunnerCaughtStealingSecond',
        'RunnerCaughtStealingThird',
        'RunnerPickedOffAtFirst',
        'RunnerPickedOffAtSecond',
        'RunnerStealsSecond',
        'RunnerStealsThird',
        'Popup',
        'BaseHit',
        'Flyout',
        'FlyBallSingle',
        'FlyBallDouble',
        'FlyBallTriple',
        'FlyBallFieldingError',
        'FlyBallTwoBaseFieldingError',
        'Lineout',
        'LinedriveSingle',
        'LinedriveDouble',
        'LinedriveTriple',
        'LinedriveSingleRunnerOutAtHome',
        'LinedriveDoubleRunnerOutAtHome',
        'Groundout',
        'GroundballInfieldSingle',
        'GroundballSingle',
        'GroundballDouble',
        'GroundballDropped',
        'GroundballFieldingError',
        'GroundballThrowingError',
        'GroundballTwoBaseThrowingError',
        'GroundballWildThrowSaved',
        'GroundballToDoublePlay',
        'GroundballWildThrowSavedDoublePlay',
        'GroundballForceOutSafeAtFirstOnFielderChoice',
        'GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError'
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:game-events';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates the list of game event classes';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $stub = file_get_contents(base_path('stubs/game-event.stub'));

        foreach (static::$class_list as $name) {

            $path = app_path("Models/Sim/Events/{$name}.php");

            if (file_exists($path)) {
                continue;
            }

            $contents = str_replace('{{ class }}', $name, $stub);
            file_put_contents($path, $contents);
        }

        return Command::SUCCESS;
    }
}
