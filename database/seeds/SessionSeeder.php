<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions')->insert([
            [
                'name' => '2014 - 2018',
                'description' => 'First Session'
            ],
            [
                'name' => '2019 - 2020',
                'description' =>'Secend Session'
            ],
           
            
        ]);
    }
}
