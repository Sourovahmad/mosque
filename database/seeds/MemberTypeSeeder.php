<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_types')->insert([
            [
                'name' => 'Life Members',
            ],
            [
                'name' => 'General Members',
            ],
            [
                'name' => 'Executive Committee',
            ],
            [
                'name' => 'Board of Treasure',
            ],
            
        ]);
    }
}
