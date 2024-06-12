<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TechnologyShowcaseTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('technology_showcase')->insert([
            'name' => 'Technology 1',
            'path' => 'path/to/technology',
            'description' => 'Description of Technology 1',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
