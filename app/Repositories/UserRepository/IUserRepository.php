<?php

namespace App\Repositories\UserRepository;

interface IUserRepository
{
    public function save(array $attributes): void;
}
