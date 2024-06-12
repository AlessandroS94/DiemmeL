<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LayoutUserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('layout_user')->insert([
            'layout_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
