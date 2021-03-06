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
            GoalSeeder::class,
            ActivitySeeder::class,
            TeamSeeder::class,
            ImpressionSeeder::class,
            CategorySeeder::class,
            BlogSeeder::class,
            MajorSeeder::class,
            UserSeeder::class
        ]);
    }
}
