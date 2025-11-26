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
                ICDSeeder::class,
                RoleSeeder::class,
                TierSeeder::class,
                UserSeeder::class,
                RuanganSeeder::class,
                HeaderMainMenu::class,
                GolDarahSeeder::class,
                RegionSeeder::class,
            ]);
        } catch (Exception $err) {
            throw $err;
        }
    }
}
