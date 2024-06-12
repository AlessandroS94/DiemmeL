<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class ProductLinesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_lines')->insert([
            'name' => 'Product Line 1',
            'description' => 'Description of Product Line 1',
            'product_line_category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

