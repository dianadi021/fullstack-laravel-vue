<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        try {
            $this->call([
                BloodTypeSeeder::class,
                ICDSeeder::class,
                RoleSeeder::class,
                TierSeeder::class,
                HeaderMainMenu::class,
                RegionSeeder::class,
                // UserSeeder::class,
            ]);
        } catch (Exception $err) {
            throw $err;
        }
    }
}
