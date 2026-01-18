<?php

namespace App\Repositories\UserRepository;

use App\Models\User;

class EloquentUserRepository implements IUserRepository
{
    public function save(array $attributes): void
    {
        User::create($attributes);
    }
}
