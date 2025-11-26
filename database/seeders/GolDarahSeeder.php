<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GolDarahSeeder extends Seeder
{
    public function run(): void
    {
        setlocale(LC_TIME, 'id_ID.utf8');

        $tmpDatas = ['A', 'B', 'AB', 'O'];

        $datas = [];
        foreach ($tmpDatas as $list) {
            $datas[] = ['name' => $list];
        }

        DB::table('goldar')->insert($datas);
    }
}
