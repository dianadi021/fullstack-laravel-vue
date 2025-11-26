<?php

namespace App\Dto\Registers;

use App\Http\Requests\Registers\CustomerRequest;
use Illuminate\Support\Facades\Hash;

class CustomerDto
{
    public function __construct(
        protected string $username,
        protected string $email,
        protected string $password,

        protected string $nik,
        protected string $first_name,
        protected string $last_name,
    ) {}

    public static function Schema(CustomerRequest $request): self
    {
        return new self(
            $request->validated('username'),
            $request->validated('email'),
            Hash::make($request->validated('password')),

            $request->validated('nik'),
            $request->validated('first_name'),
            $request->validated('last_name'),
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

    public function Person(): array
    {
        return [
            'nik' => $this->nik,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
        ];
    }
}
