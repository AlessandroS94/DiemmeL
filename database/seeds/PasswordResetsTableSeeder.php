<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('password_resets')->insert([
            'email' => 'john.doe@example.com',
            'token' => Str::random(60),
            'created_at' => now(),
        ]);
    }
}
