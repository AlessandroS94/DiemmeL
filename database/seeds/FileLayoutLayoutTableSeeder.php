<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FileLayoutLayoutTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('file_layout_layout')->insert([
            'file_layout_id' => 1,
            'layout_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
