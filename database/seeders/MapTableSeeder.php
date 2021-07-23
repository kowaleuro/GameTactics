<?php

namespace Database\Seeders;

use App\Models\Map;
use Illuminate\Database\Seeder;

class MapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array('de_inferno','de_overpass','de_dust2','de_mirage');

        foreach ($array as $item){
            $map = new \App\Models\Map([
                    'map_name' => $item
                ]);
            $map->save();
        }
    }
}
