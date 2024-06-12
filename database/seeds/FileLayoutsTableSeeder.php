<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FileLayoutsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('file_layouts')->insert([
            'path' => 'path/to/file',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
