<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'table_name' => 'event_categories',
                'setting' => '"[{\n            \"componentDetails\":{\n                \"title\":\"Event Category List\",\n                \"editTitle\":\"Edit Event Category\"\n            },\n            \"routes\":{\n                \"create\":{\n                    \"name\":\"admin.event-category.store\",\n                    \"link\":\"admin/event-category\"\n                },\n                \"update\":{\n                    \"name\":\"admin.event-category.update\",\n                    \"link\":\"admin/event-category\"\n                },\n                \"delete\":{\n                    \"name\":\"admin.event-category.destroy\",\n                    \"link\":\"admin/event-category\"\n                }\n            },\n            \"fieldList\":[{\n                    \n                \"position\":111,\n    \n                \"create\":\"2\",\n                \"read\":\"1\",\n                \"update\":\"2\",\n                \"require\":\"1\",\n    \n               \"input_type\":\"text\",\n               \"name\":\"name\",\n               \"title\":\"Name\",\n    \n    \n               \"database_name\":\"name\"\n            },{\n                    \n                \"position\":111,\n    \n                \"create\":\"1\",\n                \"read\":\"1\",\n                \"update\":\"1\",\n                \"require\":\"0\",\n    \n               \"input_type\":\"text\",\n               \"name\":\"description\",\n               \"title\":\"Description\",\n               \"database_name\":\"description\"\n            },{\n                    \n                \"position\":111,\n    \n                \"create\":\"3\",\n                \"read\":\"1\",\n                \"update\":\"3\",\n                \"require\":\"0\",\n    \n               \"input_type\":\"text\",\n               \"name\":\"event_count\",\n               \"title\":\"Event Count\",\n               \"database_name\":\"event_count\"\n            }\n            ]\n        }]"',
            ],
        ]);

    }
}
