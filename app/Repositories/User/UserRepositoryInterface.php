<?php

namespace App\Repositories\User;

use App\Dto\Registers\CustomerDto;
use App\Models\Customer\User;

interface UserRepositoryInterface
{
    public function create(CustomerDto $request): User;

    public function read(User $user): User;

    public function update(CustomerDto $request, User $user): bool;

    public function delete(User $user): bool;
}
