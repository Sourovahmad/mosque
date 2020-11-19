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
                'year' => '2020',
                'month' => '12',
                'image_id' => '9',
            ],
            [
                'year' => '2021',
                'month' => '10',
                'image_id' => '9',
            ],            [
                'year' => '2022',
                'month' => '8',
                'image_id' => '9',
            ],            [
                'year' => '2023',
                'month' => '6',
                'image_id' => '9',
            ],
            
        ]);
    }
}
