<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            $this->call([
                ICDSeeder::class,
                RoleSeeder::class,
                TierSeeder::class,
                UserSeeder::class,
                // GenderSeeder::class,
                RuanganSeeder::class,
                HeaderMainMenu::class,
                ProvinsiSeeder::class,
                GolDarahSeeder::class,
                KabupatenSeeder::class,
                KecamatanSeeder::class,
                KelurahanSeeder::class,
            ]);
        } catch (Exception $err) {
            throw $err;
        }
    }
}
