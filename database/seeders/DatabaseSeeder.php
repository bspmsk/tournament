<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $divisions = DB::table('divisions');
        $divisions->insertOrIgnore(['name' => 'A']);
        $divisions->insertOrIgnore(['name' => 'B']);

        $stages = DB::table('stages');
        $stages->insertOrIgnore([
            'id' => 1,
            'name' => 'group_stage'
        ]);
        $stages->insertOrIgnore([
            'id' => 2,
            'name' => 'quarter_final'
        ]);
        $stages->insertOrIgnore([
            'id' => 3,
            'name' => 'semi_final'
        ]);
        $stages->insertOrIgnore([
            'id' => 4,
            'name' => 'final'
        ]);

    }
}
