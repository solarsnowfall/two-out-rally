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
    $rows = \Illuminate\Support\Facades\DB::connection('tor_old')
        ->select('SELECT * FROM tor_wbl_events_human4_p1s19');
    $codes = array_column($rows, 'code');
    $codes = array_unique($codes);
    print_r($codes);
});

Route::get('/sim', function(){
    $sim = new App\Sim\Sim();
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
