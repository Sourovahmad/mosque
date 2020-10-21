<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'No Category',
                'description' => 'description_1',
            ],
            [
                'name' => 'cat2',
                'description' => 'description_2',
            ],
            [
                'name' => 'cat 3',
                'description' => 'description_3',
            ],
    ]);


    }
}
