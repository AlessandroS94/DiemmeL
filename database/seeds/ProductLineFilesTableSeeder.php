<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductLineFilesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_line_files')->insert([
            'path' => 'path/to/file',
            'product_line_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
