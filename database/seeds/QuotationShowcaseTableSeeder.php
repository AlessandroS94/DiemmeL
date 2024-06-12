<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuotationShowcaseTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('quotation_showcase')->insert([
            'name' => 'Quotation 1',
            'description' => 'Description of Quotation 1',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
