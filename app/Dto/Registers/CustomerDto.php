<?php

namespace App\Dto\Registers;

use App\Http\Requests\Registers\CustomerRequest;

class CustomerDto
{
    public function __construct(
        public string $username,
        public string $email,
        public string $password,

        public string $first_name,
        public string $last_name,
        public string $fullname,
        public string $nik,
        public string $nomor_identitas_lain,
        public string $nama_ibu,
        public string $nik_ibu,
        public string $tempat_lahir,
        public string $birthdate,
        public string $agama,
        public string $suku_ras,
        public string $goldar,
        public string $alamat_domisili,
        public string $alamat_ktp,
        public string $dinamis_penduduk,
        public string $pendidikan,
        public string $pekerjaan,
        public string $status_pernikahan,
        public string $gender,
        public string $perkiraan_umur,
        public string $lokasi_ditemukan,
        public string $tanggal_ditemukan,
    ) {}

    public static function Schema(CustomerRequest $request): self
    {
        $datas = $request->validated();

        return new self(
            username: getVarVal($datas, 'username'),
            email: getVarVal($datas, 'email'),
            password: bcrypt(getVarVal($datas, 'password')),

            nik: getVarVal($datas, 'nik'),
            first_name: getVarVal($datas, 'first_name'),
            last_name: getVarVal($datas, 'last_name'),
            fullname: getVarVal($datas, 'fullname'),
            nomor_identitas_lain: getVarVal($datas, 'nomor_identitas_lain'),
            nama_ibu: getVarVal($datas, 'nama_ibu'),
            nik_ibu: getVarVal($datas, 'nik_ibu'),
            tempat_lahir: getVarVal($datas, 'tempat_lahir'),
            birthdate: getVarVal($datas, 'birthdate'),
            agama: getVarVal($datas, 'agama'),
            suku_ras: getVarVal($datas, 'suku_ras'),
            goldar: getVarVal($datas, 'goldar'),
            alamat_domisili: getVarVal($datas, 'alamat_domisili'),
            alamat_ktp: getVarVal($datas, 'alamat_ktp'),
            dinamis_penduduk: getVarVal($datas, 'dinamis_penduduk'),
            pendidikan: getVarVal($datas, 'pendidikan'),
            pekerjaan: getVarVal($datas, 'pekerjaan'),
            status_pernikahan: getVarVal($datas, 'status_pernikahan'),
            gender: getVarVal($datas, 'gender'),
            perkiraan_umur: getVarVal($datas, 'perkiraan_umur'),
            lokasi_ditemukan: getVarVal($datas, 'lokasi_ditemukan'),
            tanggal_ditemukan: getVarVal($datas, 'tanggal_ditemukan'),
        );
    }

    public function User(): array
    {
        return [
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }

    public function UserDetail(): array
    {
        return [
            'nik' => $this->nik,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'fullname' => $this->fullname,
            'nomor_identitas_lain' => $this->nomor_identitas_lain,
            'nama_ibu' => $this->nama_ibu,
            'nik_ibu' => $this->nik_ibu,
            'tempat_lahir' => $this->tempat_lahir,
            'birthdate' => $this->birthdate,
            'agama' => $this->agama,
            'suku_ras' => $this->suku_ras,
            'goldar' => $this->goldar,
            'alamat_domisili' => $this->alamat_domisili,
            'alamat_ktp' => $this->alamat_ktp,
            'dinamis_penduduk' => $this->dinamis_penduduk,
            'pendidikan' => $this->pendidikan,
            'pekerjaan' => $this->pekerjaan,
            'status_pernikahan' => $this->status_pernikahan,
            'gender' => $this->gender,
            'perkiraan_umur' => $this->perkiraan_umur,
            'lokasi_ditemukan' => $this->lokasi_ditemukan,
            'tanggal_ditemukan' => $this->tanggal_ditemukan,
        ];
    }
}
