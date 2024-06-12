<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('groups')->insert([
            'name' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
