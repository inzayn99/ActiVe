<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            AdminUserTableSeeder::class,
            CategoryTableSeeder::class,
            SubCategoryTableSeeder::class,
            TrendingTableSeeder::class,
            SponsoredNewsTableSeeder::class,
            HighlightTableSeeder::class,
            TrendingTopicsTableSeeder::class,
            FooterTableSeeder::class,
            MainPostTableSeeder::class
        ]);
    }
}
