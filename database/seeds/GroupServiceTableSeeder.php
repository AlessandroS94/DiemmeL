<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupServiceTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('group_service')->insert([
            'service_id' => 1,
            'group_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
