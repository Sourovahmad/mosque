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
                'fajr' => '05:20:00',
                'dhuhr' => '11:40:00',
                'jumma' => '11:40:00',
                'asr' => '14:21:00',
                'maghrib' => '16:44:00',
                'isha' => '18:42:00',
                'image_id' => 11,
            ],
        ]);
    }
}
