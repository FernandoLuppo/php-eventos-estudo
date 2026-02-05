<?php

namespace App\Application\User;

use App\Domain\User\User;
use App\Domain\User\UserRepository;

class RegisterUser
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(string $name, string $email, string $password): void
    {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);

        $user = new User(
            $name,
            $email,
            $passwordHash
        );

        $this->userRepository->save($user);
    }
}
