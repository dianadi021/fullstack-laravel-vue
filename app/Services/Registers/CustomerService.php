<?php

namespace App\Services\Registers;

use App\Dto\Registers\CustomerDto;
use App\Repositories\User\UserRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CustomerService
{
    public function __construct(
        protected UserRepositoryInterface $usrRepos
    ) {}

    public function register(CustomerDto $dto)
    {
        try {
            DB::beginTransaction();

            Log::info('START SIMPAN USER: ', [
                'request' => arrayToJson($dto),
                'ip_address' => request()->ip(),
                'executed_at' => now()->toDateTimeString(),
            ]);

            $user = $this->usrRepos->create($dto);

            DB::commit();

            return $user;
        } catch (Exception $err) {
            DB::rollBack();

            Log::error('GAGAL SIMPAN USER: ', [
                'request' => arrayToJson($dto),
                'ip_address' => request()->ip(),
                'executed_at' => now()->toDateTimeString(),
                'error' => $err->getMessage(),
            ]);

            throw $err;
        }
    }
}
