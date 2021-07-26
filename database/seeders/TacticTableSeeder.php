<?php

namespace Database\Seeders;

use App\Models\Tactic;
use Illuminate\Database\Seeder;

class TacticTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tactic = new Tactic([
           'tactic_name' => 'Mirage A smokes',
            'map_id' => 4,
            'tactic_description' => 'In order to take bombsite A on mirage, you only need 3 basic smokes, 1 mollotov and 2 flashes',
            'tactic_content' =>
                    '<p style="text-align: justify;">&nbsp;</p>
                    <h3>Nades</h3>
                    <p style="text-align: justify; padding-left: 40px;"><strong>1)</strong> 3 players get ready to throw smokes (<strong><span style="color: #ba372a;">stairs, ct, jungle</span></strong>) near A ramp - if there is only 3 of you on ramp, <strong>one must cover for the ct pushing</strong> (most of the times it will be guy smoking off jungle).</p>
                    <p style="text-align: justify; padding-left: 40px;"><strong>2)</strong> 1/2 guys go into palace and take control of it - you only need one guy there to throw molly under wood so you do you.</p>
                    <p style="text-align: justify; padding-left: 40px;"><strong>3)&nbsp;</strong>one of ramp guys has to flash above A ( "lamp flash") and a after your teammates run out of ramp simple flash behind them</p>
                    <h3 style="text-align: left;">Execution</h3>
                    <p>Ramp players: Throw all smokes at the same time and head toward ramp and go out after first flash (one guy need to stay behind to flash). It is important to <strong>go towards site not tetris</strong>, because you need to plant the bomb, while smokes are still up.</p>
                    <p>Palace: After trowing molly you help to fight with counter terrorists on site (fireboxes, standard etc). You should peek after the second flash.</p>
                    <p>Flash: After your flashes you can take care of behind or join your teammates on the site.</p>'
        ]);
        $tactic->save();

        $tactic = new Tactic([
            'tactic_name' => 'D2 Rush B',
            'map_id' => 3,
            'tactic_description' => 'rush b fast and win the round',
            'tactic_content' =>
                '<p>RUUUUUUUUUSH</p>
                <p>DOOOON\'T STOOOOOOOOOOOOOOOOOOP</p>
                <p>RUUUUUUUUUUUUUUUUUUUUUUUSH</p>'
        ]);
        $tactic->save();
    }
}
