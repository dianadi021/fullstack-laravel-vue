<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules;
use Illuminate\Foundation\Http\FormRequest;

class RegisterCustomerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Insert into users table
            'username' => ['required', 'string', 'max:255', 'unique:users,username', 'regex:/^[a-zA-Z0-9_]+$/'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

            'nik' => ['required', 'string', 'min:12', 'max:18', 'unique:penduduk,nik', 'regex:/^[0-9_]+$/'],

            'first_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'last_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'birthdate' => ['required', 'string', 'max:255'],
            'id_provinsi' => ['required', 'integer', 'max:255'],
            'id_kabupaten' => ['required', 'integer', 'max:255'],
            'id_kecamatan' => ['required', 'integer', 'max:255'],
            'id_kelurahan' => ['required', 'integer', 'max:255'],
        ];
    }


    public function messages(): array
    {
        return [
            'password' => 'Password harus lebih dari 8 karakter.',
            'password.required' => 'Password harus diisi.',
            'password.confirmed' => 'Konfirmasi password tidak sesuai.',

            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',

            'username.required' => 'Username harus diisi.',
            'username.unique' => 'Username sudah terdaftar.',
            'username.regex' => 'Username hanya boleh berisi huruf, angka, dan underscore.',

            'nik.unique' => 'NIK sudah terdaftar.',
            'nik.required' => 'NIK harus diisi.',
            'nik.min' => 'NIK tidak boleh kurang dari 12 karakter.',

            'first_name.required' => 'Nama Depan harus diisi.',
            'last_name.required' => 'Nama Belakang harus diisi.',
            'birthdate.required' => 'Tanggal Lahir harus diisi.',
            'id_provinsi.required' => 'Provinsi harus diisi.',
            'id_kabupaten.required' => 'Kabupaten harus diisi.',
            'id_kecamatan.required' => 'Kecamatan harus diisi.',
            'id_kelurahan.required' => 'Kelurahan harus diisi.',
        ];
    }
}
