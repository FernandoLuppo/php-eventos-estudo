<?php

namespace App\Domain\User;

use Illuminate\Support\Str;

class User
{
    private string $uuid;
    private string $name;
    private string $email;
    private string $passwordHash;

    public function __construct(string $name, string $email, string $passwordHash)
    {
        $this->uuid = Str::uuid()->toString();
        $this->name = $name;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
    }

    public function getUuid(): string
    {
        return $this->uuid;
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
