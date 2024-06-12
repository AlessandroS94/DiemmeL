<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductShowcaseTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_showcase')->insert([
            'name' => 'Product 1',
            'path' => 'path/to/product',
            'description' => 'Description of Product 1',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
