<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('months')->insert([

            [
                'name' => 'January',

               
            ],
            [
                'name' => 'February',
             
               
            ],
            [
                'name' => 'March',
           
               
            ],
            [
                'name' => 'April',
            
               
            ],
            [
                'name' => 'May',
             
            
            ],
            [
                'name' => 'June',
              
               
            ],
            [
                'name' => 'July',
             
               
            ],
            [
                'name' => 'August',
             
               
            ],
            [
                'name' => 'September',
              
               
            ],
            [
                'name' => 'October',
            
               
            ],
            [
                'name' => 'November',
             
               
            ],
            
            [
                'name' => 'December',
             
               
            ],
        ]);
    }
}
