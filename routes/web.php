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

Route::get('/blah', function(){
    $bullpen = \App\Models\Team\Bullpen::find(1);
    $bullpen->normalize();
    dd($bullpen->startingPitcher1()->skill->paint_corner());
});

Route::get('/sim/{id}', function(int $id){
    $sim = new App\Sim\Sim(\App\Models\League::find(1));
    $sim->run();
});

Route::get('/lineup/{id}', function(int $id){
    $l = \App\Models\Team\Lineup::find($id);
    $l->normalize();
    echo '<table>';
    /** @var Batter $batter */
    foreach ($l->batters() as $batter) {
        echo "<tr><td>$batter->id</td><td>$batter->name</td></tr>";
        foreach (\App\Models\Player\Skill\Skill::skillsFor(Batter::class) as $skill) {
            $value = $batter->skill->{$skill->attribute};
            echo "<tr><td>$skill->name</td><td>$value</td></tr>";
        }
    }
    echo '</table>';
});

Route::get('/gc', function() {
    $gc = new App\Models\GameChanger\GameChanger();
    $gc->type = 'blah';
    $gc->bonus_type = 'import,base_running';
    $gc->rarity = 1;
    $gc->roster_position_id = null;
    $gc->focus_id = '1,2';
    $gc->player_personality_id = null;
    $gc->player_background_id = null;
    $gc->intangible = null;
    $gc->name = 'blah';
    $gc->description = 'blah';
    $gc->image = 'blah';
    $gc->celebrity = 0;
    $gc->rep = 0;
    $gc->fitness = 0;
    $gc->moxie = 0;
    $gc->save();
});

Route::get('/make-user', function(){
    $user = new \App\Models\User();
    $user->email = 'travis@twooutrally.com';
    $user->name = 'Travis Miller';
    $user->email_verified_at = (string) \Carbon\Carbon::now();
    $user->password = \Illuminate\Support\Facades\Hash::make('password');
    $user->save();
});

Route::get('/wpa', function(){
    $wpa = new \App\Sim\WpaTable();
    print_r($wpa->getTree());
});
