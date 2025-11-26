<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ICDSeeder extends Seeder
{
    public function run(): void
    {
        ini_set('memory_limit', '256M');

        // https://github.com/LuChang-CS/icd_hierarchical_structure

        $jsonPath = database_path('seeders/icd/icd_9.json');
        $jsonData = File::get($jsonPath);
        $icd10 = json_decode($jsonData, true);

        DB::table('icd_9')->insert($icd10);

        $jsonPath = database_path('seeders/icd/icd_10.json');
        $jsonData = File::get($jsonPath);
        $icd10 = json_decode($jsonData, true);

        DB::table('icd_10')->insert($icd10);
    }
}
