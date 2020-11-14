<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('committees')->insert([
            
            [
                'name' => 'Md Ruhul',
                'designation_id' => 1,
                'member_type' => 1,
                'session_id' => 1,
                'phone' => '01840000408',
                'position' => 1,
            ],
            [
                'name' => 'Md Sourov ',
                'designation_id' => 2,
                'member_type' => 2,
                'session_id' => 2,
                'phone' => '01729867026',
                'position' => 2,
            ],
            [
                'name' => 'Md Masum ',
                'designation_id' => 3,
                'member_type' => 3,
                'session_id' => 3,
                'phone' => '01718988564',
                'position' => 3,
            ],
            [
                'name' => 'Khan Mohammad ',
                'designation_id' => 2,
                'member_type' => 2,
                'session_id' => 2,
                'phone' => '12345678911',
                'position' => 2,
            ],
            [
                'name' => 'SaId Sourov ',
                'designation_id' => 2,
                'member_type' => 2,
                'session_id' => 2,
                'phone' => '01891458773',
                'position' => 2,
            ],
            [
                'name' => 'Ruhul Rohamn ',
                'designation_id' => 3,
                'member_type' => 3,
                'session_id' => 2,
                'phone' => '12345678910',
                'position' => 3,
            ],
            
        ]);
    } 
}
