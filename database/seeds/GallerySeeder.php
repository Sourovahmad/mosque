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
                'caption' => 'MMC Image 1 ',
                'image_id' => '3',
            ],
            [
                'caption' => 'MMC Image 2 ',
                'image_id' => '4',
            ],
            [
                'caption' => 'MMC Image 3 ',
                'image_id' => '5',
            ],
            [
                'caption' => 'MMC Image 4 ',
                'image_id' => '6',
            ],
            [
                'caption' => 'MMC Image 5 ',
                'image_id' => '7',
            ],
            
            [
                'caption' => 'MMC Image 6 ',
                'image_id' => '8',
            ],

        ]);
    }
}
