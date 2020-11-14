<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
            
            [
                'name' => 'President',
                'description' => 'Description OF President',
            ],

            [
                'name' => 'General Secretary',
                'description' => 'Description OF General Secretary',
            ],

            [
                'name' => 'Ass. Secretary',
                'description' => 'Description OF Ass. Secretary',
            ],

            [
                'name' => 'Treasurer',
                'description' => 'Description OF Treasurer ',
            ],
            [
                'name' => 'Organizing Secretary',
                'description' => 'Description OF Organizing Secretary',
            ],

            [
                'name' => 'Member',
                'description' => 'Description OF Member',
            ],

         ]);
    }    
}
