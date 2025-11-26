<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Master\BloodType;

class BloodTypeSeeder extends Seeder
{
    public function run(): void
    {
        $tmpDatas = ['A', 'B', 'AB', 'O'];

        $datas = [];
        foreach ($tmpDatas as $list) {
            $datas[] = [
                'label' => $list,
                'name' => $list
            ];
        }

        BloodType::insert($datas);
    }
}
