<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Master\ListMenu;

class HeaderMainMenu extends Seeder
{
    public function run(): void
    {
        $listParent = [
            [
                'label' => 'Master Data',
                'is_parent' => 1,
            ],
            [
                'label' => 'Transaksi',
                'is_parent' => 1,
            ],
            [
                'label' => 'Inventory',
                'is_parent' => 1,
            ],
            [
                'label' => 'Informasi',
                'is_parent' => 1,
            ],
            [
                'label' => 'Rekamin Medis Online',
                'is_parent' => 1,
            ]
        ];

        foreach ($listParent as $key => $parent) {
            $parentID = ListMenu::insertGetId($parent);

            if ($key === 0) {
                $datas = [
                    [
                        'label' => 'Obat',
                        'label' => 'master-data.obat',
                        'link' => '/master-data/obat',
                        'icon' => 'assets/images/icons/main-menu/1529570.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Golongan Darah',
                        'label' => 'master-data.golongan-darah',
                        'link' => '/master-data/golongan-darah',
                        'icon' => 'assets/images/icons/main-menu/4633210.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Wilayah',
                        'label' => 'master-data.wilayah',
                        'link' => '/master-data/wilayah',
                        'icon' => 'assets/images/icons/main-menu/9747001.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Jenis Kelamin',
                        'label' => 'master-data.jenis-kelamin',
                        'link' => '/master-data/jenis-kelamin',
                        'icon' => 'assets/images/icons/main-menu/2517445.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'User System',
                        'label' => 'master-data.user-system',
                        'link' => '/master-data/user-system',
                        'icon' => 'assets/images/icons/main-menu/8965339.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Pekerjaan',
                        'label' => 'master-data.pekerjaan',
                        'link' => '/master-data/pekerjaan',
                        'icon' => 'assets/images/icons/main-menu/3281289.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Suku/Ras',
                        'label' => 'master-data.suku-ras',
                        'link' => '/master-data/suku-ras',
                        'icon' => 'assets/images/icons/main-menu/3778638.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Agama',
                        'label' => 'master-data.agama',
                        'link' => '/master-data/agama',
                        'icon' => 'assets/images/icons/main-menu/11531428.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Module Menu',
                        'label' => 'master-data.module-menu',
                        'link' => '/master-data/module-menu',
                        'icon' => 'assets/images/icons/main-menu/12087772.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Nakes',
                        'label' => 'master-data.nakes',
                        'link' => '/master-data/nakes',
                        'icon' => 'assets/images/icons/main-menu/4807695.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Jadwal Dokter',
                        'label' => 'master-data.jadok',
                        'link' => '/master-data/jadok',
                        'icon' => 'assets/images/icons/main-menu/13214611.png',
                        'parent_id' => $parentID,
                    ],
                ];
            } elseif ($key === 1) {
                $datas = [
                    [
                        'label' => 'Pelaksanaan Pelayanan',
                        'label' => 'transaksi.pelaksanaan-pelayanan',
                        'link' => '/transaksi/pelaksanaan-pelayanan',
                        'icon' => 'assets/images/icons/main-menu/6898949.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Pembayaran',
                        'label' => 'transaksi.pembayaran',
                        'link' => '/transaksi/pembayaran',
                        'icon' => 'assets/images/icons/main-menu/10535988.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Billing',
                        'label' => 'transaksi.billing',
                        'link' => '/transaksi/billing',
                        'icon' => 'assets/images/icons/main-menu/1651907.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Pendaftaran Pasien',
                        'label' => 'transaksi.pendaftaran-pasien',
                        'link' => '/transaksi/pendaftaran-pasien',
                        'icon' => 'assets/images/icons/main-menu/3456388.png',
                        'parent_id' => $parentID,
                    ],
                ];
            } elseif ($key === 2) {
                $datas = [
                    [
                        'label' => 'Stok Barang',
                        'label' => 'inventory.stok-barang',
                        'link' => '/inventory/stok-barang',
                        'icon' => 'assets/images/icons/main-menu/7656409.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Stok Obat',
                        'label' => 'inventory.stok-obat',
                        'link' => '/inventory/stok-obat',
                        'icon' => 'assets/images/icons/main-menu/1529570.png',
                        'parent_id' => $parentID,
                    ],
                ];
            } elseif ($key === 3) {
                $datas = [
                    [
                        'label' => 'Rekam Medis',
                        'label' => 'informasi.rekam-medis',
                        'link' => '/informasi/rekam-medis',
                        'icon' => 'assets/images/icons/main-menu/11411453.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Kunjungan Pasien',
                        'label' => 'informasi.kunjungan-pasien',
                        'link' => '/informasi/kunjungan-pasien',
                        'icon' => 'assets/images/icons/main-menu/1376203.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Transaksi Pasien',
                        'label' => 'transaksi.transaksi-pasien',
                        'link' => '/transaksi/transaksi-pasien',
                        'icon' => 'assets/images/icons/main-menu/10535988.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Keuangan Klinik',
                        'label' => 'transaksi.keuangan-klinik',
                        'link' => '/transaksi/keuangan-klinik',
                        'icon' => 'assets/images/icons/main-menu/10535988.png',
                        'parent_id' => $parentID,
                    ],
                ];
            } elseif ($key === 4) {
                $datas = [
                    [
                        'label' => 'Pengaturan',
                        'label' => 'property.pengaturan',
                        'link' => '/property/pengaturan',
                        'icon' => 'assets/images/icons/main-menu/3953226.png',
                        'parent_id' => $parentID,
                    ],
                    [
                        'label' => 'Pegawai',
                        'label' => 'pengaturan.pegawai',
                        'link' => '/pengaturan/pegawai',
                        'icon' => 'assets/images/icons/main-menu/17941466.png',
                        'parent_id' => $parentID,
                    ],
                ];
            }

            ListMenu::insert($datas);
        }
    }
}
