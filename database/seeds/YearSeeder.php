<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('years')->insert([

            [
                'name' => '2020',

               
            ],
            [
                'name' => '2021',
             
               
            ],
            [
                'name' => '2022',
           
               
            ],
            [
                'name' => '2023',
            
               
            ],
            [
                'name' => '2024',
             
            
            ],
            [
                'name' => '2025',
              
               
            ],
            [
                'name' => '2026',
             
               
            ],
            [
                'name' => '2027',
             
               
            ],
            [
                'name' => '2028',
              
               
            ],
            [
                'name' => '2029',
            
               
            ],
            [
                'name' => '2030',
             
               
            ],
        ]);
    }
}
