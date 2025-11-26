<?php

namespace Database\Seeders;

use App\Models\Master\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class RegionSeeder extends Seeder
{
    public function run(): void
    {
        ini_set('memory_limit', '256M');

        // https://github.com/ibnux/data-indonesia
        // https://github.com/cahyadsn/db_rajaongkir
        // https://api.co.id/indonesia-regional-api/
        // https://github.com/pentagonal/Indonesia-Postal-Code

        $jsonPath = database_path('seeders/wilayah_idn/provinsi.json');
        $json = File::get($jsonPath);
        $tmpDatas = json_decode($json, true);

        Region::insert($tmpDatas);

        $jsonPath = database_path('seeders/wilayah_idn/kabupaten_kota.json');
        $json = File::get($jsonPath);
        $tmpDatas = json_decode($json, true);

        $arryChunk = array_chunk($tmpDatas, 1250);
        foreach ($arryChunk as $list) {
            Region::insert($list);
        }

        $jsonPath = database_path('seeders/wilayah_idn/kecamatan.json');
        $json = File::get($jsonPath);
        $tmpDatas = json_decode($json, true);
        
        $arryChunk = array_chunk($tmpDatas, 1250);
        foreach ($arryChunk as $list) {
            Region::insert($list);
        }

        $jsonPath = database_path('seeders/wilayah_idn/kelurahan.json');
        $json = File::get($jsonPath);
        $tmpDatas = json_decode($json, true);
        
        $arryChunk = array_chunk($tmpDatas, 1250);
        foreach ($arryChunk as $list) {
            Region::insert($list);
        }
    }
}
