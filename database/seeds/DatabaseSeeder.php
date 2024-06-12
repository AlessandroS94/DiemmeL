<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ChatsTableSeeder::class,
            ContactShowcaseTableSeeder::class,
            FailedJobsTableSeeder::class,
            FileLayoutsTableSeeder::class,
            FileLayoutLayoutTableSeeder::class,
            GroupsTableSeeder::class,
            GroupServiceTableSeeder::class,
            LayoutsTableSeeder::class,
            LayoutUserTableSeeder::class,
            MessagesTableSeeder::class,
            MigrationsTableSeeder::class,
            NewsShowcaseTableSeeder::class,
            PasswordResetsTableSeeder::class,
            ProductLinesTableSeeder::class,
            ProductLineCategoriesTableSeeder::class,
            ProductLineFilesTableSeeder::class,
            ProductShowcaseTableSeeder::class,
            QuotationShowcaseTableSeeder::class,
            ReservationsTableSeeder::class,
            ReservationsAttachmentTableSeeder::class,
            ServicesTableSeeder::class,
            TechnologyShowcaseTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
