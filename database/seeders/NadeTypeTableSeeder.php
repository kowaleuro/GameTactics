<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NadeTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array('smokegrenade','molotov','flashgrenade','hegrenade');

        foreach ($array as $item){
            $nadeType = new \App\Models\NadeType([
                    'nade_type_name' => $item
                ]);
            $nadeType->save();
        }
    }
}
