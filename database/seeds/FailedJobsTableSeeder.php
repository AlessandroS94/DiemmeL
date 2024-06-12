<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FailedJobsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('failed_jobs')->insert([
            'connection' => 'database',
            'queue' => 'default',
            'payload' => json_encode(['example' => 'data']),
            'exception' => 'Sample exception',
            'failed_at' => now(),
        ]);
    }
}
