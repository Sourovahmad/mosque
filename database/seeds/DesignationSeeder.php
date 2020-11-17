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
                'name' => 'Sr. Vice President',
                'description' => 'Sr. Vice President',
            ],
            [
                'name' => ' Vice President',
                'description' => 'Description Vice President',
            ],

            [
                'name' => 'General Secretary',
                'description' => 'Description OF General Secretary',
            ],

            [
                'name' => 'Joint Secretary',
                'description' => 'Description OF Joint Secretary',
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
                'name' => 'Assistant Treasurer',
                'description' => 'Description OF Assistant Treasurer ',
            ],
            [
                'name' => 'Organizing Secretary',
                'description' => 'Description OF Organizing Secretary',
            ],
            
            [
                'name' => 'Ass. Organizing Secretary',
                'description' => 'Description OF Ass. Organizing Secretary',
            ],
            
            
            [
                'name' => 'Education & Cultural Secretary',
                'description' => 'Description OF Education & Cultural Secretary',
            ],
            [
                'name' => 'Ass. Education & Cultural Secretary',
                'description' => ' Description OF Ass. Education & Cultural Secretary',
            ],
            [
                'name' => 'Executive Member',
                'description' => 'Executive Member',
            ],

            [
                'name' => 'Member',
                'description' => 'Description OF Member',
            ],
            

            [
                'name' => 'Chairman',
                'description' => 'Description OF Chairman',
            ],

         ]);
    }    
}
