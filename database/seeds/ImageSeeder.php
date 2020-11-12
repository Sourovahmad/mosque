<?php

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
                'url' => 'images/imam.jpg',    //1
                'thumbnail' => 'images/imam.jpg',
            ],
            [
                'url' => 'images/1605191924.full.mosque1.jpg',   //2
                'thumbnail' => 'images/1605191924.small.mosque1.jpg',
            ],
            [
                'url' => 'images/1605191931.full.mosque2.jpg',      //3
                'thumbnail' => 'images/1605191931.small.mosque2.jpg',
            ],
            [
                'url' => 'images/1605191938.full.mosque3.jpg',       //4
                'thumbnail' => 'images/1605191938.small.mosque3.jpg',
            ],
            [
                'url' => 'images/1605191947.full.mosque4.jpg',          //5
                'thumbnail' => 'images/1605191947.small.mosque4.jpg',
            ],
            [
                'url' => 'images/1605191954.full.mosque5.jpg',        //6
                'thumbnail' => 'images/1605191954.small.mosque5.jpg',
            ],
            [
                'url' => 'images/1605191961.full.mosque6.jpg',           //7
                'thumbnail' => '1605191961.small.mosque6.jpg',
            ],
            [
                'url' => 'images/1605191969.full.mosque7.jpg',            //8
                'thumbnail' => 'images/1605191969.small.mosque7.jpg',
            ],
            [
                'url' => 'images/1605191977.full.mosque8.jpg',           //9
                'thumbnail' => 'images/1605191977.small.mosque8.jpg',
            ],
            [
                'url' => 'images/1605191989.full.mosque9.jpg',       //10
                'thumbnail' => 'images/1605191989.small.mosque9.jpg.jpg',
            ],
            [
                'url' => 'images/1605195989.fullprayingTimes.jpg',            //11
                'thumbnail' => 'images/1605195989.fullprayingTimes.jpg',
            ],
        ]);
    }
}
