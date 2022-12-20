<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(AdminUserSeeder::class);

        if (config('app.env') !== 'production') {
            $this->call(UserSeeder::class);
            $this->call(SubjectSeeder::class);
            $this->call(VideoSeeder::class);
        }
    }
}
