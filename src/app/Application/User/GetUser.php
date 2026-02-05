<?php

namespace App\Application\User;

use App\Domain\User\User;
use App\Domain\User\UserRepository;

class GetUser
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(): User
    {
        $user = $this->userRepository->getUser();

        if (! $user) {
            throw new \Exception('User not founded.', 404);
        }

        return $user;
    }
}
