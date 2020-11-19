<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $this->call(ProgramCategorySeeder::class);
        $this->call(MemberTypeSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(CommitteeSeeder::class);
        $this->call(DesignationSeeder::class);
        $this->call(SessionSeeder::class);
        $this->call(PrayingTimeSeeder::class);
        $this->call(MonthSeeder::class);
     
        DB::table('users')->insert([
            [
                'name' => 'Masum Billah',
                'email' => 'masumbillah3416@gmail.com',
                'password' => Hash::make('1234'),
            ],
            [
                'name' => 'Sourov Ahmed',
                'email' => 'sourov.okk@gmail.com',
                'password' => Hash::make('1234'),
            ],
        ]);
    }
}
