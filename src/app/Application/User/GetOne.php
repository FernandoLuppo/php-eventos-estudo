<?php

namespace App\Application\User;

use App\Domain\User\User;
use App\Domain\User\UserRepository;

class GetOne
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(string $uuid): ?User
    {
        $user = $this->userRepository->getOne($uuid);

        if (! $user) {
            throw new \Exception('User not founded.', 404);
        }

        return $user;
    }
}
