<?php

namespace Database\Seeders;

use App\Models\MasterData\Wilayah\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class RegionSeeder extends Seeder
{
    public function run(): void
    {
        ini_set('memory_limit', '256M');
        setlocale(LC_TIME, 'id_ID.utf8');

        $jsonPath = database_path('seeders/wilayah_idn/provinsi.json');
        $jsonDataProv = File::get($jsonPath);
        $provs = json_decode($jsonDataProv, true);

        $jsonPath = database_path('seeders/wilayah_idn/kabupaten.json');
        $jsonDataKabs = File::get($jsonPath);
        $kabs = json_decode($jsonDataKabs, true);

        $jsonPath = database_path('seeders/wilayah_idn/kecamatan.json');
        $jsonDataKecs = File::get($jsonPath);
        $kecs = json_decode($jsonDataKecs, true);

        $jsonPath = database_path('seeders/wilayah_idn/kelurahan.json');
        $jsonDataKels = File::get($jsonPath);
        $kels = json_decode($jsonDataKels, true);

        $arryInsert = [];
        foreach ($provs as $prov) {
            $arryInsert[] = [
                'id' => $prov['code'],
                'code' => $prov['code'],
                'level' => 'Province',
                'name' => $prov['name'],
            ];
        }

        $chunkInsert = array_chunk($arryInsert, 1000);
        foreach ($chunkInsert as $list) {
            Region::insert($list);
        }

        $arryInsert = [];
        foreach ($kabs as $kab) {
            $arryInsert[] = [
                'id' => $kab['full_code'],
                'parent_code' => trim(str_replace($kab['code'], '', $kab['full_code'])),
                'code' => $kab['code'],
                'full_code' => $kab['full_code'],
                'level' => 'City',
                'name' => $kab['name'],
                'parent_id' => $kab['provinsi_id'],
            ];
        }

        $chunkInsert = array_chunk($arryInsert, 1000);
        foreach ($chunkInsert as $list) {
            Region::insert($list);
        }

        $arryInsert = [];
        foreach ($kecs as $kec) {
            $arryInsert[] = [
                'id' => $kec['full_code'],
                'parent_code' => trim(str_replace($kec['code'], '', $kec['full_code'])),
                'code' => $kec['code'],
                'full_code' => $kec['full_code'],
                'level' => 'District',
                'name' => $kec['name'],
                'parent_id' => $kec['kabupaten_id'],
            ];
        }

        $chunkInsert = array_chunk($arryInsert, 1000);
        foreach ($chunkInsert as $list) {
            Region::insert($list);
        }

        $arryInsert = [];
        foreach ($kels as $kel) {
            $arryInsert[] = [
                'id' => $kel['full_code'],
                'parent_code' => trim(str_replace($kel['code'], '', $kel['full_code'])),
                'code' => $kel['code'],
                'full_code' => $kel['full_code'],
                'postal_code' => $kel['pos_code'],
                'level' => 'Village',
                'name' => $kel['name'],
                'parent_id' => $kel['kecamatan_id'],
            ];
        }

        $chunkInsert = array_chunk($arryInsert, 1000);
        foreach ($chunkInsert as $list) {
            Region::insert($list);
        }
    }
}
