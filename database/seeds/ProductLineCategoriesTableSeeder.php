<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductLineCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_line_categories')->insert([
            'name' => 'Category 1',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

