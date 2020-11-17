<?php

use App\gallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'url' => 'images/1605603126.Imam Hafez Rafiqul Islam.jpg',   // imam image 2
                'thumbnail' => 'images/1605603126.Imam Hafez Rafiqul Islam.jpg',
            ],
            [
                'url' => 'images/Muhammad_Manjurul_Karim.JPG',    // imam image 1
                'thumbnail' => 'images/Muhammad_Manjurul_Karim.JPG',
            ],

// gallery image
            [
                'url' => 'images/1605603862.full.IMG_1.JPG',      //1
                'thumbnail' => 'images/1605603862.small.IMG_4424.JPG',
            ],
            [
                'url' => 'images/1605606234.full.IMG_4421.JPG',       //2
                'thumbnail' => 'images/1605606234.small.IMG_4421.JPG',
            ],

            
            [
                'url' => 'images/1605604312.full.IMG_4423.JPG',          //3
                'thumbnail' => 'images/1605604312.small.IMG_4423.JPG',
            ],
            [
                'url' => 'images/1605604600.full.IMG_4418.JPG',           //5
                'thumbnail' => 'images/1605604600.small.IMG_4418.JPG',
            ],
            [
                'url' => 'images/1605604755.full.IMG_4425.JPG',            //6
                'thumbnail' => 'images/1605604755.small.IMG_4425.JPG',
            ],
            
            [
                'url' => 'images/1605607274.full.istockphoto-469201837-612x612.jpg',            //6
                'thumbnail' => 'images/1605607274.small.istockphoto-469201837-612x612.jpg',
            ],
            
            [
                'url' => 'images/1605628330.full.December_2020.jpg',            //7
                'thumbnail' => 'images/1605628330.full.December_2020.jpg',
            ],
            

        ]);
    }
}
