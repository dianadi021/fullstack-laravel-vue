<?php

namespace App\Repositories\User;

use App\Dto\Registers\CustomerDto;
use App\Models\User\User;

class UserRepository implements UserRepositoryInterface
{
    public function create(CustomerDto $request): User
    {
        return User::create($request->User());
    }

    public function read(User $user): User
    {
        return $user;
    }

    public function update(CustomerDto $request, User $user): bool
    {
        return $user->update($request->User());
    }

    public function delete(User $user): bool
    {
        return $user->delete();
    }
}
