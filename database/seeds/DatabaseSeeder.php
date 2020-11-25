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
       // $this->call(RoleSeeder::class);
        // $this->call(PrayingTimeSeeder::class);
        // $this->call(MonthSeeder::class);
     
        DB::table('roles')->insert([
            [
                'role' => 'Admin'
            ],
            [
                'role' => 'Editor'
            ],
 
        ]);
        DB::table('users')->insert([
       
            [
                'id' => 1000,
                'name' => 'Abasas',
                'email' => 'admin@abasas.tech',
                'password' => Hash::make('3XMAabasas'),
                'role_id' => 1,
            ],
            [
                'id' => 1001,
                'name' => 'Admin',
                'email' => 'admin@masjidmissioncenterusa.org',
                'password' => Hash::make('admin1234'),
                'role_id' => 1,
            ],
        ]);
        DB::table('months')->insert([

            [
                'name' => 'January',

               
            ],
            [
                'name' => 'February',
             
               
            ],
            [
                'name' => 'March',
           
               
            ],
            [
                'name' => 'April',
            
               
            ],
            [
                'name' => 'May',
             
            
            ],
            [
                'name' => 'June',
              
               
            ],
            [
                'name' => 'July',
             
               
            ],
            [
                'name' => 'August',
             
               
            ],
            [
                'name' => 'September',
              
               
            ],
            [
                'name' => 'October',
            
               
            ],
            [
                'name' => 'November',
             
               
            ],
            
            [
                'name' => 'December',
             
               
            ],
        ]);
        DB::table('praying_times')->insert([
            [
                'year' => '2020',
                'month_id' => '12',
                'image_id' => '9',
            ],
            
        ]);
    }
}
