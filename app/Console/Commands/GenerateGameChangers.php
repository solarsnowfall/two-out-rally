<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GenerateGameChangers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:game-changers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates Game Changer class files.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->purge();
        $game_changers = DB::table('game_changers')->select()->get();

        foreach ($game_changers as $game_changer) {

            $parts = explode('\\', $game_changer->type);
            $class = array_pop($parts);

            if ($class === "126Curveball") {
                $class = "TwelveSixCurveball";
            }

            $namespace = implode('\\', $parts);
            unset($parts[0]);
            $path = app_path(implode(DIRECTORY_SEPARATOR, $parts) . "\\{$class}.php");
            $stub = file_get_contents(base_path('stubs/gamechanger.stub'));
            $find = ['{{ namespace }}', '{{ class }}', '{{ extends }}'];
            $replace = [$namespace, $class, $this->getParentClass($game_changer->category)];
            $contents = str_replace($find, $replace, $stub);
            file_put_contents($path, $contents);
        }
    }

    private function getParentClass(string $category)
    {
        return match($category) {
            'hitter_approach' => 'BatterGameChanger',
            'pitcher_approach' => 'PitcherGameChanger',
            'team_approach' => 'TeamGameChanger'
        };
    }

    private function purge()
    {
        $paths = [
            app_path('Models/GameChanger/Batter/'),
            app_path('Models/GameChanger/Pitcher/'),
            app_path('Models/GameChanger/Team/')
        ];

        foreach ($paths as $path) {
            $iterator = new \RecursiveDirectoryIterator($path);
            /** @var \SplFileInfo $file */
            foreach (new \RecursiveIteratorIterator($iterator) as $file) {
                if ($file->isFile() && $file->getExtension() === 'php'){
                    unlink($file->getPathname());
                }
            }
        }
    }
}
