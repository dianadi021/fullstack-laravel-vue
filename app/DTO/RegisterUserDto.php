<?php

namespace App\DTO;

use Illuminate\Support\Facades\Hash;

class RegisterUserDto
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
        public int $id_provinsi,
        public int $id_kabupaten,
        public int $id_kecamatan,
        public int $id_kelurahan,
    ) {}

    public static function fromRequest($req): self
    {
        return new self(
            username: $req->username,
            email: $req->email,
            password: Hash::make($req->password),

            nik: $req->nik,
            first_name: $req->first_name,
            last_name: $req->last_name,
            fullname: $req->fullname,
            nomor_identitas_lain: $req->nomor_identitas_lain,
            nama_ibu: $req->nama_ibu,
            nik_ibu: $req->nik_ibu,
            tempat_lahir: $req->tempat_lahir,
            birthdate: $req->birthdate,
            agama: $req->agama,
            suku_ras: $req->suku_ras,
            goldar: $req->goldar,
            alamat_domisili: $req->alamat_domisili,
            alamat_ktp: $req->alamat_ktp,
            dinamis_penduduk: $req->dinamis_penduduk,
            pendidikan: $req->pendidikan,
            pekerjaan: $req->pekerjaan,
            status_pernikahan: $req->status_pernikahan,
            gender: $req->gender,
            perkiraan_umur: $req->perkiraan_umur,
            lokasi_ditemukan: $req->lokasi_ditemukan,
            tanggal_ditemukan: $req->tanggal_ditemukan,
            id_provinsi: $req->id_provinsi,
            id_kabupaten: $req->id_kabupaten,
            id_kecamatan: $req->id_kecamatan,
            id_kelurahan: $req->id_kelurahan,
        );
    }
}
