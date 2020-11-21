<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('committees')->insert([
            
            
            // Executive Area session 2 
            [
                'name' => 'Sabbir Ahmed',
                'designation_id' => 1,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '718-5024980',
                'position' => 1,
            ],
            [
                'name' => 'Dr.Ataul Osmani',
                'designation_id' => 2,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '917-698-0941',
                'position' => 1,
            ],
            [
                'name' => 'Abu Taher Mia',
                'designation_id' => 3,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '917-541-3146',
                'position' => 1,
            ],
            [
                'name' => 'Akther Rahman Tipu',
                'designation_id' => 4,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '917-496-0257',
                'position' => 1,
            ],
            [
                'name' => 'Mohammed Basher',
                'designation_id' => 5,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '347-484-2831',
                'position' => 1,
            ],
            [
                'name' => 'Md Abdul Kader',
                'designation_id' => 7,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '347-608-1429',
                'position' => 1,
            ],
            [
                'name' => 'Dr.Ataul Osmani',
                'designation_id' => 2,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '917-698-0941',
                'position' => 1,
            ],
            [
                'name' => 'Mohammed S.Jalal',
                'designation_id' => 8,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '347-553-4429',
                'position' => 1,
            ],
            [
                'name' => 'Mohammed A.Zamen',
                'designation_id' => 9,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '347-659-3915',
                'position' => 1,
            ],
            [
                'name' => 'Onu Haque',
                'designation_id' => 10,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '917-599-3003',
                'position' => 1,
            ],
            [
                'name' => 'Md Hafizur Rahman',
                'designation_id' => 11,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '646-204-3714',
                'position' => 1,
            ],
            [
                'name' => 'Md Abdul Matin',
                'designation_id' => 12,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '917-400-0832',
                'position' => 1,
            ],
            [
                'name' => 'Abdul Hai Howlader',
                'designation_id' => 13,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '929-261-3793',
                'position' => 1,
            ],
            [
                'name' => 'Md Sazzad Hossain',
                'designation_id' => 13,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '718-229-2871',
                'position' => 1,
            ],
            [
                'name' => 'Md Imam Hossain',
                'designation_id' => 13,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '347-238-8463',
                'position' => 1,
            ],
            [
                'name' => 'Otul Ahmed Lablu',
                'designation_id' => 13,
                'member_type' => 3,
                'session_id' => 1,
                'phone' => '718-932-1286',
                'position' => 1,
            ],

            // End Executive Area session 2 

        //  Executive Area session 1 
        [
            'name' => 'Engr. Abdus Sattar',
            'designation_id' => 1,
            'member_type' => 3,
            'session_id' => 2,
            'phone' => '917-514-3015',
            'position' => 1,
        ],
        [
            'name' => 'Dr. Ataul Osmani',
            'designation_id' => 4,
            'member_type' => 3,
            'session_id' => 2,
            'phone' => '917-698-0941',
            'position' => 1,
        ],
        [
            'name' => 'Engr. Saifur Bhuiyan',
            'designation_id' => 6,
            'member_type' => 3,
            'session_id' => 2,
            'phone' => '646-508-5790',
            'position' => 1,
        ],
        [
            'name' => 'Fazlul Haque',
            'designation_id' => 13,
            'member_type' => 3,
            'session_id' => 2,
            'phone' => '347-744-8502',
            'position' => 1,
        ],
        [
            'name' => 'Akther Rahman Tipu',
            'designation_id' => 9,
            'member_type' => 3,
            'session_id' => 2,
            'phone' => '917-496-0257',
            'position' => 1,
        ],
        
        [
            'name' => 'Mohammad Bashar',
            'designation_id' => 14,
            'member_type' => 3,
            'session_id' => 2,
            'phone' => '347-484-2831',
            'position' => 1,
        ],
        
        
        [
            'name' => 'Mohammad S.Jalal',
            'designation_id' => 14,
            'member_type' => 3,
            'session_id' => 2,
            'phone' => '347-553-4429',
            'position' => 1,
        ],
        
        
        [
            'name' => 'Abu Taher Mia',
            'designation_id' => 14,
            'member_type' => 3,
            'session_id' => 2,
            'phone' => '917-541-3146',
            'position' => 1,
        ],
        
        
        [
            'name' => 'Shah Alam',
            'designation_id' => 14,
            'member_type' => 3,
            'session_id' => 2,
            'phone' => '2122444445',
            'position' => 1,
        ],
        









            // board of trustess
            [
                'name' => 'Mirza Moshiur Rahman',
                'designation_id' => 15,
                'member_type' => 4,
                'session_id' => 2,
                'phone' => '',
                'position' => 1,
                              
            ],
            [
                'name' => 'MuhammadAbdul Malek',
                'designation_id' => 14,
                'member_type' => 4,
                'session_id' => 2,
                'phone' => '',
                'position' => 1,
                              
            ],
            [
                'name' => 'Hafez Mohammed Rafiqul Islam',
                'designation_id' => 14,
                'member_type' => 4,
                'session_id' => 2,
                'phone' => '',
                'position' => 1,
                              
            ],
            [
                'name' => 'Maulana MirzaAbu Zafar Beg',
                'designation_id' => 14,
                'member_type' => 4,
                'session_id' => 2,
                'phone' => '',
                'position' => 1,
                              
            ],
            [
                'name' => 'Abdul Hadi jabbar',
                'designation_id' => 14,
                'member_type' => 4,
                'session_id' => 2,
                'phone' => '',
                'position' => 1,
                              
            ],
            [
                'name' => 'Mohammad Mozzammel Hossain Farque',
                'designation_id' => 14,
                'member_type' => 4,
                'session_id' => 2,
                'phone' => '',
                'position' => 1,
                              
            ],

          


     
        ]);
    } 
}
