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
                'name' => 'Muhammad Manjurul Karim',
                'image_id' => '2',
                'designation' => 'Imam and Religious Teacher',
            ],   [
                'name' => 'Hafez Mohammed Rafiqul Islam',
                'image_id' => '1',
                'designation' => 'Imam And Director',
            ],

        ]);
    }
}
