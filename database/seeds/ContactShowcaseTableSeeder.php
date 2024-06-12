<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class ContactShowcaseTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contact_showcase')->insert([
            'name' => 'John Doe',
            'text' => 'Sample text for contact showcase',
            'email' => 'john.doe@example.com',
            'region' => 'Lombardy',
            'nation' => 'Italy',
            'number' => '1234567890',
            'street' => '123 Main St',
            'lat' => '45.464203',
            'long' => '9.189982',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
