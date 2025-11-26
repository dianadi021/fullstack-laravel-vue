<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Master\TierLevel;

class TierSeeder extends Seeder
{
    public function run(): void
    {
        $datas = [
            [
                'label' => 'Free',
                'name' => 'free',
                'level' => 0,
                'description' => 'Pendaftaran & Rekam Medis',
            ],
            [
                'label' => 'minimum_klinik',
                'name' => 'Minimum Klinik',
                'level' => 1,
                'description' => 'Pendaftaran, Rekam Medis & Transaction (Billing & Penjualan) *No Logistik',
            ],
            [
                'label' => 'Full Klinik',
                'name' => 'full_klinik',
                'level' => 2,
                'description' => 'Pendaftaran, Rekam Medis, Informasi (Kunjungan, Penjualan) & Transaction (Billing & Penjualan) *No Logistik',
            ],
            [
                'label' => 'Minimum SIMRS',
                'name' => 'minimum_simrs',
                'level' => 3,
                'description' => 'Pendaftaran, Rekam Medis, Informasi (Kunjungan, Penjualan, Billing), Logistik & Transaction (Billing & Penjualan)',
            ],
            [
                'label' => 'Full SIMRS',
                'name' => 'full_simrs',
                'level' => 4,
                'description' => 'Pendaftaran, Rekam Medis, Informasi (Kunjungan, Penjualan, Billing, Outcome/Income), Logistik & Transaction (Billing & Penjualan)',
            ],
        ];

        TierLevel::insert($datas);
    }
}
