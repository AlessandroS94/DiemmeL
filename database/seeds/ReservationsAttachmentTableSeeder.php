<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReservationsAttachmentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reservations_attachment')->insert([
            'path' => 'path/to/attachment',
            'reservation' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
