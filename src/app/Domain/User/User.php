<?php

// Abre o arquivo PHP

namespace App\Domain\User; // Equivalente ao export

class User
{
    private string $name;

    private string $email;

    private string $passwordHash;

    public function __construct(string $name, string $email, string $passwordHash)
    {
        $this->name = $name;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }
}
