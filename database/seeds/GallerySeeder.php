<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            
            [
                'caption' => 'Mosque',
                'image_id' => '2',
            ],
            [
                'caption' => 'Mosque',
                'image_id' => '3',
            ],
            [
                'caption' => 'Mosque',
                'image_id' => '4',
            ],
            [
                'caption' => 'Mosque',
                'image_id' => '5',
            ],
            [
                'caption' => 'Mosque',
                'image_id' => '6',
            ],
            [
                'caption' => 'Mosque',
                'image_id' => '7',
            ],
            [
                'caption' => 'Mosque',
                'image_id' => '8',
            ],
            [
                'caption' => 'Mosque',
                'image_id' => '9',
            ],
            [
                'caption' => 'Mosque',
                'image_id' => '10',
            ],
        ]);
    }
}
