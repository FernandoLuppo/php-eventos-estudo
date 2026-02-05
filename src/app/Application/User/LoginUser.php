<?php

namespace App\Application\User;

use App\Domain\User\User;
use App\Domain\User\UserRepository;

class LoginUser
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(string $email, string $password): User
    {
        $user = $this->userRepository->findByEmail($email);

        if (! $user) {
            throw new \Exception('Password or emails invalid', 400);
        }

        if (! password_verify($password, $user->getPasswordHash())) {
            throw new \DomainException('Email or password invalid');
        }

        return $user;
    }
}
