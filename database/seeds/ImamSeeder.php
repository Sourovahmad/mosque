<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imams')->insert([

            [
                'name' => 'Imam Hafez Rafiqul Islam',
                'image_id' => '1',
                'designation' => 'Quran Teacher',
            ],
            [
                'name' => 'Muhammad Manjurul Karim',
                'image_id' => '2',
                'designation' => 'Imam and Religious Teacher',
            ],

        ]);
    }
}
