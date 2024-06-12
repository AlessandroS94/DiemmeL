<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsShowcaseTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('news_showcase')->insert([
            'name' => 'News Title',
            'path' => 'path/to/news',
            'description' => 'Description of the news',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
