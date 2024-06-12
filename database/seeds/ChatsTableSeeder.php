<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChatsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('chats')->insert([
            'subject' => 'Sample Chat Subject',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
