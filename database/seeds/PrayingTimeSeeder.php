<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrayingTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('praying_times')->insert([
            [
                'year_id' => '1',
                'month_id' => '12',
                'image_id' => '9',
            ],
            [
                'year_id' => '2',
                'month_id' => '10',
                'image_id' => '9',
            ],            [
                'year_id' => '3',
                'month_id' => '8',
                'image_id' => '9',
            ],            [
                'year_id' => '3',
                'month_id' => '6',
                'image_id' => '9',
            ],
            
        ]);
    }
}
