<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name_user' => 'John',
            'surname_user' => 'Doe',
            'email' => 'john.doe@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'fiscalCode_user' => 'ABCDEF12G34H567I',
            'address_user' => '123 Main St',
            'country_user' => 'Italy',
            'city_user' => 'Rome',
            'region_user' => 'Lazio',
            'created_at' => now(),
            'updated_at' => now(),
            'active' => 1,
            'remember_token' => Str::random(10),
            'group_id' => 1,
        ]);
    }
}
