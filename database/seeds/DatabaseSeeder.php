<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(BlogLanguageSeeder::class);
        $this->call(SalatSeeder::class);
        $this->call(ImamSeeder::class);
        $this->call(ImageSeeder::class);
    }
}
