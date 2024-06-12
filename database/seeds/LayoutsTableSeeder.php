<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LayoutsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('layouts')->insert([
            'final' => 'final layout',
            'name' => 'Main Layout',
            'status' => 'active',
            'description' => 'Description of the layout',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
