<?php

use App\Models\Player\Batter;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function(){
    echo '<p>Raw</p>';
    $batter = Batter::find(14);
    $average = new \App\Modules\AverageBatterSkills($batter->team->league);
    foreach (\App\Models\Player\Skill::skillsFor(Batter::class) as $skill) {
        echo $skill->label . ': ' . $batter->skill->{$skill->label} . "<br />";
    }
    echo '<p>Normalized</p>';
    $batter->normalize($average->fetchAverages());
    foreach (\App\Models\Player\Skill::skillsFor(Batter::class) as $skill) {
        echo $skill->name . ': ' . $batter->skill->{$skill->label} . "<br />";
    }
});

Route::get('/play', function(){

    $away = \App\Models\Team\Team::find(2);
    $home = \App\Models\Team\Team::find(1);

    $lineup = new \App\Modules\Lineup($away);
    $pitcher = $home->pitchers()->first();
    $outs = 0;

    for ($i=0; $i<10&&$outs<3; $i++) {
        $batter = $lineup->next();
        $atBat = new \App\Modules\AtBat($batter, $pitcher);
        $outcome = $atBat->outcome();

        if ($outcome === \App\Modules\AtBatOutcome::Strikeout) {
            $outs++;
        }

        echo $outcome->value . "<br />";
    }
});

Route::get('/stats', function(){
   $keys = explode(', ', file_get_contents(__DIR__ .'/../database/seeders/src/old_stat_keys.txt'));
   $content = file_get_contents(__DIR__ .  '/../database/seeders/src/old_stat_values.txt');
   $content = substr($content, 2, -2);
   $rows = explode("'), ('", $content);
   $values = [];
   foreach ($rows as $row) {
       $cols = explode("', '", $row);
       $row = [];
       foreach ($keys as $key => $val) {
           $row[trim($val)] = $cols[$key];
       }
       $values[] = $row;
   }
   $wpa = array_column($values, 'wpa');
   arsort($wpa);
   print_r($wpa);
});
