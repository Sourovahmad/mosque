<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salats')->insert([
            [
                'fajr' => '05:35:00',
                'dhuhr' => '11:43:00',
                'jumma' => '11:40:00',
                'asr' => '14:49:00',
                'maghrib' => '16:30:00',
                'isha' => '17:50:00',
            ],
        ]);
    }
}
