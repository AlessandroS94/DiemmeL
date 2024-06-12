<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Service 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
