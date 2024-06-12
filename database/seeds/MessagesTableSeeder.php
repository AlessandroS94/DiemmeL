<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('messages')->insert([
            'body' => 'Sample message body',
            'path' => 'path/to/message',
            'id_user' => 1,
            'id_chat' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
