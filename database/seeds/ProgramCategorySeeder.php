<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('program_categories')->insert([
            [
                'name' => 'Jummah Kutba',
            ],
            [
                'name' => 'Darse Bukhari',
            ],
            [
                'name' => 'Darse Quran',
            ],
            [
                'name' => 'special Event',
            ],
        ]);
    }
}
