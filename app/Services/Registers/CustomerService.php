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

            Log::info('Start CustomerService: ', [
                'request' => arryToJson($dto),
                'ip_address' => request()->ip(),
                'executed_at' => now(env('APP_TIMEZONE')),
            ]);

            $user = $this->usrRepos->create($dto);

            DB::commit();

            return $user;
        } catch (Exception $err) {
            DB::rollBack();

            Log::error('End CustomerService: ', [
                'request' => arryToJson($dto),
                'ip_address' => request()->ip(),
                'executed_at' => now(env('APP_TIMEZONE')),
                'error' => $err->getMessage(),
            ]);

            throw $err;
        }
    }
}
