<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_languages')->insert([
            [
                'name' => 'English',
                'description' => 'For all English user',
            ],[
                'name' => 'Bangla',
                'description' => 'For all Bangla user',
            ],
        ]);
    }
}
