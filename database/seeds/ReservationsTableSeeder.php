<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reservations')->insert([
            'title' => 'Reservation 1',
            'description' => 'Description of Reservation 1',
            'status' => 'pending',
            'id_user' => 1,
            'id_product_line' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
