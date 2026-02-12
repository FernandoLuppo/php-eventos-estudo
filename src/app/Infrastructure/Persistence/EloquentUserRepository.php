<?php

namespace App\Infrastructure\Persistence;

use App\Domain\User\User;
use App\Domain\User\UserRepository;
use App\Models\User as UserModel;

class EloquentUserRepository implements UserRepository
{
    public function save(User $user): void
    {
        UserModel::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => $user->getPasswordHash(),
        ]);
    }

    public function findByEmail(string $email): ?User
    {
        $model = UserModel::where('email', $email)->first();

        if (! $model) {
            return null;
        }

        return new User(
            $model->name,
            $model->email,
            $model->password
        );
    }

    public function getOne(string $uuid): ?User
    {
        $model = UserModel::where('uuid', $uuid)->first();

        if (! $model) {
            return null;
        }

        return new User(
            $model->name,
            $model->email,
            $model->password
        );
    }
}
